<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
?>	
        </div> <!-- top -->
    </div> <!-- header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>유트브 자막 제작 구인 사이트</title>
    <link rel = "stylesheet" href = "index.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Jua&family=Kiwi+Maru:wght@300&family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <div class=".container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class = "logo">
                <a href="index.php"><img src = "./img/logo_2.png" width = "60%"></a>
            </div>
            <div class = "main_title">
                <h3>유트브 자막 제작 구인 사이트</h3>
            </div>
<?php
    if(!$userid) {
?>                
            <div class="col-md-3 text-end">
              <button onclick = "location.href = 'login.php'" type="button" class="btn btn-outline-primary me-2" id="login">Login</button>
              <button onclick = "location.href = 'sign_up.php'" type="button" class="btn btn-primary" id="sign-up">Sign-up</button>
            </div>
<?php
    } else {
?>
            <div class="col-md-3 text-end">
            <a href = "profile_1.php"><img src="./img/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle" ></a>
            <button onclick = "location.href = 'logout.php'" type="button" class="btn btn-primary" id="sign-up">Logout</button>
            </div>
<?php
    }
?>
        </header>
<?php
    if(isset($_GET["num"]))
        $num = $_GET["num"];
    else
        $num = "";

    $con = mysqli_connect("localhost","yeonmi","1234","youja");
    $sql = "select*from mypage where num =$num";
    $result=mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    $langue = $row["lang"];
    $url = $row["url"];
    $info = $row["info"];
    $info = str_replace("","$nbsp;",$info);
    $info = str_replace("\n","<br>",$info);
?>

        <h2>마이페이지</h2>
    <ul class = "mypage_view">
        <li class = "col1">
            <span class = "name"><?=$name?></span>
            <span class = "lang"><b>언어시험성적: </b><?=$lang?></span>
            <span class = "url"><b>유튜브 채널: </b><?=$url?></span>
            <span class = "info"><b>상세 정보(경력): </b><?=$info?></span>
        </li>
    </ul>
    <ul class = "buttons">
    <li><button onclick = "location.href='profile_modify.php'">수정하기</li>
    <li><button onclick = "location.href='index.php'">홈</li>
    </ul>
</body>
</html>





    
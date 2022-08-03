<!-- header -->
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
            <a href = "profile.php"><img src="./img/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle" ></a>
            <button onclick = "location.href = 'logout.php'" type="button" class="btn btn-primary" id="sign-up">Logout</button>
<?php
    }
?>
        </header>
    </div>
<!-- header_end -->

<!--글 내용 보기-->
<?php
    if(isset($_GET["num"]))
            $num=$_GET["num"];
    else
        $num = "";

    $con = mysqli_connect("localhost","yeonmi","1234","youja");
    $sql = "select*from mypage where num =$num";
    $result=mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    $langue = $row["langue"];
    $url = $row["url"];
    $part = $row["part"];
    $info = $row["info"];
    $info = str_replace(",","&nbsp;",$info);
    $info = str_replace("\n","<br>",$info);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>유트브 자막 제작 구인 사이트_프로필 등록</title>
    <link rel = "stylesheet" href = "profile.css">
</head>
<body>
    <h2>마이페이지</h2>
    <ul class = "profile">
        <li class = "col1">
            <span class = "row1"><?=$name?></span>
            <span class = "row2"><b>언어 시험 성적 : <b><?=$langue?></span>
            <span class = "row3"><b>유튜브 채널 : <b><?=$url?></span>
            <span class = "row4"><b>참여 여부 : <b><?=$part?></span>
            <span class = "row5"><b>상세 정보 : <b><?=$info?></span>
        </li>
        <li class = "col2">
            <?=$info?>
        </li>
    </ul>
        <ul class = "botton ">
            <li><botton onclick = "location.href ='profile.php'">수정하기</button><li>
        </ul>
    </body>
</html>

<?php include $_SERVER['DOCUMENT_ROOT']."/PROJECT_YOUJA/f.php"?>
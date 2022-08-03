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
            <a href = "profile_view.php"><img src="./img/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle" ></a>
            <button onclick = "location.href = 'logout.php'" type="button" class="btn btn-primary" id="sign-up">Logout</button>
<?php
    }
?>
        </header>
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>유트브 자막 제작 구인 사이트_프로필 등록</title>
    <link rel = "stylesheet" href = "profile.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Jua&family=Kiwi+Maru:wght@300&family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<!-- <body>
    <form name="image" method="post" action="profile_view.php" enctype="multipart/form-data"> 
    <br>프로필 이미지 <input type="file" name="imgFile" /><br>
    <input type="submit" value="업로드" />
    </form>
    <div class = "infomation">
    <form name="info" method = "post" action = "profile_view.php">
        언어 시험 성적 등록: <input type = "text" name = "langue"><br>
        유튜브 채널 등록: <input type = "text" name = "youtube"><br>
        참여 이력 확인: <input type = "text" name = "part"><br>
        상세정보: <input type = "text" name = "info"><br>
        <input type = "submit" value = "저장">
    </form>
    </div>
    <body> -->

<!-- <script>
  function check_input(){
    document.board.submit();
  }
  <div class="container"> -->
    <!-- <div class="input-form-backgroud row"> -->
      <!-- <div class="input-form col-md-12 mx-auto"> -->
        <h4 class="mb-3">마이페이지</h4>
        <form class="validation-form" name = "infomation" method="post" action="profile_insert.php">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name">이름</label>
              <input type="text" class="form-control" name = "name" id="name" placeholder="" value="" required>
              <div class="invalid-feedback">
                이름을 입력해주세요.
              </div>
            </div>
          <div class="mb-3">
            <label for="langue">언어 시험 성적 등록</label>
            <input type="text" class="form-control" name = "langue" id="langue" placeholder="text" required>
            <div class="invalid-feedback">
              언어 성적을 입력해주세요.
            </div>
          </div>

          <div class="mb-3">
            <label for="youtube">유튜브 채널 등록</label>
            <input type="url" class="form-control" name = "url" id="url" placeholder="url" required>
            <div class="invalid-feedback">
              비밀번호를 입력해주세요.
            </div>
          </div>
          <div class="mb-3">
            <label for="text">참여 이력 여부</label>
            <input type="text" class="form-control" name = "part" id="part" placeholder="횟수" required>
            <div class="invalid-feedback">
              참여 이력을 입력해주세요.
            </div>
          </div>

          <div class="mb-3">
            <label for="text">상세정보<span class="text-muted">&nbsp;(필수 아님)</span></label>
            <input type="text" class="form-control" name = "info" id="info" placeholder="상세정보를 입력해주세요.">
          </div>
          <div class="mb-4"></div>
          <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="check_input()">등록하기</button>
        </form>
      </div>
    </div>
    <!-- <div class = ".container-fluid"> -->
  <!-- <footer class="d-flex flex-wrap justify-content-between align-items-center">
    <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

    <div class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">(주)YOUJA</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">고객센터: 1544-1234(평일 오전10:00~오후 16:00)</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">yooyeonmi122@gmail.com</a></li>
    </div>
  </footer> -->
</div>
</body>
</html>
<?php
if(isset($_GET["num"]))
        $num=$_GET["num"];
else
    $num = "";
  $id = $_GET["name"]

  $langue = $_POST["langue"];
  $url = $_POST["url"];
  $part = $_POST["part"];
  $info = $_POST["info"];

  $con = mysqli_connect("localhost","yeonmi","1234","youja");
  $sql = "select*from mypage where num =$num";
  $sql = "update mypage set langue ='$langue',url = '$url', part='$part','info = '$info'";
  $sql.="where id = '$id'";
  mysqli_query($con,$sql);

  mysql_close($con);

  echo"
  <script>
    location.href = 'profile_view'";
?>
<?php
// // $row = mysqli_fetch_assoc($result);
// // $name = $row["name"];
// // $langue = $row["langue"];
// // $url = $row["url"];
// // $part = $row["part"];
// // $info = $row["info"];
// // $info = str_replace(",","&nbsp;",$info);
// // $info = str_replace("\n","<br>",$info);
// ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/PROJECT_YOUJA/f.php"?>
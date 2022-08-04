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
    <link rel = "stylesheet" href = "profile.css">
    <link rel = "stylesheet" href = "f.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Jua&family=Kiwi+Maru:wght@300&family=Kosugi+Maru&display=swap" rel="stylesheet">
<script>
  function check_input(){
    document.int.submit();
  }
</script>
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
<body>
  <div class="container">
  <div class="input-form-backgroud row">
    <!-- <div class="input-form col-md-12 mx-auto"> -->
      <h4 class="mb-3">마이페이지</h4>
      <form class="validation-form" name = "int" method="post" action="profile_insert.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="name">이름</label>
            <input type="text" class="form-control" name = "name" id="name" placeholder="" value="" required>
            <div class="invalid-feedback">
              이름을 입력해주세요.
            </div>
          </div>
          <div class="mb-3">
            <label for="nickname">언어시험 성적(자격증)</label>
            <input type="text" class="form-control" name = "lang" id="lang" placeholder="" value="" required>
            <div class="invalid-feedback">
              언어 시험 성적을 입력해주세요.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">유튜브 채널</label>
          <input type="email" class="form-control" name = "url" id="url" placeholder="example.com" required>
          <div class="invalid-feedback">
            유튜브 채널 주소를 입력해주세요.
          </div>
        </div>
        <div class="mb-3">
          <label for="pass">상세정보</label>
          <input type="password" class="form-control" name = "info" id="info" placeholder="career" required>
          <div class="invalid-feedback">
            상세정보를 입력해주세요.
          </div>
        </div>
        <div class="mb-4"></div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" id = sign onclick="check_input()">등록하기</button>
      </form>
    </div>
  </div>
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>
    <div class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">(주)YOUJA</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">고객센터: 1544-1234(평일 오전10:00~ 오후 16:00)</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">yooyeonmi122@gmail.com</a></li>
    </div>
  </footer>
</body>
</html>


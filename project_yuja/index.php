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
                <a href="#"><img src = "./img/logo_2.png" width = "60%"></a>
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
  <main>
    <div class = "main_img">
        <img src = "./img/main_5.png" width = 80% height="380px">
    </div>
    <div class="row mb-3 text-center">
      <div class="col-6 themed-grid-col" id = "ko">한국어 자막</div>
      <div class="col-6 themed-grid-col" id = "gl">외국어 자막</div>
    </div>
    <div class="row mb-3 text-center">
      <div class="col-6 themed-grid-col" button onclick = "location.href = 'f_board.php'">자유게시판</div></button>
      <div class="col-6 themed-grid-col" button onclick = "location.href = 'f_board.php'">공지사항</div></button>
    </div>
  </main>
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>
<!-- 
    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a> -->

    <div class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">(주)YOUJA</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">고객센터: 1544-1234(평일 오전10:00~ 오후 16:00)</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">yooyeonmi122@gmail.com</a></li>
    </div>
  </footer>
</body>
</html>

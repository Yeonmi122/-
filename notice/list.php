<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else {
        $userid = "";
    }
        
    // if (isset($_SESSION["username"])) 
    //     $username = $_SESSION["username"];
    // else 
    //     $username = "";  
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
    <link rel = "stylesheet" href = "./index.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Jua&family=Kiwi+Maru:wght@300&family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <div class=".container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class = "logo">
                <a href="/project_youja/index.php"><img src = "logo_2.png" width = "60%"></a>
            </div>
            <div class = "main_title">
                <h3>유트브 자막 제작 구인 사이트</h3>
            </div>


<?php
    if(!$userid) {
?>                
            <div class="col-md-3 text-end">
              <button onclick = "location.href = '/project_youja/login.php'" type="button" class="btn btn-outline-primary me-2" id="login">Login</button>
              <button onclick = "location.href = '/project_youja/sign_up.php'" type="button" class="btn btn-primary" id="sign-up">Sign-up</button>
            </div>
<?php
    } else {
?>
            <div class="col-md-3 text-end">
            <a href = "profile_1.php"><img src="profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle" ></a>
            <button onclick = "location.href = '/project_youja/logout.php'" type="button" class="btn btn-primary" id="sign-up">Logout</button>
<?php
    }
?>
        </header>
    </div>


<?php 
// include $_SERVER['DOCUMENT_ROOT']."/PROJECT_YOUJA/h.php"
?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>
<link rel="stylesheet"  href="style.css">
</head>
<body> 
	<h2>공지사항</h2>
	<ul class="board_list">
		<li>
			<span class="col1">번호</span>
            <span class="col5">작성일</span>
            <span class="col3">제목</span>

		</li>
<?php
	$con = mysqli_connect("localhost", "yeonmi", "1234", "youja");		// DB 연결
	$sql = "select * from notice order by num desc";		// 일련번호 내림차순 전체 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$number = $total_record;				// 글 번호 매김
   	for ($i=0; $i<$total_record; $i++) {
      	mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
      	$row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

	  	$num         = $row["num"];			// 일련번호
      	$regist_day  = $row["regist_day"]; 	// 작성일
          $subject     = $row["subject"];		// 제목
?>
		<li>
			<span class="col1"><?=$number?></span>		
            <span class="col5"><?=$regist_day?></span>
			<span class="col3"><a href="view.php?num=<?=$num?>"><?=$subject?></a></span>


		</li>	
<?php
   	   $number--;
   	}
   	mysqli_close($con);
?>
	    </ul>
		<ul class="buttons">
			<li><button onclick="location.href='list.php'">목록</button></li>
			<li><button onclick="location.href='form.php'">글쓰기</button></li>
		</ul>		
</body>
</html>
<?php include $_SERVER['DOCUMENT_ROOT']."/PROJECT_YOUJA/f.php"?>
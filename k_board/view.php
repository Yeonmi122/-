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
            <a href = "profile_1.php"><img src="./img/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle" ></a>
            <button onclick = "location.href = 'logout.php'" type="button" class="btn btn-primary" id="sign-up">Logout</button>
<?php
    }
?>
        </header>
    </div>
<?php
    if (isset($_GET["num"]))				// $_GET["num"] : 레코드 번호
		$num = $_GET["num"];
	else 
		$num = "";

	$con = mysqli_connect("localhost", "yeonmi", "1234", "youja");	// DB 접속
	$sql = "select * from k_board where num=$num";	// 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);			// 레코드 가져오기
	$name      = $row["name"];					// 이름
    $channel      = $row["channel"];			    // 채널명
	$subject    = $row["subject"];				// 제목
	$regist_day   = $row["regist_day"];			// 작성일
	$content    = $row["content"];				// 내용
	$content = str_replace(" ", "&nbsp;", $content);		// 공백 변환
	$content = str_replace("\n", "<br>", $content);			// 줄바꿈 변환
?>	
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="style.css">
<script>
	function check_password(mode, num) {
		// mode : modify(수정) delete(삭제), num : 레코드 번호
     	window.open("password_form.php?mode="+mode+"&num="+num,
         "pass_check",
          "left=700,top=300,width=550,height=150,scrollbars=no,resizable=yes");
   }
</script>   
</head>
<body> 
	<h2>한국어 자막 > 내용보기</h2>
	<ul class="board_view">
		<li class="row1">
			<span class="col1"><b>제목 :</b> <?=$subject?></span>	<!-- 제목 출력 -->
			<span class="col2"><?=$name?> | <?=$regist_day?></span>	<!-- 이름, 작성일 출력 -->
		</li>
		<li class="row2">
			<?=$content?>	 <!-- 내용 출력 -->
		</li>		
	</ul>
	<ul class="buttons">
		<li><button onclick="location.href='list.php'">목록보기</button></li>
		<li><button onclick="check_password('modify', '<?=$num?>')">수정하기</button></li>   
		<li><button onclick="check_password('delete', '<?=$num?>')">삭제하기</button></li>
		<li><button onclick="location.href='form.php'">글쓰기</button></li>
	</ul>
</body>
</html>
<?php include $_SERVER['DOCUMENT_ROOT']."./PROJECT_YOUJA/f.php"?>
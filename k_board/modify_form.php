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
              <button onclick = "location.href = 'login.php'" type="button" class="btn btn-outline-primary me-2" id="login">Login</button>
              <button onclick = "location.href = 'sign_up.php'" type="button" class="btn btn-primary" id="sign-up">Sign-up</button>
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
    if (isset($_GET["num"]))			// $_GET["num"] : 레코드 번호
		$num = $_GET["num"];
	else 
		$num = "";

    $con = mysqli_connect("localhost", "yeonmi", "1234", "youja");	// DB 연결
	$sql = "select * from k_board where num=$num";	// 레코드 검색
	$result = mysqli_query($con, $sql);		// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);

	$name      = $row["name"];			// 이름
	$pass      = $row["pass"];			// 비밀번호
	$channel     = $row["channel"];		//채널명
	$subject    = $row["subject"];		// 제목
	$content    = $row["content"];		// 내용
	$regist_day = date("Y-m-d");  // UTC 기준 현재 '년-월-일 (시:분)'

	mysqli_close($con);
?>	
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="style.css">
<script>
  	function check_input() {
		if (!document.board.name.value) {			// 이름 체크
          	alert("이름을 입력하세요!");
          	document.board.name.focus();
          	return;
		}		  
		if (!document.board.pass.value) {			// 비밀번호 체크
          	alert("비밀번호를 입력하세요!");    
          	document.board.pass.focus();
          	return;
      	}			
		  if (!document.board.channel.value) {			// 비밀번호 체크
          	alert("채널명을 입력하세요!");    
          	document.board.channel.focus();
          	return;
      	}
      	if (!document.board.subject.value) {		// 제목 체크
          	alert("제목을 입력하세요!");
          	document.board.subject.focus();
          	return;
		}
      	if (!document.board.content.value) {		// 내용 체크
          	alert("내용을 입력하세요!");    
          	document.board.content.focus();
          	return;
      	}  
      	document.board.submit();
   	}
</script>
</head>
<body> 
	<h2>한국어 자막 > 글 수정하기</h2>
	<form name="board" method="post" action="modify.php?num=<?=$num?>">
	    <ul class="board_form">
			<li>
				<span class="col1">이름 : </span>
				<span class="col2"><input name="name" type="text" value="<?=$name?>"></span>
			</li>		
	    	<li>	
	    		<span class="col1">비밀번호 : </span>
	    		<span class="col2">
					<input name="pass" type="password" value="<?=$pass?>">
	    		</span>
	    	</li>		
			<li>	
	    		<span class="col1">채널명 : </span>
	    		<span class="col2">
					<input name="channel" type="text" value="<?=$channel?>">
	    		</span>
	    	</li>		
	    	<li>
	    		<span class="col1">제목 : </span>
	    		<span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
	    	</li>	    	
	    	<li class="area">	
	    		<span class="col1">내용 : </span>
	    		<span class="col2">
	    			<textarea name="content"><?=$content?></textarea>
	    		</span>
	    	</li>
	    </ul>
	    <ul class="buttons">
			<li><button type="button" onclick="check_input()">저장하기</button></li>
			<li><button type="button" onclick="location.href='list.php'">목록보기</button></li>
		</ul>
	</form>
</body>
</html>
<?php include $_SERVER['DOCUMENT_ROOT']."./PROJECT_YOUJA/f.php"?>
<?php
	$name = $_POST["name"];				// 이름
	$pass = $_POST["pass"];				// 비밀번호
	$channel = $_POST["channel"];			// 채널명
    $subject = $_POST["subject"];		// 제목
    $content = $_POST["content"];		// 내용

	$subject = htmlspecialchars($subject, ENT_QUOTES);	// 제목 HTML 특수문자 변환
	$content = htmlspecialchars($content, ENT_QUOTES);	// 내용 HTML 특수문자 변환 
	$regist_day = date("Y-m-d");  // UTC 기준 현재의 '년-월-일 (시:분)'

	$con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");	// DB 연결

	$sql = "insert into ym_w_board (name, pass, channel, subject, content, regist_day) ";	// 레코드 삽입 명령
	$sql .= "values('$name', '$pass', '$channel', '$subject', '$content', '$regist_day')";

	mysqli_query($con, $sql);  // $sql에 저장된 명령 실행

	mysqli_close($con);       // DB 연결 끊기

	// 목록 페이지로 이동
	echo "<script>
	    location.href = '/p2/yym/project_youja/w_board/list.php';
	   </script>";
?>

  
<?php
    $subject = $_POST["subject"];		// 제목
	$pass = $_POST["pass"]//비밀번호
    $content = $_POST["content"];		// 내용

	$subject = htmlspecialchars($subject, ENT_QUOTES);	// 제목 HTML 특수문자 변환
	$content = htmlspecialchars($content, ENT_QUOTES);	// 내용 HTML 특수문자 변환 
	$regist_day = date("Y-m-d");  // UTC 기준 현재의 '년-월-일 (시:분)'

	$con = mysqli_connect("localhost", "yeonmi", "1234", "youja");	// DB 연결

	$sql = "insert into notice (subject, content, regist_day) ";	// 레코드 삽입 명령
	$sql .= "values('$subject', '$content', '$regist_day')";

	mysqli_query($con, $sql);  // $sql에 저장된 명령 실행

	mysqli_close($con);       // DB 연결 끊기

	// 목록 페이지로 이동
	echo "<script>
	    location.href = 'list.php';
	   </script>";
?>

  

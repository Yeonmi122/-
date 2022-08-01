<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
?>	
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
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP+MySQL 입문</title>
<link rel="stylesheet"  href="style.css">
</head>
<body> 
	<h2>회원 게시판 > 목록보기</h2>
	<ul class="board_list">
		<li>
			<span class="col1">번호</span>
			<span class="col2">제목</span>
			<span class="col3">글쓴이</span>
			<span class="col4">첨부</span>
			<span class="col5">등록일</span>
		</li>
<?php
	include "session.php"; 	// 세션 처리

	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "yeonmi", "1234", "youja");		// DB 연결
	$sql = "select * from memberboard order by num desc";	// 일련번호 내림차순 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 4;	// 한 화면에 표시되는 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = (intval($page) - 1) * $scale;      

	$number = $total_record - $start;
	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++) {
      	mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
      	$row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

	  	$num         = $row["num"];			// 일련번호
		$id        	 = $row["id"];			// 아이디
	  	$name        = $row["name"];		// 이름
	  	$subject     = $row["subject"];		// 제목
      	$regist_day  = $row["regist_day"]; 	// 작성일
		if ($row["file_name"])
      		$file_image = "<img src='/file.png'>";
      	else
      		$file_image = " ";		  
?>
		<li>
			<span class="col1"><?=$number?></span>		
			<span class="col2"><a href="view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
			<span class="col3"><?=$name?></span>
			<span class="col4"><?=$file_image?></span>
			<span class="col5"><?=$regist_day?></span>
		</li>	
<?php
   	   $number--;
   	}
   	mysqli_close($con);
?>
	    </ul>

<!-- 페이지 번호 매김 -->
	<ul class="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2) {
		$new_page = $page-1;
		echo "<li><a href='list.php?page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++) {
		if ($page == $i)     // 현재 페이지 번호 링크 안함
			echo "<li><b> $i </b></li>";
		else
			echo "<li> <a href='list.php?page=$i'> $i </a> <li>";
   	}
   	if ($total_page>=2 && $page != $total_page)	{
		$new_page = $page+1;	
		echo "<li> <a href='list.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";		
?>
	</ul> <!-- 페이지 번호 매김 끝 -->

	<ul class="buttons">
		<li><button onclick="location.href='list.php?page=<?=$page?>'">목록</button></li>
		<li><button onclick="location.href='form.php'">글쓰기</button></li>
	</ul>		
</body>
</html>
<?php include $_SERVER['DOCUMENT_ROOT']."/PROJECT_YOUJA/f.php"?>
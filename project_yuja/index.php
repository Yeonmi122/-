<?php
    include"../include/header.php";
    includde"../include/main.php";
?>

<?php
    session_start();

    if(issue($_SESSION["userid"]))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>유트브 자막 제작 구인 사이트</title>
    <link rel = "stylesheet" href = "index.css">
</head>
<body>
    <header>
        <h3 class = "logo">
            <a href = "index.php">유트브 자막 제작 구인 사이트</a>
        </h3>
        <ul class = "top menu">

        <?php
          if($userid){
            echo"<li>홈페이지에 오신걸 환영합니다.</li>";
          }
          else{
            $logged = $username."
          }
        ?>  
    </header>

</body>
<footer></footer>
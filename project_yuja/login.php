<?php
  $servername = 'localhost';
  $username = 'yeonmi';
  $password = '1234';
  $dbname = 'sample';

  //MySQL 연결하기
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  mysqli_query($conn, "set session character_set_connection=utf8;");
  mysqli_query($conn, "set session character_set_results=utf8;");
  mysqli_query($conn, "set session character_set_client=utf8;");

  //연결 체크하기
  if(!$conn){
    die ("연결오류 : ".mysqli_connect_error());
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>유트브 자막 제작 구인 사이트</title>
    <link rel = "stylesheet" href = "login.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>
<body class="text-center">
<main class="form-signin w-100 m-auto">
  <form>
    <img class="mb-4" src="./img/logo_2.png" alt="" width="180" height="80">
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit"><a href="#">Login</a></button>
    <p class="mt-5 mb-3 text-muted"><a href="index.php">go back</a></p>
  </form>
</main>
</body>
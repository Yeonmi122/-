<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>유트브 자막 제작 구인 사이트</title>
<link rel = "stylesheet" href = "login.css">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<script>
  function check_input(){
    if(!document.login.email.value){
      alert("아이디(이메일)을 입력하세요!");
      document.login.email.focus();
      return;
    }
    if(!document.login.pass.value){
      alert("비밀번호를 입력하세요!");
      document.login.pass.focus();
      return;
    }
    document.login.submit();
    }
</script>
</head>
<body class="text-center">
<main class="form-signin w-100 m-auto">
  <form name="login" action="/p2/yym/project_youja/log_check.php" method="post">
    <img class="mb-4" src="./img/logo_2.png" alt="" width="180" height="80">
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name = "email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name = "pass">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary btn-mag" type="submit" onclick="check_input()">Login</button>
    <button type="submit" class="btn btn-danger"><a href="#">Google</a></button>
    <button type="submit" class="btn btn-success"><a href="#">Naver<a></button>
    <p class="mt-5 mb-3 text-muted"><a href="/p2/yym/project_youja/index.php">go back</a></p>
  </form>
</main>
</body>
</html>


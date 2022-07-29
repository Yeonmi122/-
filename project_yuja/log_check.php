<?php
//로그인 처리하기//
  $id = $_POST["email"];
  $pass = $_POST["pass"];

  $con = mysqli_connect("localhost","yeonmi","1234","youja");
  $sql = "select*from member where email = '$id'";
  $result = mysqli_query($con,$sql);

  $num_match = mysqli_num_rows($result);

  if(!$num_match){
    echo"<script>
        window.alert('등록되지 않은 아이디입니다.')
        history.go(-1)
    </script>";
  }
  else{
    $row = mysqli_fetch_assoc($result);
    $db_pass = $row["pass"];

    mysqli_close($con);

    if($pass != $db_pass){
    echo "<scrit>
        window.alert('비밀번호가 틀립니다!')
        history.go(-1)
      </script>";
    exit;
  }
  else{
    session_start();
    $_SESSION["userid"] = $row["email"];
    $_SESSION["username"] = $row["name"];

    echo "<script>
    location.href = 'index.php';
    </script>";
    }
  }
?>
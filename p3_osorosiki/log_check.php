<?php
//로그인 처리하기//
  $id = $_POST["email"];
  $pass = $_POST["pass"];

  $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
  $sql = "select*from ym_member where email = '$id'";
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
      echo "<script>
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
        location.href = '/p2/yym/project_youja/index.php';
        </script>";
    }
  }
?>
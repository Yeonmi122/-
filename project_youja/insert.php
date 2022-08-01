<?php
    $name = $_POST["name"];
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $address = $_POST["address"];
    $address_detailed = $_POST["address2"];

    $con = mysqli_connect("localhost","yeonmi","1234","youja");

    $sql = "insert into member(name,nickname,email,pass,address,address_detailed)";

    $sql .= "values('$name','$nickname','$email','$pass','$address','$address_detailed')";

    mysqli_query($con,$sql);
    mysqli_close($con);

    echo"<script>
            location.href = 'login.php';
        </script>";
    

    
?>

      

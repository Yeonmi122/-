<?php
    $num = $_GET["num"];

    $name = $_POST["name"];
    $langue = $_POST["lang"];
    $url = $_POST["url"];
    $info = $_POST["info"];

    $info = htmlspecialchars($info,ENT_QUOTES);

    $con = mysqli_connect("localhost","yeonmi","1234","youja");

    $sql = "insert into mypage (name,langue,url,part,info)";
    $sql = "values('$name','$langue','$url','$part','$info')";

    mysqli_query($con,$sql);

    mysqli_close($con);

    echo "<script>
        location.href = 'profile_view.php';
        </script>"; 
?>
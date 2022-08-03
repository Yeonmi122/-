<?php  
    // $num = $_GET["num"];

    // $con = mysqli_connect("localhost","yeonmi","1234","youja");
    // $sql = "delete from mypage where num =$num";
    // $result=mysqli_query($con,$sql);

    // mysqli_close($con);

    // echo"<script>
    //         location.href = 'profile_view.php';
    //     </script>";
?>

<!-- DB에 글 저장하기 -->
<?php
    $name = $_POST["name"];
    $langue = $_POST["langue"];
    $url = $_POST["url"];
    $part = $_POST["part"];
    $info = $_POST["info"];

    $info = htmlspecialchars($info,ENT_QUOTES);
    $con = mysqli_connect("localhost","yeonmi","1234","youja");

    $sql = "insert into mapage (name,langue,url,part,info)";
    $sql = "values('$name','$langue','$url','$part','$info')";

    mysqli_query($con,$sql);

    mysqli_close($con);

    echo "<script>
        location.href = 'profile_view.php';
        </script>"; 
?>

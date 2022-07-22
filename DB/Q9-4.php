<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3>폼 양식 예</h3>
    <form action="Q9-4.php" method="post">
    이름 : <input type="text" name="name"><br>
    전화번호 : <input type="text" name="tel"><br>
    주소 : <input type="text" name="address"><br>
    <input type="submit" value="저장">
    </form>
</body>
</html>

<?php
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];

    $servername = 'localhost';
    $username = 'yeonmi';
    $password = '1234';
    $dbname = 'sample';                // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    mysqli_query($conn, "set session character_set_connection=utf8;");
    mysqli_query($conn, "set session character_set_results=utf8;");
    mysqli_query($conn, "set session character_set_client=utf8;");

    $sql = "insert into friend (name, tel, address) values 
            ('$name', '$tel', '$address');";
    
    $result = mysqli_query($conn, $sql);

?>
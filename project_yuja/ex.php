<?php
    $servername = "localhost";          // 서버명
    $username = "yeonmi";                 // 사용자명
    $password = "1234";                // 비밀번호
    $dbname = "youja";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // mysqli_query($conn,"set session character_set_connection = utf-8;");
    // mysqli_query($conn,"set session character_set_results = utf-8;");
    // mysqli_query($conn,"set session character_set_client = utf-8;");
    
    // $sql에 전체 레코드 검색 명령 저장
    $sql = "select * from member;";    

    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "이름 : ".$row["name"]."<br>";
        echo "tel : ". $row["email"]."<br>";
        echo "주소 : ". $row["address"]."<br>";
        echo "주소 : ". $row["address_detailed"]."<br>";
        echo "----------------------------------------<br>";
    }

    mysqli_close($conn);
?>

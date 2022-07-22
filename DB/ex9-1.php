<?php
    $servername = "localhost";          // 서버명
    $username = "yeonmi";                 // 사용자명
    $password = "1234";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // 연결 체크하기
    if (!$conn) {
        die("연결 오류 : ".mysqli_connect_error());
    }
    
    echo "MySQL에 성공적으로 연결되었습니다!<br>";

    mysqli_query($conn, "set session character_set_connection=utf8;");
    mysqli_query($conn, "set session character_set_results=utf8;");
    mysqli_query($conn, "set session character_set_client=utf8;");

    // friend 테이블 생성
//     $sql = "create table friend (
//       num int not null auto_increment,
//       name char(10) not null,
//       tel char(15) not null,
//       address char(80),
//       primary key(num) )";
      
//     $result = mysqli_query($conn, $sql);
  
//     if ($result) 
//       echo "friend 테이블 생성 완료!";
//     else 
//       echo "테이블 생성 오류 : " . mysqli_error($conn);
  
//     mysqli_close($conn);

    // friend 테이블에 데이터 삽입
    $sql = "insert into friend (name, tel, address) values 
            ('홍길동', '01012345678', '경기도 수원시 권선구 온정로 123');";
    
        // $sql에 다수의 데이터 삽입 명령 저장
    $sql = "insert into friend (name, tel, address) values
            ('윤채린', '01059856767', '대전광역시 동구 중교로 123');";   
    $sql .= "insert into friend (name, tel, address) values
            ('강선호', '01030904785', '서울특별시 종로구 자하문로30길 123');";    
    $sql .= "insert into friend (name, tel, address) values 
            ('김수진', '01038978950', '경기도 용인시 수지구 정평로 123');";            
    $sql .= "insert into friend (name, tel, address) values 
            ('장서연', '01043889485', '서울특별시 동대문구 보문로 123');";       
    $sql .= "insert into friend (name, tel, address) values 
            ('박성찬', '01043806006', '경기도 용인시 처인구 원천로 123');";  
    
    $result = mysqli_multi_query($conn, $sql);

    if ($result) 
      echo "데이터 삽입 완료!";
    else 
      echo "데이터 삽입 오류 : " . mysqli_error($conn);

    mysqli_close($conn);
    
    // $sql에 전체 레코드 검색 명령 저장
//     $sql = "select * from friend;";    

//     $result = mysqli_query($conn, $sql);
    
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "이름 : ".$row["name"]."<br>";
//         echo "전화번호 : ". $row["tel"]."<br>";
//         echo "주소 : ". $row["address"]."<br>";
//         echo "----------------------------------------<br>";
//     }

//     mysqli_close($conn);

    // $sql에 '윤채린'의 이름, 전화번호 검색 명령 저장
//     $sql = "select name, tel from friend where name='윤채린';";    

//     $result = mysqli_query($conn, $sql);
//     $row = mysqli_fetch_assoc($result);
        
//     echo $row["name"]."의 전화번호 : ". $row["tel"]."<br>";

//     mysqli_close($conn);

    // $sql에 전체 레코드를 이름 순 정렬 명령 저장
//     $sql = "select * from friend order by name;";    
//     $result = mysqli_query($conn, $sql);

//     echo "------------------------<br>";
//     echo " 이름 전화번호<br>";
//     echo "------------------------<br>";
//     while($row = mysqli_fetch_assoc($result)) {
//         echo $row["name"]." ". $row["tel"]."<br>";
//     }
//     echo "------------------------<br>";
    
//     mysqli_close($conn);

    // $sql에 num 필드가  1인 레코드의 name을 변경하는 명령 저장
//     $sql = "update friend set name='김길동' where num=1;";    
//     $result = mysqli_query($conn, $sql);

//     if ($result) 
//         echo "수정 완료!";
//     else 
//         echo "수정 오류 : " . mysqli_error($conn);

//     mysqli_close($conn);
    
    // $sql에 '박성찬' 레코드를 삭제하는 명령 저장
//     $sql = "delete from friend where name='박성찬';";    
//     $result = mysqli_query($conn, $sql);

//     if ($result) 
//         echo "삭제 완료!";
//     else 
//         echo "삭제 오류 : " . mysqli_error($conn);

//     mysqli_close($conn);
?>

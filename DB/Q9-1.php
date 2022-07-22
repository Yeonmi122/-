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

  //friend 테이블 생성
  $sql = 'create table friend(
    num int not null auto_increment,
    name char(10) not null,
    tel char(15) not null,
    address char(80),
    primary key(num))';

  $result = mysqli_query($conn,$sql);

  mysqli_close($conn);
?>

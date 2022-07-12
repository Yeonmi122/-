<DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method = "POST" action = "index.php">
            암호: <input type = "password" name = "pw"/>
            <input type = "submit" name = "submit"/>
        </form>
        <!--<form method = "POST" action = "join.php">
            아이디 : <input type = "text" name = "id"/>
            비밀번호 : <input type = "password" name = "pw"/>
            <input type = "submit" name = "submit"/>
        </form>-->
    </body>
</html>
<?php
        $password = $_POST["pw"];
        if(strlen($password)<=8){
            echo ' 비밀번호 나쁨';
        }
        else{
            echo '비밀번호 좋음';
        }
?>

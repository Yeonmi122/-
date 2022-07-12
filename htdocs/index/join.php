<?php
        $password = $_POST["pw"];
        if(strlen($pw)<=8){
            echo '나쁨';
        }
        else{
            echo '좋음';
        }
    /*function test1($num1, $num2){
        static $num3=1;
        $result = $num1 + $num2 + $num3;
        $num3++;
        return $result;
    }

    global $val;
    $val = test1(3,4);
    echo "$val<br>";
    $val = test1(3,4);
    echo "$val<br>";
    $val = test1(3,4);
    echo "$val<br>";
    $val = test1(3,4);
    echo "$val<br>";*/
    
    /*error_reporting(E_ALL^E_WARNING);
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    echo "ID: ".$id."<br>";
    echo "PW: ".$pw."<br>";*/
?>
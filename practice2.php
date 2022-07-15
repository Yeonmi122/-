<?php
//연습문제1
    // function triangle($w,$h){
    //     $t_area = $h*$w/2;

    //     return $t_area;
    // }
    // $w = 12;
    // $h = 10;
    // echo"삼각형의 너비: ".$w." cm<br>";
    // echo"삼각형의 높이: ".$h." cm<br>";
    // echo"삼각형의 넓이는: ".triangle($w,$h)." cm2입니다.<br>";

//연습문제2
    // function hap($a,$b){
    //     $sum = 0;
    //     for($i=$a; $i <= $b; $i++)
    //         $sum += $i;

    //     return $sum;
    // }
    // $a = 10;
    // $b = 50;
    // echo $a."에서 ".$b."까지의 합계: ".hap($a,$b);

//연습문제3
    // function n_hap($n){
    //     $sum = 0;
    //     for($i=$n;$i<=100;$i++){
    //         if($i%$n ==0){
    //             $sum += $i;
    //         }
    //     }
    //     return $sum;
    // }
    // $n = 5;
    // echo "1~100 정수 중 5의 배수의 합계 : ".n_hap($n);

//연습문제4
    function t1($age){
            if($age>18 and $age<65)
                $money = 9000;
            else
                $money =7000; 
        return $money;
    }

    function t2($age){
            if($age>18 and $age<65)
                $money = 13000;
            elseif($age<18)
                $money= 10000; 
            else
                $money= 7000;
        return $money;
    }
    $day = "일반";
    $age = 70;

    if($category == 1)
        $cost= t1($age);
    else
        $cost = t2($age);

    if($category == 1)
        $cat = "조조";
    else
        $cat = "일반";

    echo "구분 : ".$cat."<br>";
    echo "나이 : ".$age."<br>";
    echo "입장료는 ".$cost."원 입니다.<br>";
?>
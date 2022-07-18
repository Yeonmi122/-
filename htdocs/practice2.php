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
    // function t1($age){
    //         if($age>18 and $age<65)
    //             $money = 9000;
    //         else
    //             $money =7000; 
    //     return $money;
    // }

    // function t2($age){
    //         if($age>18 and $age<65)
    //             $money = 13000;
    //         elseif($age<18)
    //             $money= 10000; 
    //         else
    //             $money= 7000;
    //     return $money;
    // }
    // $day = "일반";
    // $age = 70;

    // if($category == 1)
    //     $cost= t1($age);
    // else
    //     $cost = t2($age);

    // if($category == 1)
    //     $cat = "조조";
    // else
    //     $cat = "일반";

    // echo "구분 : ".$cat."<br>";
    // echo "나이 : ".$age."<br>";
    // echo "입장료는 ".$cost."원 입니다.<br>";

//연습문제5
    // function ticket1($age,$people){
    //     if($age>19){
    //         if($people == "개인")
    //             $pay = 9500;
    //         else
    //             $pay = 8500;
    //     }
    //     elseif($age>=8 and $age <=18){
    //         if($people == "개인")
    //             $pay = 7000;
    //         else
    //             $pay = 6000;
    //     }
    //     else{
    //         if($people == "개인")
    //             $pay = 6000;
    //         else
    //             $pay = 5000;
    //     }
    //     return $pay;
    // }
    // function ticket2($age,$people){
    //     if($age>19){
    //         if($people == "개인")
    //             $pay = 8500;
    //         else
    //             $pay = 6000;
    //     }
    //     elseif($age>=8 and $age <=18){
    //         if($people == "개인")
    //             $pay = 6000;
    //         else
    //             $pay = 5000;
    //     }
    //     elseif($age<7){
    //         if($people == "개인")
    //             $pay = 5000;
    //         else
    //             $pay = 4000;
    //     }
    //     return $pay;
    // }
    // $age = 15;
    // $people = "개인";
    // $category = 1;
    // $cat = " ";

    // if($category == 1)
    //     $money = ticket1($age,$people);
    // else
    //     $money = ticket2($age,$people);

    // if($category == 1)
    //     $cat = "일반";
    // else
    //     $cat = "할인 대상자";

    // echo "구분 : ".$cat."<br>";
    // echo "개인/단체 : ".$people."<br>";
    // echo "나이 : ".$age."<br>";
    // echo "입장료는 ".$money."입니다.";

//연습문제 6
    // $data = array(3,34,-3,-47,9,10,12,7,8,-4,-13,74);
    //     $i = 0;
    //     echo "데이터 : ";
    //     while($i<10){
    //         $D = $data[$i];
    //         $i++;
    //         echo $D." " ;
    //     }

//연습문제 7
    // $data = array(array(3,34,-3,-47,9,10,12,7,8,-4,-13,74),
    // array(32,3,-34,42,19,1,-12,57,-8,-42,13,-21),
    // array(2,9,-1,-12,89,0,12,7,-8,-33,3,7));

    // for($i = 1; $i<=3; $i++){
    //     echo $i." : ";
    //     for($j = 0; $j <12; $j++){
    //         echo $data[$i-1][$j]." ";
    //     }
    //     echo "<br>";
    // }

//연습문제 8
    // $score = array(85,74,69,51,78,53,95,12,81,
    // 18,35,79,61,58,78,96,27,13,46,
    // 84,26,79,35,68,14,97,38,50,60);
    // $count = array(0,0,0,0,0);
    // $grade = array("수","우","미","양","가");
    // $length = count($score);

    // for($i=0; $i<$length; $i++){
    //     if($score[$i]>=90){
    //         $count[0] += 1;
    //     }
    //     elseif($score[$i]>=80){
    //         $count[1] += 1;
    //     }
    //     elseif($score[$i]>=70){
    //         $count[2] += 1;
    //     }
    //     elseif($score[$i]>=60){
    //         $count[3] += 1;
    //     }
    //     elseif($score[$i]>=0){
    //         $count[4] += 1;
    //     }
    // }
    // for($j=0; $j<5; $j++){
    //     echo $grade[$j]." : ".$count[$j]."명";
    //     echo "<br>";
    // }

//연습문제 9
    // $seat = array(array(0,0,1,0,0,0,0,1,0,0),
    // array(0,0,0,0,1,0,1,1,0,0),
    // array(0,0,1,1,0,0,0,0,1,0),
    // array(0,1,0,0,0,0,1,0,0,0),
    // array(0,0,0,0,1,0,0,0,1,0));



    // for($i=0; $i<5; $i++){
    //     for($j=0; $j<10; $j++){
    //         if($seat[$i][$j] == 0)
    //             echo "□";
    //         else
    //             echo "■";
    //     }
    //     echo "<br>";
    // }
    // echo "□ : 예약 가능, ■ :예약 불가능";
?>
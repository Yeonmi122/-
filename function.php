<?php
//4-1
    // $x = -7;
    // $value1 = abs($x);
    // echo $x."의 절댓값:".$value1."<br>";

    // $y = 12.7;
    // $value2 = round($y);
    // echo $y."의 반올림 값: ".$value2;
//4-2
    // $string = "php is fun";

    // $length = strlen($string);
    // echo $length."<br>";

    // $string2 = str_replace("php","PHP",$string);
    // echo $string2."<br>";
//4-3
    // function hello(){
    //     for($i =1; $i <= 3; $i++)
    //         echo("안녕하세요.");
    // }
    // hello();
//4-4
    // function hello(){
    //     for($i =1; $i <=3; $i++)
    //         echo("안녕하세요.");
    // }

    // hello();
    // echo "<br>";
    // hello();
    // echo "<br>";
    // hello();
    // echo "<br>";
//4-5
    // function plus($a, $b){
    //     $c = $a + $b;
    //     echo $c."<br>";
    // }

    // plus(10,20);
    // plus(100,200);
// 4-6
    // function hap($n){
    //     $sum = 0;
    //     for($i=1; $i<=$n; $i++)
    //     $sum += $i;

    //     echo $sum."<br>";
    // }
    // hap(10);
    // hap(100);

// 4-7
    // function hap($n){
    //     $sum = 0;
    //     for($i=1; $i<=$n; $i++)
    //         $sum += $i;

    //     return $sum;
    // }
    // echo "1~10합계: ".hap(10)."<br>";
    // echo "1~100합계: ".hap(100)."<br>";   
    
// 4-8
//     function circle_area($r){
//         $result = $r*$r*3.14;

//         return $result;
//     }

//     $radius = 10;
//     $area = circle_area($radius);

//     echo "반지름: ".$radius."<br>";
//     echo "원의 넓이: ".$area."<br>";

// 4-9
    // function ticket1($day, $age){
    //     if($day=="주간"){
    //         if($age>12 and $age <65)
    //         $money = 19000;

    //     }
    //     else{
    //         if($age>12 and $age<65){
    //             $money = 21000;
    //         }
    //         else{
    //             $money = 16000;
    //         }
    //     }
    //     return $money;
    // }
    // function ticket2($day,$age){
    //     if($day =="주간"){
    //         if($age>12 and $age <65){
    //             $money = 3300;
    //         }
    //         else{
    //             $money = 24000;
    //         }
    //     }
    //     else{
    //         if($age>12 and $age<65){
    //             $money = 28000;
    //         }
    //         else{
    //             $money = 21000;
    //         }
    //     }
    //     return $money;  
    // }

    // function ticket3($age){
    //     if($age>12 and $age<65){
    //         $money =55000;
    //     }
    //     else{
    //         $money = 40000;
    //     }
    // return $money;
    // }

    // function ticket4($age){
    //     if($age>12 and $age<65){
    //         $money =54000;
    //     }
    //     else{
    //         $money = 40000;
    //     }
    // return $money;
    // }
    // /*category1: 일반입장권, 2: 자유 이용권,
    // 3: 2일 이용권, 4: 콤비권
    // */

    // $category = 2;
    // $age = 20;
    // $day = "야간";

    // if($category ==1)
    //     $pay = ticket1($day,$age);
    // elseif($category === 2)
    //     $pay = ticket2($day,$age);
    // elseif($category === 3)
    //     $pay = ticket3($age);
    // else
    // $pay = ticket4($age);

    // if($category ==1)
    //     $cat = "일반입장권";
    // elseif($category ==2)
    //     $cat = "자유이용권";
    // elseif($category ==3)
    //     $cat = "2일 이용권";
    // else
    //     $cat = "콤비권";

    // echo "구분: ".$cat."<br>";
    // if($category == 1 or $category ==2)
    //     echo "주간/야간: ".$day."<br>";

    // echo "나이: ".$age."<br>";
    // echo "입장료: ".$pay."<br>";
?>
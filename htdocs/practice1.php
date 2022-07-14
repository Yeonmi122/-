<!-- <!DOCTYPE html>
    <head></head>
    <body>
        <form method = "POST" action = "practice1.php">
            숫자: <input type = "number" name = "num"/>
            <input type = "submit" name = "submit"/>
        </form>
    </body>
</html> -->

<?php
//     $n = $_POST["num"];
//     for($i =1; $i<=$n; $i++){
//         echo $i;
//     }
// ?>

// <?php
//     $n = $_POST["num"];
//     for($i =1; $i<=$n; $i++){
//         if($i%3!=0){
//             echo $i." ";
//         }
//         elseif($i%3==0){
//             echo "x ";
//         }
        
//     }
?>

<?php
//     $n = $_POST["num"];
//     $sum = 0;
    
//     for($i =1; $i<=$n; $i++){
//         $sum += $i;
//     }
//     echo $sum;
// ?>

// <?php
//     $n = $_POST["num"];
//     $sum = 0;
    
//     for($i =1; $i<=$n; $i++){
//         if($i%5==0){
//             $sum += $i;
//         }       
//     }
//     echo $sum;
?>

<?php
    // $n = $_POST["num"];
    // $sum = 0;
    
    // for($i =1; $i<=$n; $i++){
    //     if($i%5==0){
    //         $sum += $i;
    //     }
    //     elseif($i%3==0){
    //         $sum += $i;
    //     }       
    // }
    // echo $sum;
?>

<?php
    // $n = $_POST["num"];
    // $sum = 0;
    // $count = 0;
    
    // for($i =1; $i<=$n; $i++){
    //     if($i%5==0 || $i%3==0){
    //         $sum += $i;
    //         $count++;  
    //     }
    // }
//    $avg = ($sum/$count);
    // $avg = round($avg,5);
    // echo $sum.", ".$avg;
?>
<!-- <!DOCTYPE html>
    <head></head>
    <body>
        <form method = "POST" action = "practice1.php">
            숫자: <input type = "test" name = "num"/>
            <input type = "submit" name = "submit"/>
        </form>
    </body>
</html> -->

<?php 
    // $num = $_POST["num"]; //11
    // $n = explode(" ",$num);
    // $sum = 0;
    // for($i = 0; $i <= 10; $i++){
    //     $sum += @$n[$i];
    // }
    // echo $sum;
?>

<!-- <!DOCTYPE html>
    <head></head>
    <body>
        <form method = "POST" action = "practice1.php">
            숫자: <input type = "test" name = "num"/>
            <input type = "submit" name = "submit"/>
        </form>
    </body>
</html> -->

<?php 
    // $num = $_POST["num"]; //12
    // $n = explode(" ",$num);
    // $count = 0;
    // for($i=1; $i<=9; $i++){
    //     if($n[$i]%2==0){
    //         $count++;
    //     }
    // }
    // echo $count;
?>

<!-- <!DOCTYPE html>
    <head></head>
    <body>
        <form method = "POST" action = "practice1.php">
            숫자1: <input type = "number" name = "num1"/>
            숫자2: <input type = "number" name = "num2"/>
            <input type = "submit" name = "submit"/>
        </form>
    </body>
</html> -->

<?php //13
    // $a = $_POST["num1"];
    // $b = $_POST["num2"];
    // for($i=$a; $i<= $b; $i++){
    //     echo $i;
    // } 
?>

<?php //14
    // $big = $_POST["num1"];
    // $small = $_POST["num2"];

    // for($big; $big >= $small; --$big){
    //     echo $big." ";
    // }
?>

<?php //15
    // $a = $_POST["num1"];
    // $b = $_POST["num2"];

    // for($i = $a; $i <= $b; $i++){
    //     if($i%2==0){
    //         echo $i." ";
    //     }
    // }
?>

<?php //16
    // $a = $_POST["num1"];
    // $b = $_POST["num2"];
    // $sum = 0;

    // for($i = $a; $i <= $b; $i++){
    //         $sum += $i;
    //     }
    //     echo $sum;
?>

<?php //17
    // $a = $_POST["num1"];
    // $b = $_POST["num2"];
    // $sum = 0;

    // for($i = $a; $i <= $b; $i++){
    //     if($i%2==0){
    //         $sum += $i;
    //     }
    //     }
    //     echo $sum;
?>

<?php //18
    // $a = $_POST["num1"];
    // $b = $_POST["num2"];
    // $count = 0;

    // for($i = $a; $i <= $b; $i++){
    //     $count++;
    //     }
    //     echo $count;
?>

<?php //19
    // $a = $_POST["num1"];
    // $b = $_POST["num2"];
    // $count = 0;
    // $sum =0;

    // for($i = $a; $i <= $b; $i++){
    //     $sum += $i;
    //     $count++;
    //     }
    //     echo $sum.",".sprintf("%0.1f",$sum/$count);
?>

<!DOCTYPE html>
    <head></head>
    <body>
        <form method = "POST" action = "practice1.php">
            숫자: <input type = "number" name = "num"/>
            <input type = "submit" name = "submit"/>
        </form>
    </body>
</html>

<?php //20
    $dan = $_POST["num"];
    for($i = 1; $i<=9; $i++){
        echo $dan." * ".$i." = ".$dan*$i."<br>";
    }
?>


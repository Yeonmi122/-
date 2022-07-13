<DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method = "POST" action = "test2.php">
            정수 입력(1~12): <input type = "number" name = "num1"/>
            <input type = "submit" name = "submit"/>
        </form>
    </body>
</html>
<?php
    /*$num = $_POST["num1"]; //2.정수를 입력받아 0이면 zero 양수이면 plus 음수이면 minus
    if($num==0){
        echo "zero";
    }
    elseif($num>0){
        echo "plus";
    }
    elseif($num<0){
        echo "minus";
    }*/

    /*    $num = $_POST["num1"]; //3.년도를 입력받아 윤년인지 평년인지 판단하는 프로그램
    if($num%4==0){
        echo "윤년";
    }
    else{
        echo "평년";
    }*/

    //     switch($num){  //4. 숫자를 입력받아 동물 출력
    //     case 1:
    //         echo "dog";
    //         break;
    //     case 2:
    //         echo "cat";
    //         break;
    //     case 3:
    //         echo "chick";
    //         break;
    //     default:
    //         echo "I don't know";
    
    // }
//     $num = $_POST["num1"]; //5. 1~12사이의 정수를 입력받아 평년의 경우 입력받아 평년의 경우 해당 월의 
//     //날수를 출력
//         switch($num){
//         case 2:
//         echo "28";
//         break;
//         case 4:
//         case 6:
//         case 9:
//         case 11:
//         echo "30";
//         break;
//         default:
//         echo "31";
//         break;
//         }
?>
        

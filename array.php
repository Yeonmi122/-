<?php
    // $score = array(75,85,93,87,92);

    // echo $score[0]."<br>";
    // echo $score[1]."<br>";
    // echo $score[2]."<br>";
    // echo $score[3]."<br>";
    // echo $score[4];

    // $score = array(75,85,93,87,92);

    // for($i = 0; $i <=4; $i++)
    //     echo "인덱스".$i.":",$score[$i]."<br>";

    // $score = array(75,85,93,87,92);

    // $length = count($score);
    // $sum = 0;

    // for($i=0; $i<=$length; $i++)
    //     $sum += $score[$i];

    //     $avg = $sum/$length;

    //     echo "합계: ".$sum."<br>";
    //     echo "평균: ".$avg;
?>
<?php
    // $member = array("id"=>"hong77","pass"=>"12345",
    //                 "name" => "홍길동","age"=>30);

    // echo "아이디: ".$member["id"]."<br>";
    // echo "비밀번호: ".$member["pass"]."<br>";
    // echo "이름: ".$member["name"]."<br>";
    // echo "나이: ".$member["age"];

    // $member = array("id"=>"hong77","pass"=>"12345",
    // "name" => "홍길동","age"=>30);

    // foreach($member as $key => $value){
    //     echo "키: ".$key." /값: ".$value;
    //     echo "<br>";
    // }

    // $score = array(array(88,98,96,77,98),
    //     array(86,77,86,84,95),
    //     array(84,83,95,86,93));

    // for($i=0; $i<3; $i++){
    //     for($j=0; $j<5; $j++)
    //         echo "[".$i."]"." [".$j."]:".$score[$i][$j]."<br>";

    //     echo "<br>";
    //     }

    $score = array(array(88,98,96,77,98),
    array(86,77,86,84,95),
    array(84,83,95,86,93));

    for($i=0; $i<3; $i++){
        $sum = 0;
        for($j = 0; $j<5; $j++)
            $sum += $score[$i][$j];

        $avg = $sum/5;
        $number = $i+1;

        echo($number."번  학생의 합계: ".$sum."평균: ".$avg."<br>");
    }
?>
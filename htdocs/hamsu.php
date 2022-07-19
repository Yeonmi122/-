<?php
//trim
    // $str = " Hello ";
    // echo "trim() 함수를 사용하지 않고 출력<br/>";
    // echo "|".$str."|";

    // echo "<br><br />";
    // echo 
    // "trim() 함수를 사용하고 출력<br/>";
    // echo "|".trim($str)."|";

//strtolower, strtouppre
    // $str = "Hello Word";
    // echo "원문<br/>";
    // echo $str;
    // echo"<br><br/>";

    // echo "대문자로 출력<br/>";
    // echo strtoupper($str);
    // echo "<br><br/>";

    // echo "소문자로 출력<br />";
    // echo strtolower($str);
    // echo "<br><br/>";

//count (배열의 수를 셀 때 사용), strlen (문자열의 수를 셀 때 사용)

    // $food = array('fruits' => array('orange','banana','apple'),
    // 'veggie' => array('carrot','collard','pea'));

    // // 재귀 count 수
    // echo count($food,COUNT_RECURSIVE);
    // // 결과 : 8
    // echo "<br><br/>";
    // // 보통 count 수
    // echo count($food);
    // // 결과 :2

// substr() 문자열에서 자릿수를 지정하여 특정 자릿수의 문자열을 자름.
    // echo"<br><br/>";
    // $str = "Hello World";
    // $change_word = str_replace("World","PHP World",$str);
    // echo $change_word;

    // echo "<br><br/>";
    // $fillName = "background.jpg";
    // $execute = substr($fillName,-4,4);
    // if($execute == '.jpg' || $execute == '.pnh' || $execute == ".bmp" || $execute == '.gif'){
    //     echo "업로드한 파일은 이미지 파일입니다.<br/>";
    // }
    // else{
    //     echo "업로드한 파일은 이미지 파일이 아닙니다.<br/>";
    //     }

//explode() 문자열에서 특정 문자를 기준으로 나눈 후 배열로 대입
    // $email = "j1004me@naver.com";
    // $email_Array = explode("@",$email);
    // echo "<pre>";//시스템에 미리 고정된 글꼴을 사용하여 표현
    // var_dump($email_Array);//배열의 모든 요소를 출력

    // echo "이메일 호스트 출력<br/>";
    // echo $email_Array[1];

//시간함수 Mktim 함수는 timesteamp
    // $start_Time = mktime(10,52,00,07,19,2022);
    // $end_Time = mktime(11,02,00,07,19,2022);

    // if($start_Time <= time() && $end_Time()){
    //     echo "불소 화룡 이벤트(거대보스 던전)에 참여하세요!!";
    // }
    // else{
    //     echo "불소 화룡 이벤트(거대보스 던전)가 종료되었습니다.";
    // }
    // echo "<br/>";

//절댓값
    // echo abs(8)."<br>";
    // echo abs(-8)."<br>";
    // echo abs(5.3)."<br>";
    // echo abs(-5.3)."<br>";

//올림/내림/반올림 값 구하기
    // echo ceil(3.2)."<br>";
    // echo ceil(3.7)."<br>";

    // echo floor(3.2)."<br>";
    // echo floor(3.7)."<br>";

    // echo round(3.2)."<br>";
    // echo round(3.7);
//제곱근/거듭제곱 구하기
    // echo "<br><br/>";
    // echo sqrt(25)."<br>";
    // echo sqrt(2)."<br>";

    // echo pow(2,3)."<br>";
    // echo pow(3,4);
//랜덤 수 발생시키기
    // echo "<br><br/>";
    // echo rand(1,6)."<br>";
    // echo rand(1,6)."<br>";
    // echo rand(1,6)."<br>";
//진수 변환하기
    // echo dechex(255)."<br>";
    // echo dechex(128)."<br>";

    // echo hexdec("ff")."<br>";
    // echo hexdec("80")."<br>";
//htmlspecialchars
    // $str = "<h3>MySQL은 PHP와 같이 많이 사용된다.</h3>";
    // echo $str;

    // $str2 = htmlspecialchars($str);
    // echo $str2."<br>";
//htmlspecialchars_decode()
    // $str = "&lt;h3&gt;MySQL은 PHP와 같이 많이 사용된다.&lt;/h3&gt;";
    // echo $str."<br>";

    // $str2 = html_entity_decode($str);
    // echo $str2;
//explode()
    // $tel = "010-1234-5678";
    // $arr = explode("-",$tel);

    // $tel2 = $arr[0].$arr[1].$arr[2];
    // echo $tel2."<br>";
//join()
    // $arr = array("010","1234","5648");
    // $tel = join("-",$arr);

    // echo $tel."<br>";
//rpintf()
    // $name = "홍길동";
    // $age = 20;

    // printf("%s님의 나이는 %d살 입니다.",$name,$age);
//str_replace()
    // $tel = "2022-10-30";
    // $tel2 = str_replace("-","/",$tel);
    // echo $tel2."<br>";
    
    // $str = "안녕하세요.|n 반갑습니다.";
    // $str2 = str_replace("|n","<br>",$str);
    // echo $str2."<br>";
//strtoupper()
    // $str = "PHP is fun!";

    // echo strtoupper($str)."<br>";
    // echo strtolower($str)."<br>";
//substr()
//     $str = "2022-03-25 21:30:50";

//     $year = substr($str,0,4);
//     $month = substr($str,5,2);
//     $day = substr($str,8,2);
//     $time = substr($str,11);
    
//     echo $year."년<br>";
//     echo $month."월<br>";
//     echo $day."일<br>";
//     echo $time."<br>";
// //strlen()
    // $str = "PHP is fun!";
    // echo strlen($str)."<br>";

    // $str2 = "거북이";
    // echo strlen($str2);
//count()
    // $animal = array("사자","호랑이","사슴","여우");
    // $length = count($animal);

    // echo "요소의 개수 : ".$length."<br>";
//array_push
    $animal = array("사자","호랑이","사슴","여우");
    
    array_push($animal,"팽귄");
    array_push($animal,"코뿔소");
    print_r($animal);
    echo "<br>";
//array_pop()
    $animal = array("사자","호랑이","사슴","여우");
    
    array_pop($animal);
    print_r($animal);
    echo "<br>";
//sort()
    $animal = array("사자","호랑이","사슴","여우");

    sort($animal);
    print_r($animal);
    echo "<br>";
//array_sum()
    $score = array(93,85,93,77,100);

    $sum = array_sum($score);
    $avg = $sum/count($score);

    echo "합계 : ".$sum."<br>";
    echo "평균 : ".$avg."<br>";
//date()
    $today = date("Y년 m월 d일");
    echo "오늘은 ".$today."입니다.<br>";

    echo date("Y-m-d")."<br>";
    echo date("Y.m.d")."<br>";
    echo date("Y-m-d H:i:s")."<br>";
//time()
    $timestamp = time();
    echo "현재 시간 타임스탬프 : ".$timestamp."<br>";

    echo "현재 시간: ".date("Y-m-d H:i:s",$timestamp)."<br>";
//시간 차 계산하기
    $current_time = time();

    $time_diff = 2*24*60*60; // 초 단위,2일의 기간
    $before_1day = $current_time - $time_diff;
    $after_1day = $current_time + $time_diff;

    echo "현재 타임스탬프: ".$current_time."<br>";
    echo "현재시간 : ".date("Y-m-d H:i:s", $current_time)."<br>";
    echo "-------------------------------------------------------<br>";

    echo "2일 전 타임스탬프: ".$before_1day."<br>";
    echo "2일 전 시간 : ".date("Y-m-d H:i:s", $before_1day)."<br>";
    echo "-------------------------------------------------------<br>";

    echo "2일 후 타임스탬프: ".$after_1day."<br>";
    echo "2일 후 시간 : ".date("Y-m-d H:i:s", $after_1day)."<br>";

//파일 관련 함수
//파일 읽기
    $file = fopen("hello.txt","r");

    while(!feof($file)){
        echo fgets($file)."<br>";
    }

    fclose($file);
    echo "<br>";

//CSV파일 읽기
    // $file = fopen("data.csv","r");
    // $header = fgetcsv($file);
    // $nm = count($header);
    // echo "<h3>5명의 학생의 ".$sum."과목 합계/평균 구하기</h3>";

    // while(!feof($file)){
    //     $sum = 0;
    //     $line = fgetcsv($file);
    //     forreach($line as $v){
    //         $su, += $v;
    //     }
    //     $avg = round($sum/3,2);
    //     echo "합계".$sum."평균: ".$avg."<br>";
    // }
    // fclose($file);
//텍스트 파일 쓰기  
    $file = fopen("hello2.txt","w");

    $str = "만나서 반갑습니다.";
    fwrite($file,$str);

    echo "파일 쓰기 완료!";
    fclose($file);
//5장연습문제
//
    echo ceil(11.2)."<br>";
    echo floor(7.8)."<br>";
    echo sqrt(81)."<br>";
    echo pow(2,4)."<br>";
//
    $point = "1300/3600/9000/200";

    $arr = explode("/",$point);

    for($i=0; $i<count($arr); $i++){
        echo $arr[$i]."점<br>";
    }
//
    $email = array("test","naver.com");
    $str = join("@",$email);

    echo $str."<br>";
//
    $arr = [];

    array_push($arr,"사과");
    array_push($arr,"오렌지");
    array_push($arr,"딸기");

    $str = join("/",$arr);

    echo $str."<br>";
//
    $file1 = fopen("test1.txt","r");
    $file2 = fopen("test2.txt","w");

    $str = "";
    $number = 1;
    while(!feof($file1)){
        $str.=$number.":".fgets($file1);
        $number++;
    }

    fwrite($file2,$str);
    echo "파일 쓰기 완료!";

    fclose($file1);
    fclose($file2);

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        /*error_reporting(E_ALL^E_WARNING);
            echo "이름: ".$_POST['name']."<br>";
            $name = $_POST["f_name"];
            echo "휴대전화: ".$name."<br>";

            $A = 123;
            echo 'ABCDE $ like $A'; //작은 따옴표 전체를 문자로 인식
            echo "ABCDE $ like $A"; // $A를 변수로 인식

            echo "<br>";
            $author = "Yeonmi Yoo";
            
            echo "Developers,Developers,developers,developers,developers
            ,developers,developers,developers,developers!
            -$author.";

            echo"<br>";
            echo"<br>";
            $author_2 = "Gilldong Hong";
            $text = "Measuring programming progress by lines of code id like 
            Measuring aircraft building progress by weight.
            -$author_2";
            echo $text;

            echo"<br>";
            echo"<br>";
            $author_3 = "Bill";

            echo <<<_END
            This is a Headline.
            This is the first line.
            This is the second.
            -Written by $author_3.
            _END;

            echo"<br>";
            echo"<br>";
            $author = "AI";

            $out = <<<_END
            This is a Headline

            This is the first line.
            This is the second.
            -Written by $author.
            _END;
                echo $out*/

            /*숫자에서 문자열로 자동 변환*/
            $number = 12345*67890;
            echo substr($number,3,1);

            /*문자열에서 숫자로의 자동 변환*/
            $pi = "3.1415927";
            $radius = 5;
            echo $pi*($radius*$radius);

            echo "<br>";
            echo "<br>";
            /*간단한 함수 사용법*/
            function longdate($timestamp)
            {
                return date("d F G i", $timestamp);
            }

            echo longdate(time());
        ?>


    </body>
</html>



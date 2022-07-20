<?php
    $p1 = array("Copier","Inkjet","Laser","Photo");

    echo "p1 element : ".$p1[2]."<br>";

    $p2 =array("copier" => "Copier & Multiprepose",
    "inkjet" => "Inkjet Printer",
    "laser" => "Laser printer",
    "photo" => "Photographic Paper");

    echo "p2 element: ".$p2['inkjet']."<br>";

    echo "---------------foreach문----------------<br>";

    $paper = array("Copier","Inkjet","Laser","Photo");
    $j = 0;

    foreach($paper as $item){
        echo "$j: $item<br>";
        ++$j;
    }

    $paper =array("copier" => "Copier & Multiprepose",
    "inkjet" => "Inkjet Printer",
    "laser" => "Laser printer",
    "photo" => "Photographic Paper");

    foreach($paper as $item => $description)
    {
        echo "$item: $description<br>";
    }
    // echo "---------------list문----------------<br>";

    // $paper =array("copier" => "Copier & Multiprepose",
    // "inkjet" => "Inkjet Printer",
    // "laser" => "Laser printer",
    // "photo" => "Photographic Paper");

    // while(list($item, $description) = each($paper))
    // {
    //     echo "$item: $description<br>";
    // }
    echo "---------------다차원 연관 배열 생성 및 출력----------------<br>";

    $products = array(
        'paper' => array(
            "copire" => "Copier & Multiprepose",
            "inkjet" => "Inkjet Printer",
            "laser" => "Laser printer",
            "photo" => "Photographic Paper"),
        'pens' => array(
            'ball' => "Ball point",
            "hilite" => "Highlighters",
            "marker" => "Markers"),
        'misc' => array(
            'tape' => "Sticky Tape",
            "glue" => "Adhesives",
            "cilps" => "Paperclips"),
        );

        echo "<pre>";
        foreach($products as $section => $items)
            foreach($items as $key => $value)
                echo "$section:\t$key\t($value)<br>";
        echo "</pre>";        
    
?>
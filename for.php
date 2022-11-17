<?php

     for($num = 5;$num >= 1;$num--){
        echo $num;
     }

     echo "<hr color='red'>";

     $score = 10;

     for($score = 10;$score <= 100;$score += 10){
        echo $score;
     }

     echo "<hr color='green'>";

     for($multiple = 1;$multiple <= 12;$multiple++){
        echo "10 x ".$multiple." = ".$multiple*10;
        echo "<br>";
    }

     echo "<hr color='black'>";

    //    *
    //    **
    //    ***
    //    ****
    //    *****

    for($row = 1; $row <= 5; $row++){
        for($star = 1; $star <= $row; $star++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr color='light blue'>";

    for($row = 1; $row <= 5; $row++){
        for($star = 5; $star >= $row; $star--){
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr color='pink'>";

    //    1
    //    2  3
    //    4  5  6
    //    7  8  9  10 
    //    11  12  13  14  15

    $num = 1;
    for($row = 1; $row <= 5; $row++){
        for($star = 1; $star <= $row; $star++){
            echo $num."" ;
            $num = $num + 1;
            //echo $star;
            //echo "";
            //$star = $star + 1;
        }
        echo "<br>";
    }

    echo "<hr color='yellow'>";

?>
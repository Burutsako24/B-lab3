<?php
    $id = $_POST ["id"];
    $name = $_POST ["name"];
    $hight = $_POST ["height"];
    $weight = $_POST ["weight"];
    $bmi = ($weight)/(($hight/100)**2);
    if($bmi < 18.5 ){
        $description= "Underweight";
    }
    else if ($bmi >= 18.5 && $bmi >= 24.9 ){
        $description = "Normal";
    }
    else if ($bmi >= 25 && $bmi <= 29.9 ){
        $description = "Overweight";
    }
    else if ($
    bmi >= 30 && $bmi <= 34.9 ){
        $description = "Obese";
    }
    else {
        $description = "Extremly Obese";
    }
    echo ("id : $id<br>");
    echo ("name : $name<br>");
    echo ("hight : $hight cm. <br>");
    echo ("weight : $weight kg.<br>");
    echo ("bmi"." : ".round ($bmi,2));
    echo ("<br>description : $description");
    ?>
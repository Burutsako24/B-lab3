<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $assigment =$_POST["assigment"];
    $project = $_POST["project"];
    $midterm = $_POST["midterm"];
    $final=$_POST["final"];
    $total = $assigment+$project+$midterm+$final;
    
    

     if ($total >= 80 && $total<=100){
         $Grade = "A";
    }
    elseif($total >= 75 && $total<=79){
        $Grade = "B+";   
    }
    elseif($total >= 70 && $total<=74){
        $Grade = "B";
    }
    elseif($total >= 65 && $total<=69){
        $Grade = "C+";
    }
    elseif($total >= 60 && $total<=64){
        $Grade = "C";
    }
    elseif($total >= 55 && $total<=59){
        $Grade = "D+";
    }
    elseif($total >= 50 && $total<=54){
        $Grade = "D";
    }
    else{
        $Grade = "F";
    }
    echo("id : $id<br>");
    echo("name :$name<br>");
    echo("assigment :$assigment<br>");
    echo("project :$project<br>");
    echo("midterm:$midterm<br>");
    echo("final:$final<br>");
    echo("the total is ".":".$total."<br>");
    echo("grade is".": ".$Grade."<br>");
    ?>
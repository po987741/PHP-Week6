<?php
    $mark = -1;
    if($mark >= 80 and $mark <=100){
        echo "mark is grade A";
    }
    else if($mark >= 70 and $mark <=79){
        echo "mark is grade B";
    }
    else if($mark >= 60 and $mark <=69){
        echo "mark is grade C";
    }
    else if($mark >= 50 and $mark <=59){
        echo "mark is grade D";
    }
    else if($mark >= 0 and $mark <=49){
        echo "mark is grade F";
    }
    else{
        echo "$mark is grade Error";
    }
?>
<?php
function one($num){
    echo $num;
    two($num-1);
    echo $num;
    }
    function two($num){
    echo $num;
    three($num-1);
    echo $num;
    }
    function three($num){
    echo $num;
    }
one(3);
?>

<!--
function one($num){
    echo $num;
        function two($num){
        echo $num;
        echo $num;
        }
    echo $num;
    }

one(2);
 -->



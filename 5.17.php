<?php
    function GetUglyNumber_Solution($index){

        if($index % 2 == 0 ){
            $index = $index/2;
        }
        if($index % 3 == 0 ){
            $index = $index/3;
        }
        if($index % 5 == 5 ){
            $index = $index/5;
        }

        if($index == 1){
            echo "此数是丑数";

        }else{
            echo "该数字不是丑数";
        }
    }
    echo  GetUglyNumber_Solution(5);
?>
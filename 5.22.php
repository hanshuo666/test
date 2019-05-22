<?php 

    $str = "student. a am I";

    function ReverseSentence($str){
            //分出单词数组
        $count = str_word_count($str);
        $a = str_word_count($str,1);
        //取出数组存另一个数组
        $b = [];
        for ($i=0; $i <$count ; $i++) { 
            $ar = array_pop($a);
            array_push($b,$ar);
        }
        //截取标点符号。
         $c= substr($str,7,-7);
        //把 . 存数组
        array_push($b, $c);
        
         return $b;
    } 

    print_r(ReverseSentence($str));
 ?>
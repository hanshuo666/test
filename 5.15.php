<?php 
    //输入一个整数数组，实现一个函数来调整该数组中数字的顺序，使得所有的奇数位于数组的前半部分，所有的偶数位于数组的后半部分，并保证奇数和奇数，偶数和偶数之间的相对位置不变。
//如输入：[1,2,3,4,5,6]
//输出：[1,3,5,2,4,6]
  $array =[1,2,3,4,5,6];
    function str($array){
        foreach ($array as $key => $value) {
            if($array[$key]%2!=0)$arr[] = $value;
        }
          foreach ($array as $key => $value) {
            if($array[$key]%2==0)$arr[] = $value;
        }
        return $arr;
    }

    print_r(str($array));
 
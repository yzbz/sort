<?php
function sort_1($arr) {
    $len = count($arr);
    for ($i = 1;$i < $len;$i++) {
        $tmp = $arr[$i];
        for ($j=$i - 1;$j >= 0 && $tmp < $arr[$j]; $j--) {
            $arr[$j+1] = $arr[$j];//如果比要插入的大，则往后移动
        }
        $arr[$j+1] = $tmp;
    }
    return $arr;
}
print_r(sort_1([11,2,32,16,10,30,60,24,50]));

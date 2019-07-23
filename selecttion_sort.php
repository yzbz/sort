<?php
//选择排序,选中一个最小的值，然后每次循环去比较，记录出最小的小标，最后判断交换，每次选择出来的值进行排序
function selection_sort($arr) {
    $count = count($arr);
    for ($i = 0; $i < $count - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($arr[$min] > $arr[$j]) {
                $min = $j;
            }
        }
        if ($i != $min) {
            $tmp = $arr[$min];
            $arr[$min] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }
    return $arr;
}
//print_r(selection_sort([11,2,32,16,10,30,60,24,50]));

//选择排序，双路优化
function selection_sort_1($arr) {
    $len = count($arr);
    for ($left = 0,$right = $len -1;$left < $right; $left++,$right--) {
        $min = $left;
        $max = $right;
        for ($i = $left + 1; $i < $right; $i++) {
            if ($arr[$i] <= $arr[$min]) {
                $min = $i;
            }
            if ($arr[$i] >= $arr[$max]) {
                $max = $i;
            }
            if ($max != $right) {
                $tmp = $arr[$max];
                $arr[$max] = $arr[$right];
                $arr[$right] = $tmp;
            }
            if ($min != $left) {
                $tmp = $arr[$min];
                $arr[$min] = $arr[$left];
                $arr[$left] = $tmp;
            }
        }
    }
    return $arr;
}
print_r(selection_sort_1([11,2,32,16,10,30,60,24,50]));


<?php
function quick_sort($arr) {
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    $base = $arr[0];
    $left = [];
    $right = [];
    for($i = 1;$i < $len;$i++) {
        if ($arr[$i] < $base) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];    
        }
    }
    $arr = array_merge(quick_sort($left), [$base], quick_sort($right));
    return $arr;
}
print_r(quick_sort([22,13,15,11,42,32,37,26,19,20,32]));
?>
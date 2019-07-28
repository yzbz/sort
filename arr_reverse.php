<?php
//array_reverse 会产生新的数组，所以使用一个中间变量替换
function arr_reverse($arr) {
    $len = count($arr) - 1;
    for($i = 0;$i <= $len;$i++) {
        $begin = $i;
        $end = $len - $i;
        if ($begin < $end) {
            $tmp = $arr[$begin];
            $arr[$begin] = $arr[$end];
            $arr[$end] = $tmp;
        }
    }
    return $arr;
}
print_r(arr_reverse([11,22,33,44,55,66]));

?>
<?php
//普通冒泡
function sort_1($arr) {
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) { //从1开始，一共循环len-1次，最后一次不用循环了就剩一个数了。
        for ($j = 0; $j < $len - $i; $j++) { //第一趟循环从0到len-1-1,因为判断里面要用到j+1,所以j<len-i;可用
            if ($arr[$j] > $arr[$j + 1]) { //当前大于后一个交换，从小到大，反之。
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }
    return $arr;
}
//print_r(sort_1([11,2,32,16,10,30,60,24,50]));
//冒泡排序改进1,增加标志位，记录最后交换的位置，下一次搜秒到最后交换的位置就行了
function sort_2($arr) {
    $i = count($arr) - 1;
    while ($i) {
        $bool = 0;
        for ($j = 0; $j < $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $bool = $j;
                $tmp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
        $i = $bool;
    }
    return $arr;
}
//print_r(sort_2([11,2,32,16,10,30,60,24,50]));
//冒泡排序改进2，使用每趟排序中使用从前到后和从后到前的方式，一次排序得到最大值和最小值
function sort_3($arr) {
    $low = 0;
    $high = count($arr) - 1; //下标需要len-1
    while ($low < $high) {
        for($i = $low; $i < $high; ++$i) {
            if ($arr[$i] > $arr[$i + 1]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $tmp;
            }
        }
        --$high;//因为从前向后排序，排出了最大值，所以high向前移一位
        for($j = $high; $j > $low; --$j) {
            if ($arr[$j] < $arr[$j - 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
            }
        }
        ++$low; //从后向前排序，排出了最小值，所以low 向后移一位
    }
    return $arr;
}
print_r(sort_3([11,2,32,16,10,30,60,24,50]));
//以上三种的排序方法的效率排序依次如下
//传统冒泡<改进冒泡1<改进冒泡2
//算法性能分析：
//最佳情况：T(n) = O(n),输入为正序则情况最佳.
//最坏情况:T(n) = O(n2),输入为反序时，情况最差，需要从头到尾的重新排序。
//平均情况:T(n) = O(n2).
//最优情况的空间复杂度为0，
//最坏情况的空间复杂度为O(n)
//平均的空间复杂度为O(1)



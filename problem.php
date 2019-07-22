<?php
//有 5 个人偷了一堆苹果，他们准备在第二天进行分赃。
//晚上，有一个人溜出来，他把所 有苹果分成了 5 份，但是多了一个，他顺手把这多的一个苹果扔给树上的猴子，自己先拿 1/5 藏了起来。
//没想到其他四人也都是这么想的，都如第一个人一样把苹果分成 5 份，把多的那 一个扔给了树上的猴，偷走了 1/5。
//第二天，大家分赃，也是分成 5 份多一个扔给猴子。最后 一人分了一份。
//问：共有多少苹果？
function question_1() {
    for ($num = 5;;$num++) {
        if ($num%5 == 1) {
            $h2 = $num - round($num/5) - 1;
            if ($h2%5 == 1) {
                $h3 = $h2 - round($h2/5) - 1;
                if ($h3%5 == 1) {
                    $h4 = $h3 - round($h3/5) -1;
                    if ($h4%5 == 1) {
                        $h5 = $h4 - round($h4/5) -1;
                        if ($h5%5 ==1) {
                            $last = $h5 - round($h5/5) -1;
                            if ($last%5 == 1) {
                                echo $num;
                                exit;
                            }
                        }
                    }
                }
            }
        }
    }
}
//round（$num, $len） 四舍五入
//ceil 向上取整
//floor 向下取整


//一群猴子排成一圈，按 1，2，…，n 依次编号。
//然后从第 1 只开始数，数到第 m 只，把 它踢出圈，
//从它后面再开始数，再数到第 m 只，再把它踢出去…，
//如此不停地进行下去，直 到最后只剩下一只猴子为止，
//那只猴子就可以当大王。
//要求编程模拟此过程，输入 m、n，
//输 出最后那个大王的编号。

function question_2($n, $m) {
    $monkeys = range(1, $n);
    $i = 0;
    while (count($monkeys) > 1) {
        if (($i + 1)%$m==0) {
            unset($monkeys[$i]);
        } else {
            array_push($monkeys, $monkeys[$i]);
            unset($monkeys[$i]);
        }
        $i++;
    }
    return current($monkeys);
}
//print_r(question_2(20, 2));

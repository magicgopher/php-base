<?php
// 递增递减运算符
// ++ 使变量加 1，-- 使变量减 1

$count = 5;

$result = $count++;
echo 'count++ 返回：' . $result . '<br />'; // 5
echo '执行后 count：' . $count . '<br />';  // 6

$result = ++$count;
echo '++count 返回：' . $result . '<br />'; // 7
echo '执行后 count：' . $count . '<br />';  // 7

$result = $count--;
echo 'count-- 返回：' . $result . '<br />'; // 7
echo '执行后 count：' . $count . '<br />';  // 6

$result = --$count;
echo '--count 返回：' . $result . '<br />'; // 5
echo '执行后 count：' . $count . '<br />';  // 5

// 前缀形式先改变值再返回，后缀形式先返回原值再改变值

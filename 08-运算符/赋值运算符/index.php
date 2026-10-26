<?php
// 赋值运算符
// 用于把值赋给变量，也可以在赋值的同时完成计算

$number = 10;
echo '初始值：' . $number . '<br />';

$number += 5;
echo '$number += 5：' . $number . '<br />'; // 15

$number -= 3;
echo '$number -= 3：' . $number . '<br />'; // 12

$number *= 2;
echo '$number *= 2：' . $number . '<br />'; // 24

$number /= 4;
echo '$number /= 4：' . $number . '<br />'; // 6

$number %= 4;
echo '$number %= 4：' . $number . '<br />'; // 2

$number **= 3;
echo '$number **= 3：' . $number . '<br />'; // 8

// 字符串追加赋值
$message = 'PHP';
$message .= ' 8';
echo $message . '<br />'; // PHP 8

// NULL 合并赋值：变量为 NULL 时才赋新值
$username = null;
$username ??= 'guest';
echo $username . '<br />'; // guest

$username ??= 'admin';
echo $username . '<br />'; // guest，因为左侧已经有值

// 链式赋值：赋值表达式本身也有返回值
$left = $right = 3;
echo 'left = ' . $left . '，right = ' . $right . '<br />';

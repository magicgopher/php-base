<?php
// 字符串运算符
// PHP 使用点号（.）拼接字符串，而不是加号

$first = 'Hello';
$last = 'PHP';

$message = $first . ' ' . $last;
echo $message . '<br />'; // Hello PHP

$message .= '!';
echo $message . '<br />'; // Hello PHP!

// 字符串与数字拼接时，数字会转换为字符串
var_dump('编号：' . 100); // string(11) "编号：100"
echo '<br />';

// 连续拼接
$fullName = 'Ada' . ' ' . 'Lovelace';
echo $fullName . '<br />';

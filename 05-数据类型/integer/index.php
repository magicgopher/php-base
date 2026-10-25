<?php
// 整型（Integer）
// 整数用于表示不带小数部分的数值，可以是正数、负数或 0

$count = 10;
$negative = -5;
$zero = 0;

var_dump($count);
echo '<br />';
var_dump($negative);
echo '<br />';
var_dump($zero);
echo '<br />';

echo is_int($count) ? 'count 是整数' : 'count 不是整数';
echo '<br />';

// 不同进制的整数写法
$binary = 0b1010;   // 二进制，等价于十进制的 10
$octal = 012;       // 八进制，等价于十进制的 10
$hexadecimal = 0xA; // 十六进制，等价于十进制的 10
$large = 1_000_000; // 下划线仅用于提高可读性

var_dump($binary);
echo '<br />';
var_dump($octal);
echo '<br />';
var_dump($hexadecimal);
echo '<br />';
var_dump($large);
echo '<br />';

// 整数能表示的范围与运行平台有关
echo '整数占用字节数：' . PHP_INT_SIZE;
echo '<br />';
echo '最大整数：' . PHP_INT_MAX;
echo '<br />';
echo '最小整数：' . PHP_INT_MIN;
echo '<br />';

// 常用整数运算
var_dump(10 + 3);       // int(13)
echo '<br />';
var_dump(10 % 3);       // int(1)，取余
echo '<br />';
var_dump(intdiv(10, 3)); // int(3)，整数除法
echo '<br />';
var_dump(10 / 2);       // int(5)，能整除时返回整数
echo '<br />';
var_dump(10 / 3);       // float(3.333...)，不能整除时返回浮点数
echo '<br />';

// 超出整数范围时，PHP 会自动将其转换为浮点数
var_dump(PHP_INT_MAX + 1);

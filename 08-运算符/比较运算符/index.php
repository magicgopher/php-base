<?php
// 比较运算符
// 比较的结果是布尔值 true 或 false

$number = 10;

var_dump($number == '10');  // true，只比较值
echo '<br />';
var_dump($number === '10'); // false，同时比较值和类型
echo '<br />';
var_dump($number != '10');  // false
echo '<br />';
var_dump($number !== '10'); // true
echo '<br />';

var_dump($number > 5);      // true
echo '<br />';
var_dump($number >= 10);    // true
echo '<br />';
var_dump($number < 20);     // true
echo '<br />';
var_dump($number <= 9);     // false
echo '<br />';

// 太空船运算符：小于返回 -1，等于返回 0，大于返回 1
var_dump(1 <=> 2); // int(-1)
echo '<br />';
var_dump(2 <=> 2); // int(0)
echo '<br />';
var_dump(3 <=> 2); // int(1)
echo '<br />';

// 宽松比较与严格比较在 NULL 上也可能不同
var_dump(null == false);  // true
echo '<br />';
var_dump(null === false); // false

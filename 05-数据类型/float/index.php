<?php
// 浮点型（Float）
// 浮点数用于表示带小数部分的数值，也常被称为 double

$price = 9.99;
$temperature = -3.5;
$scientific = 1.5e3; // 科学计数法，等价于 1500.0

var_dump($price);
echo '<br />';
var_dump($temperature);
echo '<br />';
var_dump($scientific);
echo '<br />';

echo is_float($price) ? 'price 是浮点数' : 'price 不是浮点数';
echo '<br />';

// 浮点数存在精度限制，直接比较可能得到意料之外的结果
$sum = 0.1 + 0.2;
var_dump($sum);
echo '<br />';
var_dump($sum === 0.3); // false
echo '<br />';

// 比较两个浮点数是否“足够接近”
var_dump(abs($sum - 0.3) < PHP_FLOAT_EPSILON); // true

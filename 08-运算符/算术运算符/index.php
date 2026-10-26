<?php
// 算术运算符
// 用于执行常见的数学计算

$a = 10;
$b = 3;

echo "$a + $b = " . ($a + $b) . '<br />';   // 13
echo "$a - $b = " . ($a - $b) . '<br />';   // 7
echo "$a * $b = " . ($a * $b) . '<br />';   // 30
echo "$a / $b = " . ($a / $b) . '<br />';   // 3.333...
echo "$a % $b = " . ($a % $b) . '<br />';   // 1
echo "$a ** $b = " . ($a ** $b) . '<br />'; // 1000

// 一元正负号
echo "-$a = " . (-$a) . '<br />';
echo "+$a = " . (+$a) . '<br />';

// 除法返回整数还是浮点数，取决于能否整除
var_dump(10 / 2); // int(5)
echo '<br />';
var_dump(10 / 3); // float(3.3333333333333335)
echo '<br />';

// 除数不能为 0，否则会抛出 DivisionByZeroError
// var_dump(10 / 0);

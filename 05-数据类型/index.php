<?php
// 四大标量类型（Scalar Types）
// Boolean - true / false
//$completed = true;
$completed = false;
// Integer - 1、2、0、-7、-10
$score = 75;
// Float - 0.0、-16.99、9.99、0.007
$price = 0.99;
// String - 'hello'、"hello world"
$greeting = "hello go";

echo $completed.'<br />';
echo $score.'<br />';
echo $price.'<br />';
echo $greeting.'<br />';

//echo gettype($completed).'<br />';
var_dump($completed);

// Boolean、Integer、Float、String
// 复合类型（Compound Types）
// Array、Object、Callable、Iterable、Enumerations
// 特殊类型（Special Types）
// NULL、Resource
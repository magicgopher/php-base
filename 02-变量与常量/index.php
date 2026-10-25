<?php
// 变量
// 使用 $ 符号来定义
//$firstName = "Jack";
//
//$firstName = "Martin";
//echo $firstName;


// 常量
// define()
//define("PI", 3.14);
//echo PI;

//echo defined("PI"); // 返回1就是被定义了
//echo defined("PII"); // 没有返回就是未被定义

// 使用 const 关键字定义常量
//const STATUS_PAID = 'paid';
//echo STATUS_PAID;

// const和define函数的区别
// 1.const关键字是编译时，而define函数是运行时
// 2.const关键字不能放在if、function内，而define函数定义的常量可以在if、循环、函数内动态定义

// 使用变量的方式动态定义常量
$paid = "PAID";

define("STATUS_".$paid, $paid);

echo STATUS_PAID;
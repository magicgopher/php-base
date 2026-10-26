<?php
// 表达式（Expression）
// 表达式是能够计算出一个值的代码片段，例如字面量、变量、运算和函数调用

$price = 20;
$quantity = 3;

// 算术表达式
$total = $price * $quantity;
var_dump($total); // int(60)
echo '<br />';

// 赋值本身也是表达式，它的值是赋给变量的值
$left = $right = 10;
var_dump($left);  // int(10)
echo '<br />';
var_dump($right); // int(10)
echo '<br />';

// 比较表达式的结果是布尔值
$isExpensive = $total > 50;
var_dump($isExpensive); // bool(true)
echo '<br />';

// 逻辑表达式可以组合多个条件
$canBuy = $isExpensive && $quantity > 0;
var_dump($canBuy); // bool(true)
echo '<br />';

// 条件表达式根据条件返回不同的值
$label = $canBuy ? '可以购买' : '无法购买';
echo $label;
echo '<br />';

// NULL 合并表达式：左侧为 NULL 时使用右侧的值
$discount = null;
$finalTotal = $total - ($discount ?? 5);
var_dump($finalTotal); // int(55)
echo '<br />';

// 函数调用也是一个表达式，调用结果可以继续参与计算
$upperLanguage = strtoupper('php');
echo $upperLanguage . ' ' . (strlen('php') + 5);
echo '<br />';

// 数组访问表达式可以取得数组中的值
$config = ['currency' => 'CNY'];
echo $config['currency'];

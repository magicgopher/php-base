<?php
// 逻辑运算符
// 用于组合多个布尔条件

$isLoggedIn = true;
$isAdmin = false;

var_dump($isLoggedIn && $isAdmin); // false，两边都为 true 才返回 true
echo '<br />';
var_dump($isLoggedIn || $isAdmin); // true，任意一边为 true 就返回 true
echo '<br />';
var_dump(!$isAdmin);               // true，取反
echo '<br />';

// XOR：两边有且只有一个为 true 时返回 true
var_dump($isLoggedIn xor $isAdmin); // true
echo '<br />';

// and、or 的优先级低于赋值运算符 =
$result = true and false;
var_dump($result); // bool(true)
echo '<br />';

$result = (true and false);
var_dump($result); // bool(false)
echo '<br />';

function checkPermission(): bool
{
    echo 'checkPermission 被执行<br />';
    return true;
}

// 逻辑运算符支持短路求值
$hasPermission = false;
$canAccess = $hasPermission && checkPermission();
var_dump($canAccess); // false，右侧函数不会执行

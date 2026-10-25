<?php
// 可变变量
// 简单来说：可变变量会取一个变量的值，然后把这个值当作新变量的名称来使用
$a = 'hello';       // 变量 $a 的值是字符串 'hello'
$$a = 'world';      // 相当于 $hello = 'world'
// 以下输出完全一致：
echo $hello;        // 输出：world
echo PHP_EOL;
echo $$a;           // 输出：world
echo PHP_EOL;
echo "$a {$$a}";    // 输出：hello world
echo PHP_EOL;
echo "$a {$hello}"; // 输出：hello world
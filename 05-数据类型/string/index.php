<?php
// 字符串（String）
// 字符串用于表示文本，可以使用单引号或双引号定义

$name = 'Alice';
$language = 'PHP';

// 单引号不会解析变量，双引号会解析变量
$singleQuoted = 'Hello, $name';
$doubleQuoted = "Hello, $name";

echo $singleQuoted;
echo '<br />';
echo $doubleQuoted;
echo '<br />';

// 使用点号拼接字符串
echo 'I am learning ' . $language;
echo '<br />';

// 常用字符串函数
echo strlen($language); // 3
echo '<br />';
echo strtoupper($language); // PHP
echo '<br />';
echo str_replace('PHP', 'PHP 8', 'I love PHP'); // I love PHP 8
echo '<br />';

// 通过下标访问字符串中的单个字符
echo $language[0]; // P

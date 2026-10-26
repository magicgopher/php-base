<?php
// 数组运算符
// 加号（+）用于合并数组，不会覆盖左侧已有的键

$left = ['a' => 1, 'b' => 2];
$right = ['b' => 3, 'c' => 4];

$union = $left + $right;
var_dump($union); // a=1，b=2，c=4
echo '<br />';

// 比较数组是否包含相同的键值对
var_dump($left == $right);  // false
echo '<br />';
var_dump($left != $right);  // true
echo '<br />';

// == 不要求键值对顺序一致，=== 要求顺序和类型都一致
$first = ['a' => 1, 'b' => 2];
$second = ['b' => 2, 'a' => 1];

var_dump($first == $second);  // true
echo '<br />';
var_dump($first === $second); // false
echo '<br />';

// 使用 array_merge() 合并数组时，后面的同名键会覆盖前面的值
var_dump(array_merge($left, $right));

<?php
// 数组（Array）
// PHP 数组是一个有序映射，可以把多个值保存在同一个变量中

// 1. 索引数组：键是从 0 开始的整数
$languages = ['PHP', 'JavaScript', 'Python'];

echo $languages[0];
echo '<br />';
echo $languages[2];
echo '<br />';
echo '数组长度：' . count($languages);
echo '<br />';

// 2. 关联数组：使用字符串作为键
$user = [
    'name' => 'Alice',
    'age' => 25,
    'city' => 'Shanghai',
];

echo $user['name'];
echo '<br />';
echo $user['age'];
echo '<br />';

// 3. 添加和修改元素
$colors = [];
$colors[] = 'red';              // 自动分配索引 0
$colors[] = 'blue';             // 自动分配索引 1
$colors[1] = 'green';           // 修改索引 1 的值
$colors['primary'] = 'yellow';  // 添加字符串键

echo $colors[0];
echo '<br />';
echo $colors[1];
echo '<br />';
echo $colors['primary'];
echo '<br />';

// 4. 多维数组：数组中的元素也可以是数组
$orders = [
    [
        'id' => 1,
        'items' => ['book', 'pen'],
    ],
    [
        'id' => 2,
        'items' => ['cup'],
    ],
];

echo $orders[0]['items'][0];
echo '<br />';
echo $orders[1]['id'];
echo '<br />';

// 5. 查看数组结构
var_dump($languages);
echo '<br />';
print_r($user);
echo '<br />';

// 6. 检查与删除元素
var_dump(isset($user['name']));               // true
echo '<br />';
var_dump(array_key_exists('email', $user));   // false
echo '<br />';

unset($user['city']);
var_dump($user);

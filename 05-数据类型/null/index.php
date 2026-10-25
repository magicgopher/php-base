<?php
// NULL 类型
// NULL 表示变量没有值，通常用于表示“空”或“尚未设置”

$username = null;

var_dump($username);
echo '<br />';
var_dump(is_null($username));
echo '<br />';
var_dump(empty($username));
echo '<br />';

// NULL 合并运算符：左侧为 NULL 时使用右侧的默认值
$nickname = null;
echo $nickname ?? '匿名用户';
echo '<br />';

$email = null;

if ($email === null) {
    echo '邮箱尚未设置';
}

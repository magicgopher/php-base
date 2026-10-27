<?php
// 条件语句
// 根据条件是否成立，决定执行哪一段代码

$age = 20;

if ($age >= 18) {
    echo '已成年';
}

echo '<br />';

$score = 75;

if ($score >= 60) {
    echo '考试通过';
} else {
    echo '考试未通过';
}

echo '<br />';

// 多个条件按顺序判断，只会执行第一个成立的分支
$score = 85;

if ($score >= 90) {
    echo '成绩优秀';
} elseif ($score >= 60) {
    echo '成绩及格';
} else {
    echo '成绩不及格';
}

echo '<br />';

// 使用严格比较判断字符串是否为空
$username = 'Alice';

if ($username !== '') {
    echo '用户名：' . $username;
}

echo '<br />';

// 使用逻辑非对条件取反
$isActive = false;

if (!$isActive) {
    echo '账号尚未激活';
}

echo '<br />';

// 条件语句可以嵌套
$hasTicket = true;
$isAdult = true;

if ($hasTicket) {
    if ($isAdult) {
        echo '可以入场';
    } else {
        echo '需要成人陪同';
    }
} else {
    echo '请先购买门票';
}

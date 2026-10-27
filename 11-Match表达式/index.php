<?php
// Match 表达式（PHP 8.0+）
// match 会根据严格比较的结果返回一个值，不需要写 break

$statusCode = 404;

$message = match ($statusCode) {
    200, 201 => '请求成功',
    301, 302 => '请求重定向',
    404 => '资源不存在',
    default => '未知状态',
};

echo $message . '<br />';

// match 是一个表达式，可以直接把结果赋给变量
$score = 85;

$grade = match (true) {
    $score >= 90 => '优秀',
    $score >= 60 => '及格',
    default => '不及格',
};

echo $grade . '<br />';

// match 使用严格比较，整数 1 和字符串 '1' 会被区分
$value = '1';

$type = match ($value) {
    1 => '整数',
    '1' => '字符串',
    default => '其他类型',
};

echo $type . '<br />';

// 没有匹配项且没有 default 时会抛出 UnhandledMatchError
try {
    $result = match (500) {
        200 => '成功',
        404 => '未找到',
    };
} catch (UnhandledMatchError $error) {
    echo '没有匹配的 case，抛出 UnhandledMatchError<br />';
}

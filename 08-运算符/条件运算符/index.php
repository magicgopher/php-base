<?php
// 条件运算符
// 根据条件在两个值之间选择一个

$age = 20;
$status = $age >= 18 ? '成年' : '未成年';
echo $status . '<br />'; // 成年

// 简写三元运算符：左侧为真时返回左侧，否则返回右侧
$name = '';
echo $name ?: '匿名用户';
echo '<br />'; // 匿名用户

// NULL 合并运算符只判断 NULL 或变量是否不存在
$score = 0;
echo $score ?: '没有分数';
echo '<br />'; // 没有分数

echo $score ?? '默认值';
echo '<br />'; // 0，因为 0 不是 NULL

// 嵌套三元表达式建议使用括号明确条件
$level = $score >= 90 ? '优秀' : ($score >= 60 ? '及格' : '不及格');
echo $level . '<br />'; // 不及格

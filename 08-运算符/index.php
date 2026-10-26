<?php
// 运算符（Operator）
// 运算符用于对一个或多个值进行计算，参与运算的值称为操作数

// 常见运算符分类
$operators = [
    '算术运算符' => '+ - * / % **',
    '赋值运算符' => '= += -= *= /= %= **= .= ??=',
    '比较运算符' => '== === != !== > >= < <= <=>',
    '逻辑运算符' => '&& || ! and or xor',
    '递增递减运算符' => '++ --',
    '字符串运算符' => '. .=',
    '数组运算符' => '+ == === != !==',
    '位运算符' => '& | ^ ~ << >>',
    '类型运算符' => 'instanceof',
    '条件运算符' => '?: ??',
];

foreach ($operators as $name => $symbols) {
    $label = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safeSymbols = htmlspecialchars($symbols, ENT_QUOTES, 'UTF-8');

    echo '<a href="' . rawurlencode($name) . '/">' . $label . '</a>：' . $safeSymbols . '<br />';
}

echo '<br />';

// 优先级示例：乘法的优先级高于加法
var_dump(2 + 3 * 4); // int(14)
echo '<br />';

// 使用括号可以改变计算顺序
var_dump((2 + 3) * 4); // int(20)
echo '<br />';

// 逻辑运算符中 && 的优先级高于 ||
var_dump(true || false && false); // bool(true)
echo '<br />';

// 不确定优先级时，建议使用括号明确表达意图
var_dump((true || false) && false); // bool(false)

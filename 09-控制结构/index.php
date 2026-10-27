<?php
// 控制结构
// 控制结构用于决定程序按照什么顺序执行代码

$structures = [
    '条件语句' => '使用 if、elseif、else 根据条件执行不同代码',
    'switch语句' => '根据一个表达式的值选择多个分支之一',
];

foreach ($structures as $name => $description) {
    $label = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

    echo '<a href="' . rawurlencode($name) . '/">' . $label . '</a>：' . $description . '<br />';
}

echo '<br />';
echo '示例目录中的代码可以单独运行，也可以修改条件观察不同分支。';

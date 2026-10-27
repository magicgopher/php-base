<?php
// 循环语句
// 循环用于重复执行一段代码，直到条件不再成立

// 1. for：适合已知循环次数的情况
echo 'for：';
for ($i = 1; $i <= 5; $i++) {
    echo $i . ' ';
}
echo '<br />';

// 2. while：先判断条件，再执行循环体
echo 'while：';
$i = 1;
while ($i <= 3) {
    echo $i . ' ';
    $i++;
}
echo '<br />';

// 3. do...while：先执行一次，再判断条件
echo 'do...while：';
$i = 10;
do {
    echo $i . ' ';
    $i++;
} while ($i < 5);
echo '<br />';

// 4. foreach：遍历数组
$languages = ['PHP', 'JavaScript', 'Python'];

echo 'foreach：';
foreach ($languages as $language) {
    echo $language . ' ';
}
echo '<br />';

// 同时获取数组的键和值
$user = ['name' => 'Alice', 'age' => 25];

foreach ($user as $key => $value) {
    echo $key . ' = ' . $value . '<br />';
}

// 5. break：立即结束整个循环
echo 'break：';
for ($i = 1; $i <= 10; $i++) {
    if ($i === 4) {
        break;
    }

    echo $i . ' ';
}
echo '<br />';

// 6. continue：跳过本次循环，继续下一次
echo 'continue：';
for ($i = 1; $i <= 6; $i++) {
    if ($i % 2 === 0) {
        continue;
    }

    echo $i . ' ';
}
echo '<br />';

// 7. 嵌套循环：外层每循环一次，内层都会完整循环一次
for ($row = 1; $row <= 3; $row++) {
    for ($column = 1; $column <= 3; $column++) {
        echo "($row, $column) ";
    }

    echo '<br />';
}

<?php
// 函数与作用域
// 函数把一段可复用的代码封装起来，作用域决定变量可以在哪里访问

// 1. 带参数和返回值的函数
function greet(string $name = 'guest'): string
{
    return 'Hello, ' . $name;
}

echo greet();
echo '<br />';
echo greet('Alice');
echo '<br />';

// 2. 类型声明与命名参数
function createUser(string $name, int $age): string
{
    return $name . ' is ' . $age . ' years old';
}

echo createUser(age: 25, name: 'Alice');
echo '<br />';

// 3. 可变参数：把多个参数收集到数组中
function sum(int ...$numbers): int
{
    return array_sum($numbers);
}

echo sum(1, 2, 3, 4);
echo '<br />';

// 4. 按引用传递：函数内部可以修改原变量
function increase(int &$number): void
{
    $number++;
}

$count = 1;
increase($count);
echo $count;
echo '<br />';

// 5. 局部变量只在函数内部有效
$siteName = 'My PHP Site';

function getLocalSiteName(): string
{
    $siteName = 'Local Site';

    return $siteName;
}

echo getLocalSiteName();
echo '<br />';
echo $siteName;
echo '<br />';

// 6. 使用 global 在函数内部访问全局变量
function getGlobalSiteName(): string
{
    global $siteName;

    return $siteName;
}

echo getGlobalSiteName();
echo '<br />';

// 7. static 变量在多次函数调用之间保留值
function nextNumber(): int
{
    static $number = 0;
    $number++;

    return $number;
}

echo nextNumber() . ' ';
echo nextNumber() . ' ';
echo nextNumber();
echo '<br />';

// 8. 闭包通过 use 捕获外部变量
$factor = 3;
$multiply = function (int $number) use ($factor): int {
    return $number * $factor;
};

echo $multiply(4);
echo '<br />';

// 9. 箭头函数会自动捕获外部变量
$double = fn(int $number): int => $number * 2;

echo $double(5);

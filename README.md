# PHP 基础学习示例

一个用于记录 PHP 基础语法学习过程的代码仓库。每个知识点都放在独立目录中，以可直接运行的 `index.php` 作为入口，适合边看、边改、边验证。

## 项目特点

- 按知识点分目录组织，结构清晰，便于回顾
- 示例尽量保持精简，并配合中文注释说明关键概念
- 既可以通过 PHP CLI 运行，也可以通过内置 Web 服务器在浏览器中查看
- 部分示例保留了注释代码，方便逐段取消注释、对比运行结果

## 目录结构

```text
php-base/
├── 01-HelloWorld/          # 第一个 PHP 程序
│   └── index.php
├── 02-变量与常量/          # 变量、常量及动态定义常量
│   └── index.php
├── 03-可变变量/            # 可变变量的定义与使用
│   └── index.php
├── 04-魔术常量/            # PHP 魔术常量
│   └── index.php
├── 05-数据类型/            # 标量类型与类型查看
│   ├── index.php
│   ├── boolean/
│   │   └── index.php
│   ├── float/
│   │   └── index.php
│   ├── integer/
│   │   └── index.php
│   ├── null/
│   │   └── index.php
│   └── string/
│       └── index.php
└── README.md
```

## 环境要求

- PHP 8.0 及以上版本
- 终端中可直接使用 `php` 命令

检查本地 PHP 环境：

```bash
php -v
```

## 运行示例

### 方式一：命令行运行

在项目根目录执行对应章节的入口文件：

```bash
php 01-HelloWorld/index.php
php 02-变量与常量/index.php
php 03-可变变量/index.php
php 04-魔术常量/index.php
php 05-数据类型/index.php
php 05-数据类型/boolean/index.php
php 05-数据类型/float/index.php
php 05-数据类型/integer/index.php
php 05-数据类型/null/index.php
php 05-数据类型/string/index.php
```

例如运行变量与常量示例：

```bash
php 02-变量与常量/index.php
```

### 方式二：浏览器运行

在项目根目录启动 PHP 内置服务器：

```bash
php -S 127.0.0.1:8000
```

然后按章节访问：

```text
http://127.0.0.1:8000/01-HelloWorld/
http://127.0.0.1:8000/02-变量与常量/
http://127.0.0.1:8000/03-可变变量/
http://127.0.0.1:8000/04-魔术常量/
http://127.0.0.1:8000/05-数据类型/
http://127.0.0.1:8000/05-数据类型/boolean/
http://127.0.0.1:8000/05-数据类型/float/
http://127.0.0.1:8000/05-数据类型/integer/
http://127.0.0.1:8000/05-数据类型/null/
http://127.0.0.1:8000/05-数据类型/string/
```

浏览器通常会自动处理中文目录的 URL 编码。按 `Ctrl + C` 可停止服务器。

## 章节说明

| 章节 | 主要内容 | 关键知识点 |
| --- | --- | --- |
| [01-HelloWorld](01-HelloWorld/index.php) | 第一个 PHP 程序 | `<?php` 标签、`echo` 输出 |
| [02-变量与常量](02-变量与常量/index.php) | 变量与常量的定义 | `$变量名`、`define()`、`const`、`defined()`、动态常量名 |
| [03-可变变量](03-可变变量/index.php) | 用变量值作为变量名 | `$$a`、字符串插值、`PHP_EOL` |
| [04-魔术常量](04-魔术常量/index.php) | 随代码位置变化的常量 | `__LINE__`、`__FILE__`、`PHP_VERSION` |
| [05-数据类型](05-数据类型/index.php) | 数据类型与类型查看 | 布尔、整数、浮点、字符串、`var_dump()`、`gettype()` |

### 数据类型补充

- [Boolean](05-数据类型/boolean/index.php)：布尔类型与条件判断
- [Float](05-数据类型/float/index.php)：浮点数、科学计数法与精度问题
- [Integer](05-数据类型/integer/index.php)：整数、进制写法、范围与整数运算
- [Null](05-数据类型/null/index.php)：`NULL`、`is_null()` 与 NULL 合并运算符
- [String](05-数据类型/string/index.php)：单双引号、字符串拼接与常用函数
- 标量类型：`Boolean`、`Integer`、`Float`、`String`
- 复合类型：`Array`、`Object`、`Callable`、`Iterable`、`Enum`
- 特殊类型：`NULL`、`Resource`
- 布尔转换：整数 `0`、浮点数 `0.0`、空字符串等通常会被转换为 `false`

## 学习建议

1. 先阅读 `index.php` 中的注释，理解示例想说明的知识点。
2. 运行代码并观察输出，尤其是 `var_dump()` 展示的类型与值。
3. 修改示例中的值，或取消注释其他代码，验证自己的理解。
4. 为新知识点建立独立目录，并同步更新本 README 的章节说明。

## 后续计划

- [ ] 运算符与表达式
- [ ] 条件判断与循环
- [ ] 函数与作用域
- [ ] 数组与字符串处理
- [ ] 面向对象编程
- [ ] 表单处理与文件上传
- [ ] 数据库与 PDO
- [ ] 错误处理与异常
- [ ] Composer 与常用扩展

## 说明

本仓库主要用于个人学习记录，示例以理解基础语法为目标。随着学习进度推进，章节和示例会持续补充。

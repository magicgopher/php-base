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
├── 06-数组类型/            # 索引数组、关联数组与多维数组
│   └── index.php
├── 07-表达式/              # 表达式的求值与组合
│   └── index.php
├── 08-运算符/              # 运算符分类与优先级
│   ├── index.php
│   ├── 算术运算符/
│   │   └── index.php
│   ├── 赋值运算符/
│   │   └── index.php
│   ├── 比较运算符/
│   │   └── index.php
│   ├── 逻辑运算符/
│   │   └── index.php
│   ├── 递增递减运算符/
│   │   └── index.php
│   ├── 字符串运算符/
│   │   └── index.php
│   ├── 数组运算符/
│   │   └── index.php
│   ├── 位运算符/
│   │   └── index.php
│   ├── 类型运算符/
│   │   └── index.php
│   └── 条件运算符/
│       └── index.php
├── 09-控制结构/            # 条件分支与多分支选择
│   ├── index.php
│   ├── 条件语句/
│   │   └── index.php
│   └── switch语句/
│       └── index.php
├── 10-循环语句/            # for、while、do...while、foreach
│   └── index.php
├── 11-Match表达式/         # match 表达式与严格比较
│   └── index.php
├── 12-函数与作用域/        # 函数、闭包、变量作用域
│   └── index.php
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
php 06-数组类型/index.php
php 07-表达式/index.php
php 08-运算符/index.php
php 08-运算符/算术运算符/index.php
php 08-运算符/赋值运算符/index.php
php 08-运算符/比较运算符/index.php
php 08-运算符/逻辑运算符/index.php
php 08-运算符/递增递减运算符/index.php
php 08-运算符/字符串运算符/index.php
php 08-运算符/数组运算符/index.php
php 08-运算符/位运算符/index.php
php 08-运算符/类型运算符/index.php
php 08-运算符/条件运算符/index.php
php 09-控制结构/index.php
php 09-控制结构/条件语句/index.php
php 09-控制结构/switch语句/index.php
php 10-循环语句/index.php
php 11-Match表达式/index.php
php 12-函数与作用域/index.php
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
http://127.0.0.1:8000/06-数组类型/
http://127.0.0.1:8000/07-表达式/
http://127.0.0.1:8000/08-运算符/
http://127.0.0.1:8000/08-运算符/算术运算符/
http://127.0.0.1:8000/08-运算符/赋值运算符/
http://127.0.0.1:8000/08-运算符/比较运算符/
http://127.0.0.1:8000/08-运算符/逻辑运算符/
http://127.0.0.1:8000/08-运算符/递增递减运算符/
http://127.0.0.1:8000/08-运算符/字符串运算符/
http://127.0.0.1:8000/08-运算符/数组运算符/
http://127.0.0.1:8000/08-运算符/位运算符/
http://127.0.0.1:8000/08-运算符/类型运算符/
http://127.0.0.1:8000/08-运算符/条件运算符/
http://127.0.0.1:8000/09-控制结构/
http://127.0.0.1:8000/09-控制结构/条件语句/
http://127.0.0.1:8000/09-控制结构/switch语句/
http://127.0.0.1:8000/10-循环语句/
http://127.0.0.1:8000/11-Match表达式/
http://127.0.0.1:8000/12-函数与作用域/
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
| [06-数组类型](06-数组类型/index.php) | 数组的定义与操作 | 索引数组、关联数组、多维数组、`count()`、`unset()` |
| [07-表达式](07-表达式/index.php) | 表达式与求值 | 算术、赋值、比较、逻辑、条件表达式、NULL 合并 |
| [08-运算符](08-运算符/index.php) | 运算符分类与优先级 | 算术、赋值、比较、逻辑、字符串、数组、位、类型、条件 |
| [09-控制结构](09-控制结构/index.php) | 条件分支与多分支选择 | `if`、`elseif`、`else`、`switch`、`break`、case 穿透 |
| [10-循环语句](10-循环语句/index.php) | 重复执行代码 | `for`、`while`、`do...while`、`foreach`、`break`、`continue` |
| [11-Match表达式](11-Match表达式/index.php) | 基于严格比较选择结果 | 多条件匹配、`default`、返回值、`UnhandledMatchError` |
| [12-函数与作用域](12-函数与作用域/index.php) | 函数定义与变量作用域 | 类型声明、默认参数、命名参数、可变参数、闭包、`static` |

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

### 运算符补充

- [算术运算符](08-运算符/算术运算符/index.php)：`+`、`-`、`*`、`/`、`%`、`**`
- [赋值运算符](08-运算符/赋值运算符/index.php)：`=`、复合赋值、`.=`、`??=`
- [比较运算符](08-运算符/比较运算符/index.php)：宽松/严格比较、大小比较、太空船运算符
- [逻辑运算符](08-运算符/逻辑运算符/index.php)：`&&`、`||`、`!`、`xor`、短路求值
- [递增递减运算符](08-运算符/递增递减运算符/index.php)：前缀与后缀形式的 `++`、`--`
- [字符串运算符](08-运算符/字符串运算符/index.php)：`.` 和 `.=` 字符串拼接
- [数组运算符](08-运算符/数组运算符/index.php)：数组合并、相等与全等比较
- [位运算符](08-运算符/位运算符/index.php)：与、或、异或、取反和位移
- [类型运算符](08-运算符/类型运算符/index.php)：`instanceof` 类型判断
- [条件运算符](08-运算符/条件运算符/index.php)：三元运算符、`?:`、`??`

### 控制结构补充

- [条件语句](09-控制结构/条件语句/index.php)：`if`、`if...else`、`elseif`、嵌套条件
- [switch语句](09-控制结构/switch语句/index.php)：多分支选择、多个 case 共用代码、break 与穿透

## 学习建议

1. 先阅读 `index.php` 中的注释，理解示例想说明的知识点。
2. 运行代码并观察输出，尤其是 `var_dump()` 展示的类型与值。
3. 修改示例中的值，或取消注释其他代码，验证自己的理解。
4. 为新知识点建立独立目录，并同步更新本 README 的章节说明。

## 后续计划

- [x] 运算符与表达式
- [x] 条件判断与循环
- [x] 函数与作用域
- [ ] 数组与字符串处理
- [ ] 面向对象编程
- [ ] 表单处理与文件上传
- [ ] 数据库与 PDO
- [ ] 错误处理与异常
- [ ] Composer 与常用扩展

## 说明

本仓库主要用于个人学习记录，示例以理解基础语法为目标。随着学习进度推进，章节和示例会持续补充。

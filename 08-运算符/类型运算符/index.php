<?php
// 类型运算符
// instanceof 用于判断对象是否属于某个类或实现了某个接口

$object = new stdClass();

var_dump($object instanceof stdClass);        // true
echo '<br />';
var_dump($object instanceof DateTime);        // false
echo '<br />';

$date = new DateTime();
var_dump($date instanceof DateTime);          // true
echo '<br />';
var_dump($date instanceof DateTimeInterface); // true，实现了该接口
echo '<br />';

// 非对象使用 instanceof 时结果为 false
var_dump('hello' instanceof stdClass);       // false

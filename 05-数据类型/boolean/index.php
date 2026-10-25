<?php
// boolean类型
// 布尔类型的值只有true和false

// 任何不是空字符串或者0的内容都是true
//$isComplete = true; // 'success'
//$isComplete = ''; // 'fail'
//$isComplete = 5; // 'success'
//$isComplete = (string) false; // string(0) ""
$isComplete = (string) true; // string(1) "1"

//if ($isComplete) {
//    echo 'success';
//} else {
//    echo 'fail';
//}

var_dump($isComplete);

// 整数0或者-0 = false
// 浮点数0.0或者-0.0 = false
// '' = false
// "" = false
// [] = false
// null = false
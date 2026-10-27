<?php
// switch 语句
// 根据表达式的值，从多个 case 中选择一个分支执行

$status = 'paid';

switch ($status) {
    case 'pending':
        echo '订单等待支付';
        break;
    case 'paid':
        echo '订单支付成功';
        break;
    case 'cancelled':
        echo '订单已取消';
        break;
    default:
        echo '未知订单状态';
        break;
}

echo '<br />';

// 多个 case 可以共用同一段代码
$day = 6;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo '工作日';
        break;
    case 6:
    case 7:
        echo '周末';
        break;
    default:
        echo '日期无效';
        break;
}

echo '<br />';

// 没有 break 时会继续执行下一个 case（称为穿透）
$level = 1;

switch ($level) {
    case 1:
        echo '查看内容<br />';
        // 故意不写 break，继续执行 case 2
    case 2:
        echo '编辑内容<br />';
        break;
    default:
        echo '没有权限';
        break;
}

// switch 使用宽松比较，字符串 '1' 会匹配整数 1
$value = '1';

switch ($value) {
    case 1:
        echo "字符串 '1' 匹配了 case 1";
        break;
    default:
        echo '没有匹配项';
        break;
}

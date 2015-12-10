<?php
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 15:13
 * 布尔类型 TRUE | FALSE
 * 当转换为 boolean 时，以下值被认为是 FALSE：
 * 布尔值 FALSE 本身
 * 整型值 0（零）
 * 浮点型值 0.0（零）
 * 空字符串，以及字符串 "0"
 * 不包括任何元素的数组
 * 不包括任何成员变量的对象（仅 PHP 4.0 适用）
 * 特殊类型 NULL（包括尚未赋值的变量）
 * 从空标记生成的 SimpleXML 对象
 */
$foo = True; // assign the value TRUE to $foo
// == 是一个操作符，它检测两个变量是否相等，并返回一个布尔值
if ($action == "show_version") {
    echo "The version is 1.23";
}

// 这样做是不必要的...
if ($show_separators == TRUE) {
    echo "<hr>\n";
}

// ...因为可以使用下面这种简单的方式：
if ($show_separators) {
    echo "<hr>\n";
}

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)




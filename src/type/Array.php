<?php
require_once(__DIR__.'\..\utils\PrintUtils.php');
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 16:45
 * php中的数组相当于其他语言的数组和map,不得不说是一个巧妙的实现，不过性能这一块不知道和空间这一块不知道如何，php官网说性能较高，
 * 这个等入门后需要看看具体的实现
 *
 */
//键（key）可是是一个整数 integer 或字符串 string(这里有点弊端，java里是对象也可以作为key的,不过貌似也没到这个功能过在Java中)
//值（value）可以是任意类型的值
$a = array(1 => "one", 2 => "two");
//短数组定义法,php5.4起
$b = [1 => "one", 2 => "two"];
PrintUtils::var_dump($a, $b);

/**
 * tip :
 * 包含有合法整型值的字符串会被转换为整型。例如键名 "8" 实际会被储存为 8。但是 "08" 则不会强制转换，因为其不是一个合法的十进制数值。
 * 浮点数也会被转换为整型，意味着其小数部分会被舍去。例如键名 8.7 实际会被储存为 8。
 * 布尔值也会被转换成整型。即键名 true 实际会被储存为 1 而键名 false 会被储存为 0。
 * Null 会被转换为空字符串，即键名 null 实际会被储存为 ""。
 * 数组和对象不能被用为键名。坚持这么做会导致警告：Illegal offset type
 */

//混合integer和string键名
$c = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
    101,
);

$d = array("foo", "bar", "hallo", "world");

//给部分键名
$e = ["a", "b", "c", 6 => "d", "e"];
PrintUtils::var_dump($c, $d, $e);

//访问数组单元[],也可以使用{}代替
$f = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

//对数组赋值,直接指定地方或者不指定(根据最大键值名字)
$f[1] = "new";
$f[] = "new";
PrintUtils::var_dump($f, $f["foo"], $f[42], $f["multi"]["dimensional"]["array"]);

//删除数组
unset($f[1]);
unset($f);
/*PrintUtils::var_dump($f, $f["foo"], $f[42], $f["multi"]["dimensional"]["array"]);*/

//重新索引数组
var_dump(array_values($e));
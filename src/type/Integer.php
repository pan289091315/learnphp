<?php
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 15:17
 * 一个 integer 是集合 ℤ = {..., -2, -1, 0, 1, 2, ...} 中的一个数。
 * 要使用八进制表达，数字前必须加上 0（零）。要使用十六进制表达，数字前必须加上 0x。要使用二进制表达，数字前必须加上 0b
 *整型数的字长和平台有关，尽管通常最大值是大约二十亿（32 位有符号）。64 位平台下的最大值通常是大约 9E18
 */
$a = 1234;
var_dump($a);
$a = -123;
var_dump($a);
$a = 0123;
var_dump($a);
$a = 0x1A;
var_dump($a);
$a = 0b11111111;
var_dump($a);
echo PHP_INT_SIZE;
echo PHP_INT_MAX;

//整数溢出如果给定的一个数超出了 integer 的范围，将会被解释为 float。
//同样如果执行的运算结果超出了 integer 范围，也会返回 float。
$large_number = 2147483647;
var_dump($large_number);                     // int(2147483647)

$large_number = 2147483648;
var_dump($large_number);                     // float(2147483648)

$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number);

//PHP 中没有整除的运算符。1/2 产生出 float 0.5。值可以舍弃小数部分强制转换为 integer，
//或者使用 round() 函数可以更好地进行四舍五入。
var_dump(25 / 7);
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)

//还可以通过intval()函数进行转化;

//决不要将未知的分数强制转换为 integer，这样有时会导致不可预料的结果。
echo (int) ( (0.1+0.7) * 10 ); // 显示 7!

<?php
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 11:30
 * 可变函数
 * 如果一个变量名后有圆括号，PHP 将寻找与变量的值同名的函数，并且尝试执行它。可变函数可以用来实现包括回调函数，函数表在内的一些用途
 */

function foo() {
    echo 'In foo';
}

function bar() {
    echo 'In  bar';
}

$func = 'foo';
$func();
$func = 'bar';
$func();


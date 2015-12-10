<?php
require_once(__DIR__.'\..\utils\PrintUtils.php');

/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 15:36
 * 浮点数
 */
//使用一下语法定义,太大了会自动使用科学计数法
$a = 1.234;
$b = 1.2e3;
$c = 7E-3;
$d = 7E+3;
$e = 7E+20;
PrintUtils::var_dump($a, $b, $c, $d, $e);
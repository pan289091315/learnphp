<?php
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 11:02
 * 测试php引用
 */

////////////////////////传值与传引用/////////////////////////
$arr = array(1, "2", 3.2);

//传值
function passArrayVal($a_arr) {
    $a_arr[0] = 2;
}

//传引用
function passArrayRef(&$a_arr) {
    $a_arr[2] = 2;
}

passArrayVal($arr);
passArrayRef($arr);
var_dump($arr);

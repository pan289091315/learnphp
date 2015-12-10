<?php
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 11:20
 * 测试php返回
 */
//如果省略了 return，则返回值为 NULL。

//返回数组
function returnArray() {
    return array(0, 1, 2);
}
$ret = returnArray();
var_dump($ret);

//返回引用,函数名前加&
function &return_reference() {
    
}

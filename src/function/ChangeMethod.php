<?php
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 11:39
 * 可变方法,可变函数的功能可以用在方法上，称为可变方法
 */

class Foo {
    function variable() {
        $name = 'Bar';
        $this->$name();
    }

    function bar()
    {
        echo "This is Bar";
    }
}

$foo = new Foo();
$method = 'variable';
$foo->$method();

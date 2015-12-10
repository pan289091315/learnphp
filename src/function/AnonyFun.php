<?php
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 14:27
 * 匿名函数(闭包函数):用法1 : 回调
 * 用法2:
 */
//用作回调
preg_replace_callback('~-([a-z])~', function($match) {
    return strtoupper($match[1]);
}, 'hello-world');

//闭包函数也可以作为变量的值来使用。PHP 会自动把此种表达式转换成内置类 Closure 的对象实例
$greet = function($name) {
    printf("Hello %s\r\n", $name);
};

var_dump($greet); //Closure类的实例
$greet('World');

//从父作用域继承变量
$message = 'hello';

//没有"use"，这是不行的
/*$example = function() {
    var_dump($message);
};*/

//使用use
$example = function() use ($message){
    var_dump($message);
};
echo $example();
$message = 'world';//不会改变闭包函数里的值
echo $example();

$example = function() use(&$message) {
    var_dump($message);
}; //这样定义闭包函数，父作用域变量的改变会影响到闭包里

$message = 'china';//会改变闭包函数里的值
echo $example();

//闭包函数也可以带参数
$example = function($arg) use($message)
{
    var_dump($arg. ' ' .$message);
};
$example('hello');


class Cart {
    const PRICE_BUTTER = 1.00;
    const PRICE_MILK = 3.00;
    const PRICE_EGGS = 6.95;

    protected   $products = array();

    public function add($produce, $quantity) {
        $this->products[$produce] = $quantity;
    }

    public function getQuantity($product) {
        return isset($this->products[$product]) ? $this->products[$product] : FALSE;
    }

    public function getTotal($tax) {
        $total = 0.00;

        $callback = function($quantity, $product) use ($tax, &$total) {
            $pricePerItem = constant(__CLASS__ . "::PRICE_" . strtoupper($product));
            $total += ($pricePerItem * $quantity) * ($tax + 1.0);
        };
        array_walk($this->products, $callback);
        return round($total, 2);;
    }
}

$my_cart = new Cart;
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);

print $my_cart->getTotal(0.05) . "\n";

<?php
/**
 * Created by PhpStorm.
 * User: evans
 * Date: 2015/12/10
 * Time: 15:46
 * 一些输出工具
 */

class PrintUtils {
    public static function var_dump($arg) {
        $allArgs = func_get_args();
        foreach($allArgs as $oneArg) {
            var_dump($oneArg);
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: bcombast
 * Date: 6/1/2015
 * Time: 12:37 PM
 */

namespace bcombast;
use Illuminate\Support\Debug\Dumper;

class BCHelpers {

    public function __construct()
    {
    }

    public static function dNoD($x) {
        array_map(function($x) { (new Dumper)->dump($x); }, func_get_args());
    }

}
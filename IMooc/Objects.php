<?php
namespace IMooc;

class Objects
{
    protected $array = array();

    static function test()
    {
        echo '__FUNCTION__ is: ' . __FUNCTION__ . "<br>";
    }

    //设置不存在参数时，自动调用
    function __set($name, $value)
    {
        var_dump(__METHOD__);
        $this->array[$name] = $value;
    }

    //调用不存在参数时，自动调用
    function __get($name)
    {
        var_dump(__METHOD__);
        return $this->array[$name];
    }

    //调用不存在的方法时，自动调用
    function __call($name, $arguments)
    {
        var_dump($name, $arguments);
        return "magic function\n";
    }

    //调用不存在的静态方法时，自动调用（静态）
    static function __callStatic($name, $arguments){
        var_dump($name, $arguments);
        return "magic static function\n";
    }

    //将对象当成字符串输出时候，自动调用
    function __toString()
    {
        return __CLASS__;
    }

    //将对象当成函数输出时，自动调用
    function __invoke($param)
    {
        var_dump($param);
        return "invoke";
    }
}
<?php
namespace IMooc;

class Register
{
    protected static $objects;//全局注册树对象

    //注册树对象
    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;

    }

    //获取注册树对象
    static function get($name)
    {
        return self::$objects[$name];
    }

    //释放注册树对象
    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}
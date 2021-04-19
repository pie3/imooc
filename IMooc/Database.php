<?php
namespace IMooc;


class Database
{
    //单例模式（口诀：三私一公）
    //私有化内部实例化的对象
    private static $instance = null;

    //私有化构造方法，禁止外部实例化对象
    private function __construct()
    {

    }

    //私有化__clone，防止对象被克隆
    private function __clone()
    {

    }

    //公有化静态实例方法
    public static function getInstance()
    {
        if (self::$instance instanceof self) {
            return self::$instance;
        }

        self::$instance = new self();

        return self::$instance;
    }

    function where($where)
    {
        return $this;
    }

    function order($order)
    {
        return $this;
    }

    function limit($limit)
    {
        return $this;
    }

}
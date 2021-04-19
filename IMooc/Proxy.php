<?php
namespace IMooc;

class Proxy implements IUserProxy
{
    function getUserName($id)
    {
        //读操作，从 slave 读取
        $db = Factory::getDatabase('slave');
        $res = $db->query("select name from user where id={$id} limit 1");
        $data = $res->fetch_assoc();

        return $data['name'];
    }

    function setUserName($id, $name)
    {
        //写操作，在 master 操作
        $db = Factory::getDatabase('master');
        $db->query("update user set name={$name} where id={$id} limit 1");
    }
}
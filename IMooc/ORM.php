<?php
class ORM
{
    function index()
    {
        $user = \IMooc\Factory::getUser(1);
        var_dump($user);
        $user->name = 'test223';

        $this->test();

        echo "OK";
    }

    function test()
    {
        $user = \IMooc\Factory::getUser(1);
        var_dump($user);
        $user->mobile = '18933330001';
    }
}

$orm = new ORM();
$orm->index();
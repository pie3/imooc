<?php
namespace App\Controller;

use IMooc\Controller;
use IMooc\Factory;

class Home extends Controller
{
    function index()
    {
        $model = Factory::getModel('User');
        $userid = $model->create(array('name' => 'test', 'mobile' => '18933330000'));
        return array('userid' => $userid, 'name' => 'test');
    }

    function index2()
    {
        $db = Factory::getDatabase();
        $db->query("select * from user");
        $db->query("delete from user where id = 1");
        $db->query("update user set name = 'test2' where id = 1");
    }
}
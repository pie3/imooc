<?php
define('BASEDIR', __DIR__);

include BASEDIR . '/IMooc/Loader.php';
//使用spl_autoload_register()来完成类的自动加载
spl_autoload_register('\\IMooc\\Loader::autoload');
echo '<meta http-equiv="content-type" content="text/html;charset=utf-8">';

//IMooc\Application::getInstance(__DIR__)->dispatch();

//IMooc\Objects::test();
//App\Controller\Home\Index::test();

//SPL 库的使用（PHP 标准库）
//4种常见的库
//1、栈   先进后出
/*$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");

echo $stack->pop();
echo $stack->pop();*/

//2、队列  先进先出
/*$queue = new SplQueue();
$queue->enqueue("data1\n");
$queue->enqueue("data2\n");

echo $queue->dequeue();
echo $queue->dequeue();*/

//3、堆  最小堆
/*$heap = new SplMinHeap();
$heap->insert("data3\n");
$heap->insert("data4\n");

echo $heap->extract();
echo $heap->extract();*/

//4、固定长度数组
/*$fixedArray = new SplFixedArray(10);
$fixedArray[0] = 123;
$fixedArray[9] = 1234;
var_dump($fixedArray);*/

//调用工厂方法
//$db = \IMooc\Factory::createDatabase();
//调用单例模式实例化db
//$db = \IMooc\Database::getInstance();
//调用注册树模式获取对象
//$db = \IMooc\Register::get('db1');

//使用适配器模式调用
/*$db = new \IMooc\Database\MySQL();
$db->connect('127.0.0.1', 'root', 'mysql1810', 'test');
$db->query("show databases");
$db->close();*/

//使用原型模式
/*$prototype = new \IMooc\Canvas();
$prototype->init();

$canvas1 = clone $prototype;
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw();

echo "========================<br />\n";

$canvas2 = clone $prototype;
$canvas2->rect(1, 3, 2, 6);
$canvas2->draw();*/

/*//使用装饰器模式
$canvas = new \IMooc\Canvas();
$canvas->init();

$canvas->addDecorator(new \IMooc\ColorDrawDecorator("green"));
$canvas->addDecorator(new \IMooc\SizeDrawDecorator('24px'));

$canvas->rect(3, 6, 4, 12);
$canvas->draw();*/

/*//使用迭代器模式
$users = new \IMooc\AllUser();
foreach ($users as $user) {
    var_dump($user->name);
    $user->serial_no = rand(10000, 90000);
}*/

/*//传统模式,未用代理模式的实现
$db1 = \IMooc\Factory::getDatabase('slave');
$info = $db->query("select name from user where id = 1 limit 1");

$db2 = \IMooc\Factory::getDatabase('master');
$db->query("update user set name = 'test' where id = 1 limit 1");

//使用代理模式
$id = 1;
$proxy = new \IMooc\Proxy();
$name = $proxy->getUserName($id);
$proxy->setUserName($id, $name);*/

//使用 PHP ArrayAccess 实现自动加载配置类文件
$config = new \IMooc\Config(__DIR__ . '/configs');
var_dump($config);
echo "============<br />\n";
var_dump($config['controller']);
echo "============<br />\n";
var_dump($config);
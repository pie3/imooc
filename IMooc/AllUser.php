<?php
namespace IMooc;

class AllUser implements \Iterator
{
    protected $ids;
    protected $data = array();
    protected $index;

    function __construct()
    {
        $db = Factory::getDatabase();
        $result = $db->query("select id from user");
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    //返回到迭代器的第一个元素
    function rewind()
    {
        $this->index = 0;
    }

    //检查当前位置是否有效
    function valid()
    {
        return $this->index < count($this->ids);
    }

    //返回当前元素
    function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    //向前移动到下一个元素
    function next()
    {
        $this->index++;
    }

    //返回当前元素的键
    function key()
    {
        return $this->index;
    }

}
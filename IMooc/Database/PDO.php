<?php
namespace IMooc\Database;

use IMooc\IDatabase;

class PDO implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = $this->conn->query($sql);
        return $res;
    }

    function close()
    {
        unset($this->conn);
    }
}
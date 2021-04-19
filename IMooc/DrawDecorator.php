<?php
/**
 * Created by PhpStorm.
 * User: Pie
 * Date: 2021/4/14
 * Time: 11:24 AM
 */
namespace IMooc;

interface DrawDecorator
{
    function beforeDraw();

    function afterDraw();
}
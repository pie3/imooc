<?php
/**
 * Created by PhpStorm.
 * User: Pie
 * Date: 2021/4/14
 * Time: 11:26 AM
 */
namespace IMooc;

class ColorDrawDecorator implements DrawDecorator
{
    protected $color;

    function __construct($color = 'red')
    {
        $this->color = $color;
    }

    function beforeDraw()
    {
        echo "<div style='color: {$this->color};'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Pie
 * Date: 2021/4/13
 * Time: 10:35 AM
 */

namespace IMooc;


class MaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "IPhone";
    }

    function showCategory()
    {
        echo "电子产品";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Pie
 * Date: 2021/4/13
 * Time: 10:37 AM
 */

namespace IMooc;


class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "2021 新款女装";
    }

    function showCategory()
    {
        echo "女装";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Pie
 * Date: 2021/4/15
 * Time: 3:45 PM
 */
$config = array(
    'user' => array(
        'observer' => array(
            'App\Observer\UserAdd1',
            //'App\Observer\UserAdd2',
            'App\Observer\UserAdd3',
            'App\Observer\UserAdd4',
        ),
    ),
);
return $config;
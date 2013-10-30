<?php

return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        'components'=>array(
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=nmedb',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => 'root',
                'charset' => 'utf8',
            ),
        ),
        'modules'=>array(

            'gii'=>array(
                'class'=>'system.gii.GiiModule',
                'password'=>'Enter Your Password Here',
                'ipFilters'=>array('127.0.0.1','::1'),
            ),

        ),
    )
);
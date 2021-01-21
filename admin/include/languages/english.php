<?php


function lang($phrase){

    static $lang = array(
        'message'        =>     'welecome',
        'admin'          =>     'administrateur ',
        'shop'           =>     'STORE',
        'Categories'    =>      'Exapmles',
        'ITEMS'         => 'Items',
        'MEMBERS'       => 'Members',
        'STATISTICS'    => 'Statistics',
        'LOGS'          => 'Logs',
    );

    return $lang[$phrase];
}


?>
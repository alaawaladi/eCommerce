<?php


function lang($phrase){

    static $lang = array(
        'message' => 'welecome arabic',
        'admin' => 'administrateur arabs',
        'Alaa Edine' => 'علاء الدين'
    );

    return $lang[$phrase];
}


?>
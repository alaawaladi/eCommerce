<?php
include "config.php";

$tpl = 'include/templates/'; // templates directory
$css = 'layout/css/'; //css directory
$js =  'layout/js/'; //js directory
$laung ='include/languages/'; // laungauge directory
$laungAR = 'include/languages/';

# include the im portant files 

include $laung.'english.php';
include $tpl.'header.php';

//include nav bar in all pages exepet the hwo hav the variable $nonavbar
if (!isset($nonavbar)) {
    
include $tpl.'NavBar.php';

}



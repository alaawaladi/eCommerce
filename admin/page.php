<?php


// small if condition 

 /*$do = isset($_GET['do'])? $do = $_GET['do']: $do='manage';*/


$do = '';

if (isset($_GET['do'])) {

    $do  = $_GET['do'];

} else {

    $do = 'Manage';
}




if ($do == 'manage') {

    echo 'welcom to the main page '. '<br>';

   // echo '<a href="page.php?do=add" > add new items +</a>';

   echo '<a href="?do=add" > add new items +</a>';

} elseif ($do == 'add') {

    echo 'welcom you are in add category page ';

} elseif ($do == 'insert') {

    echo "  insert your data ";

} else {

    echo 'ERROR this no page with this name ';
}
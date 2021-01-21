<?php

    session_start();    // sesion start

   //session_unset();  // unset the data
   $_SESSION = array();
    session_destroy();  //destroy session
   header("Location: dashbord.php");
    exit();

?>
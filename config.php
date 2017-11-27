<?php?
/*
config.php

stores configuration information for our web application

*/
    
//prevents header already sent error
//ob_start();//
    
ob_start();
    
//prevents data errors
date_default_timezone_set('America/Los_Angeles');

//find the current pgae URL:

echo $_SERVER['PHP_SELF'];
die;

?> 
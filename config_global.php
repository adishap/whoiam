<?php 

	$dr = $_SERVER["DOCUMENT_ROOT"]; #output - /var/www/

	$fp = realpath(dirname(__FILE__));  #output -  /var/www/ck/ck-management

	$new  = explode($dr, $fp); # parting the path in two parts 
	
	#$PATH = "/" ; #for windows host

	$PATH = "/" .basename(__DIR__) . "/" ; #for localhost

	#$PATH = $new[1]. "/" ;#output - /ck/ck-management/ #for linux server

?>
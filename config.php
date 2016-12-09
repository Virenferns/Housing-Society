<?php  
       $dbhost = "localhost";  
       $dbuser = "root";  
       $dbpass = "";  
	   $dbname="housing";
       mysql_connect($dbhost, $dbuser,$dbpass) or die('unable to connect to host');  
       mysql_select_db($dbname) or die('unable to connect to database'); 
?>   
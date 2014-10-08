<html>
 <head>
  <title>История запросов</title>
     <center><br>История запросов<br></center>
 </head>
 <body>
<plaintext>
 <?php
   
	$f = fopen("history.txt", "r");

	// Читать построчно до конца файла
	while(!feof($f)) { 
	    echo fgets($f);
	}

	fclose($f);
     ?>




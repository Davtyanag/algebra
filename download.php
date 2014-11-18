<html>
 <head>
  <title>История запросов</title>
     <center><br>История запросов<br></center>
<center><form action="history.tex">
    <input type="submit" value="Скачать файл">
</form></center>
 </head>
 <body>

<?php
    $f = fopen("history.txt", "r");
    $t = fopen("history.tex", "w+");

 fwrite($t, "\documentclass[12pt]{article}"."\n");
 fwrite($t, "\usepackage[english,russian]{babel}"."\n");
 fwrite($t, "\usepackage{mathtext} "."\n");
 fwrite($t, "\usepackage{amsmath}"."\n");

 fwrite($t, "\begin{document}"."\n");
$i=1;
       while(!feof($f)) { 
$i=$i+1;
$str =fgets($f);
$str=str_replace("(","\left(",$str);
$str=str_replace(")","\\right)",$str);
if(!empty($str)){
     if($i%2==0){
fwrite($t, $str);

}else{
 fwrite($t, "$$");
$str=str_replace("\n","",$str);
	    fwrite($t,$str);
	    fwrite($t, "$$");
	    fwrite($t, "\n");
}
	   
}


	}

 fwrite($t,"\\end{document}\n");
	fclose($f);
	fclose($t);
    
?>
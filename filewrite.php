<?php
    $f = fopen("history.txt", "a");

	fwrite($f, $_POST['str']."\n");
	fclose($f);
    echo '<script>window.location.href = "index.html";</script>';
?>
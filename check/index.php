<?php

    $myFile = fopen("vanban.txt","r");

    while(!feof($myFile))
    {
        $line = fgets($myFile);
        $line = trim($line);
        echo $line;
    }


?>

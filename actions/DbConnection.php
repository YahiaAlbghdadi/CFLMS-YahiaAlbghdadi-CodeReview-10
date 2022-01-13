<?php

    $localhost = "127.0.0.1";
    $username = "root";
    $pw = "";
    $dbName = "cr10-yahiaalbghdadi-biglibrary";

    $link = new mysqli($localhost,$username,$pw,$dbName);

    if($link){
    }else{
        echo "connection Failed";
    }
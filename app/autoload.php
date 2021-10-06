<?php

spl_autoload_register(function ($className){
    $fileName = 'app/'.$className . '.php';
    if (file_exists($fileName)){
        include $fileName;
    }
});

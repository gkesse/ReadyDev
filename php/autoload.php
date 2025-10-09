<?php

declare(strict_types=1);

session_start();

function onAutoload($_classname)
{
    $classname =  $_classname . ".php";
    require $classname;
}

spl_autoload_register('onAutoload');

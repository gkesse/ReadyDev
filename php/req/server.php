<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"] . "/php/class/GInclude.php";
//===============================================
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);
//===============================================
use php\class\GServer;
//===============================================
$lServer = new GServer();
$lServer->run();
$lServer->sendResponse();
//===============================================

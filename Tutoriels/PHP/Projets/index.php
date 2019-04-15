<!-- ============================================ -->
<?php 
require "php/class/GAutoload.php";
GSetting::Instance()->load("data/config/config.txt"); 
GProcess::Instance()->run();
?>
<!-- ============================================ -->

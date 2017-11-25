<?php 
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    GSiteMap::Instance();
    $userinput = "some + summary if you want";
    echo '<br/><a href="mycgi?foo=', urlencode($userinput), '">Test</a>';
?>
<!-- ============================================ -->

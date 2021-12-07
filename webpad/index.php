<?php
//===============================================
require "./php/class/GAutoload.php";
//===============================================
GHeader::Instance()->show();
GPhone::Instance()->show();
GFooter::Instance()->show();
GError::Instance()->showError();
//===============================================
?>
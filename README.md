#====================================================================
# I. Add Menu
#====================================================================

1. Open file : /data/page/header.json
2. Add menu name : MENU_NAME
3. Add menu link : /MENU_LINK/

#====================================================================
# II. Edit Menu Title
#====================================================================

1. Open file : /MENU_LINK/index.php
2. Edit menu title : RDHeaderManager::Instance()->setTitle("MENU_TITLE");

#====================================================================
# III. Edit Menu Title
#====================================================================

1. Open file : /MENU_LINK/index.php
2. Edit menu title : RDHeaderManager::Instance()->setTitle("MENU_TITLE");

#====================================================================
# IV. Configure Page Content Path
#====================================================================

1. Open file : /MENU_LINK/index.php
2. Edit page content path : RDJsonManager::Instance()->getData("data/page/MENU_LINK.json"); 

#====================================================================
# V. Edit Page Part Content
#====================================================================

1. Open file : /data/page/MENU_LINK.json
2. Edit page part title :  PART_TITLE
3. Edit page part description :  PART_DESCRIPTION

#====================================================================
# Liens
#====================================================================

https://www.w3schools.com/cssref/pr_list-style-type.asp
http://www.commentcamarche.net/contents/489-caracteres-speciaux-html
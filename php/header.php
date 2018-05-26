<?php     
    GMetaData::Instance()->getData();

    $lTitle = GConfig::Instance()->getData("title"); 
    GUrl::Instance()->lastUrl();
    
    $lExiststMenu = GConfig::Instance()->existData("menu");
    if($lExiststMenu == true) {
        $lCurrentMenu = GConfig::Instance()->getData("menu"); 
    }
    
    $lExiststLink = GConfig::Instance()->existData("link");
    if($lExiststLink == true) {
        $lLink = GConfig::Instance()->getData("link"); 
    }
    
    $lExiststView = GConfig::Instance()->existData("view");
    if($lExiststView == true) {
        $lViewTag = GConfig::Instance()->getData("view"); 
        $lViewNum = GView::Instance()->getView($lViewTag);
    }
    
    $lExistMetaDesc = GConfig::Instance()->existData("meta_desc");
    $lMetaDesc = "";
    if($lExistMetaDesc == true) {
        $lMetaDesc = join(" ", GConfig::Instance()->getData("meta_desc")); 
        $lMetaDesc = mb_strimwidth($lMetaDesc, 0, 160, "...");
    }
    
    $lExistMetaRobots = GConfig::Instance()->existData("meta_robo");
    if($lExistMetaRobots == true) {
        $lMetaRobots = GConfig::Instance()->getData("meta_robo"); 
    }
    
    $lExistMetaCano = GConfig::Instance()->existData("meta_cano");
    if($lExistMetaCano == true) {
        $lMetaCano = GConfig::Instance()->getData("meta_cano"); 
        $lMetaCano = GGlobal::Instance()->getUrl($lMetaCano); 
    }
    $lCodePrettify = GConfig::Instance()->getData("code_prettify");
    $lHeaderData = GJson::Instance()->getData("data/json/header.json");
    $lSiteName = $lHeaderData["site"]["name"];    
?>
<!-- ============================================ -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- ============================================ -->
        <title><?php echo $lTitle; ?> | <?php echo $lSiteName; ?></title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" type="image/png" href="/img/readydev.png"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <!-- ============================================ -->
        <!-- Responsive Web Design -->
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no"/>
        <!-- ============================================ -->
        <!-- Google -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <?php if($lExistMetaDesc == true) { ?>
        <meta name="description" content="<?php echo $lMetaDesc; ?>"/>
        <?php } ?>
        <?php if($lExistMetaRobots == true) { ?>
        <meta name="robots" content="<?php echo $lMetaRobots; ?>"/>
        <?php } ?>
        <?php if($lExistMetaCano == true) { ?>
        <link rel="canonical" href="<?php echo $lMetaCano; ?>" />
        <?php } ?>
        <!-- ============================================ -->
        <!-- OpenGraph -->
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="/img/readydev-440x440.png"/>
        <meta property="og:image:secure_url" content="/img/readydev-440x440.png"/>
        <meta property="og:image:type" content="image/png"/>
        <meta property="og:image:width" content="440"/>
        <meta property="og:image:height" content="440"/>        
        <meta property="og:locale" content="fr_FR"/>
        <?php if($lExistMetaCano == true) { ?>
        <meta property="og:url" content="<?php echo $lMetaCano; ?>"/>
        <?php } ?>
        <meta property="og:title" content="<?php echo $lTitle; ?> | <?php echo $lSiteName; ?>"/>
        <?php if($lExistMetaDesc == true) { ?>
        <meta property="og:description" content="<?php echo $lMetaDesc; ?>"/>
        <?php } ?>
        <meta property="og:site_name" content="<?php echo $lSiteName; ?>"/>
        <!-- ============================================ -->
        <!-- Stylesheet -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allan"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo Narrow"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <!-- ============================================ -->
        <!-- Script -->
        <?php if($lCodePrettify) { ?>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=sunburst"></script>
        <?php } ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- ============================================ -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109595989-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-109595989-1');
        </script>
        <!-- ============================================ -->
        <link rel="stylesheet" href="/css/style.php"/>
        <!-- ============================================ -->
        <script src="/js/class/GConnection.js"></script>
        <script src="/js/connection.js"></script>
        <!-- ============================================ -->
    </head>
    <body>
        <!-- ============================================ -->
        <div class="HtmlPage">
            <!-- ============================================ -->
            <div class="Background Item1"></div>
            <div class="Background Item2"></div>
            <div class="Background Item3"></div>
            <!-- ============================================ -->
            <?php require $_SERVER["DOCUMENT_ROOT"]."/php/connection.php";  ?>
            <!-- ============================================ -->
            <div class="BodyPage Mrg Pdd">
                <div class="MainPage">
                    <header class="Header">
                        <!-- ============================================ -->
                        <ul class="Menu" id="HeaderMenu">
                            <li class="Item">
                                <a class="Title" href="/">
                                    <?php echo $lSiteName; ?>
                                </a>
                            </li>
                            <?php 
                            for($i = 0; $i < count($lHeaderData["menu"]); $i++) { 
                                $lMenu = $lHeaderData["menu"][$i];
                                $lActive = "";
                                if($lExiststMenu == true) {
                                    if($lMenu["name"] == $lCurrentMenu) {
                                        $lActive = " Active";
                                    }
                                }
                            ?>
                            <?php 
                                if($lMenu["name"] == "Admin") {
                                    if(!isset($_SESSION["login"])) continue;
                                    else if($_SESSION["login"]["group"] != "admin") continue;
                                }
                            ?>
                            <li class="Item">
                                <a class="Link<?php echo $lActive; ?>" href="<?php echo $lMenu["link"]; ?>">
                                    <?php echo $lMenu["name"]; ?>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(!isset($_SESSION["login"])) { ?>
                            <li class="Item"><span class="Link" onclick="openConnection(this);">Connexion</span> </li>
                            <?php } ?>
                            <?php if(isset($_SESSION["login"])) { ?>
                            <li class="Item"><span class="Link" onclick="openDisconnection(this);">Déconnexion</span> </li>
                            <?php } ?>
                            <li class="Bars" onclick="openHeaderMenu(this);"><i class="fa fa-bars"></i></li>
                        </ul>
                        <!-- ============================================ -->
                        <div class="pgCt10">
                            <div class="bgra">
                                <h1 class="bgra clra pgCt20"><?php echo $lTitle; ?></h1>
                                <!-- ============================================ -->
                                <?php if($lExiststView == true) { ?>
                                <div class="pgCt10">
                                    <div class="bgra dibm ftsc">
                                        <div class="bgra fltl pgCt05">
                                            <i class="ftsb fa fa-eye"></i>
                                            <span>Vues</span>
                                        </div>
                                        <div class="fltl pgCt05">
                                            <span><?php echo $lViewNum; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================ -->
                                <div class="dibm pdba">
                                    <?php $m_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
                                    <div class="fltl mgra">
                                        <a href="http://www.facebook.com/sharer.php?u=<?php echo $m_url; ?>" target="_blank">
                                            <i class="ftaa fa fa-facebook scna"></i>
                                        </a>
                                    </div>
                                    <div class="fltl">
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $m_url; ?>&title=<?php echo urlencode($lTitle.' | '.$lSiteName); ?>&summary=<?php echo urlencode($lMetaDesc); ?>" target="_blank">
                                            <i class="ftaa fa fa-linkedin scnb"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- ============================================ -->
                            </div>
                        </div>
                        <!-- ============================================ -->
                        <?php if($lExiststLink == true) { ?>
                        <div class="pdda">
                            <?php 
                            for($i = 0; $i < count($lLink); $i++) {
                                $m_di = $lLink[$i]; 
                                if($i != 0) { 
                            ?>
                            <i class="fa fa-chevron-right pddc dibm mgbb"></i>
                            <?php } ?>
                            <a class="ftfb bgra dibm pddc mgbb" href="<?php echo $m_di["link"]; ?>"><?php echo $m_di["name"]; ?></a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <!-- ============================================ -->
                    </header>
                    <!-- ============================================ -->
                        
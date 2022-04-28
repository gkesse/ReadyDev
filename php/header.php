<?php     
    GPostRedirectGet::Instance()->redirect();
    
    $lHeaderObj = new GHeader();
    $lHappyYear = $lHeaderObj->getHappyYear();
    
    GMetaData::Instance()->getData();

    $lTitle = GConfig::Instance()->getData("title"); 
    GUrl::Instance()->lastUrl();
    
    $lExiststMenu = GConfig::Instance()->existData("menu");
    if($lExiststMenu == true) {
        $lCurrentMenu = GConfig::Instance()->getData("menu"); 
    }
    
    $lExiststLink = GConfig::Instance()->existData("link");
    if($lExiststLink == true) {
        $lLinks = GConfig::Instance()->getData("link"); 
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
    
    $lExistMetaImg = GConfig::Instance()->existData("meta_img");
    $lMetaImg = "https://raw.githubusercontent.com/gkesse/ReadyDev/master/data/img/defaults/readydev_banner.png";
    if($lExistMetaImg == true) {
        $lMetaImg = GConfig::Instance()->getData("meta_img"); 
    }
        
    $lAce = GConfig::Instance()->getData("ace");
    $lMathJax = GConfig::Instance()->getData("mathjax");
    $lHeaderData = GJson::Instance()->getData("data/json/header.json");
    $lSiteName = $lHeaderData["site"]["name"];    
    $lSiteLogo = $lHeaderData["site"]["logo"];    

    /*if (isset($_SERVER['HTTP_USER_AGENT']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
        header('X-UA-Compatible: IE=edge,chrome=1');
    }*/
?>
<!-- ============================================ -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- ============================================ -->
        <title><?php echo $lTitle; ?> | <?php echo $lSiteName; ?></title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" type="image/png" href="/data/img/defaults/readydev.png"/>
        <!--meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/-->
        <!-- ============================================ -->
        <!-- Responsive Web Design -->
        <!--meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no"/!-->
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
        <!-- ============================================ -->
        <!-- Google -->
        <!--meta http-equiv="Content-Type" content="text/html; charset=utf-8"/-->
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
        <meta property="og:image" content="<?php echo $lMetaImg; ?>"/>
        <meta property="og:image:secure_url" content="<?php echo $lMetaImg; ?>"/>
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
        <link rel="stylesheet" href="/libs/google_fonts/Aclonica/css.css" media="none" onload="if(media!='all')media='all'"/>
        <link rel="stylesheet" href="/libs/google_fonts/Akronim/css.css" media="none" onload="if(media!='all')media='all'"/>
        <link rel="stylesheet" href="/libs/google_fonts/Allan/css.css" media="none" onload="if(media!='all')media='all'"/>
        <link rel="stylesheet" href="/libs/google_fonts/Archivo_Narrow/css.css" media="none" onload="if(media!='all')media='all'"/>
        <link rel="stylesheet" href="/libs/google_fonts/Anton/css.css" media="none" onload="if(media!='all')media='all'"/>
        <link rel="stylesheet" href="/libs/font_awesome/css/font-awesome.min.css" media="none" onload="if(media!='all')media='all'"/>
        <!-- ============================================ -->
        <!-- Script -->
        <!--script src="/libs/jquery/3.3.1/jquery.min.js" async></script-->
        <!-- ============================================ -->
        <?php if($lAce) { ?>
        <script src="/libs/ace/1.4.6/src-min/ace.js" async></script>
        <!--script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.min.js" async></script-->
        <?php } ?>
        <!-- ============================================ -->
        <?php if($lMathJax) { ?>
        <script src="/libs/mathjax/2.7.3/MathJax.js?config=TeX-MML-AM_CHTML"></script>
        <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
            tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
        });
        </script>
        <?php } ?>
        <!-- ============================================ -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!--script src="https://www.googletagmanager.com/gtag/js?id=UA-109595989-1" async></script-->
        <script src="/libs/google_tag_manager/1.0.0/gtag.js?id=UA-109595989-1" async></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-149825656-1');
        </script>
        <!-- ============================================ -->
        <script src='https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js' async></script>
        <!-- ============================================ -->
        <link rel="stylesheet" href="/css/style.php"/>
        <!-- ============================================ -->
    </head>
    <body>
        <!-- ============================================ -->
        <div class="HtmlPage">
            <!-- ============================================ -->
            <div class="Background Top"><div class="HappyDay"><?php echo $lHappyYear; ?></div></div>
            <div class="Background Middle"></div>
            <div class="Background Bottom"></div>
            <!-- ============================================ -->
            <?php require $_SERVER["DOCUMENT_ROOT"]."/php/connection.php";  ?>
            <!-- ============================================ -->
            <div class="BodyPage">
                <div class="MainPage">
                    <header class="Header">
                        <!-- ============================================ -->
                        <ul class="Menu" id="HeaderMenu">
                            <li class="Item">
                                <a class="Title" href="/">
                                    <img class="Img4" src="<?php echo $lSiteLogo; ?>" alt="<?php echo $lSiteLogo; ?>"/>
                                    <span class="Title11"><?php echo $lSiteName; ?></span>
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
                                if($lMenu["name"] == "Admin" || $lMenu["name"] == "Doc") {
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
                        <div class="MainBlock">
                            <div class="Content">
                                <h1 class="Title2"><?php echo $lTitle; ?></h1>
                                <!-- ============================================ -->
                                <?php if($lExiststView == true) { ?>
                                <div class="Body">
                                    <div class="Row">
                                        <a href="/readypad"><div class="ReadyPHP"><i class="fa fa-sign-in"></i> ReadyPad</div></a>
                                        <a href="http://readycgi.freeddns.org:8833"><div class="ReadyCGI"><i class="fa fa-sign-in"></i> ReadyCGI</div></a>
                                        <div class="Form">
                                            <div class="Label">
                                                <i class="Icon fa fa-eye"></i>
                                                <span>Vues</span>
                                            </div>
                                            <div class="Field">
                                                <span><?php echo $lViewNum; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Row22">
                                        <?php $lUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
                                        <a class="Col" href="http://www.facebook.com/sharer.php?u=<?php echo $lUrl; ?>" target="_blank">
                                            <i class="Link2 Facebook fa fa-facebook"></i>
                                        </a>
                                        <a class="Col" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $lUrl; ?>&title=<?php echo urlencode($lTitle.' | '.$lSiteName); ?>&summary=<?php echo urlencode($lMetaDesc); ?>" target="_blank">
                                            <i class="Link2 Twitter fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- ============================================ -->
                            </div>
                        </div>
                        <!-- ============================================ -->
                        <?php if($lExiststLink == true) { ?>
                        <div class="MainBlock0">
                            <div class="Content11">
                                <div class="Row22">
                                    <?php 
                                    for($i = 0; $i < count($lLinks); $i++) {
                                        $lLink = $lLinks[$i]; 
                                        if($i != 0) { 
                                    ?>
                                    <div class="Col4"><i class="fa fa-chevron-right"></i></div>
                                    <?php } ?>
                                    <?php echo $lHref = GManager::Instance()->getUrl($lLink["link"]); ?>
                                    <div class="Col4"><a class="Link8" href="<?php echo $lHref; ?>"><?php echo $lLink["name"]; ?></a></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- ============================================ -->
                    </header>
                    <!-- ============================================ -->
                        
<?php     
    GPostRedirectGet::Instance()->redirect();
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
        
    $lCodePrettify = GConfig::Instance()->getData("code_prettify");
    $lAce = GConfig::Instance()->getData("ace");
    $lMathJax = GConfig::Instance()->getData("mathjax");
    $lHeaderData = GJson::Instance()->getData("data/json/header.json");
    $lSiteName = $lHeaderData["site"]["name"];    
    $lSiteLogo = $lHeaderData["site"]["logo"];    
?>
<!-- ============================================ -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- ============================================ -->
        <title><?php echo $lTitle; ?> | <?php echo $lSiteName; ?></title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" type="image/png" href="/data/img/defaults/readydev.png"/>
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allan"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo Narrow"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <!-- ============================================ -->
        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- ============================================ -->
        <?php if($lAce) { ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js"></script>
        <?php } ?>
        <!-- ============================================ -->
        <?php if($lCodePrettify) { ?>
        <script src="/lib/prettify/loader/run_prettify.js?lang=css&amp;skin=sunburst"></script>
        <?php } ?>
        <!-- ============================================ -->
        <!--?php if($lMathJax) { ?-->
        <script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
        <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
            tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
        });
        </script>
        <!--?php } ?-->
        <!-- ============================================ -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109595989-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-109595989-1');
        </script>
        <script src="/js/class/GConfig.js"></script>
        <script src="/js/class/GHeader.js"></script>
        <script src="/js/class/GLoader.js"></script>
        <!-- ============================================ -->
        <script src="/js/header.js"></script>
        <script src="/js/loader.js"></script>
        <!-- ============================================ -->
        <link rel="stylesheet" href="/css/style.php"/>
        <!-- ============================================ -->
    </head>
    <body>
        <!-- ============================================ -->
        <div class="HtmlPage">
            <!-- ============================================ -->
            <div class="Background Top"></div>
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
                                    <img class="Img4" src="<?php echo $lSiteLogo; ?>"/>
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
                                if($lMenu["name"] == "Admin" || $lMenu["name"] == "Test") {
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
                                    <div class="Col4"><a class="Link8" href="<?php echo $lLink["link"]; ?>"><?php echo $lLink["name"]; ?></a></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- ============================================ -->
                    </header>
                    <!-- ============================================ -->
                        
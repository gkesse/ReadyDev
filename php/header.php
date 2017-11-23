<?php     
    $m_title = GConfig::Instance()->getData("title"); 
    
    $m_existMenu = GConfig::Instance()->existData("menu");
    if($m_existMenu == true) {
        $m_menu = GConfig::Instance()->getData("menu"); 
    }
    
    $m_existLink = GConfig::Instance()->existData("link");
    if($m_existLink == true) {
        $m_link = GConfig::Instance()->getData("link"); 
    }
    
    $m_existView = GConfig::Instance()->existData("view");
    if($m_existView == true) {
        $m_viewTag = GConfig::Instance()->getData("view"); 
        $m_viewNum = GView::Instance()->getView($m_viewTag);
    }
    
    $m_exiMetaDesc = GConfig::Instance()->existData("meta_desc");
    if($m_exiMetaDesc == true) {
        $m_metaDesc = GConfig::Instance()->getData("meta_desc"); 
    }
    
    $m_exiMetaRobots = GConfig::Instance()->existData("meta_desc");
    if($m_exiMetaRobots == true) {
        $m_metaRobots = GConfig::Instance()->getData("meta_robots"); 
    }
    
    $m_exiLinkCano = GConfig::Instance()->existData("link_cano");
    if($m_exiLinkCano == true) {
        $m_linkCano = GConfig::Instance()->getData("link_cano"); 
    }
    
    $m_headerData = GJson::Instance()->getData("data/json/header.json"); 
?>
<!-- ============================================ -->
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#">
    <head>
        <?php 
            $m_ds = $m_headerData["site"];
        ?>
        <!-- ============================================ -->
        <title><?php echo $m_ds["name"]; ?> - <?php echo $m_title; ?></title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <!-- ============================================ -->
        <?php if($m_exiMetaDesc == true) { ?>
            <meta name="description" content="<?php echo $m_metaDesc; ?>"/>
        <?php } ?>
        <?php if($m_exiMetaRobots == true) { ?>
            <meta name="robots" content="<?php echo $m_metaRobots; ?>"/>
        <?php } ?>
        <?php if($m_exiLinkCano == true) { ?>
            <link rel="canonical" href="<?php echo $m_linkCano; ?>" />
        <?php } ?>
        <link rel="icon" type="image/png" href="/img/logo_title.png" />
        <!-- ============================================ -->
        <meta property="og:title" content="Ingénieur Développeur Logiciel C/C++/Qt" />
        <meta property="og:type" content="article" />
        <meta property="og:description" content="Je suis Gerard KESSE,
        Ingénieur en Développement Informatique C/C++/Qt,
        Avec à la fois des compétences en Systèmes Embarqués et en Robotique." />
        <meta property="og:url" content="http://5.48.215.193:8855/Presentation/" />
        <meta property="og:image" content="http://5.48.215.193:8855/img/logo_title.png" />
        <!-- ============================================ -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Aclonica"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Akronim"/>
        <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/lib/easyshare/dist/jquery.kyco.easyshare.css">
        <!-- ============================================ -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109595989-1"></script>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=sunburst"></script>
        <script src="/lib/jquery/jquery.min.js"></script>
        <script src="/lib/easyshare/dist/jquery.kyco.easyshare.js"></script>
        <!-- ============================================ -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-109595989-1');
        </script>
        <!-- ============================================ -->
        <link rel="stylesheet" href="/css/style.css"/>
        <script src="/js/class/GSetting.js"></script>        
        <!-- ============================================ -->
    </head>
    <body>
        <header>
            <!-- ============================================ -->
            <ul class="hdmn">
                <li class="dibm">
                    <a class="hdmt" href="/">
                        <?php echo $m_ds["name"]; ?>
                    </a>
                </li>
                <?php 
                $m_ds = $m_headerData["menu"];
                for($i = 0; $i < count($m_ds); $i++) { 
                $m_di = $m_ds[$i];
                $m_active = "";
                if($m_existMenu == true) {
                if($m_di["name"] == $m_menu) {
                $m_active = "active";
                }
                }
                ?>
                <li class="hdml">
                <a class="hdmi <?php echo $m_active; ?>" 
                href="<?php echo $m_di["link"]; ?>">
                <?php echo $m_di["name"]; ?>
                </a>
                </li>
                <?php } ?>
                <li class="hdmb"><i class="fa fa-bars"></i></li>
                </ul>
                <!-- ============================================ -->
                <div class="pgCt10">
                <div class="bgra">
                <h1 class="bgra clra pgCt20"><?php echo $m_title; ?></h1>
                <!-- ============================================ -->
                <?php if($m_existView == true) { ?>
                <div class="pgCt10">
                <div class="bgra dibm ftsc">
                <div class="bgra fltl pgCt05">
                <i class="ftsb fa fa-eye"></i>
                <span>Vues</span>
                </div>
                <div class="fltl pgCt05">
                <span><?php echo $m_viewNum; ?></span>
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
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $m_url; ?>" target="_blank">
                <i class="ftaa fa fa-linkedin scnb"></i>
                </a>
                </div>
                </div>
                <?php } ?>
                <!-- ============================================ -->
                </div>
                </div>
                <!-- ============================================ -->
                <?php if($m_existLink == true) { ?>
                <div class="pdda">
                <?php 
                for($i = 0; $i < count($m_link); $i++) {
                $m_di = $m_link[$i]; 
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
                                
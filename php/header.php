<?php     
    GMetaData::Instance()->getData();
    
    $m_title = GConfig::Instance()->getData("title"); 
    
    $m_existstMenu = GConfig::Instance()->existData("menu");
    if($m_existstMenu == true) {
        $m_menu = GConfig::Instance()->getData("menu"); 
    }
    
    $m_existstLink = GConfig::Instance()->existData("link");
    if($m_existstLink == true) {
        $m_link = GConfig::Instance()->getData("link"); 
    }
    
    $m_existstView = GConfig::Instance()->existData("view");
    if($m_existstView == true) {
        $m_viewTag = GConfig::Instance()->getData("view"); 
        $m_viewNum = GView::Instance()->getView($m_viewTag);
    }
    
    $m_existMetaDesc = GConfig::Instance()->existData("meta_desc");
    $m_metaDesc = "";
    if($m_existMetaDesc == true) {
        $m_metaDesc = join(" ", GConfig::Instance()->getData("meta_desc")); 
        $m_metaDesc = mb_strimwidth($m_metaDesc, 0, 160, "...");
    }
    
    $m_existMetaRobots = GConfig::Instance()->existData("meta_robo");
    if($m_existMetaRobots == true) {
        $m_metaRobots = GConfig::Instance()->getData("meta_robo"); 
    }
    
    $m_existMetaCano = GConfig::Instance()->existData("meta_cano");
    if($m_existMetaCano == true) {
        $m_metaCano = GConfig::Instance()->getData("meta_cano"); 
        $m_metaCano = GGlobal::Instance()->getUrl($m_metaCano); 
    }
    
    $m_headerData = GJson::Instance()->getData("data/json/header.json"); 
?>
<!-- ============================================ -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $m_ds = $m_headerData["site"];
            $m_siteName = $m_ds["name"];
        ?>
        <!-- ============================================ -->
        <title><?php echo $m_title; ?> | <?php echo $m_ds["name"]; ?></title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" type="image/png" href="/img/readydev.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- ============================================ -->
        <!-- Responsive Web Design -->
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
        <!-- ============================================ -->
        <!-- Google -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php if($m_existMetaDesc == true) { ?>
            <meta name="description" content="<?php echo $m_metaDesc; ?>"/>
        <?php } ?>
        <?php if($m_existMetaRobots == true) { ?>
            <meta name="robots" content="<?php echo $m_metaRobots; ?>"/>
        <?php } ?>
        <?php if($m_existMetaCano == true) { ?>
            <link rel="canonical" href="<?php echo $m_metaCano; ?>" />
        <?php } ?>
        <!-- ============================================ -->
        <!-- OpenGraph -->
        <meta property="og:type" content="website" />
        <meta property="og:image" content='/img/readydev-440x440.png'>
        <meta property="og:image:secure_url" content="/img/readydev-440x440.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="440" />
        <meta property="og:image:height" content="440" />        <meta property="og:locale" content="fr_FR" />
        <?php if($m_existMetaCano == true) { ?>
            <meta property="og:url" content="<?php echo $m_metaCano; ?>"/>
        <?php } ?>
        <meta property="og:title" content="<?php echo $m_title; ?> | <?php echo $m_ds["name"]; ?>"/>
        <?php if($m_existMetaDesc == true) { ?>
            <meta property="og:description" content="<?php echo $m_metaDesc; ?>"/>
        <?php } ?>
        <meta property="og:site_name" content="<?php echo $m_ds["name"]; ?>"/>
        <!-- ============================================ -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Aclonica"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Akronim"/>
        <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/lib/easyshare/dist/jquery.kyco.easyshare.css">
        <!-- ============================================ -->
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=sunburst"></script>
        <script src="/lib/jquery/jquery.min.js"></script>
        <script src="/lib/easyshare/dist/jquery.kyco.easyshare.js"></script>
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
                        if($m_existstMenu == true) {
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
                    <?php if($m_existstView == true) { ?>
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
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $m_url; ?>&title=<?php echo urlencode($m_title." | ".$m_siteName); ?>&summary=<?php echo urlencode($m_metaDesc); ?>" target="_blank">
                                    <i class="ftaa fa fa-linkedin scnb"></i>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- ============================================ -->
                </div>
            </div>
            <!-- ============================================ -->
            <?php if($m_existstLink == true) { ?>
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
        
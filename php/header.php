<!-- ============================================ -->
<?php     
    $m_title = GHeader::Instance()->getTitle(); 
    $m_menu = GHeader::Instance()->getMenu(); 
    $m_view = GHeader::Instance()->getView(); 
    $m_link = GHeader::Instance()->getLink(); 
    
    $m_views = GView::Instance()->getView($m_view);
    
    $m_header = GJson::Instance()->getData("data/json/header.json"); 
?>
<!-- ============================================ -->
<!DOCTYPE html>
<html lang="fr" xmlns:og="http://ogp.me/ns#">
    <head>
        <?php 
            $m_ds = $m_header["site"];
        ?>
        <title><?php echo $m_ds["name"]; ?> - <?php echo $m_title; ?></title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <meta property="og:title" content="ReadyDev Développement Logiciel" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://5.48.215.193:8855/" />
        <meta property="og:image" content="https://github.com/gkesse/ReadyDev/blob/master/img/logo_title.png" />

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Aclonica"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Akronim"/>
        <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/lib/easyshare/dist/jquery.kyco.easyshare.css">
        
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=sunburst"></script>
        <script src="/lib/jquery/jquery.min.js"></script>
        <script src="/lib/easyshare/dist/jquery.kyco.easyshare.js"></script>
        
        <link rel="stylesheet" href="/css/style.css"/>
        <script src="/js/class/GSetting.js"></script>        
    </head>
    <body>
        <header>
            <!-- ============================================ -->
            <ul class="menu">
                <li><a class="logo" href="/"><?php echo $m_ds["name"]; ?></a></li>
                <?php 
                    $m_ds = $m_header["menu"];
                    for($i = 0; $i < count($m_ds); $i++) { 
                        $m_di = $m_ds[$i];
                        $m_active = "";
                        if($m_di["name"] == $m_menu) {
                            $m_active = "active";
                        }
                    ?>
                    <li class="item"><a class="<?php echo $m_active; ?>" href="<?php echo $m_di["link"]; ?>"><?php echo $m_di["name"]; ?></a></li>
                <?php } ?>
                <li><a class="icon" href="javascript:void(0);"><i class="fa fa-bars"></i></a></li>
            </ul>
            <!-- ============================================ -->
            <div class="pgCt20">
                <div class="bga">
                    <h1 class="bga clra pgCt20"><?php echo $m_title; ?></h1>
                    <!-- ============================================ -->
                    <div class="pgCt10">
                        <div class="bga dibm fsc">
                            <div class="bga fl pgCt05">
                                <i class="fsb fa fa-eye"></i>
                                <span>Vues</span>
                            </div>
                            <div class="fl pgCt05">
                                <span><?php echo $m_views; ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================ -->
                    <div class="dibm pba">
                        <?php $m_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
                        <div class="fl mra">
                            <a href="http://www.facebook.com/sharer.php?u=<?php echo $m_url; ?>" target="_blank">
                                <i class="faa fa fa-facebook sna"></i>
                            </a>
                        </div>
                        <div class="fl">
                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $m_url; ?>" target="_blank">
                                <i class="faa fa fa-linkedin snb"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ============================================ -->
                </div>
            </div>
            <!-- ============================================ -->
            <div class="ffb pgCt00">
                <?php 
                    for($i = 0; $i < count($m_link); $i++) {
                        $m_di = $m_link[$i]; 
                        if($i != 0) { 
                        ?>
                        <i class="fa fa-chevron-right pdc dibm mbb"></i>
                    <?php } ?>
                    <a class="bga dibm pdc mbb" href="<?php echo $m_di["link"]; ?>"><?php echo $m_di["name"]; ?></a>
                    <?php } ?>
                </div>
                <!-- ============================================ -->
            </header>
            <!-- ============================================ -->
                
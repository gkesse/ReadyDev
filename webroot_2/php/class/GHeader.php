<?php   
//===============================================
class GHeader extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        //===============================================
        // html
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $lApp->lang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $lApp->title);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $lApp->logo_web);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        //===============================================
        // responsive web design
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        //===============================================
        // google
        /*
        echo sprintf("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>\n");
        echo sprintf("<meta name='description' content='%s'/>\n", $lApp->google_desc);
        echo sprintf("<meta name='robots' content='%s'/>\n", $lApp->google_robot);
        echo sprintf("<link rel='canonical' href='%s'/>\n", $lApp->google_canonical);
        */
        //===============================================
        // opengraph
        /*
        echo sprintf("<meta property='og:type' content='website'/>\n");
        echo sprintf("<meta property='og:image' content='<?php echo $lMetaImg; ?>'/>\n");
        echo sprintf("<meta property='og:image:secure_url' content='<?php echo $lMetaImg; ?>'/>\n");
        echo sprintf("<meta property='og:image:type' content='image/png'/>\n");
        echo sprintf("<meta property='og:image:width' content='440'/>\n");
        echo sprintf("<meta property='og:image:height' content='440'/>\n");        
        echo sprintf("<meta property='og:locale' content='fr_FR'/>\n");
        echo sprintf("<meta property='og:url' content='<?php echo $lMetaCano; ?>'/>\n");
        echo sprintf("<meta property='og:title' content='<?php echo $lTitle; ?> | <?php echo $lSiteName; ?>'/>\n");
        echo sprintf("<meta property='og:description' content='<?php echo $lMetaDesc; ?>'/>\n");
        echo sprintf("<meta property='og:site_name' content='<?php echo $lSiteName; ?>'/>\n");
        */
        //===============================================
        // font_awesome
        echo sprintf("<link rel='stylesheet' type='text/css' href='/libs/font_awesome/4.7.0/css/font-awesome.min.css'/>\n");
        //===============================================
        // google_fonts
        GManager::Instance()->loadFont();
        //===============================================
        // script
        echo sprintf("<script type='text/javascript' src='/webroot/js/class/GProcess.js'></script>\n");
        echo sprintf("<script type='text/javascript' src='/webroot/js/request/request.js'></script>\n");
        //===============================================
        // style
        echo sprintf("<link rel='stylesheet' type='text/css' href='/webroot/css/style.php'/>\n");
        //===============================================
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
    }
    //===============================================
}
//===============================================
?>
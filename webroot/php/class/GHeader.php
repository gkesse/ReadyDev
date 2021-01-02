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
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $lApp->lang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $lApp->title);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $lApp->app_logo);
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
        //===============================================
        // font
        //echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/1.0.0/Allan/css.css'/>\n");
        */
        //===============================================
        // script
        //echo sprintf("<script type='text/javascript' src='/libs/jquery/3.3.1/jquery.min.js'></script>\n");
        //===============================================
        // style
        echo sprintf("<link rel='stylesheet' href='%s'/>\n", $lApp->style_path);
        //
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
    }
    //===============================================
}
//===============================================
?>
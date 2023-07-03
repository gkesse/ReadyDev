<?php   
//===============================================
namespace php\class;
//===============================================
class GProcess extends GObject {
    //===============================================
    private $m_menu = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_menu = new GMenu();
    }
    //===============================================
    public function init() {
        $this->redirectHomePage();
        $this->m_menu->init();
        $this->toHeader();
    }
    //===============================================
    public function clean() {
        
    }
    //===============================================
    public function toBanner() {
        return "https://raw.githubusercontent.com/gkesse/ReadyDev/2.0/data/img/defaults/b_readydev.png";
    }
    //===============================================
    public function toStartYear() {
        return "2017";
    }
    //===============================================
    public function toEndYear() {
        return date("Y");
    }
    //===============================================
    public function toVision() {
        $lData = "";
        $lData .= sprintf("Plateforme de Développement Continu<br/>\n");
        $lData .= sprintf("Produit par <b>Gérard KESSE</b><br/>\n");
        $lData .= sprintf("Polytech'Montpellier<br/>\n");
        return $lData;
    }
    //===============================================
    public function toTitle() {
        $lCurrentMenu = $this->m_menu->toCurrentMenu();
        $lTitle = sprintf("%s | %s", $lCurrentMenu->getTitle(), $this->toSiteName());
        return $lTitle;
    }
    //===============================================
    public function toStyleCss() {
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Aclonica/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Akronim/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Allan/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Archivo_Narrow/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Anton/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Aclonica/css.css'/>\n");
        //
        echo sprintf("<link rel='stylesheet' href='/libs/font_awesome/v4.7.0/css/font-awesome.min.css'/>\n");
        //
        echo sprintf("<link rel='stylesheet' href='/css/style.css'/>\n");
    }
    //===============================================
    public function toHeader() {
        echo sprintf("<!DOCTYPE html>\n");
        // lang
        echo sprintf("<html lang='fr'>\n");
        //
        echo sprintf("<head>\n");
        // title
        echo sprintf("<title>%s</title>\n", $this->toTitle());
        // charset
        echo sprintf("<meta charset='UTF-8'/>\n");
        // logo
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $this->toLogo());
        //
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        // google
        echo sprintf("<meta name='description' content=\"%s\"/>\n", $this->toDescription());
        // facebook
        echo sprintf("<meta property='og:type' content=\"website\"/>\n");
        echo sprintf("<meta property='og:image' content=\"%s\"/>\n", $this->toBanner());
        echo sprintf("<meta property='og:image:secure_url' content=\"%s\"/>\n", $this->toBanner());
        echo sprintf("<meta property='og:image:type' content=\"image/png\"/>\n");
        echo sprintf("<meta property='og:image:width' content=\"440\"/>\n");
        echo sprintf("<meta property='og:image:height' content=\"440\"/>\n");
        echo sprintf("<meta property='og:locale' content=\"fr_FR\"/>\n");
        echo sprintf("<meta property='og:url' content=\"%s\"/>\n", $this->getUrl());
        echo sprintf("<meta property='og:title' content=\"%s\"/>\n", $this->toTitle());
        echo sprintf("<meta property='og:site_name' content=\"%s\"/>\n", $this->toSiteName());
        echo sprintf("<meta property='og:description' content=\"%s\"/>\n", $this->toDescription());
        // css
        $this->toStyleCss();
        //
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        // env_input
        echo sprintf("<input type='hidden' id='gPageId' value='%s'/>\n", $this->getPageId());
        echo sprintf("<input type='hidden' id='gLoginOk' value='%s'/>\n", $this->isLogin());
        // env_div
        echo sprintf("<div id='gData' hidden='true'></div>\n");
        //
        echo sprintf("<div class='Html1'>\n");
        // background
        echo sprintf("<div class='Background1'></div>\n");
        echo sprintf("<div class='Background2'></div>\n");
        echo sprintf("<div class='Background3'></div>\n");
        // modal
        $this->runLog();
        $this->runTable();
        $this->runLoader();
        $this->runForms();
        //
        echo sprintf("<div class='Html2 HtmlPage'>\n");
    }
    //===============================================
    public function toScriptJs() {
        echo sprintf("<script src='/libs/ace/v1.21.0/src-min-noconflict/ace.js'></script>\n");
        echo sprintf("<script src='/libs/mathjax/v3.2.2/es5/tex-mml-chtml.js' async></script>\n");
        //
        echo sprintf("<script src='/js/functions.js'></script>\n");
        //
        echo sprintf("<script src='/js/class/GLog.js'></script>\n");
        echo sprintf("<script src='/js/class/GXml.js'></script>\n");
        echo sprintf("<script src='/js/class/GCode.js'></script>\n");
        echo sprintf("<script src='/js/class/GObject.js'></script>\n");
        echo sprintf("<script src='/js/class/GLoader.js'></script>\n");
        echo sprintf("<script src='/js/class/GAjax.js'></script>\n");
        echo sprintf("<script src='/js/class/GParallax.js'></script>\n");
        echo sprintf("<script src='/js/class/GManager.js'></script>\n");
        echo sprintf("<script src='/js/class/GMenu.js'></script>\n");
        echo sprintf("<script src='/js/class/GImage.js'></script>\n");
        echo sprintf("<script src='/js/class/GFile.js'></script>\n");
        echo sprintf("<script src='/js/class/GTable.js'></script>\n");
        echo sprintf("<script src='/js/class/GFontAwesome.js'></script>\n");
        echo sprintf("<script src='/js/class/GForm.js'></script>\n");
        echo sprintf("<script src='/js/class/GApp.js'></script>\n");
        echo sprintf("<script src='/js/class/GPage.js'></script>\n");
        echo sprintf("<script src='/js/class/GEditor.js'></script>\n");
        echo sprintf("<script src='/js/class/GTest.js'></script>\n");
        echo sprintf("<script src='/js/class/GServer.js'></script>\n");
        //
        echo sprintf("<script src='/js/script.js'></script>\n");
    }
    //===============================================
    public function runFooter() {
        echo sprintf("</div>\n");
        //
        $this->toCopyright();
        //
        echo sprintf("</div>\n");
        //
        $this->toScriptJs();
        $this->m_logs->showLogs();
        $this->runTestJs();
        //
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
    public function runTestJs() {
        if(!$this->m_logs->size()) {
            if($this->m_dataLogs->size()) {
                $this->m_dataLogs->loadFromMap(1);
                echo $this->m_dataLogs->getMsg();
            }
        }
    }
    //===============================================
    public function toCopyright() {
        echo sprintf("<footer class='Footer1'>\n");
        // title
        echo sprintf("<div>Réseaux Sociaux - Réjoignez-nous</div>\n");
        //
        echo sprintf("<div>\n");
        // facebook
        echo sprintf("<a href='#'>\n");
        echo sprintf("<i class='Footer2 fa fa-facebook'></i>\n");
        echo sprintf("</a>\n");
        // skype
        echo sprintf("<a href='#'>\n");
        echo sprintf("<i class='Footer2 fa fa-skype'></i>\n");
        echo sprintf("</a>\n");
        // linkedin
        echo sprintf("<a href='https://www.linkedin.com/in/tia-gerard-kesse/' target='_blank'>\n");
        echo sprintf("<i class='Footer2 fa fa-linkedin'></i>\n");
        echo sprintf("</a>\n");
        // github
        echo sprintf("<a href='https://github.com/gkesse/' target='_blank'>\n");
        echo sprintf("<i class='Footer2 fa fa-github'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("</div>\n");
        
        echo sprintf("<div>\n");
        echo sprintf("<i class='fa fa-copyright'></i>\n");
        echo sprintf("<span>%s - %s | %s</span>\n", $this->toStartYear(), $this->toEndYear(), $this->toSiteName());
        echo sprintf("<div>%s</div>\n", $this->toVision());
        echo sprintf("</div>\n");
        
        echo sprintf("</footer>\n");
    }
    //===============================================
    public function runLog() {
        echo sprintf("<div class='Log1' id='LogModal'>\n");
        echo sprintf("<div class='Log2' id='LogForm'>\n");
        // close
        echo sprintf("<div class='Log3' onclick='call_server(\"logs\", \"close_logs\", this)'>\n");
        echo sprintf("<i class='fa fa-times'></i></div>\n");
        // title
        echo sprintf("<div class='Log4' id='LogTitle'>Logs</div>\n");
        //
        echo sprintf("<div class='Log5'>\n");
        // intro
        echo sprintf("<div class='Log6' id='LogIntro'>Consultez les logs.</div>\n");
        //
        echo sprintf("<div class='Log7'>\n");
        // body
        echo sprintf("<div id='LogBody'></div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("<div class='Log8'>\n");
        // ok
        echo sprintf("<div class='Log9' onclick='call_server(\"logs\", \"close_logs\", this)'>OK</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runForms() {
        echo sprintf("<div class='Forms1' id='FormModal'>\n");
        echo sprintf("<div class='Forms2' id='FormForm'>\n");
        // close
        echo sprintf("<div class='Forms3' onclick='call_server(\"form\", \"close_form\", this)'>\n");
        echo sprintf("<i class='fa fa-times'></i></div>\n");
        // title
        echo sprintf("<div class='Forms4' id='FormTitle'>Formulaire</div>\n");
        //
        echo sprintf("<div class='Forms5'>\n");
        // intro
        echo sprintf("<div class='Forms6' id='FormIntro'>Saisissez vos données.</div>\n");
        //
        echo sprintf("<div class='Forms7'>\n");
        //
        echo sprintf("<input id='FormModule' type='hidden'/>\n");
        echo sprintf("<input id='FormMethod' type='hidden'/>\n");
        echo sprintf("<input id='FormModuleLine' type='hidden'/>\n");
        echo sprintf("<input id='FormMethodLine' type='hidden'/>\n");
        echo sprintf("<input id='FormModuleEdit' type='hidden'/>\n");
        echo sprintf("<input id='FormMethodEdit' type='hidden'/>\n");
        echo sprintf("<input id='FormModuleInput' type='hidden'/>\n");
        echo sprintf("<input id='FormMethodInput' type='hidden'/>\n");
        // body
        echo sprintf("<div id='FormContent'></div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("<div class='Forms8'>\n");
        // ok
        echo sprintf("<div class='Forms9' onclick='call_server(\"form\", \"ok_form\", this)'>Enregistrer</div>\n");
        // cancel
        echo sprintf("<div class='Forms9' onclick='call_server(\"form\", \"close_form\", this)'>Annuler</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runTable() {
        echo sprintf("<div class='Table1' id='TableModal'>\n");
        echo sprintf("<div class='Table2' id='TableForm'>\n");
        // close
        echo sprintf("<div class='Table3' onclick='call_server(\"table\", \"close_table\", this)'>\n");
        echo sprintf("<i class='fa fa-times'></i></div>\n");
        // title
        echo sprintf("<div class='Table4' id='TableTitle'>Liste des données</div>\n");
        //
        echo sprintf("<div class='Table5'>\n");
        // intro
        echo sprintf("<div class='Table6' id='TableIntro'>Consultez la liste des données.</div>\n");
        //
        echo sprintf("<div class='Table7'>\n");
        // env
        echo sprintf("<input type='hidden' id='TableCurrentData'/>\n");
        echo sprintf("<input type='hidden' id='TableHeaderVisible'/>\n");
        echo sprintf("<input type='hidden' id='TableSelectModule'/>\n");
        echo sprintf("<input type='hidden' id='TableSelectMethod'/>\n");
        echo sprintf("<input type='hidden' id='TableSelectData'/>\n");
        echo sprintf("<input type='hidden' id='TableNextModule'/>\n");
        echo sprintf("<input type='hidden' id='TableNextMethod'/>\n");
        echo sprintf("<input type='hidden' id='TableNextData'/>\n");
        echo sprintf("<input type='hidden' id='TablePage'/>\n");
        // body
        echo sprintf("<table id='TableId'></table>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("<div class='Table8'>\n");
        // ok
        echo sprintf("<div class='Table9' onclick='call_server(\"table\", \"close_table\", this)'>OK</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runLoader() {
        echo sprintf("<div class='Loader1' id='LoaderModal'>\n");
        echo sprintf("<div class='Loader2' id='LoaderBody'>\n");
        echo sprintf("<div class='Loader3'>\n");
        echo sprintf("<div class='Loader4'>\n");
        //
        echo sprintf("<div class='Loader5'></div>\n");
        echo sprintf("<span class='Loader6'>Loading...</span>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function run($_module, $_method) {
        if($this->isTestEnv()) {
            $this->runTest($_module, $_method);
        }
        else {
            $this->runProd($_module, $_method);
        }
    }
    //===============================================
    public function runTest($_module, $_method) {
        $lObj = new GTest();
        $lObj->run($_module, $_method);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_dataLogs->addLogs($lObj->getDataLogs());
    }
    //===============================================
    public function runProd($_module, $_method) {
        $lObj = new GReady();
        $lObj->run();
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
 }
//===============================================
?>

<?php
// ===============================================
class GPad extends GObject {
    // ===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    // ===============================================
    public function createDom() {
        $this->dom = new GXml();
        $this->dom->createDocFile("pad.xml");
    }
    // ===============================================
    public function run() {
        $this->createHeader();
        $this->createConnection();
        $this->createAccount();
        $this->createDisconnection();
        $this->updateDatabase();
        $this->createError();
    }
    // ===============================================
    public function createHeader() {
        $lUser = new GUser();
        $lPage = new GPage();
        
        $lCount = $this->countItem("header");
        
        $lLoginOn = $lUser->isLogin();
        $lAdminOn = $lUser->isAdmin();
        
        echo sprintf("<div class='box_bottom'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getItem3("header", "type", $i);
            $lCategory = $this->getItem3("header", "category", $i);
            $lName = $this->getItem3("header", "name", $i);
            $lPicto = $this->getItem3("header", "picto", $i);
            $lPictoColor = $this->getItem3("header", "picto_color", $i);
            $lAction = $this->getItem3("header", "action", $i);
            $lLink = $this->getItem3("header", "link", $i);
            $lALink = $this->getItem3("header", "link", $i);
            $lFontColor = $this->getItem3("header", "font_color", $i);
            
            $lLink = $lPage->getLink($lLink);            
            
            if($lCategory == "login") {
                if($lLoginOn) continue;
            }
            else if($lCategory == "logout") {
                if(!$lLoginOn) continue;
            }
            else if($lCategory == "admin") {
                if(!$lAdminOn) continue;
            }
                       
            if($lType == "button") {
                echo sprintf("<button>%s</button>\n", $lName);
            }
            else if($lType == "button/icon/action") {
                echo sprintf("<button class='button_float' onclick='%s'><i class='icon_float fa fa-%s' style='color:%s;'></i> %s</button>\n", $lAction, $lPicto, $lPictoColor, $lName);
            }
            else if($lType == "button/icon/link") {
                echo sprintf("<a href='%s'><button class='button_float'><i class='icon_float fa fa-%s' style='color:%s;'></i> %s</button></a>\n", $lLink, $lPicto, $lPictoColor, $lName);
            }
            else if($lType == "button/icon/link/color") {
                echo sprintf("<a href='%s'><button class='button_float' style='color:%s;'><i class='icon_float fa fa-%s'></i> %s</button></a>\n", $lLink, $lFontColor, $lPicto, $lName);
            }
            else if($lType == "button/icon/alink/color") {
                echo sprintf("<a href='%s'><button class='button_float' style='color:%s;'><i class='icon_float fa fa-%s'></i> %s</button></a>\n", $lALink, $lFontColor, $lPicto, $lName);
            }
            else if($lType == "button/icon/post") {
                echo sprintf("<form class='form_button' action='%s' method='post'>", $lLink);
                echo sprintf("<button class='button_form' type='submit' name='submit' value='submit'>
                <i class='icon_float fa fa-%s' style='color:%s;'></i> %s</button>\n", $lPicto, $lPictoColor, $lName);
                echo sprintf("</form>");
            }
        }
        
        echo sprintf("</div>\n");       
    }
    // ===============================================
    public function createConnection() {
        $lPage = new GPage();
        $lUser = new GUser();
        $lPost = new GPost();
        
        if(!$lPage->isPage("user/login")) return;
        $lLoginOn = $lUser->isLogin();
        if($lLoginOn) return;
        
        $lCount = $this->countItem("connection");
        $lAction = $this->getItem("connection", "action");
        $lTitle = $this->getItem("connection", "title");
        
        $lActionLink = $lPage->getLink($lAction);
        $lHomeLink = $lPage->getLink("home");
        
        $lPostOn = $lPost->hasPost();
        $lLoginOn = $lUser->hasLogin();
        
        echo sprintf("<div class='box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' href='%s'><i class='button_close_fa fa fa-times'></i></a>\n", $lHomeLink);
        echo sprintf("<div class='title_text'>%s</div>\n", $lTitle);
        echo sprintf("<hr class='title_hr_margin'>\n");
        echo sprintf("<form action='%s' method='post'>\n", $lActionLink);
        
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getItem3("connection", "type", $i);
            $lCategory = $this->getItem3("connection", "category", $i);
            $lLabel = $this->getItem3("connection", "label", $i);
            $lName = $this->getItem3("connection", "name", $i);
            $lText = $this->getItem3("connection", "text", $i);
            $lMinLength = $this->getItem3("connection", "min_length", $i);
            $lMaxLength = $this->getItem3("connection", "max_length", $i);
            $lKey = $this->getItem3("connection", "key", $i);
            $lHolder = $this->getItem3("connection", "holder", $i);
            $lLink = $this->getItem3("connection", "link", $i);
            $lPicto = $this->getItem3("connection", "picto", $i);
            $lPictoColor = $this->getItem3("connection", "picto_color", $i);
            $lFontColor = $this->getItem3("connection", "font_color", $i);
            
            $lHolder = htmlentities($lHolder, ENT_QUOTES | ENT_HTML5);
            
            $lValue = "";
            
            if($lCategory == "error") {
                if(!$lPostOn) continue;
                if($lLoginOn) {
                    $lUser->setLogin();
                    continue;
                }
                if($lUser->hasErrors()) $lText = $lUser->getErrors();
            }
            
            if($lType == "lineedit"){
                if($lPostOn) {$lValue = $lPost->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='text' id='%s' name='%s' placeholder='%s' value='%s' minlength='%s' maxlength='%s' onfocus='this.removeAttribute(\"readonly\");' readonly required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMinLength, $lMaxLength);
            }
            else if($lType == "lineedit/email"){
                if($lPostOn) {$lValue = $lPost->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='email' id='%s' name='%s' placeholder='%s' value='%s' minlength='%s' maxlength='%s' onfocus='this.removeAttribute(\"readonly\");' readonly required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMinLength, $lMaxLength);
            }
            if($lType == "lineedit/password"){
                if($lPostOn) {$lValue = $lPost->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='password' id='%s' name='%s' placeholder='%s' value='%s' minlength='%s' maxlength='%s' required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMinLength, $lMaxLength);
            }
            else if($lType == "button"){
                echo sprintf("<div class='row_right'>
                <button class='button_float' type='submit' name='submit' value='%s'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i> %s</button>
                </div>\n", $lKey, $lPicto, $lPictoColor, $lName);
            }
            else if($lType == "text"){
                echo sprintf("<div class='row_center'>%s</div>\n", $lText);
            }
            else if($lType == "text/color"){
                echo sprintf("<div class='row_center' style='color: %s;'>%s</div>\n", $lFontColor, $lText);
            }
            else if($lType == "text/link"){
                $lLink = $lPage->getLink($lLink);
                $lText = str_replace("{link}", $lLink, $lText);
                echo sprintf("<div class='row_center'>%s</div>\n", $lText);
            }
        }
        
        echo sprintf("</form>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    // ===============================================
    public function createAccount() {
        $lPage = new GPage();
        $lPost = new GPost();
        $lUser = new GUser();
        
        if(!$lPage->isPage("user/account/create")) return;
        $lLoginOn = $lUser->isLogin();
        if($lLoginOn) return;
        
        $lCount = $this->countItem("account");
        $lAction = $this->getItem("account", "action");
        $lTitle = $this->getItem("account", "title");
        
        $lActionLink = $lPage->getLink($lAction);
        $lHomeLink = $lPage->getLink("home");

        $lPostOn = $lPost->hasPost();
        $lRegisterOn = $lUser->hasRegister();
        if($lRegisterOn) {
            $lUser->setLogin();
        }
        
        echo sprintf("<div class='box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' href='%s'><i class='button_close_fa fa fa-times'></i></a>\n", $lHomeLink);
        echo sprintf("<div class='title_text'>%s</div>\n", $lTitle);
        echo sprintf("<hr class='title_hr_margin'>\n");
        echo sprintf("<form action='%s' method='post'>\n", $lActionLink);
                
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getItem3("account", "type", $i);
            $lCategory = $this->getItem3("account", "category", $i);
            $lLabel = $this->getItem3("account", "label", $i);
            $lName = $this->getItem3("account", "name", $i);
            $lText = $this->getItem3("account", "text", $i);
            $lMinLength = $this->getItem3("account", "min_length", $i);
            $lMaxLength = $this->getItem3("account", "max_length", $i);
            $lKey = $this->getItem3("account", "key", $i);
            $lHolder = $this->getItem3("account", "holder", $i);
            $lLink = $this->getItem3("account", "link", $i);
            $lPicto = $this->getItem3("account", "picto", $i);
            $lPictoColor = $this->getItem3("account", "picto_color", $i);
            $lFontColor = $this->getItem3("account", "font_color", $i);
            
            $lHolder = htmlentities($lHolder, ENT_QUOTES | ENT_HTML5);
            
            $lValue = "";
            
            if($lCategory == "error") {
                if(!$lPostOn) continue;
                if($lRegisterOn) continue;
                if($lUser->hasErrors()) $lText = $lUser->getErrors();
            }
            
            if($lType == "lineedit"){
                if($lPostOn) {$lValue = $lPost->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='text' id='%s' name='%s' placeholder='%s' value='%s' minlength='%s' maxlength='%s' onfocus='this.removeAttribute(\"readonly\");' readonly required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMinLength, $lMaxLength);
            }
            else if($lType == "lineedit/email"){
                if($lPostOn) {$lValue = $lPost->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='email' id='%s' name='%s' placeholder='%s' value='%s' minlength='%s' maxlength='%s' onfocus='this.removeAttribute(\"readonly\");' readonly required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMinLength, $lMaxLength);
            }
            if($lType == "lineedit/password"){
                if($lPostOn) {$lValue = $lPost->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='password' id='%s' name='%s' placeholder='%s' value='%s' minlength='%s' maxlength='%s' required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMinLength, $lMaxLength);
            }
            else if($lType == "button"){
                echo sprintf("<div class='row_right'>
                <button class='button_float' type='submit' name='submit' value='%s'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i> %s</button>
                </div>\n", $lKey, $lPicto, $lPictoColor, $lName);
            }
            else if($lType == "text"){
                echo sprintf("<div class='row_center'>%s</div>\n", $lText);
            }
            else if($lType == "text/color"){
                echo sprintf("<div class='row_center' style='color: %s;'>%s</div>\n", $lFontColor, $lText);
            }
            else if($lType == "text/link"){
                $lLink = $lPage->getLink($lLink);
                $lText = str_replace("{link}", $lLink, $lText);
                echo sprintf("<div class='row_center'>%s</div>\n", $lText);
            }
        }
        
        echo sprintf("</form>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    // ===============================================
    public function createDisconnection() {
        $lPage = new GPage();
        $lUser = new GUser();
        $lPost = new GPost();
        
        if(!$lPage->isPage("user/logout")) return;
        if(!$lPost->hasPost()) $lPage->redirectUrl("home");
        $lLoginOn = $lUser->isLogin();
        if(!$lLoginOn) return;
        
        $lCount = $this->countItem("disconnection");
        $lAction = $this->getItem("disconnection", "action");
        $lTitle = $this->getItem("disconnection", "title");
        
        $lActionLink = $lPage->getLink($lAction);
        $lHomeLink = $lPage->getLink("home");
        
        $lSubmit = $lPost->getPost("submit");
        if($lSubmit == "disconnect") {
            $lUser->setLogout();
        }
        
        echo sprintf("<div class='box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' href='%s'><i class='button_close_fa fa fa-times'></i></a>\n", $lHomeLink);
        echo sprintf("<div class='title_text'>%s</div>\n", $lTitle);
        echo sprintf("<hr class='title_hr_margin'>\n");
        echo sprintf("<form action='%s' method='post'>\n", $lActionLink);                
                
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getItem3("disconnection", "type", $i);
            $lName = $this->getItem3("disconnection", "name", $i);
            $lText = $this->getItem3("disconnection", "text", $i);
            $lKey = $this->getItem3("disconnection", "key", $i);
            $lPicto = $this->getItem3("disconnection", "picto", $i);
            $lPictoColor = $this->getItem3("disconnection", "picto_color", $i);
            $lFontColor = $this->getItem3("disconnection", "font_color", $i);
            
            if($lType == "button"){
                echo sprintf("<div class='row_right'>
                <button class='button_float' type='submit' name='submit' value='%s'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i> %s</button>
                </div>\n", $lKey, $lPicto, $lPictoColor, $lName);
            }
            else if($lType == "text/color"){
                echo sprintf("<div class='row_center' style='color: %s;'>%s</div>\n", $lFontColor, $lText);
            }
        }
        
        echo sprintf("</form>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");       
    }
    //===============================================
    public function updateDatabase() {
        $lPageObj = new GPage();
        $lPostObj = new GPost();        
        if(!$lPageObj->isPage("database/update")) return;
        if(!$lPostObj->hasPost()) $lPageObj->redirectUrl("home");
        $lMaj = new GMaj();
        $lMaj->updateDatabase();
    }
    // ===============================================
    public function createError() {
        $lPageObj = new GPage();
        $lPageId = $lPageObj->getPageId();
        if($lPageObj->hasPage($lPageId)) return;
        
        $lCount = $this->countItem("error");
        $lTitle = $this->getItem("error", "title");
        
        $lHome = $lPageObj->getLink("home");
        
        echo sprintf("<div class='box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' href='%s'><i class='button_close_fa fa fa-times'></i></a>\n", $lHome);
        echo sprintf("<div class='title_text'>%s</div>\n", $lTitle);
        echo sprintf("<hr class='title_hr'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getItem3("error", "type", $i);
            $lText = $this->getItem3("error", "text", $i);
            $lPicto = $this->getItem3("error", "picto", $i);
            
            if($lType == "text"){
                echo sprintf("<div class='row_line'>%s</div>\n", $lText);
            }            
            if($lType == "text/icon"){
                echo sprintf("<div class='row_line'><i class='fa fa-%s'></i> %s</div>\n", $lPicto, $lText);
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    // ===============================================
}
// ===============================================
?>

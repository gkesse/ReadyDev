<?php
// ===============================================
class GStudio extends GWidget {
    // ===============================================
    private static $m_instance = null;
    // ===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    // ===============================================
    public static function Instance() {
        if (is_null(self::$m_instance)) {
            self::$m_instance = new GStudio();
        }
        return self::$m_instance;
    }
    // ===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("studio.xml");
        $this->dom->createXPath();
    }
    // ===============================================
    public function run() {
        $this->createHeader();
        $this->createConnection();
        $this->createAccount();
        $this->createDisconnection();
        $this->updateDatabase();
        $this->runTestProcedure();
        $this->runTestPhp();
        $this->createError();
    }
    // ===============================================
    public function createHeader() {
        $lCount = $this->countHeaderItems();
        
        $lLoginOn = $this->isLogin();
        $lAdminOn = $this->isAdmin();
        
        echo sprintf("<div class='box_bottom'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getHeaderItem($i, "type");
            $lCategory = $this->getHeaderItem($i, "category");
            $lName = $this->getHeaderItem($i, "name");
            $lPicto = $this->getHeaderItem($i, "picto");
            $lPictoColor = $this->getHeaderItem($i, "picto_color");
            $lAction = $this->getHeaderItem($i, "action");
            $lLink = $this->getHeaderItem($i, "link");
            $lALink = $this->getHeaderItem($i, "link");
            $lFontColor = $this->getHeaderItem($i, "font_color");
            
            $lLink = $this->getLink($lLink);            
            
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
    public function countHeaderItems() {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='header']/map/data"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    // ===============================================
    public function getHeaderItem($index, $data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='header']/map/data[position()=%d]/%s", $index + 1, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function createConnection() {
        if(!$this->isPage("user/login")) return;
        $lLoginOn = $this->isLogin();
        if($lLoginOn) return;
        
        $lCount = $this->countConnectionItems();
        $lAction = $this->getConnectionData("action");
        $lTitle = $this->getConnectionData("title");
        
        $lActionLink = $this->getLink($lAction);
        $lHomeLink = $this->getLink("home");
        
        $lPostOn = $this->hasPost();
        $lLoginOn = $this->hasLogin();
        
        echo sprintf("<div class='box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' href='%s'><i class='button_close_fa fa fa-times'></i></a>\n", $lHomeLink);
        echo sprintf("<div class='title_text'>%s</div>\n", $lTitle);
        echo sprintf("<hr class='title_hr_margin'>\n");
        echo sprintf("<form action='%s' method='post'>\n", $lActionLink);
                
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getConnectionItem($i, "type");
            $lCategory = $this->getConnectionItem($i, "category");
            $lLabel = $this->getConnectionItem($i, "label");
            $lName = $this->getConnectionItem($i, "name");
            $lText = $this->getConnectionItem($i, "text");
            $lMaxLength = $this->getConnectionItem($i, "max_length");
            $lKey = $this->getConnectionItem($i, "key");
            $lHolder = $this->getConnectionItem($i, "holder");
            $lLink = $this->getConnectionItem($i, "link");
            $lPicto = $this->getConnectionItem($i, "picto");
            $lPictoColor = $this->getConnectionItem($i, "picto_color");
            $lFontColor = $this->getConnectionItem($i, "font_color");
            
            $lValue = "";
            
            if($lCategory == "error") {
                if(!$lPostOn) continue;
                if($lLoginOn) {
                    $this->setLogin();
                    continue;
                }
            }
            
            if($lType == "lineedit"){
                if($lPostOn) {$lValue = $this->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='text' id='%s' name='%s' placeholder='%s' value='%s' maxlength='%s' required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMaxLength);
            }
            else if($lType == "lineedit/email"){
                if($lPostOn) {$lValue = $this->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='email' id='%s' name='%s' placeholder='%s' value='%s' maxlength='%s' required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMaxLength);
            }
            if($lType == "lineedit/password"){
                if($lPostOn) {$lValue = $this->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='password' id='%s' name='%s' placeholder='%s' value='%s' maxlength='%s' required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMaxLength);
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
                $lLink = $this->getLink($lLink);
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
        if(!$this->isPage("user/account/create")) return;
        $lLoginOn = $this->isLogin();
        if($lLoginOn) return;
        
        $lCount = $this->countAccountItems();
        $lAction = $this->getAccountData("action");
        $lTitle = $this->getAccountData("title");
        
        $lActionLink = $this->getLink($lAction);
        $lHomeLink = $this->getLink("home");

        $lPostOn = $this->hasPost();
        $lRegisterOn = $this->hasRegister();
        if($lRegisterOn) {
            $this->setLogin();
        }
        
        echo sprintf("<div class='box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' href='%s'><i class='button_close_fa fa fa-times'></i></a>\n", $lHomeLink);
        echo sprintf("<div class='title_text'>%s</div>\n", $lTitle);
        echo sprintf("<hr class='title_hr_margin'>\n");
        echo sprintf("<form action='%s' method='post'>\n", $lActionLink);
                
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getAccountItem($i, "type");
            $lCategory = $this->getAccountItem($i, "category");
            $lLabel = $this->getAccountItem($i, "label");
            $lName = $this->getAccountItem($i, "name");
            $lText = $this->getAccountItem($i, "text");
            $lMaxLength = $this->getConnectionItem($i, "max_length");
            $lKey = $this->getAccountItem($i, "key");
            $lHolder = $this->getAccountItem($i, "holder");
            $lLink = $this->getAccountItem($i, "link");
            $lPicto = $this->getAccountItem($i, "picto");
            $lPictoColor = $this->getAccountItem($i, "picto_color");
            $lFontColor = $this->getAccountItem($i, "font_color");
                        
            $lValue = "";
            
            if($lCategory == "error") {
                if(!$lPostOn) continue;
                if($lRegisterOn) continue;
                if($this->hasErrors()) $lText = $this->getErrors();
            }
            
            if($lType == "lineedit"){
                if($lPostOn) {$lValue = $this->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='text' id='%s' name='%s' placeholder='%s' value='%s' maxlength='%s' required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMaxLength);
            }
            else if($lType == "lineedit/email"){
                if($lPostOn) {$lValue = $this->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='email' id='%s' name='%s' placeholder='%s' value='%s' maxlength='%s' required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMaxLength);
            }
            if($lType == "lineedit/password"){
                if($lPostOn) {$lValue = $this->getPost($lKey);}
                echo sprintf("<label class='label' for='%s'>%s</label>\n", $lKey, $lLabel);
                echo sprintf("<div class='row_float'>
                <i class='icon_float fa fa-%s' style='color: %s;'></i>
                <input class='input_float' type='password' id='%s' name='%s' placeholder='%s' value='%s' maxlength='%s' required/>
                </div>\n", $lPicto, $lPictoColor, $lKey, $lKey, $lHolder, $lValue, $lMaxLength);
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
                $lLink = $this->getLink($lLink);
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
        if(!$this->isPage("user/logout")) return;
        if(!$this->hasPost()) $this->redirectUrl("home");
        $lLoginOn = $this->isLogin();
        if(!$lLoginOn) return;
        
        $lCount = $this->countDisconnectionItems();
        $lAction = $this->getDisconnectionData("action");
        $lTitle = $this->getDisconnectionData("title");
        
        $lActionLink = $this->getLink($lAction);
        $lHomeLink = $this->getLink("home");
        
        $lSubmit = $this->getPost("submit");
        if($lSubmit == "disconnect") {
            $this->setLogout();
        }
        
        echo sprintf("<div class='box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' href='%s'><i class='button_close_fa fa fa-times'></i></a>\n", $lHomeLink);
        echo sprintf("<div class='title_text'>%s</div>\n", $lTitle);
        echo sprintf("<hr class='title_hr_margin'>\n");
        echo sprintf("<form action='%s' method='post'>\n", $lActionLink);                
                
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getDisconnectionItem($i, "type");
            $lName = $this->getDisconnectionItem($i, "name");
            $lText = $this->getDisconnectionItem($i, "text");
            $lKey = $this->getDisconnectionItem($i, "key");
            $lPicto = $this->getDisconnectionItem($i, "picto");
            $lPictoColor = $this->getDisconnectionItem($i, "picto_color");
            $lFontColor = $this->getDisconnectionItem($i, "font_color");
            
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
    // ===============================================
    public function countConnectionItems() {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='connection']/map/data"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    // ===============================================
    public function countAccountItems() {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='account']/map/data"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    // ===============================================
    public function countDisconnectionItems() {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='disconnection']/map/data"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    // ===============================================
    public function getConnectionItem($index, $data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='connection']/map/data[position()=%d]/%s", $index + 1, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function getAccountItem($index, $data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='account']/map/data[position()=%d]/%s", $index + 1, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function getDisconnectionItem($index, $data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='disconnection']/map/data[position()=%d]/%s", $index + 1, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function getConnectionData($data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='connection']/%s", $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function getDisconnectionData($data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='disconnection']/%s", $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function getAccountData($data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='account']/%s", $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function updateDatabase() {
        if(!$this->isPage("database/update")) return;
        if(!$this->hasPost()) $this->redirectUrl("home");
        $lSqlite = new GSQLite();
        $lSqlite->updateDatabase();
    }
    //===============================================
    public function runTestProcedure() {
        if(!$this->isPage("procedure/test/run")) return;
        if(!$this->hasPost()) $this->redirectUrl("home");
        $lSqlite = new GSQLite();
        $lSqlite->runTestProcedure();
    }
    //===============================================
    public function runTestPhp() {
        $lMail = new GMail();
        $lMail->sendMail();
    }
    //===============================================
    public function hasPage($page) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='page']/map/link[.='%s']", $page));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    // ===============================================
    public function createError() {
        $lPageId = $this->getPageId();
        if($this->hasPage($lPageId)) return;
        
        $lCount = $this->countErrorItems();
        $lTitle = $this->getErrorItem2("title");
        
        $lHome = $this->getLink("home");
        
        echo sprintf("<div class='box'>\n");
        echo sprintf("<div class='box_body'>\n");
        echo sprintf("<a class='button_close' href='%s'><i class='button_close_fa fa fa-times'></i></a>\n", $lHome);
        echo sprintf("<div class='title_text'>%s</div>\n", $lTitle);
        echo sprintf("<hr class='title_hr'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lType = $this->getErrorItem($i, "type");
            $lText = $this->getErrorItem($i, "text");
            $lPicto = $this->getErrorItem($i, "picto");
            
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
    public function countErrorItems() {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='error']/map/data"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    // ===============================================
    public function getErrorItem($index, $data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='error']/map/data[position()=%d]/%s", $index + 1, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
    public function getErrorItem2($data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='error']/%s", $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    // ===============================================
}
// ===============================================
?>

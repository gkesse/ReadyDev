<?php   
//===============================================
class GTimesheetUi extends GWidget {
    //===============================================
    private $m_msgFlag = "off";
    private $m_msgText = "Les modifications ont été enregistrées avec succès";
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function getSummary() {
        $lSummary = "Système de saisie de temps de travail produit par Sogetek";
        return $lSummary;
    }
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lTimePattern = "[0-9]{2}h[0-9]{2}";
        $lDaysPattern = "[0-5]{1}";
        $lTotalPattern = "[0-9]{2,3}h[0-9]{2}";
        //
        $lHeaderMap = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Jours", "Total");
        //
        $this->request();
        //
        $lMonth = intval(date("m"));
        $lYear = intval(date("Y"));
        //
        $lUserFullname = GTimesheet::Instance()->getUserFullname(array("month" => $lMonth,"year" => $lYear,));
        $lUserManager = GTimesheet::Instance()->getUserManager(array("month" => $lMonth,"year" => $lYear,));
        $lClientName = GTimesheet::Instance()->getClientName(array("month" => $lMonth,"year" => $lYear,));
        $lClientAddress = GTimesheet::Instance()->getClientAddress(array("month" => $lMonth,"year" => $lYear,));
        //
        echo sprintf("<form action='' method='post'>\n");
        echo sprintf("<input type='hidden' id='month' name='month' value='%d'/>\n", $lMonth);
        echo sprintf("<input type='hidden' id='year' name='year' value='%d'/>\n", $lYear);
        //
        echo sprintf("<div class=''>\n");
        echo sprintf("<div class='content2'>\n");
        echo sprintf("<div class='item2 title2'>Mois de %s %s</div>\n", $lApp->months[$lMonth], $lYear);
        // profile
        echo sprintf("<div class='item2'>\n");
        echo sprintf("<div class='center'>\n");
        echo sprintf("<div class='profile2'><i class='icon3 fa fa-user'></i></div>\n");
        echo sprintf("</div>\n");
        //
        if($this->m_msgFlag == "on") {
            echo sprintf("<div class='success'>%s</div>\n", $this->m_msgText);
        }
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='user_fullname'>Collaborateur :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='user_fullname' name='user_fullname' placeholder='Gérard KESSE' required/></div>\n", $lUserFullname);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='user_manager'>Manager :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='user_manager' name='user_manager' placeholder='Yvon MOUTSINGA' required/></div>\n", $lUserManager);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='client_name'>Client :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='client_name' name='client_name' placeholder='PMC Carrus Groupe' required/></div>\n", $lClientName);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='client_address'>Adresse :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='client_address' name='client_address' placeholder='56 Avenue Raspail, 94100 Saint-Maur-des-Fossés' required/></div>\n", $lClientAddress);
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        // table
        echo sprintf("<div class='item2'>\n");
        echo sprintf("<div class=''>\n");
        echo sprintf("<table>\n");
        echo sprintf("<thead>\n");
        echo sprintf("<tr>\n");
        for($i = 0; $i < 7; $i++) {
            $lHeader = $lHeaderMap[$i];
            echo sprintf("<th  class='item4'>%s</th>\n", $lHeader);
        }
        echo sprintf("</tr>\n");
        echo sprintf("</thead>\n");
        echo sprintf("<tbody>\n");
        for($i = 0; $i < 5; $i++) {
            echo sprintf("<tr>\n");
            for($j = 0; $j < 7; $j++) {
                $lReq = sprintf("data_%d_%d", $i, $j);
                $lData = GTimesheet::Instance()->getData(array(
                "month" => $lMonth,
                "year" => $lYear,
                "row" => $i,
                "col" => $j,
                ));
                if($j < 5) {
                    if($lData == "") {$lData = "00h00";}
                    echo sprintf("<td><input class='item3' type='text' pattern='$lTimePattern' maxlength='5' size='5' id='$lReq' name='$lReq' value='$lData'/></td>\n");
                }
                else if($j == 5) {
                    if($lData == "") {$lData = "0";}
                    echo sprintf("<td class='item5'><input class='item6' type='text' pattern='$lDaysPattern' maxlength='3' size='3' id='$lReq' name='$lReq' value='$lData'/></td>\n");
                }
                else if($j == 6) {
                    if($lData == "") {$lData = "00h00";}
                    echo sprintf("<td class='item5'><input class='item6' type='text' pattern='$lTotalPattern' maxlength='6' size='6' id='$lReq' name='$lReq' value='$lData'/></td>\n");
                }
             }
            echo sprintf("</tr>\n");
        }
        echo sprintf("</tbody>\n");
        echo sprintf("</table>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        // button
        echo sprintf("<div class='item2'>\n");
        echo sprintf("<a class='button' href='/home'>
        <i class='icon fa fa-times'></i> Annuler</a>\n");
        echo sprintf("<button class='button' type='submit' id='req' name='req' value='save'>
        <i class='icon fa fa-save'></i> Sauvegarder</button>\n");
        echo sprintf("<button class='button' type='submit' id='req' name='req' value='valid'>
        <i class='icon fa fa-calendar'></i> Valider</button>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "save") {
                GManager::Instance()->loginOn();
                GTimesheet::Instance()->saveData($_POST);
                $this->m_msgFlag = "on";
            }
            else if($lReq == "valid") {
                GManager::Instance()->loginOn();
                GTimesheet::Instance()->saveData($_POST);
                $this->m_msgFlag = "on";
            }
        }
    }
    //===============================================
}
//===============================================
?>
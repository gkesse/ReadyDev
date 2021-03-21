<?php   
//===============================================
class GFilesystem extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $this->request();
        echo sprintf("<div class=''>\n");
        // header
        echo sprintf("<div class='header'>\n");
        $lMap = explode("/", $lApp->filesystem);
        $lAddress = "";
        for($i = 0; $i < count($lMap); $i++) {
            if($i != 0) {echo sprintf("<i class='sep2 fa fa-chevron-right'></i>\n", $lItem);}
            $lItem = $lMap[$i];
            if($i != 0) {$lAddress .= "/";}
            $lAddress .= $lItem;
            if($i == 0) {$lItem = "<i class='fa fa-home'></i>";}
            echo sprintf("<form class='box5' action='' method='post'>
            <input type='hidden' id='req' name='req' value='open_key'/>
            <input type='hidden' id='new_path' name='new_path' value='%s'/>
            <button class='' type='submit'>
            %s</button></form>\n", $lAddress, $lItem);
        }
        echo sprintf("</div>\n");
        // body
        echo sprintf("<div class=''>\n");
        foreach (new DirectoryIterator($lApp->filesystem) as $lFileInfo) {
            if($lFileInfo->isDot()) {continue;}
            $lFilename = $lFileInfo->getFilename();
            $lIcon = "file-text-o";
            $lReq = "open_file";
            if($lFileInfo->isDir()) {$lIcon = "folder"; $lReq = "open_dir";}
            $lPath = $lApp->filesystem . "/" . $lFilename;
            echo sprintf("<form action='' method='post'>
            <input type='hidden' id='req' name='req' value='%s'/>
            <input type='hidden' id='new_path' name='new_path' value='%s'/>
            <input type='hidden' id='current_path' name='current_path' value='%s'/>
            <button class='button2' type='submit'><i class='icon fa fa-%s'></i>
            %s</button></form>\n", $lReq, $lPath, $lApp->filesystem, $lIcon, $lFilename);
        }        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "open_dir") {
                $lPath = $_POST["new_path"];
                $lApp->filesystem = $lPath;
            }
            else if($lReq == "open_file") {
                $lPath = $_POST["current_path"];
                $lApp->filesystem = $lPath;
            }
            else if($lReq == "open_key") {
                $lPath = $_POST["new_path"];
                $lApp->filesystem = $lPath;
            }
        }
    }
    //===============================================
}
//===============================================
?>
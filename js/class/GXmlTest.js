//===============================================
class GXmlTest extends GTest {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    onModule() {
        if(this.m_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(this.m_method == "test") {
            this.runTest();
        }
        else if(this.m_method == "node") {
            this.runNode();
        }
        else if(this.m_method == "xnode") {
            this.runXNode();
        }
        else if(this.m_method == "serialize") {
            this.runSerialize();
        }
        else if(this.m_method == "data") {
            this.runData();
        }
        else {
            this.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    runTest() {
        var lPage = new GPage(); 
        lPage.searchPage();
        var lDom = new GCode(); 
        lDom.createDoc();
        lDom.loadData(lPage.serialize())
        this.addXml(lDom.toString());
    }
    //===============================================
    runData() {
        var lPage = new GPage(); 
        lPage.searchPage();
        var lDom = new GCode(); 
        lDom.createDoc();
        lDom.loadData(lPage.serialize())
        this.addXml(lDom.toString());
    }
    //===============================================
    runSerialize() {
        var lPage = new GPage(); 
        lPage.searchPage();
        var lHome = new GPage();
        lHome.deserialize(lPage.serialize());
        this.addXml(lHome.serialize());
    }
    //===============================================
    runXNode() {
        var lXml = new GXml();
        lXml.createXNode("/rdv/datas/data");
        lXml.createVNode("code", "page");
        lXml.createVNode("name", "admin");
        lXml.createVNode("url", "home/page");
        lXml.createVNode("title", "Administration");
        lXml.createVNode("path", "/path/home/admin.php");
        
        lXml.createXNode("map");
        
        lXml.pushNode();
        lXml.createXNode("data");
        lXml.createVNode("code", "page");
        lXml.createVNode("name", "admin");
        lXml.createVNode("url", "home/page");
        lXml.createVNode("title", "Administration");
        lXml.createVNode("path", "/path/home/admin.php");
        lXml.popNode();

        lXml.pushNode();
        lXml.createXNode("data");
        lXml.createVNode("code", "page");
        lXml.createVNode("name", "admin");
        lXml.createVNode("url", "home/page");
        lXml.createVNode("title", "Administration");
        lXml.createVNode("path", "/path/home/admin.php");
        lXml.popNode();
        
        this.addXml(lXml.toString());
    }
    //===============================================
    runNode() {
        var lXml = new GXml();
        lXml.createNode("rdv");
        lXml.next();
        lXml.createNode("datas");
        lXml.next();
        lXml.createNode("data");
        lXml.next();
        
        lXml.pushNode();
        lXml.createNode("code");
        lXml.next();
        lXml.setValue("page");
        lXml.popNode();
        
        lXml.pushNode();
        lXml.createNode("name");
        lXml.next();
        lXml.setValue("admin");
        lXml.popNode();
        
        lXml.pushNode();
        lXml.createNode("url");
        lXml.next();
        lXml.setValue("home/admin");
        lXml.popNode();
        
        lXml.pushNode();
        lXml.createNode("path");
        lXml.next();
        lXml.setValue("path/home/admin.php");
        lXml.popNode();
        
        this.addXml(lXml.toString());
    }
    //===============================================
}
//===============================================

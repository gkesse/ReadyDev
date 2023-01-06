//===============================================
class GPage extends GObject {
    //===============================================
    constructor(_codeName = "page") {
        super(_codeName);
        this.m_ajax = new GAjax();
    }
    //===============================================
    savePage() {
        var lData = this.serialize();
        this.m_ajax.call("page", "save_page", lData, this.onPage);        
    }
    //===============================================
    searchPage() {
        var lData = this.serialize();
        this.m_ajax.call("page", "search_page", lData, this.onPage);        
    }
    //===============================================
    deletePage() {
        var lData = this.serialize();
        this.m_ajax.call("page", "delete_page", lData, this.onPage);        
    }
    //===============================================
    newPage() {
        this.addLog("newPage");
    }
    //===============================================
    onPage(_data) {
        var lPage = new GPage();
        lPage.deserialize(_data);
    }
    //===============================================
}
//===============================================

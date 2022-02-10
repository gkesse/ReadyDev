//===============================================
class GStudio extends GObject {
    //===============================================
    static m_instance = null;
     //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GStudio();
        }
        return this.m_instance;
    }
    //===============================================
    openConnection() {
        var lConnection = document.getElementsByClassName("studio_connection")[0];
		lConnection.style.display = "block"; 
	}
    //===============================================
    closeConnection() {
        var lConnection = document.getElementsByClassName("studio_connection")[0];
		lConnection.style.display = "none"; 
	}
    //===============================================
}
//===============================================

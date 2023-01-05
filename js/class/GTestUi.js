//===============================================
class GTestUi extends GTest {
    //===============================================
    constructor() {
		super();
		this.m_data = document.getElementById("PhpJsData");
    }
    //===============================================
    loadData() {
        var lData = this.m_data.value;
		this.deserialize(lData);
    }
    //===============================================
	onModule() {
        if(this.m_module == "") {
            this.m_logs.addError("Erreur le module est obligatoire.");
        }
        else if(this.m_module == "dom") {
            this.runDom();
        }
        else {
            this.m_logs.addError("Erreur le module est inconnu.");
        }
	}
    //===============================================
	runDom() {
        var lDomTest = new GDomTest();
        lDomTest.setTest(this);
        lDomTest.onModule();
        this.addLogs(lDomTest.getLogs());
	}
    //===============================================
}
//===============================================

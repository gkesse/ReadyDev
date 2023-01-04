//===============================================
class GTestUi extends GTest {
    //===============================================
    constructor() {
		super();
		this.m_data = document.getElementById("JsData");
    }
    //===============================================
    loadData() {
        var lData = this.m_data.value;
		this.deserialize(lData);
    }
    //===============================================
	onModule() {
        if(this.m_module == "dom") {
            this.runDom();
        }
        else {
            this.runDefault();
        }
	}
    //===============================================
	runDefault() {
        this.printData("Erreur le processus est inconnu.");
	}
    //===============================================
	runDom() {
        var lDomTest = new GDomTest();
        lDomTest.setTest(this);
        lDomTest.onModule();
	}
    //===============================================
}
//===============================================

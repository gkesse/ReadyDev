//===============================================
class GDomTest extends GTest {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    onModule() {
        if(this.m_method == "test") {
            this.runTest();
        }
        else {
            this.runDefault();
        }
    }
    //===============================================
    runTest() {
        var lLog = new GLog();
        lLog.addLog("Erreur lors de l'émission.");
        lLog.addLog("La donnée a bien été enregistrée.");
        //this.printXml(lLog.serialize());

        var lLog2 = new GLog();
        lLog2.addError("Erreur lors de l'émission (2).");
        lLog2.addLog("La donnée a bien été enregistrée (2).");
        lLog2.addLogs(lLog);
        //this.printXml(lLog2.serialize());

        var lLog3 = new GLog();
        lLog3.deserialize(lLog2.serialize());        
        //this.printXml(lLog3.serialize());
        
        this.printData(sprintf("hasErrors : %s", lLog.hasErrors()));
    }
    //===============================================
}
//===============================================

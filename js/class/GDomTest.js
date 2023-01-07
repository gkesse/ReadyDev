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
		else if(this.m_method == "show_logs") {
            this.runShowLogs();
        }
		else if(this.m_method == "logs") {
            this.runLogs();
        }
		else {
			this.runDefault();
		}
	}
    //===============================================
	runTest() {
        this.addError("Erreur lors de l'émission.");
        this.addLog("La donnée a bien été enregistrée.");
	}
    //===============================================
	runShowLogs() {
        this.addError("Erreur lors de l'émission.");
        this.addLog("La donnée a bien été enregistrée.");
	}
    //===============================================
	runLogs() {
        var lLog = new GLog();
        lLog.addLog("Erreur lors de l'émission.");
        lLog.addLog("La donnée a bien été enregistrée.");
        this.addData(sprintfXml(lLog.serialize()))

        var lLog2 = new GLog();
        lLog2.addError("Erreur lors de l'émission (2).");
        lLog2.addLog("La donnée a bien été enregistrée (2).");
        lLog2.addLogs(lLog);
        this.addData(sprintfXml(lLog2.serialize()))

        var lLog3 = new GLog();
        lLog3.deserialize(lLog2.serialize());        
        this.addData(sprintfXml(lLog3.serialize()))
        
        this.addData(sprintf("hasErrors : %s", lLog.hasErrors()));
	}
    //===============================================
}
//===============================================

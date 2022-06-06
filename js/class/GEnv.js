//===============================================
class GEnv extends GObject {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
	getEnv() {
		var lEnvObj = document.getElementById("EnvType");
		var lEnv = lEnvObj.innerHTML;
		return lEnv;				
	}
    //===============================================
	isTestEnv() {
		var lEnv = this.getEnv();
		if(lEnv == "TEST") return true;
		return false;				
	}
    //===============================================
}
//===============================================

//===============================================
class GEnv extends GObject {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
	getEnv() {
		var lEnvId = document.getElementById("EnvType");
		var lEnv = lEnvId.value;
		return lEnv;				
	}
    //===============================================
	getProdOn() {
		var lProdOnId = document.getElementById("EnvProdOn");
		var lProdOn = (lProdOnId.value == "1");
		return lProdOn;				
	}
    //===============================================
	isTestEnv() {
		var lEnv = this.getEnv();
		if(lEnv == "TEST") return true;
		return false;				
	}
    //===============================================
	isProdOn() {
		var lProdOn = this.getProdOn();
		if(lProdOn == "1") return true;
		return false;				
	}
    //===============================================
}
//===============================================

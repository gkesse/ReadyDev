//===============================================
class GEnv extends GObject {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
	getEnv() {
		var lObj = document.getElementById("EnvType");
		var lEnv = lObj.innerHTML;
		return lEnv;				
	}
    //===============================================
	getProdOn() {
		var lObj = document.getElementById("ProdOn");
		var lProdOn = lObj.innerHTML;
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

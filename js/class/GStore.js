//===============================================
class GStore extends GObject {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
	setLocalData(key, data) {
		localStorage.setItem(key, data);
	}
    //===============================================
	getLocalData(key, defaultValue = "") {
		var lData = localStorage.getItem(key);
		if(!lData) return defaultValue;
		return lData;
	}
    //===============================================
	setSessionData(key, data) {
		sessionStorage.setItem(key, data);
	}
    //===============================================
	getSessionData(key, defaultValue = "") {
		var lData = sessionStorage.getItem(key);
		if(!lData) return defaultValue;
		return lData;
	}
    //===============================================
}
//===============================================

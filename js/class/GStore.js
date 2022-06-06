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
	setSessionData(key, data) {
		sessionStorage.setItem(key, data);
	}
    //===============================================
	getLocalData(key) {
		return localStorage.getItem(key);
	}
    //===============================================
	getSessionData(key) {
		return sessionStorage.getItem(key);
	}
    //===============================================
}
//===============================================

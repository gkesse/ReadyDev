//===============================================
class GLog extends GObject {
    //===============================================
    constructor(_codeName = "logs") {
		super(_codeName);
		this.m_type = "type";
		this.m_side = "side";
		this.m_msg = "msg";
        this.m_map = [];
    }
    //===============================================
	clone() {
        var lObj = new GLog();
        lObj.setLog(this);
        return lObj;
    }
    //===============================================
	serialize(_code = "logs") {
		var lDom = new GCode();
		lDom.createDoc();
		lDom.addData(_code, "type", this.m_type);
		lDom.addData(_code, "side", this.m_side);
		lDom.addData(_code, "msg", this.m_msg);
		lDom.addMap(_code, this.m_map, this);
		return lDom.toString();
	}
    //===============================================
	deserialize(_data, _code = "logs") {
		var lDom = new GCode();
		lDom.loadXml(_data);
		this.m_type = lDom.getItem(_code, "type");
		this.m_side = lDom.getItem(_code, "side");
		this.m_msg = lDom.getItem(_code, "msg");
        lDom.getMap(_code, this.m_map, this);
	}
    //===============================================
	setLog(_obj) {
		this.m_type = _obj.m_type;
		this.m_side = _obj.m_side;
		this.m_msg = _obj.m_msg;
    }
    //===============================================
	addError(_msg) {
        var lObj = new GLog
		lObj.m_type = "error";
		lObj.m_side = "client";
		lObj.m_msg = _msg;
        this.m_map.push(lObj);
	}
    //===============================================
	addLog(_msg) {
        var lObj = new GLog
		lObj.m_type = "log";
		lObj.m_side = "client";
		lObj.m_msg = _msg;
        this.m_map.push(lObj);
	}
    //===============================================
	addLogs(_logs) {
		for(var i = 0; i < _logs.m_map.length; i++) {
			var lLog = _logs.m_map[i];
            this.m_map.push(lLog);
		}
	}
    //===============================================
	hasErrors() {
		for(var i = 0; i < this.m_map.length; i++) {
			var lLog = this.m_map[i];
            if(lLog.m_type == "error") return true;
		}
        return false;
	}
    //===============================================
}
//===============================================

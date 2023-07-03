//===============================================
class GXml {
    //===============================================
    constructor() {
        this.m_doc = null;
        this.m_node = null;
    }
    //===============================================
    createDoc() {
        var lXml = sprintf("<?xml version='1.0' encoding='UTF-8'?><rdv></rdv>");
        if(!this.loadXml(lXml)) return false;
        return true;
    }
    //===============================================
    loadXml(_data) {
        _data = _data.trim();
        if(_data == "") return false;
        if(window.DOMParser) {
            var lParser = new DOMParser();
            this.m_doc = lParser.parseFromString(_data, "text/xml");            
            if(!this.m_doc) return false;
            this.m_node = this.m_doc.documentElement;
            if(!this.m_node) return false;
        }
        else {
            this.m_doc = new ActiveXObject("Microsoft.XMLDOM");
            if(!this.m_doc) return false;
            this.m_doc.async = false;
            if(!this.m_doc.loadXML(_data)) return false;
            this.m_node = this.m_doc.documentElement;
            if(!this.m_node) return false;
        }
        return true;
    }
    //===============================================
    loadNode(_root, _data) {
        _data = _data.trim();
        if(_data == "") return false;
        if(!_root.m_doc) return false;
        if(!this.m_node) return false;
        var lDom = _root.m_doc.createElement("template");
        lDom.innerHTML = _data;
        var lNodes = lDom.childNodes;
        while(lNodes[0]) {
            this.m_node.appendChild(lNodes[0]);
        }
        return true;
    }
    //===============================================
    createNode(_root, _path, _value = "", _isCData = false) {
        if(_path == "") return null;
        var lPaths = _path.split("/");
        var lPath = "";
        if(_path[0] == "/") lPath = "/";
        var lDom = new GXml();
        lDom.m_node = this.m_node;
        
        for(var i = 0, j = 0; i < lPaths.length; i++) {
            var lPathI = lPaths[i];
            if(lPathI == "") continue;
            if(j++ != 0) lPath += "/";
            lPath += lPathI;
            if(!this.existeNode(_root, lPath)) {
                lDom.m_node = lDom.addObj(_root, lPathI);
            }
            else {
                lDom.m_node = lDom.getNode(_root, lPath);
            }
        }
        
        return lDom.m_node;
    }    
    //===============================================
    addObj(_root, _name) {
        if(!_root.m_doc) return null;
        if(!this.m_node) return null;
        var lNode = _root.m_doc.createElement(_name);
        this.m_node.appendChild(lNode);
        return lNode;
    }    
    //===============================================
    addValue(_root, _name, _value, _isCData = false) {
        if(!_root.m_doc) return null;
        if(!this.m_node) return null;
        var lDom = new GXml();
        lDom.m_node = _root.m_doc.createElement(_name);
        lDom.setValue(_root, _value, _isCData);
        this.m_node.appendChild(lDom.m_node);
        return this.m_node;
    }    
    //===============================================
    existeNode(_root, _path) {
        return (this.countNode(_root, _path) != 0);
    }
    //===============================================
    countNode(_root, _path) {
        if(_path == "") return 0;
        if(!_root.m_doc) return 0;
        if(!this.m_node) return 0;
        var lCount = 0;
        
        if (_root.m_doc.evaluate) {
            var lNode = this.m_node;
            if(_path[0] == "/") lNode = _root.m_node;
            var lNodes = _root.m_doc.evaluate(_path, lNode, null, XPathResult.ANY_TYPE, null);
            while(1) {
                var lNodeI = lNodes.iterateNext();
                if(!lNodeI) break;
                lCount++;
            }
        } 
        else if(window.ActiveXObject || xhttp.responseType == "msxml-document") {
            _root.m_doc.setProperty("SelectionLanguage", "XPath");
            var lNodes = _root.m_doc.selectNodes(_path);
            lCount = lNodes.length;
        }
        return lCount;
    }
    //===============================================
    getNode(_root, _path) {
        if(_path == "") return null;
        if(!_root.m_doc) return null;
        if(!this.m_node) return null;
        
        var lNodeI = null;
        
        if (_root.m_doc.evaluate) {
            var lNode = this.m_node;
            if(_path[0] == "/") lNode = _root.m_node;
            var lNodes = _root.m_doc.evaluate(_path, lNode, null, XPathResult.ANY_TYPE, null);
            lNodeI = lNodes.iterateNext();
        } 
        else if(window.ActiveXObject || xhttp.responseType == "msxml-document") {
            _root.m_doc.setProperty("SelectionLanguage", "XPath");
            var lNodes = _root.m_doc.selectNodes(_path);
            if(lNodes.length) lNodeI = lNodes[0];
        }
        return lNodeI;
    }
    //===============================================
    getValue(_isCData = false) {
        if(!this.m_node) return "";
        var lData = "";
        if(!_isCData) {
            lData = this.m_node.innerHTML;
        }
        else {
            lData = this.m_node.firstChild.nodeValue;
        }
        return lData;
    }
    //===============================================
    setValue(_root, _value, _isCData = false) {
        if(_value == "") return;
        if(!_root.m_doc) return;
        if(!this.m_node) return;
        
        if(!_isCData) {
            this.m_node.innerHTML = _value;
        }
        else {
            var lCData = _root.m_doc.createCDATASection(_value);
            this.m_node.appendChild(lCData);
        }
    }
    //===============================================
    toString() {
        if(!this.m_doc) return "";
        if(!this.m_node) return "";
        var lData = this.m_doc.documentElement.outerHTML;
        lData = sprintf("<?xml version='1.0' encoding='UTF-8'?>\n%s", lData);
        return lData.toXml();
    }
    //===============================================
    toNode() {
        if(!this.m_node) return "";
        var lData = this.m_node.outerHTML;
        return lData.toXml();
    }
    //===============================================
}
//===============================================

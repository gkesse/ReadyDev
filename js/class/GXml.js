//===============================================
class GXml {
    //===============================================
    constructor() {
        this.m_doc = null;
        this.m_node = null;
        this.m_next = null;
        this.m_stack = [];
        this.m_nodes = null;
    }
    //===============================================
    createDoc(_name = "rdv", _version = "1.0", _encoding = "UTF-8") {
        var lRoot = sprintf("<?xml version='%s' encoding='%s'?><%s></%s>", _version, _encoding, _name, _name);
        var lParser = new DOMParser();
        this.m_doc = lParser.parseFromString(lRoot, "text/xml");
        this.m_node = this.m_doc.firstElementChild;
    }
    //===============================================
    createNode(_name) {
        if(!this.m_node) {
            this.createDoc(_name);
        }
        else {
            this.m_next = this.m_doc.createElement(_name);
            this.m_node.appendChild(this.m_next);
        }
        return true;
    }    
    //===============================================
    createVNode(_name, _value, _isCData = false) {
        this.pushNode();
        this.createNode(_name);
        this.next();
        this.setValue(_value, _isCData);
        this.popNode();
    }    
    //===============================================
    createXNode(_path) {
        var lPaths = _path.trim().split("/");
        var lFirst = _path.substr(0, 1);
        var lPath = lFirst;
        for(var i = 0, j = 0; i < lPaths.length; i++) {
            var lItem = lPaths[i].trim();
            if(lItem == "") continue;
            if(j++ != 0) lPath += "/";
            lPath += lItem;
            if(!this.getXNode(lPath)) {
                this.createNode(lItem);
                this.next();
            }
        }
    }    
    //===============================================
    pushNode() {
        if(!this.m_node) return false;
        this.m_stack.push(this.m_node);
        return true;
    }    
    //===============================================
    popNode() {
        if(!this.m_stack.length) return false;
        this.m_node = this.m_stack.pop();
        return true;
    }    
    //===============================================
    next() {
        if(!this.m_next) return false;
        this.m_node = this.m_next;
        return true;
    }
    //===============================================
    getXNode(path) {
        if(path == "") return false;
        if(!this.m_doc) return false;
        if(!this.queryXPath(path)) return false;
        if(!this.getNodeXPath()) return false;
        return true;
    }
    //===============================================
    getValue(isCData = false) {
        if(!this.m_node) return "";
        if(!this.m_nodes) return "";
        if(!this.m_nodes.length) return "";
        var lData = "";
        if(!isCData) {
            lData = this.m_node.innerHTML;
        }
        else {
            lData = this.m_node.firstChild.nodeValue;
        }
        return lData;
    }
    //===============================================
    getNodeXPath() {
        return this.getNodeIndex(0);
    }
    //===============================================
    getNodeIndex(index) {
        if(!this.m_doc) return false;
        if(!this.m_nodes) return false; 
        if(!this.m_nodes.length) return false;
        this.m_node = this.m_nodes[index];
        return true;
    }
    //===============================================
    loadXml(data) {
        data = data.trim();
        if(data == "") return false;
        if(window.DOMParser) {
            var lParser = new DOMParser();
            this.m_doc = lParser.parseFromString(data, "text/xml");            
        }
        else {
            this.m_doc = new ActiveXObject("Microsoft.XMLDOM");
            this.m_doc.async = false;
            this.m_doc.loadXML(data);
        }
        return true;
    }
    //===============================================
    loadNode(data) {
        data = data.trim();
        if(data == "") return false;
        if(!this.m_doc) return false;
        if(!this.m_node) return false;
        var lDom = this.m_doc.createElement("template");
        lDom.innerHTML = data;
        var lNodes = lDom.childNodes;
        while(lNodes[0]) {
            this.m_node.appendChild(lNodes[0]);
        }
        return true;
    }
    //===============================================
    queryXPath(path) {
        path = path.trim();
        if(path == "") return false;
        if(!this.m_doc) return false;
        if (this.m_doc.evaluate) {
            var lFirst = path.substr(0, 1);
            var lNode = this.m_node;
            if(lFirst == "/") lNode = this.m_doc;
            if(lNode == null) return false;
            this.m_nodes = [];
            var lNodeI = null;
            var lNodes = this.m_doc.evaluate(path, lNode, null, XPathResult.ANY_TYPE, null);
            while(lNodeI = lNodes.iterateNext()) {
                  this.m_nodes.push(lNodeI);
            }
        } 
        else if(window.ActiveXObject || xhttp.responseType == "msxml-document") {
            this.m_doc.setProperty("SelectionLanguage", "XPath");
            this.m_nodes = this.m_doc.selectNodes(path);
        }
        return true;
    }
    //===============================================
    countXPath() {
        if(!this.m_doc) return 0;
        if(!this.m_nodes) return 0;
        var lCount = this.m_nodes.length;
        return lCount;
    }
    //===============================================
    setValue(value, isCData = false) {
        if(!this.m_node) return;
        if(!isCData) {
            this.m_node.innerHTML = value;
        }
        else {
            var lCData = this.m_doc.createCDATASection(value);
            this.m_node.appendChild(lCData);
        }
    }
    //===============================================
    toString() {
        if(!this.m_doc) return "";
        if(!this.m_node) return "";
        if(!this.m_node.firstElementChild) return "";
        var lData = this.m_doc.documentElement.outerHTML;
        return lData;
    }
    //===============================================
    toStringNode() {
        if(!this.m_node) return "";
        var lData = this.m_node.outerHTML;
        return lData;
    }
    //===============================================
}
//===============================================

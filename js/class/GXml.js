//===============================================
class GXml extends GObject {
    //===============================================
    constructor() {
		super();
		this.doc = null;
		this.nodes = null;
		this.node = null;
		this.nodeCopy = null;
    }
    //===============================================
	appendNode(name, value = "", get = false) {
		if(!this.doc) return;
		if(!this.node) return;
		var lNode = this.doc.createElement(name);
		if(value != "") lNode.innerHTML = value;
		this.node.appendChild(lNode);
		if(get) this.node = lNode;
	}
    //===============================================
   countNode(name) {
        if(!this.node) return 0;
        var lCount = 0;
        var lNodes = this.node.childNodes;
        for(var i = 0; i < lNodes.length; i++) {
			var lNode = lNodes[i];
            var lNodeName = lNode.nodeName;
            if(lNodeName == name) lCount++;
        }
        return lCount;
    }
    //===============================================
	countXPath() {
		if(!this.doc) return 0;
    	if(!this.nodes) return 0;
		var lCount = this.nodes.length;
		return lCount;
	}
    //===============================================
	createDoc() {
		var lRoot = "<?xml version='1.0' encoding='UTF-8'?><rdv></rdv>";
		var lParser = new DOMParser();
		this.doc = lParser.parseFromString(lRoot, "text/xml"); 
	}
    //===============================================
    createNode(path, value = "", isCData = false) {
        path = path.trim();
        var lFirst = path.substr(0, 1);
		var lRootOn = (lFirst == "/");
        var lMap = path.split("/");
        var lPath = "";        

		this.saveNode();
                
        for(var i = 0; i < lMap.length; i++) {
            var lItem = lMap[i];
            lItem = lItem.trim();
            if(lItem == "") continue;
			var lLastPath = lPath;
			if(lPath != "" || lRootOn) lPath += "/";
            lPath += lItem;
			this.restoreNode();
			this.getNode(lPath);
            
            if(this.isNodeNull()) {
				this.restoreNode();
				this.getNode(lLastPath);
                this.appendNode(lItem);
				this.restoreNode();
				this.getNode(lPath);
            }
        }
        if(value != "") {
            this.setNodeValue(value, isCData);
        }        
    }
    //===============================================
	getNode(path) {
		if(path == "") return;
		if(!this.doc) return;
		this.queryXPath(path)
		this.getNodeXPath();
	}
	//===============================================
	getNodeName() {
		if(!this.node) return "";
		var lData = this.node.nodeName;
		return lData;
	}
    //===============================================
	getNodeValue(isCData = false) {
		if(!this.node) return "";
		var lData = "";
		if(!isCData) {
			lData = this.node.innerHTML;
		}
		else {
			lData = this.node.firstChild.nodeValue;
		}
		return lData;
	}
    //===============================================
	getNodeXPath() {
		this.getNodeIndex(0);
	}
    //===============================================
	getNodeIndex(index) {
		if(!this.doc) return;
    	if(!this.nodes) return; 
    	this.node = this.nodes[index];
	}
    //===============================================
	getRoot(name) {
		name = name.trim();
		if(name == "") return false;
		if(!this.doc) return false;
		this.queryXPath(sprintf("/%s", name))
		this.getNodeXPath();
		if(this.getNodeName() != name) this.node = null;
		return true;
	}
    //===============================================
	isNodeNull() {
		if(!this.node) return true;
		return false;
	}
    //===============================================
    loadNode(data) {
		data = data.trim();
        if(data == "") return false;
        if(!this.doc) return false;
        if(!this.node) return false;
        var lDom = this.doc.createElement("template");
        lDom.innerHTML = data;
		var lNodes = lDom.childNodes;
        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            this.node.appendChild(lNode);
        }
        return true;
    }
    //===============================================
    loadXml(data) {
		data = data.trim();
		if(data == "") return false;
		if(window.DOMParser) {
			var lParser = new DOMParser();
			this.doc = lParser.parseFromString(data, "text/xml");			
		}
		else {
			this.doc = new ActiveXObject("Microsoft.XMLDOM");
		    this.doc.async = false;
		    this.doc.loadXML(data);
		}
		return true;
    }
    //===============================================
	queryXPath(path) {
		path = path.trim();
		if(path == "") return;
		if(!this.doc) return;
    	if (this.doc.evaluate) {
	        path = path.trim();
        	var lFirst = path.substr(0, 1);
        	var lNode = this.node;
        	if(lFirst == "/") lNode = this.doc;
			if(lNode == null) return;
        	this.nodes = [];
			var lNodeI = null;
			var lNodes = this.doc.evaluate(path, lNode, null, XPathResult.ANY_TYPE, null);
			while(lNodeI = lNodes.iterateNext()) {
			  	this.nodes.push(lNodeI);
			}
        } 
    	else if(window.ActiveXObject || xhttp.responseType == "msxml-document") {
        	this.doc.setProperty("SelectionLanguage", "XPath");
        	this.nodes = this.doc.selectNodes(path);
        }
	}
    //===============================================
    restoreNode() {
		this.node = this.nodeCopy;
    }
    //===============================================
    saveNode() {
		this.nodeCopy = this.node;
    }
    //===============================================
    setDoc(doc) {
		this.doc = doc;
    }
    //===============================================
    setNodeValue(value, isCData = false) {
		if(!this.node) return;
		if(!isCData) {
			this.node.innerHTML = value;
		}
		else {
			var lCData = this.doc.createCDATASection(value);
			this.node.appendChild(lCData);
		}
    }
    //===============================================
	toString() {
		if(!this.doc) return "";
		var lData = this.doc.documentElement.outerHTML;
		return lData;
	}
    //===============================================
	toStringNode() {
		if(!this.node) return "";
		var lData = this.node.outerHTML;
		return lData;
	}
    //===============================================
}
//===============================================

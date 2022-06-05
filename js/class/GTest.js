//===============================================
class GTest extends GObject {
    //===============================================
    constructor() {
		super();
		this.output = document.getElementById("test_js_output");
		this.key = "";
    }
    //===============================================
	onModule(key, obj, data) {
		this.key = key;
    	//===============================================
		// test
    	//===============================================
		if(key == "test") {
			this.runTest();
		}
    	//===============================================
		// ajax
    	//===============================================
		else if(key == "ajax") {
			this.runAjax();
		}
    	//===============================================
		// array
    	//===============================================
		else if(key == "array") {
			this.runArray();
		}
    	//===============================================
		// date
    	//===============================================
		else if(key == "date/format") {
			this.runDateFormat();
		}
    	//===============================================
		// log
    	//===============================================
		else if(key == "log/caller") {
			this.runLogCaller();
		}
    	//===============================================
		// string
    	//===============================================
		else if(key == "string/format") {
			this.runStringFormat();
		}
    	//===============================================
		// xml
    	//===============================================
		else if(key == "xml") {
			this.runXml();
		}
		else if(key == "xml/code") {
			this.runXmlCode();
		}
		else if(key == "xml/cdata") {
			this.runXmlCData();
		}
		else if(key == "xml/template") {
			this.runXmlTemplate();
		}
    	//===============================================
		// end
    	//===============================================
		else {
			this.runTest();
		}
	}
    //===============================================
	printData(data) {
		this.output.innerHTML += data;		
	}
    //===============================================
	runTest() {
		var lData = "";
		lData += sprintf("\
			Erreur le test n'est pas implémenté.\n \
			test.........: (%s)\n \
			", this.key);
		this.printData(lData);		
	}
    //===============================================
	// ajax
    //===============================================
	runAjax() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_enum", "", this.onAjax);		
	}
    //===============================================
	onAjax(data) {
		alert(data)		
	}
    //===============================================
    // array
    //===============================================
	runArray() {
		var lArray = {
			"un" : "one",
			"deux" : "two",
			"trois" : "three"
		};
		
		var lData = "";
		
		for(var lKey in lArray) {
			var lValue = lArray[lKey];
			lData += sprintf("%s : %s\n", lKey, lValue);			
		}

		this.output.innerHTML = lData;
	}
    //===============================================
    // date
    //===============================================
	runDateFormat() {
		var lDateObj = new GDate();
		var lDate = lDateObj.getDate();
		this.printData(lDate);
	}
    //===============================================
    // log
    //===============================================
	runLogCaller() {
		var lDateObj = new GDate();
		var lError = new Error();
		var lStack = lError.stack.toString().split(/\r\n|\n/);
		var lTrace = lStack[2].trim();
		var lDate = lDateObj.getDate();
		var lLog = "Bonjour tout le monde";
		var lMsg = sprintf("%s %s :\n%s", lDate, lTrace, lLog);
		this.printData(lMsg);
	}
    //===============================================
	// string
    //===============================================
	runStringFormat() {
		var lData = "";
		lData += sprintf("\
			Entier.......: (%s)<br> \
			Reel.........: (%s)<br> \
			Chaine.......: (%s)<br> \
			", 100, 3.14, "Bonjour tout le monde");
		this.output.innerHTML = lData;
	}
    //===============================================
	// xml
    //===============================================
	runXml() {
		var lData = "   /rdv/datas   ";
		this.printData(sprintf("[%s]\n", lData));		
		lData = lData.trim();
		this.printData(sprintf("[%s]\n", lData));
		lData = lData.substring(0, 1);
		this.printData(sprintf("[%s]\n", lData));
		var lXml = new GXml();
		lXml.createDoc();										
		lData = lXml.toString();
		this.printData(sprintf("[%s]\n", lData));
		lXml.getNode("/rdv");
		lXml.appendNode("datas")										
		lXml.getNode("/rdv/datas");
		lXml.appendNode("datas")										
		lData = lXml.toString();
		this.printData(sprintf("[%s]\n", lData));										
		lXml.getNode("/rdv/datas");
		lXml.saveNode();
		lXml.getNode("datas");
		lXml.restoreNode();
		lXml.getNode("datas");
		lData = lXml.isNodeNull();
		this.printData(sprintf("[%s]\n", lData));										
		lXml.setNodeValue("sitemap");
		lData = lXml.toString();
		this.printData(sprintf("[%s]\n", lData));	
		lXml.queryXPath(sprintf("/rdv/datas/datas"));
        lData = lXml.countXPath();
		this.printData(sprintf("[%s]\n", lData));	
		lXml.queryXPath(sprintf("/rdv/datas/datas/test"));
        lData = lXml.countXPath();
		this.printData(sprintf("[%s]\n", lData));
		lXml.getNode("/")
        lData = lXml.countNode("rdv");
		this.printData(sprintf("[%s]\n", lData));
		lData = sprintf("/rdv/datas/code/test");
		var lMap = lData.split("/");	
		this.printData(sprintf("[%s]\n", lMap));
		this.printData(sprintf("[%s]\n", lMap.length));
		this.printData(sprintf("[%s]\n", lMap[1]));
		lXml.createNode("/rdv/datas/name", "Gérard KESSE")
		lData = lXml.toString();
		this.printData(sprintf("[%s]\n", lData));
		lXml.createNode("/rdv/datas");
		lXml.createNode("code/header", "varilus");
		lData = lXml.toString();
		this.printData(sprintf("[%s]\n", lData));
		//
		var lCode = new GCode();
		lCode.createDoc();
		lCode.createCode("sitemap");										
		lCode.createCode("session");										
		lCode.createCode("sitemap");										
		lCode.createCode("session");										
		lCode.addData("session", "user_id", "1000");										
		lCode.addData("session", "msg", "Bonjour tout le monde");										
		lData = lCode.toString();
		this.printData(sprintf("[%s]\n", lData));
	}
    //===============================================
	runXmlCode() {
		var lCode, lData;
		lCode = new GCode();
		lCode.createDoc();
		lCode.createCode("sitemap");										
		lCode.createCode("session");										
		lCode.createCode("sitemap");										
		lCode.createCode("session");										
		lCode.addData("session", "user_id", "1000");										
		lCode.addData("session", "msg", "Bonjour tout le monde");										
		lData = lCode.toString();
		this.printData(sprintf("[%s]\n", lData));
		//
		lData = lCode.getItem("session", "msg");
		this.printData(sprintf("[%s]\n", lData));
	}
    //===============================================
	runXmlCData() {
		var lData = "<rdv><![CDATA[<hello>]]></rdv>";
		var lParser = new DOMParser();
		var lDoc = lParser.parseFromString(lData, "application/xml");
		var lNode = lDoc.getElementsByTagName("rdv")[0];
		lData = lNode.firstChild.nodeValue;
		this.printData(sprintf("[%s]\n", lData));
	}
    //===============================================
	runXmlTemplate() {
		var lData = "<rdv><msg>un</msg></rdv>";
		var lParser = new DOMParser();
		var lDoc = lParser.parseFromString(lData, "application/xml");
		var lNode = lDoc.getElementsByTagName("rdv")[0];
		var lTemplate = lDoc.createElement('template');
	    lData = "<msg>deux</msg>";
	    lTemplate.innerHTML = lData;
		var lMsg = lTemplate.childNodes[0];
		lNode.appendChild(lMsg);
		lData = lNode.outerHTML;
		//lData = lTemplate.outerHTML;
		this.printData(sprintf("[%s]\n", lData));
	}
    //===============================================
}
//===============================================

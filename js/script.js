//===============================================
function call_server(_module, _method, _obj = null, _data = null) {
    var lServer = new GServer();
    lServer.run(_module, _method, _obj, _data);
    lServer.showLogsX();
    return !lServer.hasErrors();
}
//===============================================
function runAceJS() {
    var lNodes = document.getElementsByClassName("AceCode");
    for(var i = 0; i < lNodes.length; i++) {
        var lNode = lNodes[i];
        var lMode = lNode.dataset.mode;
        var lTheme = lNode.dataset.theme;
        var lEditor = ace.edit(lNode);
        lEditor.renderer.$cursorLayer.element.style.display = "none";

        lEditor.setOptions({
            theme: "ace/theme/" + lTheme
            , mode: "ace/mode/" + lMode
            , minLines: 1
            , maxLines: 20
            , readOnly: true
            , selectionStyle: "text"
            , showLineNumbers: true
            , showGutter: true
            , displayIndentGuides: false
            , highlightActiveLine: false
            , showPrintMargin: false
            , showGutter: true
            , fontSize: "16px"
            , highlightGutterLine: false
            , fontFamily: "courier"
            , useWorker: false
        });                    
    }
}
//===============================================
function runMathjax() {
	MathJax = {
	    tex: {
	        inlineMath: [['$', '$'], ['\\(', '\\)']]
	    },
	    svg: {
	        fontCache: 'global'
	    }
	};
}
//===============================================
function mainJs() {
    runAceJS();
    runMathjax();
}
//===============================================
mainJs();
//===============================================

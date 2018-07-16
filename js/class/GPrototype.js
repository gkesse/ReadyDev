//===============================================
var GPrototype = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.textareaInsertAtCaret();
			},
            //===============================================
            textareaInsertAtCaret: function() {
                HTMLTextAreaElement.prototype.insertAtCaret = function(text) {
                    text = text || '';
                    if(document.selection) {
                        // IE
                        this.focus();
                        var sel = document.selection.createRange();
                        sel.text = text;
                    } 
                    else if(this.selectionStart || this.selectionStart === 0) {
                        // Others
                        var startPos = this.selectionStart;
                        var endPos = this.selectionEnd;
                        this.value = this.value.substring(0, startPos) + text + this.value.substring(endPos, this.value.length);
                        this.selectionStart = startPos + text.length;
                        this.selectionEnd = startPos + text.length;
                    } 
                    else {
                        this.value += text;
                    }
                };
            }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if(!m_instance) {
                m_instance = Container();
            }
            return m_instance;
        }
    };
    //===============================================
})();
//===============================================
GPrototype.Instance().init();
//===============================================

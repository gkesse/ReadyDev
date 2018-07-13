//===============================================
var GFormula = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            openFormula: function(obj) {
				var lModalFormula = document.getElementById("ModalFormula");
				var lFormulaBody = document.getElementById("FormulaBody");
				var lFormulaMsg = document.getElementById("FormulaMsg");
				var lFormulaText = document.getElementById("FormulaText");
				var lClassName = lFormulaBody.className;
                lFormulaMsg.style.display = "none";
				lFormulaBody.className = lClassName.replace(" AnimateShow", "");
				lFormulaBody.className = lClassName.replace(" AnimateHide", "");
                lFormulaBody.className += " AnimateShow";
				lModalFormula.style.display = "block";
                lFormulaText.value = GConfig.Instance().getData("FormulaText");
                this.viewFormula();
            },
            //===============================================
            closeFormula: function(obj) {
				var lModalFormula = document.getElementById("ModalFormula");
				var lFormulaBody = document.getElementById("FormulaBody");
				var lClassName = lFormulaBody.className;
				lFormulaBody.className = lClassName.replace(" AnimateShow", "");
				lFormulaBody.className = lClassName.replace(" AnimateHide", "");
                lFormulaBody.className += " AnimateHide";
				setTimeout(function() {
					lModalFormula.style.display = "none";
				}, 400);
                GConfig.Instance().setData("FormulaConfirm", false);
            },
            //===============================================
            viewFormula: function(obj) {
				var lFormulaText = document.getElementById("FormulaText");
				var lFormulaShow = document.getElementById("FormulaShow");
                var lHtml = '';
                lHtml += FormulaText.value;
                lFormulaShow.innerHTML = lHtml;
                MathJax.Hub.Queue(["Typeset",MathJax.Hub,lFormulaShow]);
                GConfig.Instance().setData("FormulaConfirm", true);
                GConfig.Instance().setData("FormulaText", lHtml);
            },
            //===============================================
            getFormula: function(obj) {
                var lArg = obj.value;
                if(!lArg) return;
                obj.selectedIndex = 0;
				var lFormulaText = document.getElementById("FormulaText");
                switch(lArg) {
                    //===============================================
                    case 'SystemeEquations':
                        var lHtml = '';
                        lHtml += '\\left \\{';
                        lHtml += '\\begin{array}{r c l}';
                        lHtml += 'e1 &=& Equation1\\\\';
                        lHtml += 'e2 &=& Equation2';
                        lHtml += '\\end{array}';
                        lHtml += '\\right.';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'LettreAlpha':
                        var lHtml = '';
                        lHtml += '\alpha';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'LettreBeta':
                        var lHtml = '';
                        lHtml += '\bata';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'LettreGama':
                        var lHtml = '';
                        lHtml += '\gama';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'LettreLambda':
                        var lHtml = '';
                        lHtml += '\lambda';                        
                        break;
                    //===============================================
                    case 'LettreNabla':
                        var lHtml = '';
                        lHtml += '\nabla';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'DeriveePartielle':
                        var lHtml = '';
                        lHtml += '\partial';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'SymboleAppartient':
                        var lHtml = '';
                        lHtml += '\in';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'SymboleNAppartientPas':
                        var lHtml = '';
                        lHtml += '\not\in';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                }
                this.viewFormula();
            },
            //===============================================
            validate: function(obj) {
				var lFormulaText = document.getElementById("FormulaText");
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
GFormula.Instance().init();
//===============================================

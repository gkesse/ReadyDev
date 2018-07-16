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
            openFormula: function() {
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
                GConfig.Instance().setData("FormulaConfirm", "Cancel");
				setTimeout(function() {
					lModalFormula.style.display = "none";
				}, 400);
            },
            //===============================================
            viewFormula: function(obj) {
				var lFormulaText = document.getElementById("FormulaText");
				var lFormulaShow = document.getElementById("FormulaShow");
                var lHtml = '';
                lHtml += FormulaText.value;
                lFormulaShow.innerHTML = lHtml;
                MathJax.Hub.Queue(["Typeset",MathJax.Hub,lFormulaShow]);
                GConfig.Instance().setData("FormulaText", lHtml);
            },
            //===============================================
            validate: function() {
				var lFormulaText = document.getElementById("FormulaText");
				var lModalFormula = document.getElementById("ModalFormula");
                GConfig.Instance().setData("FormulaText", lFormulaText.value);
				lModalFormula.style.display = "none";
                GConfig.Instance().setData("FormulaConfirm", "Validate");
            },
            //===============================================
            getFormula: function(arg) {
                if(!arg) return;
				var lFormulaText = document.getElementById("FormulaText");
                switch(arg) {
                    //===============================================
                    case 'Espace':
                        var lHtml = '';
                        lHtml += '\\ ';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'Formule':
                        var lHtml = '';
                        lHtml += '$$$$';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
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
                    case 'Alpha':
                        var lHtml = '';
                        lHtml += '\\alpha';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'Beta':
                        var lHtml = '';
                        lHtml += '\\bata';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'Gama':
                        var lHtml = '';
                        lHtml += '\\gama';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'Lambda':
                        var lHtml = '';
                        lHtml += '\\lambda';                        
                        break;
                    //===============================================
                    case 'Nabla':
                        var lHtml = '';
                        lHtml += '\\nabla';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'DeriveePartielle':
                        var lHtml = '';
                        lHtml += '\\partial';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'Appartient':
                        var lHtml = '';
                        lHtml += '\\in';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'NAppartientPas':
                        var lHtml = '';
                        lHtml += '\\not\\in';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'PourTout':
                        var lHtml = '';
                        lHtml += '\\forall';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'Integrale':
                        var lHtml = '';
                        lHtml += '\\int_{x0}^{x1} f(x)\\ dx';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'ValeurMoyenne':
                        var lHtml = '';
                        lHtml += '\\langle f \\rangle';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                    case 'Fraction':
                        var lHtml = '';
                        lHtml += '\\frac{a}{b}';                        
                        lFormulaText.insertAtCaret(lHtml);
                        break;
                    //===============================================
                }
                this.viewFormula();
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

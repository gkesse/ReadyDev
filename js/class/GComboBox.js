//===============================================
var GComboBox = (function() {
    //===============================================
    var m_instance;
    var m_count = 0;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.fillBox();
			},
            //===============================================
            fillBox: function() {
                var lComboBoxMap = document.getElementsByClassName("ComboBox");
                var lLength = lComboBoxMap.length;
                
                for(var i = 0; i < lLength; i++) {
                    var lComboBox = lComboBoxMap[i];
                    var lRun = lComboBox.dataset.run;
                    if(lRun == "true") continue
                    lComboBox.dataset.run = "true";
                    var lSelect = lComboBox.getElementsByTagName("select")[0];
                    var lHtml = lSelect.options[lSelect.selectedIndex].innerHTML;
                    
                    var lBoxView = document.createElement("DIV");
                    lBoxView.setAttribute("class", "BoxView");
                    lBoxView.innerHTML = lHtml;
                    lComboBox.appendChild(lBoxView);
                    var lBoxSelect = document.createElement("DIV");
                    lBoxSelect.setAttribute("class", "BoxSelect BoxHide");
                    var lLength2 = lSelect.length;
                    
                    for(var j = 0; j < lLength2; j++) {
                        var lHtml2 = lSelect.options[j].innerHTML;
                        var lBoxOption = document.createElement("DIV");
                        lBoxOption.innerHTML = lHtml2;
                        
                        lBoxOption.addEventListener("click", function(e){
                            var lBoxSelect = this.parentNode.parentNode.getElementsByTagName("select")[0];
                            var lBoxView = this.parentNode.previousSibling;
                            var lLength = lBoxSelect.length;
                            
                            for(var i = 0; i < lLength; i++) {
                                var lHtml = lBoxSelect.options[i].innerHTML;
                                var lHtml2 = this.innerHTML;
                                if(lHtml == lHtml2) {
                                    lBoxSelect.selectedIndex = i;
                                    var lEvent = document.createEvent("HTMLEvents");
                                    lEvent.initEvent("change", false, true);
                                    lBoxSelect.dispatchEvent(lEvent);

                                    //lBoxView.innerHTML = this.innerHTML;
                                    var lBoxSelectAsMap = this.parentNode.getElementsByClassName("BoxSelectAs");
                                    var lLength2 = lBoxSelectAsMap.length;
                                    
                                    for(var j = 0; j < lLength2; j++) {
                                        var lBoxSelectAs = lBoxSelectAsMap[j];
                                        lBoxSelectAs.removeAttribute("class");
                                    }
                                    
                                    //this.setAttribute("class", "BoxSelectAs");
                                    break;
                                }
                            }
                            
                            lBoxView.click();
                        });
                        
                        lBoxSelect.appendChild(lBoxOption);
                    }
                }
                lComboBox.appendChild(lBoxSelect);
                
                lBoxView.addEventListener("click", function(e){
                    e.stopPropagation();
                    GComboBox.Instance().closeBox(this);
                    this.nextSibling.classList.toggle("BoxHide");
                    this.classList.toggle("BoxActive");
                });
                
                lBoxView.addEventListener("mouseover", function(e){
                    GSelection.Instance().save();        
                });
                
                document.addEventListener("click", this.closeBox);
            },
            //===============================================
            closeBox: function(obj) {
                var lBoxViewMap = document.getElementsByClassName("BoxView");
                var lBoxSelectMap = document.getElementsByClassName("BoxSelect");
                var lLength = lBoxViewMap.length;
                var lIndexMap = [];
                
                for(var i = 0; i < lLength; i++) {
                    var lBoxView = lBoxViewMap[i];
                    if(obj == lBoxView) {
                        lIndexMap.push(i);
                    }
                    else {
                        lBoxView.classList.remove("BoxActive");
                    }
                }
                
                var lLength2 = lBoxSelectMap.length;
                
                for(var i = 0; i < lLength2; i++) {
                    var lBoxSelect = lBoxSelectMap[i];
                    var lIndexOf = lIndexMap.indexOf(i);
                    if(lIndexOf) {
                        lBoxSelect.classList.add("BoxHide");
                    }
                }
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
GComboBox.Instance().init();
//===============================================

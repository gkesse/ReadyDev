//===============================================
var GDataset = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.readDataset();
            },
            //===============================================
            readDataset: function() {
                var lReadDataset = document.getElementById("ReadDataset");
                var lMoto = document.getElementById("moto");
                var lHtml = "";
                lHtml += "<div class='Row'>"+"Model : " + lMoto.dataset.model + "</div>";
                lHtml += "Moteur : " + lMoto.dataset.moteur + "<br/>";
                lHtml += "Puissance Max : " + lMoto.dataset.puissanceMax + "<br/>";
                lReadDataset.innerHTML = lHtml;
            },
            //===============================================
            readDataset: function() {
                var lReadDataset = document.getElementById("ReadDataset");
                var lMoto = document.getElementById("moto");
                var lHtml = "";
                lHtml += this.getRow("Model", lMoto.dataset.model);
                lHtml += this.getRow("Moteur", lMoto.dataset.moteur);
                lHtml += this.getRow("Puissance Max", lMoto.dataset.puissanceMax);
                lReadDataset.innerHTML = lHtml;
            },
            //===============================================
            getRow: function(key, value, sep=true) {
                var lSep = "";
                if(sep) lSep = " :"
                var lHtml = "";
                lHtml += "<div class='Row'>";
                lHtml += "<div class='Label'>"+ key + lSep+"</div>";
                lHtml += "<div class='Field'>"+ value +"</div>";
                lHtml += "</div>";
                return lHtml;
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
GDataset.Instance().init();
//===============================================

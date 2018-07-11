//===============================================
var GDataset = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.createDataset();
                this.readDataset();
            },
            //===============================================
            createDataset: function() {
                var lMoto = document.getElementById("moto");
                lMoto.dataset.constructeur = "DUCATI";
                lMoto.dataset.pays = "Italie";
            },
            //===============================================
            readDataset: function() {
                var lReadDataset = document.getElementById("ReadDataset");
                var lMoto = document.getElementById("moto");
                var lHtml = "";
                lHtml += "<div class='Row27'>";
                lHtml += this.getRow("Constructeur", lMoto.dataset.constructeur);
                lHtml += this.getRow("Pays", lMoto.dataset.pays);
                lHtml += this.getRow("Model", lMoto.dataset.model);
                lHtml += this.getRow("Moteur", lMoto.dataset.moteur);
                lHtml += this.getRow("Puissance Max", lMoto.dataset.puissanceMax);
                lHtml += "</div>";
                lReadDataset.innerHTML = lHtml;
            },
            //===============================================
            getRow: function(key, value, sep=true) {
                var lSep = "";
                if(sep) lSep = " :"
                var lHtml = "";
                lHtml += "<div class='Row29'>";
                lHtml += "<div class='Label5'>"+ key + lSep+"</div>";
                lHtml += "<div class='Field6'>"+ value +"</div>";
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

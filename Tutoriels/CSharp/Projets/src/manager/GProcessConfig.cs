//===============================================
using System;
//===============================================
public class GProcessConfig : GProcess {
    //===============================================
    private static GProcessConfig m_instance = null;
    //===============================================
    private GProcessConfig() {

    }
    //===============================================
    new public static GProcessConfig Instance() {
        if(m_instance == null) {
            m_instance = new GProcessConfig();
        }
        return m_instance;
    }
    //===============================================
    public override void Run(string[] args) {
        GConfig.Instance().SetData("Nom", "KESSE");
        GConfig.Instance().SetData("Prenom", "Gerard");
        GConfig.Instance().SetData("Email", "gerard.kesse@readydev.com");
        GConfig.Instance().SetData("Diplome", "Ingenieur");
        GConfig.Instance().SetData("Formation", "Informatique Industrielle");
        GConfig.Instance().SetData("Ecole", "Polytech'Montpellier");
        GConfig.Instance().ShowData();
    }
    //===============================================
}
//===============================================

//===============================================
using System;
//===============================================
public class GProcessPrint : GProcess {
    //===============================================
    private static GProcessPrint m_instance = null;
    //===============================================
    private GProcessPrint() {

    }
    //===============================================
    new public static GProcessPrint Instance() {
        if(m_instance == null) {
            m_instance = new GProcessPrint();
        }
        return m_instance;
    }
    //===============================================
    public override void Run(string[] args) {
        GPrint.Instance().Print("Bonjour tout le monde");
    }
    //===============================================
}
//===============================================

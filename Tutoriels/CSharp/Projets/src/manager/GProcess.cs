//===============================================
using System;
//===============================================
public abstract class GProcess {
    //===============================================
    public GProcess() {

    }
    //===============================================
    public static GProcess Instance() {
        string lKey = GConfig.Instance().GetData("PROCESS");
        if(lKey == "PRINT") return GProcessPrint.Instance();
        if(lKey == "CONFIG") return GProcessConfig.Instance();
        return GProcessPrint.Instance();
    }
    //===============================================
    public abstract void Run(string[] args);
    //===============================================
}
//===============================================

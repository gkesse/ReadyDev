//===============================================
using System;
using System.Collections.Generic;
//===============================================
public abstract class GProcess {
    //===============================================
    public static GProcess Instance() {
        string lProcess = GConfig.Instance().getData("PROCESS");
        if(lProcess == "HELLO") return GProcessHello.Instance();
        return GProcessHello.Instance();
    }    
    //===============================================
    public virtual void run(string[] args) {
        GPrint.Instance().print("Bonjour tout le monde _DEFAULT_");
    }
    //===============================================
}
//===============================================

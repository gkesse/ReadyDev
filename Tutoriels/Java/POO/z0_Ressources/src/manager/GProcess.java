//===============================================
package manager;
//===============================================
public abstract class GProcess {
    //===============================================
    public static GProcess Instance() {
        String lProcess = GConfig.Instance().getData("PROCESS");
        if(lProcess == "HELLO") return GProcessHello.Instance();
        return GProcessHello.Instance();
    }
    //===============================================
    public abstract void run(String[] args);
    //===============================================
}
//===============================================

//===============================================
import manager.GProcess;
import manager.GConfig;
//===============================================
public class GMain {
    public static void main(String[] args){
        GConfig.Instance().setData("PROCESS", "BAC");
        GProcess.Instance().run(args);
    }
}
//===============================================

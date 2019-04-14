//===============================================
import manager.GConfig;
import manager.GProcess;
//===============================================
public class GMain {
    public static void main(String[] args){
        GConfig.Instance().setData("PROCESS", "NORMAL");
        GProcess.Instance().run();
    }
}
//===============================================

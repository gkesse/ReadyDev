//===============================================
import manager.GProcess;
import manager.GSetting;
//===============================================
public class GMain {
    public static void main(String[] args){
        GSetting.Instance().load("res/cfg/config.cfg");
        GProcess.Instance().run(args);
    }
}
//===============================================

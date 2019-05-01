//===============================================
import manager.GProcess;
import manager.GSetting;
//===============================================
public class GMain {
    public static void main(String[] args){
    	GSetting.Instance().load("data/config/config.txt");
        GProcess.Instance().run();
    }
}
//===============================================

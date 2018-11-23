//===============================================
package manager;
//===============================================
import java.io.* ; 
//===============================================
public class GSetting {
    //===============================================
    private GSetting() {

    }
    //===============================================
    private static class GSettingHolder {       
        private final static GSetting m_instance = new GSetting();
    }
    //===============================================
    public static GSetting Instance() {
        return GSettingHolder.m_instance;
    }
    //===============================================
    public void load(String file) {
        try {
            InputStream lStream = new FileInputStream(file);
            Reader lReader = new InputStreamReader(lStream, "UTF-8");
            BufferedReader lBuffer = new BufferedReader(lReader);
            String lLine;
            while ((lLine = lBuffer.readLine()) != null) {
                System.out.println(lLine);
            }
        }
        catch(Exception e) {
            System.err.println(e.getMessage());
        }
    }
    //===============================================
}
//===============================================

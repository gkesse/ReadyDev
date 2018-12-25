//===============================================
package manager;
//===============================================
import java.util.Map;
import java.util.HashMap;
import java.util.Iterator;
//===============================================
public class GConfig {
    //===============================================
    private Map<String, String> m_dataMap;
    //===============================================
    private GConfig() {
        m_dataMap = new HashMap<>();
    }
    //===============================================
    private static class GConfigHolder {       
        private final static GConfig m_instance = new GConfig();
    }
    //===============================================
    public static GConfig Instance() {
        return GConfigHolder.m_instance;
    }
    //===============================================
    public void setData(String key, String value) {
        m_dataMap.put(key, value);
    }
    //===============================================
    public String getData(String key) {
        return m_dataMap.get(key);
    }
    //===============================================
    public void showData() {
        Iterator lIterator = m_dataMap.entrySet().iterator();
        while(lIterator.hasNext()) {
            Map.Entry lData = (Map.Entry)lIterator.next();
            System.out.print(lData.getKey() + " = " + lData.getValue() + "\n");
        }
    }
    //===============================================
}
//===============================================

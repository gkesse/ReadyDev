//===============================================
package manager;
//===============================================
import java.util.HashMap;
import java.util.Map;
//===============================================
public class GConfig {
	//===============================================
	private static GConfig m_instance = null; 
	Map<String, String> m_dataMap;
	//===============================================
	public GConfig() { 
		m_dataMap = new HashMap<String, String>();
	} 	
	//===============================================
	public static GConfig Instance() { 
		if(m_instance == null) { 
			m_instance = new GConfig(); 
		}
		return m_instance; 
	} 
	//===============================================
	public void setData(String key, String data) { 
        m_dataMap.put(key, data);
    } 
	//===============================================
	public String getData(String key) { 
        return m_dataMap.get(key);
    } 
	//===============================================
	public void showData() { 
		for(String key: m_dataMap.keySet()) {
            System.out.print(key + " = " + m_dataMap.get(key) + "\n");
		}
	} 
	//===============================================
}
//===============================================

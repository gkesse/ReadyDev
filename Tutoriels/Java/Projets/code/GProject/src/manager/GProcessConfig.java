//===============================================
package manager;
//===============================================
public class GProcessConfig extends GProcess {
	//===============================================
	private static GProcessConfig m_instance = null; 
	//===============================================
	public GProcessConfig() { 

	} 	
	//===============================================
	public static GProcessConfig Instance() { 
		if(m_instance == null) { 
			m_instance = new GProcessConfig(); 
		}
		return m_instance; 
	} 
	//===============================================
	public void run() {
        System.out.print("GProcessConfig\n");
	}
	//===============================================
}
//===============================================

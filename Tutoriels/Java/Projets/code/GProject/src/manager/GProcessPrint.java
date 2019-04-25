//===============================================
package manager;
//===============================================
public class GProcessPrint extends GProcess {
	//===============================================
	private static GProcessPrint m_instance = null; 
	//===============================================
	public GProcessPrint() { 

	} 	
	//===============================================
	public static GProcessPrint Instance() { 
		if(m_instance == null) { 
			m_instance = new GProcessPrint(); 
		}
		return m_instance; 
	} 
	//===============================================
	public void run() {
        GPrint.Instance().print("Bonjour tout le monde\n");
	}
	//===============================================
}
//===============================================

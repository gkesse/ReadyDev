//===============================================
package manager;
//===============================================
public class GProcessNormal extends GProcess {
	//===============================================
	private static GProcessNormal m_instance = null; 
	//===============================================
	public GProcessNormal() { 

	} 	
	//===============================================
	public static GProcessNormal Instance() { 
		if(m_instance == null) { 
			m_instance = new GProcessNormal(); 
		}
		return m_instance; 
	} 
	//===============================================
	public void run() {
        System.out.print("GProcessNormal\n");
	}
	//===============================================
}
//===============================================

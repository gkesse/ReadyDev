//===============================================
package manager;
//===============================================
public class GPrint {
	//===============================================
	private static GPrint m_instance = null; 
	//===============================================
	public GPrint() { 

	} 	
	//===============================================
	public static GPrint Instance() { 
		if(m_instance == null) { 
			m_instance = new GPrint(); 
		}
		return m_instance; 
	} 
	//===============================================
	public void print(String data) { 
		System.out.print(data + "\n");
	} 
	//===============================================
}
//===============================================

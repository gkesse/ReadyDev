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
		GConfig.Instance().setData("Nom", "KESSE");
		GConfig.Instance().setData("Prenom", "Gerard");
		GConfig.Instance().setData("Email", "gerard.kesse@readydev.com");
		GConfig.Instance().setData("Diplome", "Ingenieur");
		GConfig.Instance().setData("Formation", "Informatique Industrielle");
		GConfig.Instance().setData("Ecole", "Polytech'Montpellier");
		GConfig.Instance().showData();
	}
	//===============================================
}
//===============================================

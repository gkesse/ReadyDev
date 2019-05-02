//===============================================
package manager;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

//===============================================
public class GSetting {
	//===============================================
	private static GSetting m_instance = null; 
	//===============================================
	public GSetting() { 

	} 	
	//===============================================
	public static GSetting Instance() { 
		if(m_instance == null) { 
			m_instance = new GSetting(); 
		}
		return m_instance; 
	} 
	//===============================================
	public void load(String file) { 
		try {
			BufferedReader lReader = new BufferedReader(new FileReader(file));
			String lLine = lReader.readLine();
			while(lLine != null) {
				lLine = lLine.trim();
				if(lLine.isEmpty() == false) {	
					if(lLine.charAt(0) != '#') {
						String[] lSplit = lLine.split("=");
						String lKey = lSplit[0].trim();
						String lValue = lSplit[1].trim();
						GConfig.Instance().setData(lKey, lValue);
					}
				}
				lLine = lReader.readLine();
			}
			lReader.close();
			GConfig.Instance().showData();
		}
		catch (IOException e) {
			e.printStackTrace();
		}
	} 
	//===============================================
}
//===============================================

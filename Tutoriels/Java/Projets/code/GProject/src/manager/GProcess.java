//===============================================
package manager;
//===============================================
abstract public class GProcess {
	//===============================================
	public static GProcess Instance() {
		String lKey = GConfig.Instance().getData("PROCESS");
		if(lKey == "CONFIG") return GProcessConfig.Instance();
		if(lKey == "NORMAL") return GProcessNormal.Instance();
		return GProcessConfig.Instance();
	}
	//===============================================
	abstract public void run();
	//===============================================
}
//===============================================

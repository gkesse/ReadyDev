//===============================================
package manager;
//===============================================
abstract public class GProcess {
	//===============================================
	public static GProcess Instance() {
		String lKey = GConfig.Instance().getData("PROCESS");
		if(lKey.equals("PRINT")) return GProcessPrint.Instance();
		if(lKey.equals("CONFIG")) return GProcessConfig.Instance();
		return GProcessPrint.Instance();
	}
	//===============================================
	abstract public void run();
	//===============================================
}
//===============================================

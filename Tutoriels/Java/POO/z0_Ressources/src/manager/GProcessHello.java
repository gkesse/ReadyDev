//===============================================
package manager;
//===============================================
public class GProcessHello extends GProcess {
    //===============================================
    private GProcessHello() {

    }
    //===============================================
    private static class GSingleton {       
        private final static GProcessHello m_instance = new GProcessHello();
    }
    //===============================================
    public static GProcessHello Instance() {
        return GSingleton.m_instance;
    }
    //===============================================
    public void run(String[] args) {
        GPrint.Instance().print("Bonjour tout le monde");
    }
    //===============================================
}
//===============================================

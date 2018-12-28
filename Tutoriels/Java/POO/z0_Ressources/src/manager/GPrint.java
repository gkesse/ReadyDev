//===============================================
package manager;
//===============================================
public class GPrint {
    //===============================================
    private GPrint() {
        
    }
    //===============================================
    private static class GPrintHolder {       
        private final static GPrint m_instance = new GPrint();
    }
    //===============================================
    public static GPrint Instance() {
        return GPrintHolder.m_instance;
    }
    //===============================================
    public void print(String data) {
        System.out.print(data + "\n");
    }
    //===============================================
}
//===============================================

//===============================================
using System;
//===============================================
public class GPrint {
    //===============================================
    private static GPrint m_instance = null;
    //===============================================
    private GPrint() {

    }
    //===============================================
    public static GPrint Instance() {
        if(m_instance == null) {
            m_instance = new GPrint();
        }
        return m_instance;
    }
    //===============================================
    public void Print(string data) {
        Console.Write(data + "\n");
    }
    //===============================================
}
//===============================================

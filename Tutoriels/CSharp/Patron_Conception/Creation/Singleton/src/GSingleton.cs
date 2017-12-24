//===============================================
using System;
//===============================================
public class GSingleton {
    //===============================================
    private GSingleton() {
        Data = "_NO_DATA_";
    }
    //===============================================
    public static GSingleton Instance() {
        if(m_instance == null) {
            m_instance = new GSingleton();
        }
        return m_instance;
    }
    //===============================================
    public void Print() {
        Console.WriteLine(Data);
    }
    //===============================================
    public string Data {get; set;}
    //===============================================
    private static GSingleton m_instance = null;
    //===============================================
}
//===============================================

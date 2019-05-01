//===============================================
using System;
//===============================================
public class GShow {
    //===============================================
    private static GShow m_instance = null;
    //===============================================
    private GShow() {
        
    }
    //===============================================
    public static GShow Instance() {
        if(m_instance == null) {
            m_instance = new GShow();
        }
        return m_instance;
    }
    //===============================================
    public void Show(string data, string name = "") {
        string m_format = "";
        if(name != "") m_format += name + " : ";
        m_format += data;
        Console.WriteLine(m_format);
    }
    //===============================================
    public void Show(int data, string name = "") {
        string m_format = Convert.ToString(data);
        Show(m_format, name);
    }
    //===============================================
    public void Show(double data, string name = "") {
        string m_format = Convert.ToString(data);
        Show(m_format, name);
    }
    //===============================================
}
//===============================================

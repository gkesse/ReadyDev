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
        string lFormat = "";
        if(name != "") lFormat += name + " : ";
        lFormat += data;
        Console.WriteLine(lFormat);
    }
    //===============================================
    public void Show(int data, string name = "") {
        string lFormat = Convert.ToString(data);
        Show(lFormat, name);
    }
    //===============================================
    public void Show(double data, string name = "") {
        string lFormat = Convert.ToString(data);
        Show(lFormat, name);
    }
    //===============================================
}
//===============================================

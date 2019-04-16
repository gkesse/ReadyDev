//===============================================
using System;
using System.Collections.Generic;
//===============================================
public class GConfig {
    //===============================================
    private static GConfig m_instance = null;
    private Dictionary<string, string> m_dataMap;
    //===============================================
    private GConfig() {
        m_dataMap = new Dictionary<string, string>();
    }
    //===============================================
    public static GConfig Instance() {
        if(m_instance == null) {
            m_instance = new GConfig();
        }
        return m_instance;
    }
    //===============================================
    public void SetData(string key, string data) {
        m_dataMap[key] = data;
    }
    //===============================================
    public string GetData(string key) {
        return m_dataMap[key];
    }
    //===============================================
    public void ShowData() {
        foreach (KeyValuePair<string, string> lData in m_dataMap) {
            Console.Write("{0} = {1}\n", lData.Key, lData.Value);
        }
        Console.Write("\n");
    }
    //===============================================
}
//===============================================

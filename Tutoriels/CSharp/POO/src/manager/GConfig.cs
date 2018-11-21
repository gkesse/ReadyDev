//===============================================
using System;
using System.Collections.Generic;
//===============================================
public class GConfig {
    //===============================================
    private static GConfig m_instance;
    static readonly object m_lock = new object();
    private Dictionary<string, string> m_dataMap;
    //===============================================
    private GConfig() {
		m_dataMap = new Dictionary<string, string>();
    }
    //===============================================
    public static GConfig Instance() {
        lock(m_lock) {
            if(m_instance == null) {
               m_instance = new GConfig();
            }
	   	    return m_instance;
        }
    }    
    //===============================================
    public void setData(string key, string value) {
        m_dataMap.Add(key, value);
    }
    //===============================================
    public string getData(string key) {
        return m_dataMap[key];
    }
    //===============================================
    public void showData() {
        foreach(var lData in m_dataMap) {
            Console.WriteLine("{0} = {1}", lData.Key, lData.Value);
        }
    }
    //===============================================
}
//===============================================

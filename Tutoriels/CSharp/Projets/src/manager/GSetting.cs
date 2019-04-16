//===============================================
using System;
using System.Collections.Generic;
using System.IO;
//===============================================
public class GSetting {
    //===============================================
    private static GSetting m_instance = null;
    private const char G_CHAR_COMMENT = '#';
    //===============================================
    private GSetting() {

    }
    //===============================================
    public static GSetting Instance() {
        if(m_instance == null) {
            m_instance = new GSetting();
        }
        return m_instance;
    }
    //===============================================
    public void load(string file) {
        string[] lLineMap = File.ReadAllLines(file);
        char[] lSepMap = new char[] {'='};
        foreach(string lLine in lLineMap) {
            string lTrim = lLine.Trim();
            if(lTrim == "") continue;
            if(lTrim[0] == G_CHAR_COMMENT) continue;
            string[] lSplit = lTrim.Split(lSepMap, StringSplitOptions.RemoveEmptyEntries);
            if(lSplit.Length < 2) continue;
            string lKey = lSplit[0].Trim();
            string lValue = lSplit[1].Trim();
            GConfig.Instance().SetData(lKey, lValue);
        }
        GConfig.Instance().ShowData();
    }
    //===============================================
}
//===============================================

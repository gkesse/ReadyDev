//===============================================
using System;
using System.Collections.Generic;
//===============================================
public class GPrint {
    //===============================================
    private static GPrint m_instance;
    static readonly object m_lock = new object();
    //===============================================
    private GPrint() {
		
    }
    //===============================================
    public static GPrint Instance() {
        lock(m_lock) {
            if(m_instance == null) {
               m_instance = new GPrint();
            }
	   	    return m_instance;
        }
    }    
    //===============================================
    public void print(string data) {
        Console.WriteLine(data);
    }
    //===============================================
}
//===============================================

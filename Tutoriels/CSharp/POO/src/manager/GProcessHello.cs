//===============================================
using System;
using System.Collections.Generic;
//===============================================
public class GProcessHello : GProcess {
    //===============================================
    private static GProcessHello m_instance;
    static readonly object m_lock = new object();
    //===============================================
    private GProcessHello() {
		
    }
    //===============================================
    public static GProcessHello Instance() {
        lock(m_lock) {
            if(m_instance == null) {
               m_instance = new GProcessHello();
            }
	   	    return m_instance;
        }
    }    
    //===============================================
    public override void run(string[] args) {
        GPrint.Instance().print("Bonjour tout le monde");
    }
    //===============================================
}
//===============================================

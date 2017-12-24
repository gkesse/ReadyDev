//===============================================
using System;
//===============================================
public class GMath {
    //===============================================
    private GMath() {
        
    }
    //===============================================
    public static GMath Instance() {
        lock(m_instanceLock) {
            if(m_instance == null) {
                m_instance = new GMath();
            }
            return m_instance;
        }
    }
    //===============================================
    public double Add(double a, double b) {
        double m_data = a + b;
        return m_data;
    }
    //===============================================
    public double Sub(double a, double b) {
        double m_data = a - b;
        return m_data;
    }
    //===============================================
    public double Mul(double a, double b) {
        double m_data = a * b;
        return m_data;
    }
    //===============================================
    public double Div(double a, double b) {
        double m_data = a / b;
        return m_data;
    }
    //===============================================
    private static GMath m_instance = null;
    private static readonly object m_instanceLock = new object();
    //===============================================
}
//===============================================

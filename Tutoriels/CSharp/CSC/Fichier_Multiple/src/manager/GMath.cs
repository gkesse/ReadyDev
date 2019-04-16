//===============================================
using System;
//===============================================
public class GMath {
    //===============================================
    private static GMath m_instance = null;
    //===============================================
    private GMath() {
        
    }
    //===============================================
    public static GMath Instance() {
        if(m_instance == null) {
            m_instance = new GMath();
        }
        return m_instance;
    }
    //===============================================
    public double Add(double a, double b) {
        double lData = a + b;
        return lData;
    }
    //===============================================
    public double Sub(double a, double b) {
        double lData = a - b;
        return lData;
    }
    //===============================================
    public double Mul(double a, double b) {
        double lData = a * b;
        return lData;
    }
    //===============================================
    public double Div(double a, double b) {
        double lData = a / b;
        return lData;
    }
    //===============================================
}
//===============================================

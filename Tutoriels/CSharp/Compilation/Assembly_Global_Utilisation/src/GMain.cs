//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        double a = 22;
        double b = 7;
        double m_data;
        
        m_data = GMath.Instance().Add(a, b);
        GShow.Instance().Show(m_data, "Add");
        m_data = GMath.Instance().Sub(a, b);
        GShow.Instance().Show(m_data, "Sub");
        m_data = GMath.Instance().Mul(a, b);
        GShow.Instance().Show(m_data, "Mul");
        m_data = GMath.Instance().Div(a, b);
        GShow.Instance().Show(m_data, "Div");
    }
}
//===============================================

//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        double a = 22;
        double b = 7;
        double lData;
        
        lData = GMath.Instance().Add(a, b);
        GShow.Instance().Show(lData, "Add(22, 7)");
        lData = GMath.Instance().Sub(a, b);
        GShow.Instance().Show(lData, "Sub(22, 7)");
        lData = GMath.Instance().Mul(a, b);
        GShow.Instance().Show(lData, "Mul(22, 7)");
        lData = GMath.Instance().Div(a, b);
        GShow.Instance().Show(lData, "Div(22, 7)");
    }
}
//===============================================

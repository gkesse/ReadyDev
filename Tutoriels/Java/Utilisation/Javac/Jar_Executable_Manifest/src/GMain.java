//===============================================
import manager.GMath;
//===============================================
public class GMain {
    public static void main(String[] args){
        double m_add = GMath.add(22, 7);
        System.out.printf("add: %.2f%n", m_add);
        
        double m_sub = GMath.sub(22, 7);
        System.out.printf("sub: %.2f%n", m_sub);
        
        double m_mul = GMath.mul(22, 7);
        System.out.printf("mul: %.2f%n", m_mul);
        
        double m_div = GMath.div(22, 7);
        System.out.printf("div: %.2f%n", m_div);
        
        int m_mod = GMath.mod(22, 7);
        System.out.printf("mod: %d%n", m_mod);        
    }
}
//===============================================

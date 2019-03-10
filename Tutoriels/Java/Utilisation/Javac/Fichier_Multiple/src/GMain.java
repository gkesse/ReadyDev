//===============================================
public class GMain {
    public static void main(String[] args){
        double lAdd = GMath.add(22, 7);
        System.out.printf("add(22, 7): %.2f%n", lAdd);
        
        double lSub = GMath.sub(22, 7);
        System.out.printf("sub(22, 7): %.2f%n", lSub);
        
        double lMul = GMath.mul(22, 7);
        System.out.printf("mul(22, 7): %.2f%n", lMul);
        
        double lDiv = GMath.div(22, 7);
        System.out.printf("div(22, 7): %.2f%n", lDiv);
        
        int lMod = GMath.mod(22, 7);
        System.out.printf("mod(22, 7): %d%n", lMod);        
    }
}
//===============================================

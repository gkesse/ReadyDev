//===============================================
#include "GMaxtrix.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Surcharge Operateur\n\n";

    double lDataA[] = {1,2,3,4,5,6,7,8,9,10,11,12};
    double lDataB[] = {12,13,14,15,16,17,18,19,20,21,22,23,24};
    GMaxtrix lMatA(4, 3, lDataA);
    GMaxtrix lMatB(4, 3, lDataB);
    cout << "A:\n\n"<< lMatA << "\n";
    cout << "B:\n\n"<< lMatB << "\n";

    lMatA += lMatB;
    cout << "Operateur A += B:\n\n"<< lMatA << "\n";

    GMaxtrix lMatC(lMatA);
    lMatC.setData(0, 0, 100);
    cout << "Copie A:\n\n"<< lMatC << "\n";

    double lDataD[] = {25,26,27,28,29,30,31,32,33,34,35,36,37};
    GMaxtrix lMatD(3, 2, lDataD);
    cout << "D:\n\n"<< lMatD << "\n";

    lMatD = lMatA;
    cout << "Affectation D = A:\n\n"<< lMatD << "\n";


    return 0;
}
//===============================================

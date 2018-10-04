//===============================================
#include "GProcessFunctionalProgramming.h"
//===============================================
GProcessFunctionalProgramming* GProcessFunctionalProgramming::m_instance = 0;
//===============================================
GProcessFunctionalProgramming::GProcessFunctionalProgramming() {

}
//===============================================
GProcessFunctionalProgramming::~GProcessFunctionalProgramming() {

}
//===============================================
GProcessFunctionalProgramming* GProcessFunctionalProgramming::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessFunctionalProgramming;
    }
    return m_instance;
}
//===============================================
void GProcessFunctionalProgramming::run(int argc, char **argv) {
    cout << "\n### Programmation fonctionnelle\n\n";
    double dReal1 = randData(-10, 10);
    double dImg1 = randData(-10, 10);
    double dReal2 = randData(-10, 10);
    double dImg2 = randData(-10, 10);
    double dReal = 0;
    double dImg = 0;

    complexAdd(dReal1, dImg1, dReal2, dImg2, dReal, dImg);
    cout << "z1: (" << dReal1 << ") + (" << dImg1 << ")i" << "\n";
    cout << "z2: (" << dReal2 << ") + (" << dImg2 << ")i" << "\n";
    cout << "z1 + z2: (" << dReal << ") + (" << dImg << ")i" << "\n";
}
//===============================================
void GProcessFunctionalProgramming::complexAdd(double dReal1, double dImg1, double dReal2, double dImg2, double& dReal, double& dImg) {
    dReal = dReal1 + dReal2;
    dImg = dImg1 + dImg2;
}
//===============================================

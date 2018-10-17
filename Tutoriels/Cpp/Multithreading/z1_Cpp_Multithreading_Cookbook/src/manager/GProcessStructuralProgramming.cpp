//===============================================
#include "GProcessStructuralProgramming.h"
//===============================================
GProcessStructuralProgramming* GProcessStructuralProgramming::m_instance = 0;
//===============================================
GProcessStructuralProgramming::GProcessStructuralProgramming() {

}
//===============================================
GProcessStructuralProgramming::~GProcessStructuralProgramming() {

}
//===============================================
GProcessStructuralProgramming* GProcessStructuralProgramming::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessStructuralProgramming;
    }
    return m_instance;
}
//===============================================
void GProcessStructuralProgramming::run(int argc, char **argv) {
    cout << "\n### Programmation structurelle\n\n";
    GComplex c1;
    c1.dReal = randData(-10, 10);
    c1.dImg = randData(-10, 10);

    GComplex c2;
    c2.dReal = randData(-10, 10);
    c2.dImg = randData(-10, 10);

    GComplex c = complexAdd(c1, c2);

    cout << "z1: (" << c1.dReal << ") + (" << c1.dImg << ")i" << "\n";
    cout << "z2: (" << c2.dReal << ") + (" << c2.dImg << ")i" << "\n";
    cout << "z1 + z2: (" << c.dReal << ") + (" << c.dImg << ")i" << "\n";
}
//===============================================
GComplex GProcessStructuralProgramming::complexAdd(const GComplex &c1, const GComplex &c2) {
    GComplex c;
    c.dReal = c1.dReal + c2.dReal;
    c.dImg = c1.dImg + c2.dImg;
    return c;
}
//===============================================

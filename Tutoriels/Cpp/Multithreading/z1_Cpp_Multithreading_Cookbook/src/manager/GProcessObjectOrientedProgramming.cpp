//===============================================
#include "GProcessObjectOrientedProgramming.h"
//===============================================
GProcessObjectOrientedProgramming* GProcessObjectOrientedProgramming::m_instance = 0;
//===============================================
GProcessObjectOrientedProgramming::GProcessObjectOrientedProgramming() {

}
//===============================================
GProcessObjectOrientedProgramming::~GProcessObjectOrientedProgramming() {

}
//===============================================
GProcessObjectOrientedProgramming* GProcessObjectOrientedProgramming::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessObjectOrientedProgramming;
    }
    return m_instance;
}
//===============================================
void GProcessObjectOrientedProgramming::run(int argc, char **argv) {
    cout << "\n### Programmation orientee objet\n\n";
    GComplex2 c1(randData(-10, 10), randData(-10, 10));
    GComplex2 c2(randData(-10, 10), randData(-10, 10));
    GComplex2 c = c1 + c2;

    cout << "z1: " << c1 << "\n";
    cout << "z2: " << c2 << "\n";
    cout << "z1 + z2: " << c << "\n";
}
//===============================================
GComplex2::GComplex2() {
    m_dReal = 0;
    m_dImg = 0;
}
//===============================================
GComplex2::GComplex2(double dReal, double dImg) {
    m_dReal = dReal;
    m_dImg = dImg;
}
//===============================================
double GComplex2::real() const {
    return m_dReal;
}
//===============================================
double GComplex2::img() const {
    return m_dImg;
}
//===============================================
GComplex2 operator+(const GComplex2& c1, const GComplex2& c2) {
    GComplex2 c(c1.m_dReal + c2.m_dReal, c1.m_dImg + c2.m_dImg);
    return c;
}
//===============================================
ostream& operator<<(ostream& os, const GComplex2& c) {
    return os << "(" << c.m_dReal<< ") + (" <<c.m_dImg << ")i";
}
//===============================================

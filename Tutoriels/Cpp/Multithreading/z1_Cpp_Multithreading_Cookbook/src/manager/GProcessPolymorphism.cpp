//===============================================
#include "GProcessPolymorphism.h"
//===============================================
GProcessPolymorphism* GProcessPolymorphism::m_instance = 0;
//===============================================
GProcessPolymorphism::GProcessPolymorphism() {

}
//===============================================
GProcessPolymorphism::~GProcessPolymorphism() {

}
//===============================================
GProcessPolymorphism* GProcessPolymorphism::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPolymorphism;
    }
    return m_instance;
}
//===============================================
void GProcessPolymorphism::run(int argc, char **argv) {
    cout << "\n### Polymorphisme\n\n";
    GFigure* lFigures[3];
    lFigures[0] = new GTriangle(2.1, 3.2, 4.3);
    lFigures[1] = new GSquare(5.4, 6.5);
    lFigures[2] = new GCircle(8.8);

    for (int i = 0; i < 3; i++) {
        cout << "Type de figure: " << lFigures[i]->figureType() << "\n"
             << "Circumference: " << lFigures[i]->circumference() << "\n"
             << "Area: " << lFigures[i]->area() << "\n\n";
    }
}
//===============================================
// GTriangle
//===============================================
GTriangle::GTriangle() {
    m_a = m_b = m_c = 0;
}
//===============================================
GTriangle::GTriangle(double a, double b, double c) {
    m_a = a;
    m_b = b;
    m_c = c;
}
//===============================================
string GTriangle::figureType() {
    return "Triangle";
}
//===============================================
double GTriangle::circumference() {
    return m_a + m_b + m_c;
}
//===============================================
double GTriangle::area() {
    double S = circumference() / 2;
    return  sqrt(S * (S - m_a) * (S - m_b) * (S - m_c));
}
//===============================================
// GSquare
//===============================================
GSquare::GSquare() {
    m_a = m_b = 0;
}
//===============================================
GSquare::GSquare(double a, double b) {
    m_a = a;
    m_b = b;
}
//===============================================
string GSquare::figureType() {
    return "Carre";
}
//===============================================
double GSquare::circumference() {
    return 2*(m_a + m_b);
}
//===============================================
double GSquare::area() {
    return m_a*m_b;
}
//===============================================
// GCircle
//===============================================
GCircle::GCircle() {
    m_r = 0;
}
//===============================================
GCircle::GCircle(double r) {
    m_r = r;
}
//===============================================
string GCircle::figureType() {
    return "Cercle";
}
//===============================================
double GCircle::circumference() {
    return 2*M_PI*m_r;
}
//===============================================
double GCircle::area() {
    return M_PI*m_r*m_r;
}
//===============================================

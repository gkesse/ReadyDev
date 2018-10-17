//===============================================
#include "GProcessStructuredBindingStruct.h"
//===============================================
GProcessStructuredBindingStruct* GProcessStructuredBindingStruct::m_instance = 0;
//===============================================
GProcessStructuredBindingStruct::GProcessStructuredBindingStruct() {

}
//===============================================
GProcessStructuredBindingStruct::~GProcessStructuredBindingStruct() {

}
//===============================================
GProcessStructuredBindingStruct* GProcessStructuredBindingStruct::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessStructuredBindingStruct;
    }
    return m_instance;
}
//===============================================
void GProcessStructuredBindingStruct::run() {
    cout << "\n### Liaison structuree avec une structure\n\n";
    auto lDivide = divide(16, 3);
    int lFraction = lDivide.fraction;
    int lRemainder = lDivide.remainder;
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction << "\n";
    cout << "Reste: " << lRemainder << "\n";

    cout << "\n### Liaison structuree avec une structure C++17\n\n";
    auto [lFraction2, lRemainder2] = divide(16, 3);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction2 << "\n";
    cout << "Reste: " << lRemainder2 << "\n";
}
//===============================================
GStruct GProcessStructuredBindingStruct::divide(int dividend, int divisor) {
    GStruct lDivide;
    int lFraction = dividend / divisor;
    int lRemainder = dividend % divisor;
    lDivide.fraction = lFraction;
    lDivide.remainder = lRemainder;
    return lDivide;
}
//===============================================

//===============================================
#include "GProcessStructuredBinding.h"
//===============================================
GProcessStructuredBinding* GProcessStructuredBinding::m_instance = 0;
//===============================================
GProcessStructuredBinding::GProcessStructuredBinding() {

}
//===============================================
GProcessStructuredBinding::~GProcessStructuredBinding() {

}
//===============================================
GProcessStructuredBinding* GProcessStructuredBinding::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessStructuredBinding;
    }
    return m_instance;
}
//===============================================
void GProcessStructuredBinding::run() {
    cout << "\n### Liaison structuree avec pair\n\n";
    auto lDivide = divide(16, 3);
    int lFraction = lDivide.first;
    int lRemainder = lDivide.second;
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction << "\n";
    cout << "Reste: " << lRemainder << "\n";

    cout << "\n### Liaison structuree avec pair C++17\n\n";
    auto [lFraction2, lRemainder2] = divide(16, 3);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction2 << "\n";
    cout << "Reste: " << lRemainder2 << "\n";
}
//===============================================
pair<int, int> GProcessStructuredBinding::divide(int dividend, int divisor) {
    pair<int, int> lDivide;
    int lFraction = dividend / divisor;
    int lRemainder = dividend % divisor;
    lDivide.first = lFraction;
    lDivide.second = lRemainder;
    return lDivide;
}
//===============================================

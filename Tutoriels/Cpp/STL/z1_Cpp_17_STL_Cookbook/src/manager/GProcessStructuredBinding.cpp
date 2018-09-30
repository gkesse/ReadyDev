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
    cout << "\n### Decompresser des donnees\n\n";
    auto lDivide = divide(16, 3);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lDivide.first << "\n";
    cout << "Reste: " << lDivide.second << "\n";

    cout << "\n### Decompresser des donnees C++17\n\n";
    auto [fraction, remainder] = divide(16, 3);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << fraction << "\n";
    cout << "Reste: " << remainder << "\n";
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

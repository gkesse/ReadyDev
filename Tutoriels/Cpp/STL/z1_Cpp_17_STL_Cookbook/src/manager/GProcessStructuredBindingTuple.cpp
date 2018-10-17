//===============================================
#include "GProcessStructuredBindingTuple.h"
//===============================================
GProcessStructuredBindingTuple* GProcessStructuredBindingTuple::m_instance = 0;
//===============================================
GProcessStructuredBindingTuple::GProcessStructuredBindingTuple() {

}
//===============================================
GProcessStructuredBindingTuple::~GProcessStructuredBindingTuple() {

}
//===============================================
GProcessStructuredBindingTuple* GProcessStructuredBindingTuple::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessStructuredBindingTuple;
    }
    return m_instance;
}
//===============================================
void GProcessStructuredBindingTuple::run() {
    cout << "\n### Liaison structuree avec tuple\n\n";
    auto lDivide = divide(16, 3);
    int lFraction = get<0>(lDivide);
    int lRemainder = get<0>(lDivide);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction << "\n";
    cout << "Reste: " << lRemainder << "\n";

    cout << "\n### Liaison structuree avec tuple C++17\n\n";
    auto [lFraction2, lRemainder2] = divide(16, 3);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction2 << "\n";
    cout << "Reste: " << lRemainder2 << "\n";
}
//===============================================
tuple<int, int> GProcessStructuredBindingTuple::divide(int dividend, int divisor) {
    tuple<int, int> lDivide;
    int lFraction = dividend / divisor;
    int lRemainder = dividend % divisor;
    get<0>(lDivide) = lFraction;
    get<1>(lDivide) = lRemainder;
    return lDivide;
}
//===============================================

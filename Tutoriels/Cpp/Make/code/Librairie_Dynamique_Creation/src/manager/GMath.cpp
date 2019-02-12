//===============================================
#include "GMath.h"
//===============================================
GMath* GMath::m_instance = 0;
//===============================================
GMath::GMath() {

}
//===============================================
GMath::~GMath() {

}
//===============================================
GMath* GMath::Instance() {
    if(m_instance == 0) {
        m_instance = new GMath;
    }
    
    return m_instance;
}
//===============================================
double GMath::add(const double& a, const double& b) {
    double lData = a + b;
    return lData;
}
//===============================================
double GMath::subtract(const double& a, const double& b) {
    double lData = a - b;
    return lData;
}
//===============================================
double GMath::multiply(const double& a, const double& b) {
    double lData = a * b;
    return lData;
}
//===============================================
double GMath::divide(const double& a, const double& b) {
    double lData = a / b;
    return lData;
}
//===============================================
double GMath::quotient(const double& a, const double& b) {
    double lData = floor(divide(a, b));
    return lData;
}
//===============================================
double GMath::modulo(const int& a, const int& b) {
    int lData = a % b;
    return double(lData);
}
//===============================================

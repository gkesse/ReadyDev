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
    double m_data = a + b;
    return m_data;
}
//===============================================
double GMath::subtract(const double& a, const double& b) {
    double m_data = a - b;
    return m_data;
}
//===============================================
double GMath::multiply(const double& a, const double& b) {
    double m_data = a * b;
    return m_data;
}
//===============================================
double GMath::divide(const double& a, const double& b) {
    double m_data = a / b;
    return m_data;
}
//===============================================
double GMath::quotient(const double& a, const double& b) {
    double m_data = floor(divide(a, b));
    return m_data;
}
//===============================================
double GMath::modulo(const int& a, const int& b) {
    int m_data = a % b;
    return double(m_data);
}
//===============================================

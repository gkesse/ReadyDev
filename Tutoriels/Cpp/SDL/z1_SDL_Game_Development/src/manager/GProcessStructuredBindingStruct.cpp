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
}
//===============================================
GStruct GProcessStructuredBindingStruct::divide(int dividend, int divisor) {
    GStruct lDivide;
    return lDivide;
}
//===============================================

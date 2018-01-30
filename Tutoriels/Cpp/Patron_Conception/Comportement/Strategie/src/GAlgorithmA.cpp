//===============================================
#include "GAlgorithmA.h"
//===============================================
GAlgorithmA* GAlgorithmA::m_instance = 0;
//===============================================
GAlgorithmA::GAlgorithmA() {

}
//===============================================
GAlgorithmA::~GAlgorithmA() {

}
//===============================================
GAlgorithmA* GAlgorithmA::Instance() {
    if(m_instance == 0) {
        m_instance = new GAlgorithmA;
    }
    return m_instance;
}
//===============================================
void GAlgorithmA::execute() {
    cout << "Strategy : Algorithm A\n";
}
//===============================================

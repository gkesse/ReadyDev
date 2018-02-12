//===============================================
#include "GAlgorithmB.h"
//===============================================
GAlgorithmB* GAlgorithmB::m_instance = 0;
//===============================================
GAlgorithmB::GAlgorithmB() {

}
//===============================================
GAlgorithmB::~GAlgorithmB() {

}
//===============================================
GAlgorithmB* GAlgorithmB::Instance() {
    if(m_instance == 0) {
        m_instance = new GAlgorithmB;
    }
    return m_instance;
}
//===============================================
void GAlgorithmB::execute() {
    cout << "Strategy : Algorithm B\n";
}
//===============================================

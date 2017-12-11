//===============================================
#include "GAdaptor.h"
//===============================================
GAdaptor::GAdaptor() {
    m_architect = new GArchitect;
}
//===============================================
GAdaptor::~GAdaptor() {
    delete m_architect;
}
//===============================================
void GAdaptor::writeCode() {
    cout << "Adaptor : ";
    cout << m_architect->getCode() << "\n";
}
//===============================================

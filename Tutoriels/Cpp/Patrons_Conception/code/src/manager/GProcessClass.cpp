//===============================================
#include "GProcessClass.h"
//===============================================
GProcessClass* GProcessClass::m_instance = 0;
//===============================================
GProcessClass::GProcessClass() {

}
//===============================================
GProcessClass::~GProcessClass() {

}
//===============================================
GProcessClass* GProcessClass::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessClass;
    }
    return m_instance;
}
//===============================================
void GProcessClass::run(int argc, char **argv) {
    cout << "Bonjour...\n";
}
//===============================================

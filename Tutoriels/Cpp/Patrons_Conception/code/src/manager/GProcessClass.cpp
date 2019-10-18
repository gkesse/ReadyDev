//===============================================
#include "GProcessClass.h"
#include "GPerson.h"
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
    GPerson* lPerson = new GPerson;
    lPerson->setName("Gerard KESSE");
    lPerson->print();
    lPerson->setName("Deborah YOBOUE");
    lPerson->print();
    delete lPerson;
}
//===============================================

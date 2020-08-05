//===============================================
#include "GProcessPromotedClass.h"
#include "GPromotedClassUi.h"
//===============================================
GProcessPromotedClass* GProcessPromotedClass::m_instance = 0;
//===============================================
GProcessPromotedClass::GProcessPromotedClass() {

}
//===============================================
GProcessPromotedClass::~GProcessPromotedClass() {

}
//===============================================
GProcessPromotedClass* GProcessPromotedClass::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPromotedClass;
    }
    return m_instance;
}
//===============================================
void GProcessPromotedClass::run() {
    GPromotedClassUi *mainWin = new GPromotedClassUi;
    mainWin->show();
}
//===============================================

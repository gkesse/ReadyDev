//===============================================
#include "GProcessPromotedClass.h"
#include "GPromotedClass.h"
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
    GPromotedClass *spinBox = new GPromotedClass;
    spinBox->setWindowTitle(QObject::tr("Hex Spin Box"));
    spinBox->show();
}
//===============================================

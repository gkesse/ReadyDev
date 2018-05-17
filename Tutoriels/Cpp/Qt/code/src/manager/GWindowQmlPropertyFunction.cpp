//===============================================
#include "GWindowQmlPropertyFunction.h"
//===============================================
GWindowQmlPropertyFunction* GWindowQmlPropertyFunction::m_instance = 0;
//===============================================
GWindowQmlPropertyFunction::GWindowQmlPropertyFunction() {

}
//===============================================
GWindowQmlPropertyFunction::~GWindowQmlPropertyFunction() {

}
//===============================================
GWindowQmlPropertyFunction* GWindowQmlPropertyFunction::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlPropertyFunction;
    }
    return m_instance;
}
//===============================================
void GWindowQmlPropertyFunction::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlPropertyFunction.qml")));
}
//===============================================

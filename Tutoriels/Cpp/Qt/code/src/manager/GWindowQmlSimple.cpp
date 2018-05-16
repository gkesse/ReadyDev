//===============================================
#include "GWindowQmlSimple.h"
//===============================================
GWindowQmlSimple* GWindowQmlSimple::m_instance = 0;
//===============================================
GWindowQmlSimple::GWindowQmlSimple() {

}
//===============================================
GWindowQmlSimple::~GWindowQmlSimple() {

}
//===============================================
GWindowQmlSimple* GWindowQmlSimple::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlSimple;
    }
    return m_instance;
}
//===============================================
void GWindowQmlSimple::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlSimple.qml")));
}
//===============================================

//===============================================
#include "GWindowQmlImplicit.h"
//===============================================
GWindowQmlImplicit* GWindowQmlImplicit::m_instance = 0;
//===============================================
GWindowQmlImplicit::GWindowQmlImplicit() {

}
//===============================================
GWindowQmlImplicit::~GWindowQmlImplicit() {

}
//===============================================
GWindowQmlImplicit* GWindowQmlImplicit::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlImplicit;
    }
    return m_instance;
}
//===============================================
void GWindowQmlImplicit::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlImplicit.qml")));
}
//===============================================

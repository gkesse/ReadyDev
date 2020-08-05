//===============================================
#include "GWindowQmlPropertyCreate.h"
//===============================================
GWindowQmlPropertyCreate* GWindowQmlPropertyCreate::m_instance = 0;
//===============================================
GWindowQmlPropertyCreate::GWindowQmlPropertyCreate() {

}
//===============================================
GWindowQmlPropertyCreate::~GWindowQmlPropertyCreate() {

}
//===============================================
GWindowQmlPropertyCreate* GWindowQmlPropertyCreate::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlPropertyCreate;
    }
    return m_instance;
}
//===============================================
void GWindowQmlPropertyCreate::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlPropertyCreate.qml")));
}
//===============================================

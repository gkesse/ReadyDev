//===============================================
#include "GWindowQmlPropertyBind.h"
//===============================================
GWindowQmlPropertyBind* GWindowQmlPropertyBind::m_instance = 0;
//===============================================
GWindowQmlPropertyBind::GWindowQmlPropertyBind() {

}
//===============================================
GWindowQmlPropertyBind::~GWindowQmlPropertyBind() {

}
//===============================================
GWindowQmlPropertyBind* GWindowQmlPropertyBind::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlPropertyBind;
    }
    return m_instance;
}
//===============================================
void GWindowQmlPropertyBind::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlPropertyBind.qml")));
}
//===============================================

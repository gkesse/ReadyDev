//===============================================
#include "GWindowQmlRect.h"
//===============================================
GWindowQmlRect* GWindowQmlRect::m_instance = 0;
//===============================================
GWindowQmlRect::GWindowQmlRect() {

}
//===============================================
GWindowQmlRect::~GWindowQmlRect() {

}
//===============================================
GWindowQmlRect* GWindowQmlRect::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlRect;
    }
    return m_instance;
}
//===============================================
void GWindowQmlRect::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlRect.qml")));
}
//===============================================

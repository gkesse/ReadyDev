//===============================================
#include "GWindowQmlEventHover.h"
//===============================================
GWindowQmlEventHover* GWindowQmlEventHover::m_instance = 0;
//===============================================
GWindowQmlEventHover::GWindowQmlEventHover() {

}
//===============================================
GWindowQmlEventHover::~GWindowQmlEventHover() {

}
//===============================================
GWindowQmlEventHover* GWindowQmlEventHover::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlEventHover;
    }
    return m_instance;
}
//===============================================
void GWindowQmlEventHover::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlEventHover.qml")));
}
//===============================================

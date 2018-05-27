//===============================================
#include "GWindowQmlEventPressed.h"
//===============================================
GWindowQmlEventPressed* GWindowQmlEventPressed::m_instance = 0;
//===============================================
GWindowQmlEventPressed::GWindowQmlEventPressed() {

}
//===============================================
GWindowQmlEventPressed::~GWindowQmlEventPressed() {

}
//===============================================
GWindowQmlEventPressed* GWindowQmlEventPressed::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlEventPressed;
    }
    return m_instance;
}
//===============================================
void GWindowQmlEventPressed::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlEventPressed.qml")));
}
//===============================================

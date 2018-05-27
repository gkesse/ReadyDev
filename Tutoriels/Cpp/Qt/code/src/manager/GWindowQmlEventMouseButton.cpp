//===============================================
#include "GWindowQmlEventMouseButton.h"
//===============================================
GWindowQmlEventMouseButton* GWindowQmlEventMouseButton::m_instance = 0;
//===============================================
GWindowQmlEventMouseButton::GWindowQmlEventMouseButton() {

}
//===============================================
GWindowQmlEventMouseButton::~GWindowQmlEventMouseButton() {

}
//===============================================
GWindowQmlEventMouseButton* GWindowQmlEventMouseButton::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlEventMouseButton;
    }
    return m_instance;
}
//===============================================
void GWindowQmlEventMouseButton::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlEventMouseButton.qml")));
}
//===============================================

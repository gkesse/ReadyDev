//===============================================
#include "GWindowQmlEventPinch.h"
//===============================================
GWindowQmlEventPinch* GWindowQmlEventPinch::m_instance = 0;
//===============================================
GWindowQmlEventPinch::GWindowQmlEventPinch() {

}
//===============================================
GWindowQmlEventPinch::~GWindowQmlEventPinch() {

}
//===============================================
GWindowQmlEventPinch* GWindowQmlEventPinch::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlEventPinch;
    }
    return m_instance;
}
//===============================================
void GWindowQmlEventPinch::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlEventPinch.qml")));
}
//===============================================

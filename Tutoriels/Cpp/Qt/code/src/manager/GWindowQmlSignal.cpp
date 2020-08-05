//===============================================
#include "GWindowQmlSignal.h"
//===============================================
GWindowQmlSignal* GWindowQmlSignal::m_instance = 0;
//===============================================
GWindowQmlSignal::GWindowQmlSignal() {

}
//===============================================
GWindowQmlSignal::~GWindowQmlSignal() {

}
//===============================================
GWindowQmlSignal* GWindowQmlSignal::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlSignal;
    }
    return m_instance;
}
//===============================================
void GWindowQmlSignal::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlSignal.qml")));
}
//===============================================

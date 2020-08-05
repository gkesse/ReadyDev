//===============================================
#include "GWindowQmlConsole.h"
//===============================================
GWindowQmlConsole* GWindowQmlConsole::m_instance = 0;
//===============================================
GWindowQmlConsole::GWindowQmlConsole() {

}
//===============================================
GWindowQmlConsole::~GWindowQmlConsole() {

}
//===============================================
GWindowQmlConsole* GWindowQmlConsole::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlConsole;
    }
    return m_instance;
}
//===============================================
void GWindowQmlConsole::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlConsole.qml")));
}
//===============================================

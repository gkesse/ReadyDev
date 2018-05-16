//===============================================
#include "GWindowQmlTitle.h"
//===============================================
GWindowQmlTitle* GWindowQmlTitle::m_instance = 0;
//===============================================
GWindowQmlTitle::GWindowQmlTitle() {

}
//===============================================
GWindowQmlTitle::~GWindowQmlTitle() {

}
//===============================================
GWindowQmlTitle* GWindowQmlTitle::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlTitle;
    }
    return m_instance;
}
//===============================================
void GWindowQmlTitle::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlTitle.qml")));
}
//===============================================

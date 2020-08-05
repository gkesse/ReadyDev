//===============================================
#include "GWindowQml.h"
//===============================================
GWindowQml* GWindowQml::m_instance = 0;
//===============================================
GWindowQml::GWindowQml() {

}
//===============================================
GWindowQml::~GWindowQml() {

}
//===============================================
GWindowQml* GWindowQml::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQml;
    }
    return m_instance;
}
//===============================================
void GWindowQml::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQml.qml")));
}
//===============================================

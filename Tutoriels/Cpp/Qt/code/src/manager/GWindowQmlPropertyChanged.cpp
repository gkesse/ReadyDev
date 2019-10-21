//===============================================
#include "GWindowQmlPropertyAlias.h"
//===============================================
GWindowQmlPropertyAlias* GWindowQmlPropertyAlias::m_instance = 0;
//===============================================
GWindowQmlPropertyAlias::GWindowQmlPropertyAlias() {

}
//===============================================
GWindowQmlPropertyAlias::~GWindowQmlPropertyAlias() {

}
//===============================================
GWindowQmlPropertyAlias* GWindowQmlPropertyAlias::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlPropertyAlias;
    }
    return m_instance;
}
//===============================================
void GWindowQmlPropertyAlias::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlPropertyAlias.qml")));
}
//===============================================

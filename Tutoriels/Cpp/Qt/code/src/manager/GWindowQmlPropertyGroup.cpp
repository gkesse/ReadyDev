//===============================================
#include "GWindowQmlPropertyGroup.h"
//===============================================
GWindowQmlPropertyGroup* GWindowQmlPropertyGroup::m_instance = 0;
//===============================================
GWindowQmlPropertyGroup::GWindowQmlPropertyGroup() {

}
//===============================================
GWindowQmlPropertyGroup::~GWindowQmlPropertyGroup() {

}
//===============================================
GWindowQmlPropertyGroup* GWindowQmlPropertyGroup::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlPropertyGroup;
    }
    return m_instance;
}
//===============================================
void GWindowQmlPropertyGroup::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlPropertyGroup.qml")));
}
//===============================================

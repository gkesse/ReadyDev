//===============================================
#include "GWindowQmlPropertyCondition.h"
//===============================================
GWindowQmlPropertyCondition* GWindowQmlPropertyCondition::m_instance = 0;
//===============================================
GWindowQmlPropertyCondition::GWindowQmlPropertyCondition() {

}
//===============================================
GWindowQmlPropertyCondition::~GWindowQmlPropertyCondition() {

}
//===============================================
GWindowQmlPropertyCondition* GWindowQmlPropertyCondition::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlPropertyCondition;
    }
    return m_instance;
}
//===============================================
void GWindowQmlPropertyCondition::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlPropertyCondition.qml")));
}
//===============================================

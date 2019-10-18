//===============================================
#include "GWindowQmlButtonIcon.h"
//===============================================
GWindowQmlButtonIcon* GWindowQmlButtonIcon::m_instance = 0;
//===============================================
GWindowQmlButtonIcon::GWindowQmlButtonIcon() {

}
//===============================================
GWindowQmlButtonIcon::~GWindowQmlButtonIcon() {

}
//===============================================
GWindowQmlButtonIcon* GWindowQmlButtonIcon::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlButtonIcon;
    }
    return m_instance;
}
//===============================================
void GWindowQmlButtonIcon::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlButtonIcon.qml")));
}
//===============================================

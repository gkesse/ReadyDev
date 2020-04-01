//===============================================
#include "GWindowQmlButtonText.h"
//===============================================
GWindowQmlButtonText* GWindowQmlButtonText::m_instance = 0;
//===============================================
GWindowQmlButtonText::GWindowQmlButtonText() {

}
//===============================================
GWindowQmlButtonText::~GWindowQmlButtonText() {

}
//===============================================
GWindowQmlButtonText* GWindowQmlButtonText::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlButtonText;
    }
    return m_instance;
}
//===============================================
void GWindowQmlButtonText::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlButtonText.qml")));
}
//===============================================

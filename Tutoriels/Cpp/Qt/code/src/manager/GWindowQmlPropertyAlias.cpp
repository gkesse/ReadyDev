//===============================================
#include "GWindowQmlPropertyChanged.h"
//===============================================
GWindowQmlPropertyChanged* GWindowQmlPropertyChanged::m_instance = 0;
//===============================================
GWindowQmlPropertyChanged::GWindowQmlPropertyChanged() {

}
//===============================================
GWindowQmlPropertyChanged::~GWindowQmlPropertyChanged() {

}
//===============================================
GWindowQmlPropertyChanged* GWindowQmlPropertyChanged::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlPropertyChanged;
    }
    return m_instance;
}
//===============================================
void GWindowQmlPropertyChanged::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlPropertyChanged.qml")));
}
//===============================================

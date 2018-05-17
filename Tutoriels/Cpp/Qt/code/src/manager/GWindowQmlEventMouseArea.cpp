//===============================================
#include "GWindowQmlEventMouseArea.h"
//===============================================
GWindowQmlEventMouseArea* GWindowQmlEventMouseArea::m_instance = 0;
//===============================================
GWindowQmlEventMouseArea::GWindowQmlEventMouseArea() {

}
//===============================================
GWindowQmlEventMouseArea::~GWindowQmlEventMouseArea() {

}
//===============================================
GWindowQmlEventMouseArea* GWindowQmlEventMouseArea::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlEventMouseArea;
    }
    return m_instance;
}
//===============================================
void GWindowQmlEventMouseArea::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlEventMouseArea.qml")));
}
//===============================================

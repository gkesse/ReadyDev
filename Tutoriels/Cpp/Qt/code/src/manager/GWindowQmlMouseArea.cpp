//===============================================
#include "GWindowQmlMouseArea.h"
//===============================================
GWindowQmlMouseArea* GWindowQmlMouseArea::m_instance = 0;
//===============================================
GWindowQmlMouseArea::GWindowQmlMouseArea() {

}
//===============================================
GWindowQmlMouseArea::~GWindowQmlMouseArea() {

}
//===============================================
GWindowQmlMouseArea* GWindowQmlMouseArea::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlMouseArea;
    }
    return m_instance;
}
//===============================================
void GWindowQmlMouseArea::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlMouseArea.qml")));
}
//===============================================

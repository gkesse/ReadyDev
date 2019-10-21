//===============================================
#include "GWindowQmlEventDrag.h"
//===============================================
GWindowQmlEventDrag* GWindowQmlEventDrag::m_instance = 0;
//===============================================
GWindowQmlEventDrag::GWindowQmlEventDrag() {

}
//===============================================
GWindowQmlEventDrag::~GWindowQmlEventDrag() {

}
//===============================================
GWindowQmlEventDrag* GWindowQmlEventDrag::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlEventDrag;
    }
    return m_instance;
}
//===============================================
void GWindowQmlEventDrag::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlEventDrag.qml")));
}
//===============================================

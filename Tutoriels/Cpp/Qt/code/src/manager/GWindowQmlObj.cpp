//===============================================
#include "GWindowQmlObj.h"
//===============================================
GWindowQmlObj* GWindowQmlObj::m_instance = 0;
//===============================================
GWindowQmlObj::GWindowQmlObj() {

}
//===============================================
GWindowQmlObj::~GWindowQmlObj() {

}
//===============================================
GWindowQmlObj* GWindowQmlObj::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQmlObj;
    }
    return m_instance;
}
//===============================================
void GWindowQmlObj::run() {
    m_engine.load(QUrl(QStringLiteral("qrc:/qml/GWindowQmlObj.qml")));
}
//===============================================

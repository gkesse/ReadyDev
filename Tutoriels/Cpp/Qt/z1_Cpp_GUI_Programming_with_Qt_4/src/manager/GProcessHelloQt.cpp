//===============================================
#include "GProcessHelloQt.h"
//===============================================
GProcessHelloQt* GProcessHelloQt::m_instance = 0;
//===============================================
GProcessHelloQt::GProcessHelloQt() {

}
//===============================================
GProcessHelloQt::~GProcessHelloQt() {

}
//===============================================
GProcessHelloQt* GProcessHelloQt::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessHelloQt;
    }
    return m_instance;
}
//===============================================
void GProcessHelloQt::run() {
    QLabel* lLabel = new QLabel("Bonjour tout le monde");
    lLabel->show();
}
//===============================================

//===============================================
#include "GProcessHelloQtHtml.h"
//===============================================
GProcessHelloQtHtml* GProcessHelloQtHtml::m_instance = 0;
//===============================================
GProcessHelloQtHtml::GProcessHelloQtHtml() {

}
//===============================================
GProcessHelloQtHtml::~GProcessHelloQtHtml() {

}
//===============================================
GProcessHelloQtHtml* GProcessHelloQtHtml::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessHelloQtHtml;
    }
    return m_instance;
}
//===============================================
void GProcessHelloQtHtml::run() {
    QString lHtml = "";
    lHtml += "<h1>Bonjour</h1>";
    lHtml += "<p style='color:red;font-size:16px;'>Tout le monde</p>";
    QLabel* lLabel = new QLabel(lHtml);
    lLabel->show();
}
//===============================================

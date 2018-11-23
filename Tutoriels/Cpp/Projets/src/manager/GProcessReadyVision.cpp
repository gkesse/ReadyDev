//===============================================
#include "GProcessReadyVision.h"
#include "GReadyVision.h"
#include "GStyle.h"
#include <QApplication>
//===============================================
GProcessReadyVision* GProcessReadyVision::m_instance = 0;
//===============================================
GProcessReadyVision::GProcessReadyVision() {

}
//===============================================
GProcessReadyVision::~GProcessReadyVision() {

}
//===============================================
GProcessReadyVision* GProcessReadyVision::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessReadyVision;
    }
    return m_instance;
}
//===============================================
void GProcessReadyVision::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("res/css/style.css");
    GReadyVision* lWindow = new GReadyVision;
    lWindow->show();
    lApp.exec();
}
//===============================================

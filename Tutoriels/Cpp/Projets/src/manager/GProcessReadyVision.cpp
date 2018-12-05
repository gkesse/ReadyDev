//===============================================
#include "GProcessReadyVision.h"
#include "GWindow.h"
#include "GStyle.h"
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
    GWindow* lWindow = GWindow::Create();
    lWindow->show();
    lApp.exec();
}
//===============================================

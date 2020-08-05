//===============================================
#include "GProcessDial.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessDial* GProcessDial::m_instance = 0;
//===============================================
GProcessDial::GProcessDial() {

}
//===============================================
GProcessDial::~GProcessDial() {

}
//===============================================
GProcessDial* GProcessDial::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDial;
    }
    return m_instance;
}
//===============================================
void GProcessDial::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("DIAL");
    lWindow->show();
    lApp.exec();
}
//===============================================

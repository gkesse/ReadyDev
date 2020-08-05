//===============================================
#include "GProcessWindow.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessWindow* GProcessWindow::m_instance = 0;
//===============================================
GProcessWindow::GProcessWindow() {

}
//===============================================
GProcessWindow::~GProcessWindow() {

}
//===============================================
GProcessWindow* GProcessWindow::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessWindow;
    }
    return m_instance;
}
//===============================================
void GProcessWindow::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("NORMAL");
    lWindow->show();
    lApp.exec();
}
//===============================================

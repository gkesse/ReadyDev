//===============================================
#include "GProcessScrollBar.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessScrollBar* GProcessScrollBar::m_instance = 0;
//===============================================
GProcessScrollBar::GProcessScrollBar() {

}
//===============================================
GProcessScrollBar::~GProcessScrollBar() {

}
//===============================================
GProcessScrollBar* GProcessScrollBar::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessScrollBar;
    }
    return m_instance;
}
//===============================================
void GProcessScrollBar::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("DIAL");
    lWindow->show();
    lApp.exec();
}
//===============================================

//===============================================
#include "GProcessToolButton.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessToolButton* GProcessToolButton::m_instance = 0;
//===============================================
GProcessToolButton::GProcessToolButton() {

}
//===============================================
GProcessToolButton::~GProcessToolButton() {

}
//===============================================
GProcessToolButton* GProcessToolButton::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessToolButton;
    }
    return m_instance;
}
//===============================================
void GProcessToolButton::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("TOOLBUTTON");
    lWindow->show();
    lApp.exec();
}
//===============================================

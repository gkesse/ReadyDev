//===============================================
#include "GProcessPushButton.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessPushButton* GProcessPushButton::m_instance = 0;
//===============================================
GProcessPushButton::GProcessPushButton() {

}
//===============================================
GProcessPushButton::~GProcessPushButton() {

}
//===============================================
GProcessPushButton* GProcessPushButton::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPushButton;
    }
    return m_instance;
}
//===============================================
void GProcessPushButton::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("PUSHBUTTON");
    lWindow->show();
    lApp.exec();
}
//===============================================

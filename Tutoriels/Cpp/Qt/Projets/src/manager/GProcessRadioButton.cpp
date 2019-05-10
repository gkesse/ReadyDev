//===============================================
#include "GProcessRadioButton.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessRadioButton* GProcessRadioButton::m_instance = 0;
//===============================================
GProcessRadioButton::GProcessRadioButton() {

}
//===============================================
GProcessRadioButton::~GProcessRadioButton() {

}
//===============================================
GProcessRadioButton* GProcessRadioButton::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessRadioButton;
    }
    return m_instance;
}
//===============================================
void GProcessRadioButton::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("RADIOBUTTON");
    lWindow->show();
    lApp.exec();
}
//===============================================

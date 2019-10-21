//===============================================
#include "GProcessCheckBox.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessCheckBox* GProcessCheckBox::m_instance = 0;
//===============================================
GProcessCheckBox::GProcessCheckBox() {

}
//===============================================
GProcessCheckBox::~GProcessCheckBox() {

}
//===============================================
GProcessCheckBox* GProcessCheckBox::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessCheckBox;
    }
    return m_instance;
}
//===============================================
void GProcessCheckBox::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("CHECKBOX");
    lWindow->show();
    lApp.exec();
}
//===============================================

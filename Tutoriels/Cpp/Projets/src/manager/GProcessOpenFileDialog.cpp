//===============================================
#include "GProcessOpenFileDialog.h"
#include "GDialog.h"
#include "GStyle.h"
//===============================================
GProcessOpenFileDialog* GProcessOpenFileDialog::m_instance = 0;
//===============================================
GProcessOpenFileDialog::GProcessOpenFileDialog() {

}
//===============================================
GProcessOpenFileDialog::~GProcessOpenFileDialog() {

}
//===============================================
GProcessOpenFileDialog* GProcessOpenFileDialog::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessOpenFileDialog;
    }
    return m_instance;
}
//===============================================
void GProcessOpenFileDialog::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("res/css/style.css");
    GDialog* lDialog = GDialog::Create("DIALOG_OPEN_FILE");
    lDialog->show();
    lApp.exec();
}
//===============================================

//===============================================
#include "GProcessLabel.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessLabel* GProcessLabel::m_instance = 0;
//===============================================
GProcessLabel::GProcessLabel() {

}
//===============================================
GProcessLabel::~GProcessLabel() {

}
//===============================================
GProcessLabel* GProcessLabel::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessLabel;
    }
    return m_instance;
}
//===============================================
void GProcessLabel::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("LABEL");
    lWindow->show();
    lApp.exec();
}
//===============================================

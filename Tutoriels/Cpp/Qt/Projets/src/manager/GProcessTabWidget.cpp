//===============================================
#include "GProcessTabWidget.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessTabWidget* GProcessTabWidget::m_instance = 0;
//===============================================
GProcessTabWidget::GProcessTabWidget() {

}
//===============================================
GProcessTabWidget::~GProcessTabWidget() {

}
//===============================================
GProcessTabWidget* GProcessTabWidget::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessTabWidget;
    }
    return m_instance;
}
//===============================================
void GProcessTabWidget::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("TABWIDGET");
    lWindow->show();
    lApp.exec();
}
//===============================================

//===============================================
#include "GProcessListView.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
GProcessListView* GProcessListView::m_instance = 0;
//===============================================
GProcessListView::GProcessListView() {

}
//===============================================
GProcessListView::~GProcessListView() {

}
//===============================================
GProcessListView* GProcessListView::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessListView;
    }
    return m_instance;
}
//===============================================
void GProcessListView::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");
    GWindow* lWindow = GWindow::Create("LISTVIEW");
    lWindow->show();
    lApp.exec();
}
//===============================================

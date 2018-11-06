//===============================================
#include "GProcessWindow.h"
#include "GWindow.h"
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
void GProcessWindow::run() {
    GWindow* lWindow = new GWindow;
    lWindow->show();
}
//===============================================

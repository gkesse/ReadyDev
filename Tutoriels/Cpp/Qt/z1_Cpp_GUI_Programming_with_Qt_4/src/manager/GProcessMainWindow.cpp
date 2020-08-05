//===============================================
#include "GProcessMainWindow.h"
#include "GMainWindow.h"
//===============================================
GProcessMainWindow* GProcessMainWindow::m_instance = 0;
//===============================================
GProcessMainWindow::GProcessMainWindow() {

}
//===============================================
GProcessMainWindow::~GProcessMainWindow() {

}
//===============================================
GProcessMainWindow* GProcessMainWindow::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessMainWindow;
    }
    return m_instance;
}
//===============================================
void GProcessMainWindow::run() {
    GMainWindow* mainWin = new GMainWindow;
    mainWin->show();
}
//===============================================

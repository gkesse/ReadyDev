//===============================================
#include "GWindowQt.h"
//===============================================
#include <QApplication>
#include <QWidget>
//===============================================
GWindowQt* GWindowQt::m_instance = 0;
//===============================================
GWindowQt::GWindowQt() {

}
//===============================================
GWindowQt::~GWindowQt() {

}
//===============================================
GWindowQt* GWindowQt::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowQt;
    }
    return m_instance;
}
//===============================================
void GWindowQt::show(int* argc, char** argv) {
    QApplication app(*argc, argv);
    m_window = new GWindowQtForm;
    m_window->show();
    showVersion();
    app.exec();
    delete m_window;
}
//===============================================

//===============================================
#include "GProcessIconEditor.h"
#include "GIconEditor.h"
//===============================================
GProcessIconEditor* GProcessIconEditor::m_instance = 0;
//===============================================
GProcessIconEditor::GProcessIconEditor() {

}
//===============================================
GProcessIconEditor::~GProcessIconEditor() {

}
//===============================================
GProcessIconEditor* GProcessIconEditor::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessIconEditor;
    }
    return m_instance;
}
//===============================================
void GProcessIconEditor::run() {
    GIconEditor *iconEditor = new GIconEditor;
    iconEditor->setWindowTitle(QObject::tr("Icon Editor"));
    iconEditor->setIconImage(QImage(":/img/mouse.png"));
    iconEditor->show();
}
//===============================================

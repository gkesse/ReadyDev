//===============================================
#include "GWindowStyleDesignerGlobal.h"
#include "ui_GWindowStyleDesignerGlobal.h"
//===============================================
GWindowStyleDesignerGlobal* GWindowStyleDesignerGlobal::m_instance = 0;
//===============================================
GWindowStyleDesignerGlobal::GWindowStyleDesignerGlobal(QWidget* parent) :
    QWidget(parent), ui(new Ui::GWindowStyleDesignerGlobal) {
    ui->setupUi(this);
}
//===============================================
GWindowStyleDesignerGlobal::~GWindowStyleDesignerGlobal() {
    delete ui;
}
//===============================================
GWindowStyleDesignerGlobal* GWindowStyleDesignerGlobal::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowStyleDesignerGlobal;
    }
    return m_instance;
}
//===============================================
void GWindowStyleDesignerGlobal::run() {
    show();
}
//===============================================

//===============================================
#include "GWindowStyleDesigner.h"
#include "ui_GWindowStyleDesigner.h"
//===============================================
GWindowStyleDesigner* GWindowStyleDesigner::m_instance = 0;
//===============================================
GWindowStyleDesigner::GWindowStyleDesigner(QWidget* parent) :
    QWidget(parent), ui(new Ui::GWindowStyleDesigner) {
    ui->setupUi(this);
}
//===============================================
GWindowStyleDesigner::~GWindowStyleDesigner() {
    delete ui;
}
//===============================================
GWindowStyleDesigner* GWindowStyleDesigner::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowStyleDesigner;
    }
    return m_instance;
}
//===============================================
void GWindowStyleDesigner::run() {
    show();
}
//===============================================

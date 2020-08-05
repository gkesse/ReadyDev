//===============================================
#include "GWindowSimple.h"
#include "ui_GWindowSimple.h"
//===============================================
GWindowSimple* GWindowSimple::m_instance = 0;
//===============================================
GWindowSimple::GWindowSimple(QWidget* parent) :
    QWidget(parent), ui(new Ui::GWindowSimple) {
    ui->setupUi(this);
}
//===============================================
GWindowSimple::~GWindowSimple() {
    delete ui;
}
//===============================================
GWindowSimple* GWindowSimple::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowSimple;
    }
    return m_instance;
}
//===============================================
void GWindowSimple::run() {
    show();
}
//===============================================

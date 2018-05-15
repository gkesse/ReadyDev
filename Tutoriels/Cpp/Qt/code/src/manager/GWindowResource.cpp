//===============================================
#include "GWindowResource.h"
#include "ui_GWindowResource.h"
//===============================================
GWindowResource* GWindowResource::m_instance = 0;
//===============================================
GWindowResource::GWindowResource(QWidget* parent) :
    QWidget(parent), ui(new Ui::GWindowResource) {
    ui->setupUi(this);
}
//===============================================
GWindowResource::~GWindowResource() {
    delete ui;
}
//===============================================
GWindowResource* GWindowResource::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowResource;
    }
    return m_instance;
}
//===============================================
void GWindowResource::run() {
    show();
}
//===============================================

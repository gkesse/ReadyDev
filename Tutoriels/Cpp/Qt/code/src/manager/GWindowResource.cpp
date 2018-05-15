//===============================================
#include "GWindowResource.h"
#include "ui_GWindowResource.h"
//===============================================
GWindowResource* GWindowResource::m_instance = 0;
//===============================================
GWindowResource::GWindowResource(QWidget* parent) :
    QWidget(parent), ui(new Ui::GWindowResource) {
    ui->setupUi(this);
    setObjectName("GWindowResource");
    updateButtonProperty(0);

    connect(ui->m_createButton, SIGNAL(clicked()), this, SLOT(slotCreateButtonClicked()));
    connect(ui->m_readButton, SIGNAL(clicked()), this, SLOT(slotReadButtonClicked()));
    connect(ui->m_updateButton, SIGNAL(clicked()), this, SLOT(slotUpdateButtonClicked()));
    connect(ui->m_deleteButton, SIGNAL(clicked()), this, SLOT(slotDeleteButtonClicked()));
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
void GWindowResource::updateButtonProperty(const int& index) {
    ui->m_createButton->setProperty("active", false);
    ui->m_readButton->setProperty("active", false);
    ui->m_updateButton->setProperty("active", false);
    ui->m_deleteButton->setProperty("active", false);

    if(index == 0) {ui->m_createButton->setProperty("active", true);}
    else if(index == 1) {ui->m_readButton->setProperty("active", true);}
    else if(index == 2) {ui->m_updateButton->setProperty("active", true);}
    else if(index == 3) {ui->m_deleteButton->setProperty("active", true);}

    ui->m_createButton->style()->polish(ui->m_createButton);
    ui->m_readButton->style()->polish(ui->m_readButton);
    ui->m_updateButton->style()->polish(ui->m_updateButton);
    ui->m_deleteButton->style()->polish(ui->m_deleteButton);
}
//===============================================
void GWindowResource::slotCreateButtonClicked() {
    updateButtonProperty(0);
}
//===============================================
void GWindowResource::slotReadButtonClicked() {
    updateButtonProperty(1);
}
//===============================================
void GWindowResource::slotUpdateButtonClicked() {
    updateButtonProperty(2);
}
//===============================================
void GWindowResource::slotDeleteButtonClicked() {
    updateButtonProperty(3);
}
//===============================================

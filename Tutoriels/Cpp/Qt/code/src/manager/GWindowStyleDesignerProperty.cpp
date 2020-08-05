//===============================================
#include "GWindowStyleDesignerProperty.h"
#include "ui_GWindowStyleDesignerProperty.h"
//===============================================
GWindowStyleDesignerProperty* GWindowStyleDesignerProperty::m_instance = 0;
//===============================================
GWindowStyleDesignerProperty::GWindowStyleDesignerProperty(QWidget* parent) :
    QWidget(parent), ui(new Ui::GWindowStyleDesignerProperty) {
    ui->setupUi(this);
    updateButtonProperty(0);

    connect(ui->m_createButton, SIGNAL(clicked()), this, SLOT(slotCreateButtonClicked()));
    connect(ui->m_readButton, SIGNAL(clicked()), this, SLOT(slotReadButtonClicked()));
    connect(ui->m_updateButton, SIGNAL(clicked()), this, SLOT(slotUpdateButtonClicked()));
    connect(ui->m_deleteButton, SIGNAL(clicked()), this, SLOT(slotDeleteButtonClicked()));
}
//===============================================
GWindowStyleDesignerProperty::~GWindowStyleDesignerProperty() {
    delete ui;
}
//===============================================
GWindowStyleDesignerProperty* GWindowStyleDesignerProperty::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowStyleDesignerProperty;
    }
    return m_instance;
}
//===============================================
void GWindowStyleDesignerProperty::run() {
    show();
}
//===============================================
void GWindowStyleDesignerProperty::updateButtonProperty(const int& index) {
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
void GWindowStyleDesignerProperty::slotCreateButtonClicked() {
    updateButtonProperty(0);
}
//===============================================
void GWindowStyleDesignerProperty::slotReadButtonClicked() {
    updateButtonProperty(1);
}
//===============================================
void GWindowStyleDesignerProperty::slotUpdateButtonClicked() {
    updateButtonProperty(2);
}
//===============================================
void GWindowStyleDesignerProperty::slotDeleteButtonClicked() {
    updateButtonProperty(3);
}
//===============================================

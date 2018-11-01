//===============================================
#include "GPushButton.h"
#include "ui_GPushButton.h"
#include "GPicto.h"
//===============================================
GPushButton::GPushButton(QWidget *parent) :
    QWidget(parent), ui(new Ui::GPushButton) {
    ui->setupUi(this);
    ui->m_buttonCreate->setIcon(GPicto::Instance()->getPicto(fa::plus));
    ui->m_buttonRead->setIcon(GPicto::Instance()->getPicto(fa::book));
    ui->m_buttonUpdate->setIcon(GPicto::Instance()->getPicto(fa::pencil));
    ui->m_buttonDelete->setIcon(GPicto::Instance()->getPicto(fa::trash));

    ui->m_buttonCreate->setIconSize(QSize(14, 14));
    ui->m_buttonRead->setIconSize(QSize(14, 14));
    ui->m_buttonUpdate->setIconSize(QSize(14, 14));
    ui->m_buttonDelete->setIconSize(QSize(14, 14));

    connect(ui->m_buttonCreate, SIGNAL(clicked()), this, SLOT(createSlot()));
    connect(ui->m_buttonRead, SIGNAL(clicked()), this, SLOT(readSlot()));
    connect(ui->m_buttonUpdate, SIGNAL(clicked()), this, SLOT(updateSlot()));
    connect(ui->m_buttonDelete, SIGNAL(clicked()), this, SLOT(deleteSlot()));
}
//===============================================
GPushButton::~GPushButton() {
    delete ui;
}
//===============================================
void GPushButton::createSlot() {
    cout << "createSlot()...\n";
}
//===============================================
void GPushButton::readSlot() {
    cout << "readSlot()...\n";
}
//===============================================
void GPushButton::updateSlot() {
    cout << "updateSlot()...\n";
}
//===============================================
void GPushButton::deleteSlot() {
    cout << "deleteSlot()...\n";
}
//===============================================

//===============================================
#include "GSectionReadyVision.h"
#include "ui_GSectionReadyVision.h"
#include "GModule.h"
//===============================================
GSectionReadyVision::GSectionReadyVision(QWidget *parent) :
    GSection(parent), ui(new Ui::GSectionReadyVision) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    connect(this, SIGNAL(emitAddModule(QString)), this, SLOT(slotAddModule(QString)));

    ui->m_sectionLayout->setContentsMargins(0, 0, 0, 0);
    ui->m_sectionLayout->setSpacing(0);
    ui->m_mainLayout->setContentsMargins(0, 0, 0, 0);
    ui->m_mainLayout->setSpacing(6);
    ui->m_mainLayout->setAlignment(Qt::AlignTop);
}
//===============================================
GSectionReadyVision::~GSectionReadyVision() {

}
//===============================================
void GSectionReadyVision::slotAddModule(const QString& module) {
    GModule* lModule = GModule::Create(module);
    connect(lModule, SIGNAL(emitStatusBar(QString)), this, SIGNAL(emitStatusBar(QString)));
    connect(lModule, SIGNAL(emitWorkspaceView(int)), this, SIGNAL(emitWorkspaceView(int)));
    ui->m_mainLayout->addWidget(lModule);
    emit emitWorkspaceCreate(lModule->getModuleName());
}
//===============================================

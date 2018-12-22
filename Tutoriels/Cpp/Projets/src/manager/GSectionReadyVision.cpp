//===============================================
#include "GSectionReadyVision.h"
#include "ui_GSectionReadyVision.h"
#include "GPrint.h"
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
    connect(lModule, SIGNAL(emitModuleClick(GModule*)), this, SLOT(slotModuleClick(GModule*)));
    ui->m_mainLayout->addWidget(lModule);
    m_moduleMap.append(lModule);
    emit emitWorkspaceCreate(lModule->getModuleName());
    slotModuleClick(lModule);
}
//===============================================
void GSectionReadyVision::slotModuleClick(GModule* module) {
    for(int i = 0; i < m_moduleMap.size(); i++) {
        GModule* lModule = m_moduleMap.at(i);
        bool lModuleClickFlag = false;
        if(lModule == module) lModuleClickFlag = true;
        lModule->setProperty("ModuleClickFlag", lModuleClickFlag);
        lModule->style()->unpolish(lModule);
        lModule->style()->polish(lModule);
        lModule->update();
    }
}
//===============================================

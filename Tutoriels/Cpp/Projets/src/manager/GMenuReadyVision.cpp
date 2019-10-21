//===============================================
#include "GMenuReadyVision.h"
#include "ui_GMenuReadyVision.h"
#include "GPicto.h"
//===============================================
GMenuReadyVision::GMenuReadyVision(QWidget *parent) :
    GMenu(parent), ui(new Ui::GMenuReadyVision) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    ui->m_addButton->setIcon(GPicto::Instance()->getPicto(fa::plus));
    ui->m_addButton->setIconSize(QSize(20,20));

    m_addMenu = new QMenu(this);
    m_addMenu->setCursor(Qt::PointingHandCursor);

    QAction* lAction = 0;
    lAction = new QAction(this);
    lAction->setText(tr("Image"));
    lAction->setIcon(GPicto::Instance()->getPicto(fa::camera));
    lAction->setShortcut(tr("Ctrl+I"));
    lAction->setStatusTip(tr("Ajouter un module image"));
    m_addMenu->addAction(lAction);
    connect(lAction, SIGNAL(hovered()), this, SLOT(slotStatusBar()));
    connect(lAction, SIGNAL(triggered()), this, SLOT(slotAddImageModule()));
    connect(this, SIGNAL(emitAddImageModule()), this, SLOT(slotAddImageModule()));

    lAction = new QAction(this);
    lAction->setText(tr("Vidéo"));
    lAction->setIcon(GPicto::Instance()->getPicto(fa::videocamera));
    lAction->setShortcut(tr("Ctrl+J"));
    lAction->setStatusTip(tr("Ajouter un module vidéo"));
    m_addMenu->addAction(lAction);
    connect(lAction, SIGNAL(hovered()), this, SLOT(slotStatusBar()));
    connect(lAction, SIGNAL(triggered()), this, SLOT(slotAddVideoModule()));
    connect(this, SIGNAL(emitAddVideoModule()), this, SLOT(slotAddVideoModule()));

    connect(ui->m_addButton, SIGNAL(clicked()), this, SLOT(slotModuleAdd()));

    ui->m_mainLayout->setContentsMargins(0, 0, 0, 0);
    ui->m_mainLayout->setSpacing(6);
    ui->m_mainLayout->setAlignment(Qt::AlignTop);
}
//===============================================
GMenuReadyVision::~GMenuReadyVision() {

}
//===============================================
void GMenuReadyVision::slotModuleAdd() {
    QPoint lPos = QCursor::pos();
    m_addMenu->exec(lPos);
}
//===============================================
void GMenuReadyVision::slotStatusBar() {
    QAction* lAction = qobject_cast<QAction*>(sender());
    QString lMessage = lAction->statusTip();
    emit emitStatusBar(lMessage);
}
//===============================================
void GMenuReadyVision::slotAddImageModule() {
    emit emitAddModule("IMAGE");
}
//===============================================
void GMenuReadyVision::slotAddVideoModule() {
    emit emitAddModule("VIDEO");
}
//===============================================

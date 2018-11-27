//===============================================
#include "GMenu.h"
#include "GPicto.h"
//===============================================
GMenu::GMenu(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GMenu");
    setAttribute(Qt::WA_StyledBackground, true);

    // m_addImage
    GPicto::Instance()->setColor(QColor("white"));

    m_addImage = new QAction(this);
    m_addImage->setText(tr("Image"));
    m_addImage->setIcon(GPicto::Instance()->getPicto(fa::camera));
    m_addImage->setShortcut(QKeySequence("Ctrl+I"));
    m_addImage->setStatusTip(tr("Ajouter un module image"));
    connect(m_addImage, SIGNAL(hovered()), this, SLOT(slotStatusTip()));
    connect(m_addImage, SIGNAL(triggered()), this, SLOT(slotAddImageModule()));

    // m_addVideo
    m_addVideo = new QAction(this);
    m_addVideo->setText(tr("Vidéo"));
    m_addVideo->setIcon(GPicto::Instance()->getPicto(fa::videocamera));
    m_addVideo->setShortcut(QKeySequence("Ctrl+J"));
    m_addVideo->setStatusTip(tr("Ajouter un module vidéo"));
    connect(m_addVideo, SIGNAL(hovered()), this, SLOT(slotStatusTip()));
    connect(m_addVideo, SIGNAL(triggered()), this, SLOT(slotAddVideoModule()));

    // m_addMenu
    m_addMenu = new QMenu(this);
    m_addMenu->addAction(m_addImage);
    m_addMenu->addAction(m_addVideo);
    m_addMenu->setCursor(Qt::PointingHandCursor);

    // m_addModule
    GPicto::Instance()->setColor(QColor("white"));

    m_addModule = new QToolButton;
    m_addModule->setIcon(GPicto::Instance()->getPicto(fa::plus));
    m_addModule->setIconSize(QSize(20, 20));
    m_addModule->setCursor(Qt::PointingHandCursor);
    m_addModule->setToolTip(tr("Ajouter un module"));
    connect(m_addModule, SIGNAL(clicked()), this, SLOT(slotAddModule()));

    // lMainLayout
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout->addWidget(m_addModule);
    lMainLayout->setMargin(0);
    lMainLayout->setAlignment(Qt::AlignTop);

    // m_mainWidget
    m_mainWidget = new QWidget(this);
    m_mainWidget->setLayout(lMainLayout);
}
//===============================================
GMenu::~GMenu() {

}
//===============================================
void GMenu::slotAddModule() {
    QPoint lPos = QCursor::pos();
    m_addMenu->exec(lPos);
}
//===============================================
void GMenu::slotStatusTip() {
    QAction* lAction = qobject_cast<QAction*>(sender());
    QString lStatusTip = lAction->statusTip();
    emit emitStatusBar(lStatusTip);
}
//===============================================
void GMenu::slotAddImageModule() {
    emit emitAddModule("IMAGE");
}
//===============================================
void GMenu::slotAddVideoModule() {
    emit emitAddModule("VIDEO");
}
//===============================================
void GMenu::resizeEvent(QResizeEvent *event) {
    m_mainWidget->setGeometry(8, 0, width() - 8, height() - 134);
}
//===============================================

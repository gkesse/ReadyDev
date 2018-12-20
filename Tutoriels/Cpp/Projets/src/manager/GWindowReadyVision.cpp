//===============================================
#include "GWindowReadyVision.h"
#include "GMenu.h"
#include "GWorkspace.h"
#include "GSection.h"
#include "GStatus.h"
//===============================================
GWindowReadyVision::GWindowReadyVision(QWidget *parent) :
    GWindowMaximized(parent) {
    setObjectName("GWindowReadyVision");

    GMenu* lMenu = GMenu::Create("READY_VISION");
    GWorkspace* lWorkspace = GWorkspace::Create("READY_VISION");
    GSection* lSection = GSection::Create("READY_VISION");
    GStatus* lStatus = GStatus::Create("READY_VISION");

    QGridLayout* lMainLayout = new QGridLayout;
    lMainLayout->addWidget(lMenu, 0, 0, 1, 1);
    lMainLayout->addWidget(lWorkspace, 0, 1, 1, 1);
    lMainLayout->addWidget(lSection, 0, 2, 1, 1);
    lMainLayout->addWidget(lStatus, 1, 0, 1, 3);
    lMainLayout->setContentsMargins(0, 0, 0, 0);
    lMainLayout->setSpacing(6);

    lMainLayout->setColumnStretch(1, 1);
    m_mainLayout->addLayout(lMainLayout, 1, 0);

    QShortcut* lShortcut = 0;
    lShortcut = new QShortcut(tr("Ctrl+I"), this);
    connect(lShortcut, SIGNAL(activated()), lMenu, SIGNAL(emitAddImageModule()));

    lShortcut = new QShortcut(tr("Ctrl+J"), this);
    connect(lShortcut, SIGNAL(activated()), lMenu, SIGNAL(emitAddVideoModule()));

    connect(lMenu, SIGNAL(emitAddModule(QString)), lSection, SIGNAL(emitAddModule(QString)));
    connect(lMenu, SIGNAL(emitStatusBar(QString)), lStatus, SIGNAL(emitStatusBar(QString)));
    connect(lSection, SIGNAL(emitWorkspaceView(int)), lWorkspace, SIGNAL(emitWorkspaceView(int)));
    connect(lSection, SIGNAL(emitWorkspaceCreate(QString)), lWorkspace, SIGNAL(emitWorkspaceCreate(QString)));

    setWindowIcon(QIcon("res/img/logo.png"));
    setWindowTitle(tr("rVision"));
}
//===============================================
GWindowReadyVision::~GWindowReadyVision() {

}
//===============================================

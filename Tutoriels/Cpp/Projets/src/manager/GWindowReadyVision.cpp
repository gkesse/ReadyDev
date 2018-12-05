//===============================================
#include "GWindowReadyVision.h"
#include "GTitle.h"
#include "GMenu.h"
#include "GSection.h"
#include "GStatus.h"
//===============================================
GWindowReadyVision::GWindowReadyVision(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowReadyVision");
    setWindowFlags(Qt::FramelessWindowHint);

    GTitle* lTitle = GTitle::Create();
    GMenu* lMenu = GMenu::Create();
    GSection* lSection = GSection::Create();
    GStatus* lStatus = GStatus::Create();

    QGridLayout* lMainLayout = new QGridLayout;
    lMainLayout->addWidget(lTitle, 0, 0, Qt::AlignTop);
    lMainLayout->addWidget(lMenu, 1, 0, Qt::AlignLeft);
    lMainLayout->addWidget(lSection, 1, 0, Qt::AlignRight);
    lMainLayout->addWidget(lStatus, 2, 0, Qt::AlignBottom);
    lMainLayout->setMargin(0);
    lMainLayout->setSpacing(0);

    setLayout(lMainLayout);

    QShortcut* lShortcut = 0;
    lShortcut = new QShortcut(tr("Ctrl+I"), this);
    connect(lShortcut, SIGNAL(activated()), lMenu, SIGNAL(emitAddImageModule()));

    lShortcut = new QShortcut(tr("Ctrl+J"), this);
    connect(lShortcut, SIGNAL(activated()), lMenu, SIGNAL(emitAddVideoModule()));

    connect(lTitle, SIGNAL(emitShowMinimized()), this, SLOT(showMinimized()));
    connect(lTitle, SIGNAL(emitShowMaximized()), this, SLOT(slotShowMaximized()));
    connect(this, SIGNAL(emitShowMaximized(QString)), lTitle, SIGNAL(emitShowMaximized(QString)));
    connect(lTitle, SIGNAL(emitClose()), this, SLOT(close()));
    connect(lMenu, SIGNAL(emitStatusBar(QString)), lStatus, SIGNAL(emitStatusBar(QString)));
    connect(lMenu, SIGNAL(emitAddModule(QString)), lSection, SIGNAL(emitAddModule(QString)));

    connect(this, SIGNAL(windowIconChanged(QIcon)), lTitle, SIGNAL(emitWindowIconChanged(QIcon)));
    connect(this, SIGNAL(windowTitleChanged(QString)), lTitle, SIGNAL(emitWindowTitleChanged(QString)));

    setWindowIcon(QIcon("res/img/logo.png"));
    setWindowTitle(tr("rVision"));
}
//===============================================
GWindowReadyVision::~GWindowReadyVision() {

}
//===============================================
void GWindowReadyVision::slotShowMaximized() {
    if(windowState() == Qt::WindowMaximized) {
        showNormal();
        emit emitShowMaximized("NORMAL");
    }
    else{
        showMaximized();
        emit emitShowMaximized("MAXIMIZED");
    }
}
//===============================================

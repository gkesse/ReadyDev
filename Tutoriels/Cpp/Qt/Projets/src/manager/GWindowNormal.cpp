//===============================================
#include "GWindowNormal.h"
#include "GTitle.h"
#include "GMenu.h"
#include "GWorkspace.h"
#include "GPicto.h"
//===============================================
GWindowNormal::GWindowNormal(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowNormal");

    m_windowMaximize = false;

    GTitle* lTitle = GTitle::Create("NORMAL");
    GMenu* lMenu = GMenu::Create("NORMAL");
    GWorkspace* lWorkspace = GWorkspace::Create("NORMAL");

    QHBoxLayout* lCenterLayout = new QHBoxLayout;
    lCenterLayout->addWidget(lMenu, 0);
    lCenterLayout->addWidget(lWorkspace, 1);
    lCenterLayout->setMargin(0);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout->addWidget(lTitle, 0);
    lMainLayout->addLayout(lCenterLayout, 1);
    lMainLayout->setMargin(0);
    lMainLayout->setSpacing(0);

    setLayout(lMainLayout);

    connect(this, SIGNAL(windowTitleChanged(QString)), lTitle, SIGNAL(emitWindowTitle(QString)));
    connect(this, SIGNAL(windowIconChanged(QIcon)), lTitle, SIGNAL(emitWindowIcon(QIcon)));
    connect(lTitle, SIGNAL(emitWindowMinimize()), this, SLOT(showMinimized()));
    connect(lTitle, SIGNAL(emitWindowMaximize()), this, SLOT(slotWindowMaximize()));
    connect(lTitle, SIGNAL(emitWindowClose()), this, SLOT(close()));

    setWindowTitle("ReadyDev");
    setWindowIcon(GPicto::Instance()->getPicto(fa::book));
}
//===============================================
GWindowNormal::~GWindowNormal() {

}
//===============================================
void GWindowNormal::slotWindowMaximize() {
    m_windowMaximize = !m_windowMaximize;
    if(m_windowMaximize == true) {
        showMaximized();
    }
    else {
        showNormal();
    }
}
//===============================================

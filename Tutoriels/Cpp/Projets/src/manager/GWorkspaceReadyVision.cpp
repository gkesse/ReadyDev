//===============================================
#include "GWorkspaceReadyVision.h"
#include "GPage.h"
//===============================================
GWorkspaceReadyVision::GWorkspaceReadyVision(QWidget *parent) :
    GWorkspace(parent) {
    setObjectName("GWorkspaceReadyVision");
    setAttribute(Qt::WA_StyledBackground, true);

    m_stackedWidget = new QStackedWidget;

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout->addWidget(m_stackedWidget);
    lMainLayout->setContentsMargins(0, 0, 0, 0);
    lMainLayout->setSpacing(0);

    setLayout(lMainLayout);

    connect(this, SIGNAL(emitWorkspaceView(int)), m_stackedWidget, SLOT(setCurrentIndex(int)));
    connect(this, SIGNAL(emitWorkspaceCreate(QString,QString)), this, SLOT(slotWorkspaceCreate(QString,QString)));
}
//===============================================
GWorkspaceReadyVision::~GWorkspaceReadyVision() {

}
//===============================================
void GWorkspaceReadyVision::slotWorkspaceCreate(const QString &module, const QString& name) {
    GPage* lPage = GPage::Create("READY_VISION");
    lPage->setNoData(module, name);
    m_stackedWidget->addWidget(lPage);
    int lLast = m_stackedWidget->count() - 1;
    m_stackedWidget->setCurrentIndex(lLast);
}
//===============================================

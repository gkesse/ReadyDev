//===============================================
#include "GWorkspaceReadyVision.h"
#include "GPicto.h"
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
    connect(this, SIGNAL(emitWorkspaceCreate(QString)), this, SLOT(slotWorkspaceCreate(QString)));
}
//===============================================
GWorkspaceReadyVision::~GWorkspaceReadyVision() {

}
//===============================================
void GWorkspaceReadyVision::slotWorkspaceCreate(const QString& name) {
    QLabel* lWorkspace = new QLabel;
    lWorkspace->setText(name);
    lWorkspace->setAlignment(Qt::AlignCenter);
    m_stackedWidget->addWidget(lWorkspace);
    int lLast = m_stackedWidget->count() - 1;
    m_stackedWidget->setCurrentIndex(lLast);
}
//===============================================

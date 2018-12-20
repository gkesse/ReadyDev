//===============================================
#include "GWorkspaceReadyVision.h"
#include "GPicto.h"
//===============================================
GWorkspaceReadyVision::GWorkspaceReadyVision(QWidget *parent) :
    GWorkspace(parent) {
    setObjectName("GWorkspaceReadyVision");
    setAttribute(Qt::WA_StyledBackground, true);

    QLabel* lWidget1 = new QLabel;
    lWidget1->setText("lWidget1");
    lWidget1->setAlignment(Qt::AlignCenter);
    QLabel* lWidget2 = new QLabel;
    lWidget2->setText("lWidget2");
    lWidget2->setAlignment(Qt::AlignCenter);
    QLabel* lWidget3 = new QLabel;
    lWidget3->setText("lWidget3");
    lWidget3->setAlignment(Qt::AlignCenter);

    m_stackedWidget = new QStackedWidget;
    m_stackedWidget->addWidget(lWidget1);
    m_stackedWidget->addWidget(lWidget2);
    m_stackedWidget->addWidget(lWidget3);

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout->addWidget(m_stackedWidget);
    lMainLayout->setContentsMargins(0, 0, 0, 0);
    lMainLayout->setSpacing(0);

    setLayout(lMainLayout);

    connect(this, SIGNAL(emitWorkspaceView(int)), m_stackedWidget, SLOT(setCurrentIndex(int)));
}
//===============================================
GWorkspaceReadyVision::~GWorkspaceReadyVision() {

}
//===============================================

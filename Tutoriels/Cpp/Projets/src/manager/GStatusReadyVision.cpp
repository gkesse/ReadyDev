//===============================================
#include "GStatusReadyVision.h"
//===============================================
GStatusReadyVision::GStatusReadyVision(QWidget *parent) :
    GStatus(parent) {
    setObjectName("GStatusReadyVision");
    setAttribute(Qt::WA_StyledBackground, true);

    m_statusBar = new QStatusBar(this);
    m_statusBar->showMessage("Bienvenue dans rVision");

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(m_statusBar);
    lMainLayout->setContentsMargins(0, 0, 0, 0);
    lMainLayout->setSpacing(0);

    setLayout(lMainLayout);

    connect(this, SIGNAL(emitStatusBar(QString)), this, SLOT(slotStatusBar(QString)));
}
//===============================================
GStatusReadyVision::~GStatusReadyVision() {

}
//===============================================
void GStatusReadyVision::slotStatusBar(const QString& message) {
    m_statusBar->showMessage(message, 5000);
}
//===============================================

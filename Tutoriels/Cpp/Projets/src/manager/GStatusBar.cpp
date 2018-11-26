//===============================================
#include "GStatusBar.h"
//===============================================
GStatusBar::GStatusBar(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GStatusBar");
    setAttribute(Qt::WA_StyledBackground, true);

    m_statusBar = new QStatusBar(this);
    m_statusBar->showMessage("Bienvenue dans rVision");
}
//===============================================
GStatusBar::~GStatusBar() {

}
//===============================================
void GStatusBar::slotStatusBar(const QString& text) {
    m_statusBar->showMessage(text, 5000);
}
//===============================================
void GStatusBar::resizeEvent(QResizeEvent *event) {
    m_statusBar->setGeometry(26, 2, width() - 202, height() - 12);
}
//===============================================

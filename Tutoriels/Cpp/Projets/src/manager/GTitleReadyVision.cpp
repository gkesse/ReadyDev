//===============================================
#include "GTitleReadyVision.h"
#include "ui_GTitleReadyVision.h"
#include "GPicto.h"
//===============================================
GTitleReadyVision::GTitleReadyVision(QWidget *parent) :
    GTitle(parent), ui(new Ui::GTitleReadyVision) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    ui->m_minimizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowminimize));
    ui->m_minimizeButton->setIconSize(QSize(20,20));

    ui->m_maximizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowmaximize));
    ui->m_maximizeButton->setIconSize(QSize(20,20));

    ui->m_closeButton->setIcon(GPicto::Instance()->getPicto(fa::close));
    ui->m_closeButton->setIconSize(QSize(20,20));

    connect(ui->m_minimizeButton, SIGNAL(clicked()), this, SIGNAL(emitShowMinimized()));
    connect(ui->m_maximizeButton, SIGNAL(clicked()), this, SIGNAL(emitShowMaximized()));
    connect(this, SIGNAL(emitShowMaximized(QString)), this, SLOT(slotShowMaximized(QString)));
    connect(ui->m_closeButton, SIGNAL(clicked()), this, SIGNAL(emitClose()));
    connect(this, SIGNAL(emitWindowIconChanged(QIcon)), this, SLOT(slotWindowIconChanged(QIcon)));
    connect(this, SIGNAL(emitWindowTitleChanged(QString)), this, SLOT(slotWindowTitleChanged(QString)));

    ui->m_mainLayout->setContentsMargins(8, 6, 6, 6);
}
//===============================================
GTitleReadyVision::~GTitleReadyVision() {

}
//===============================================
void GTitleReadyVision::slotWindowIconChanged(const QIcon& icon) {
    ui->m_iconLabel->setPixmap(icon.pixmap(QSize(20, 20)));
}
//===============================================
void GTitleReadyVision::slotWindowTitleChanged(const QString& title) {
    ui->m_titleLabel->setText(title);
}
//===============================================
void GTitleReadyVision::slotShowMaximized(const QString& status) {
    if(status == "NORMAL") {
        ui->m_maximizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowmaximize));
    }
    else if(status == "MAXIMIZED") {
        ui->m_maximizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowrestore));
    }
}
//===============================================

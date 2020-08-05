//===============================================
#include "GTitleWindowShape.h"
#include "ui_GTitleWindowShape.h"
#include "GPicto.h"
//===============================================
GTitleWindowShape::GTitleWindowShape(QWidget *parent) :
    GTitle(parent), ui(new Ui::GTitleWindowShape) {
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
    connect(ui->m_closeButton, SIGNAL(clicked()), this, SIGNAL(emitClose()));
    connect(this, SIGNAL(emitWindowIconChanged(QIcon)), this, SLOT(slotWindowIconChanged(QIcon)));
    connect(this, SIGNAL(emitWindowTitleChanged(QString)), this, SLOT(slotWindowTitleChanged(QString)));
    connect(this, SIGNAL(emitShowMaximized(QString)), this, SLOT(slotShowMaximized(QString)));

    ui->m_mainLayout->setContentsMargins(10, 6, 6, 6);
    ui->m_mainLayout->setSpacing(6);
}
//===============================================
GTitleWindowShape::~GTitleWindowShape() {

}
//===============================================
void GTitleWindowShape::slotWindowIconChanged(const QIcon& icon) {
    ui->m_iconLabel->setPixmap(icon.pixmap(QSize(20, 20)));
}
//===============================================
void GTitleWindowShape::slotWindowTitleChanged(const QString& title) {
    ui->m_titleLabel->setText(title);
}
//===============================================
void GTitleWindowShape::slotShowMaximized(const QString& status) {
    if(status == "NORMAL") {
        ui->m_maximizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowmaximize));
    }
    else if(status == "MAXIMIZED") {
        ui->m_maximizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowrestore));
    }
}
//===============================================

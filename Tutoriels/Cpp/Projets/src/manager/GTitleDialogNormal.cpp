//===============================================
#include "GTitleDialogNormal.h"
#include "ui_GTitleDialogNormal.h"
#include "GPicto.h"
//===============================================
GTitleDialogNormal::GTitleDialogNormal(QWidget *parent) :
    GTitle(parent), ui(new Ui::GTitleDialogNormal) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    ui->m_closeButton->setIcon(GPicto::Instance()->getPicto(fa::close));
    ui->m_closeButton->setIconSize(QSize(20,20));

    connect(ui->m_closeButton, SIGNAL(clicked()), this, SIGNAL(emitReject()));
    connect(this, SIGNAL(emitWindowIconChanged(QIcon)), this, SLOT(slotWindowIconChanged(QIcon)));
    connect(this, SIGNAL(emitWindowTitleChanged(QString)), this, SLOT(slotWindowTitleChanged(QString)));

    ui->m_mainLayout->setContentsMargins(0, 0, 0, 0);
    ui->m_mainLayout->setSpacing(6);
}
//===============================================
GTitleDialogNormal::~GTitleDialogNormal() {

}
//===============================================
void GTitleDialogNormal::slotWindowIconChanged(const QIcon& icon) {
    ui->m_iconLabel->setPixmap(icon.pixmap(QSize(20, 20)));
}
//===============================================
void GTitleDialogNormal::slotWindowTitleChanged(const QString& title) {
    ui->m_titleLabel->setText(title);
}
//===============================================

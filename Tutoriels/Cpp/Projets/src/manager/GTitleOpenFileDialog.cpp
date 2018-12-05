//===============================================
#include "GTitleOpenFileDialog.h"
#include "ui_GTitleOpenFileDialog.h"
#include "GPicto.h"
//===============================================
GTitleOpenFileDialog::GTitleOpenFileDialog(QWidget *parent) :
    GTitle(parent), ui(new Ui::GTitleOpenFileDialog) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    ui->m_closeButton->setIcon(GPicto::Instance()->getPicto(fa::close));
    ui->m_closeButton->setIconSize(QSize(20,20));

    connect(ui->m_closeButton, SIGNAL(clicked()), this, SIGNAL(emitReject()));
    connect(this, SIGNAL(emitWindowIconChanged(QIcon)), this, SLOT(slotWindowIconChanged(QIcon)));
    connect(this, SIGNAL(emitWindowTitleChanged(QString)), this, SLOT(slotWindowTitleChanged(QString)));

    ui->m_mainLayout->setContentsMargins(8, 6, 6, 6);
}
//===============================================
GTitleOpenFileDialog::~GTitleOpenFileDialog() {

}
//===============================================
void GTitleOpenFileDialog::slotWindowIconChanged(const QIcon& icon) {
    ui->m_iconLabel->setPixmap(icon.pixmap(QSize(20, 20)));
}
//===============================================
void GTitleOpenFileDialog::slotWindowTitleChanged(const QString& title) {
    ui->m_titleLabel->setText(title);
}
//===============================================

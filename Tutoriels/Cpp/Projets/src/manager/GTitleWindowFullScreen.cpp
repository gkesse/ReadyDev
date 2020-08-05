//===============================================
#include "GTitleWindowFullScreen.h"
#include "ui_GTitleWindowFullScreen.h"
#include "GPicto.h"
//===============================================
GTitleWindowFullScreen::GTitleWindowFullScreen(QWidget *parent) :
    GTitle(parent), ui(new Ui::GTitleWindowFullScreen) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);

    ui->m_closeButton->setIcon(GPicto::Instance()->getPicto(fa::close));
    ui->m_closeButton->setIconSize(QSize(20,20));

    connect(ui->m_closeButton, SIGNAL(clicked()), this, SIGNAL(emitClose()));
    connect(this, SIGNAL(emitWindowIconChanged(QIcon)), this, SLOT(slotWindowIconChanged(QIcon)));
    connect(this, SIGNAL(emitWindowTitleChanged(QString)), this, SLOT(slotWindowTitleChanged(QString)));

    ui->m_mainLayout->setContentsMargins(0, 0, 0, 0);
    ui->m_mainLayout->setSpacing(6);
}
//===============================================
GTitleWindowFullScreen::~GTitleWindowFullScreen() {

}
//===============================================
void GTitleWindowFullScreen::slotWindowIconChanged(const QIcon& icon) {
    ui->m_iconLabel->setPixmap(icon.pixmap(QSize(20, 20)));
}
//===============================================
void GTitleWindowFullScreen::slotWindowTitleChanged(const QString& title) {
    ui->m_titleLabel->setText(title);
}
//===============================================

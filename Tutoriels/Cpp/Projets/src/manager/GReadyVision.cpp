//===============================================
#include "GReadyVision.h"
#include "ui_GReadyVision.h"
#include "GPrint.h"
//===============================================
GReadyVision::GReadyVision(QWidget *parent) :
    QWidget(parent), ui(new Ui::GReadyVision) {
    ui->setupUi(this);
    connect(this, SIGNAL(windowTitleChanged(QString)), ui->m_titleBar, SLOT(slotWindowTitleChanged(QString)));
    emit windowTitleChanged(windowTitle());
}
//===============================================
GReadyVision::~GReadyVision() {
    delete ui;
}
//===============================================

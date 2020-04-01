//===============================================
#include "GWindowFullScreen.h"
#include "GTitle.h"
//===============================================
GWindowFullScreen::GWindowFullScreen(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowFullScreen");
    setWindowFlags(Qt::FramelessWindowHint);

    GTitle* lTitle = GTitle::Create("WINDOW_FULL_SCREEN");

    m_mainLayout = new QGridLayout;
    m_mainLayout->addWidget(lTitle, 0, 0, Qt::AlignTop);
    m_mainLayout->setContentsMargins(6, 6, 6, 6);
    m_mainLayout->setSpacing(10);

    setLayout(m_mainLayout);

    connect(lTitle, SIGNAL(emitClose()), this, SLOT(close()));

    connect(this, SIGNAL(windowIconChanged(QIcon)), lTitle, SIGNAL(emitWindowIconChanged(QIcon)));
    connect(this, SIGNAL(windowTitleChanged(QString)), lTitle, SIGNAL(emitWindowTitleChanged(QString)));

    setWindowState(Qt::WindowFullScreen);
}
//===============================================
GWindowFullScreen::~GWindowFullScreen() {

}
//===============================================

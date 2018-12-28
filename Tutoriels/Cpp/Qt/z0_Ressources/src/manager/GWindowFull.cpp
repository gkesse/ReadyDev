//===============================================
#include "GWindowFull.h"
//===============================================
GWindowFull::GWindowFull(QWidget *parent) :
    GWindowA(parent) {
    setObjectName("GWindowFull");

    m_mainPage = new QWidget;
    m_mainPage->setObjectName("m_mainPage");
    m_mainPage->setWindowFlags(Qt::FramelessWindowHint | Qt::WindowStaysOnTopHint);

    QPushButton *lButton = new QPushButton("Open", m_mainPage);

    setWindowFlags(Qt::FramelessWindowHint);
    setWindowOpacity(0.1);
    setWindowState(windowState() ^ Qt::WindowFullScreen);
}
//===============================================
GWindowFull::~GWindowFull() {

}
//===============================================
void GWindowFull::resizeEvent(QResizeEvent *event) {
    QSize lSize = QApplication::desktop()->screenGeometry().size();
    int lWidth = lSize.width();
    int lHeight = lSize.height();
    int lX = (lWidth - 640) / 2;
    int lY = (lHeight - 480) / 2;
    m_mainPage->setGeometry(lX, lY, 640, 480);
    m_mainPage->show();
}
//===============================================
void GWindowFull::mousePressEvent(QMouseEvent *event) {
    if(event->button() == Qt::LeftButton) {
        qApp->closeAllWindows();
        event->accept();
    }
}
//===============================================

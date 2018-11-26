//===============================================
#include "GTitleBar.h"
#include "GPicto.h"
//===============================================
GTitleBar::GTitleBar(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GTitleBar");
    setAttribute(Qt::WA_StyledBackground, true);
    m_title = new QLabel(this);
    m_icon = new QLabel(this);

    GPicto::Instance()->setColor(QColor("#171722"));

    m_minimizeButton = new QToolButton(this);
    m_minimizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowminimize));
    m_minimizeButton->setIconSize(QSize(20, 20));
    m_minimizeButton->setCursor(Qt::PointingHandCursor);
    connect(m_minimizeButton, SIGNAL(clicked()), this, SLOT(slotMinimize()));

    m_maximizeButton = new QToolButton(this);
    m_maximizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowmaximize));
    m_maximizeButton->setIconSize(QSize(20, 20));
    m_maximizeButton->setCursor(Qt::PointingHandCursor);
    connect(m_maximizeButton, SIGNAL(clicked()), this, SLOT(slotMaximize()));

    m_closeButton = new QToolButton(this);
    m_closeButton->setIcon(GPicto::Instance()->getPicto(fa::windowclose));
    m_closeButton->setIconSize(QSize(20, 20));
    m_closeButton->setCursor(Qt::PointingHandCursor);
    connect(m_closeButton, SIGNAL(clicked()), qApp, SLOT(quit()));

    m_pixmap = 0;
}
//===============================================
GTitleBar::~GTitleBar() {

}
//===============================================
void GTitleBar::createPixmap() {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
    m_pixmap->fill(Qt::transparent);
}
//===============================================
void GTitleBar::createBackground() {
    QPainter lPainter(m_pixmap);
    QColor lColor(0, 0, 0, 0);
    QColor lColor2(0, 0, 0, 220);
    QColor lColor3(177, 177, 203, 255);

    QLinearGradient lGradient(QPointF(0, 0), QPointF(0, height()));
    lGradient.setColorAt(0, lColor);
    lGradient.setColorAt(1, lColor2);

    QPolygon lPolygon;

    lPolygon << QPoint(20,  4)
             << QPoint(width() - 4,  4)
             << QPoint(width() - 4, height() - 1)
             << QPoint(4, height() - 1)
             << QPoint(4, 20);

    lPainter.setPen(QPen(lColor3));
    lPainter.setBrush(QBrush(lGradient));
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GTitleBar::createButtonMap() {
    QPainter lPainter(m_pixmap);
    QColor lColor(177, 177, 203, 255);

    QPolygon lPolygon;
    lPolygon << QPoint(width() - 80,  4)
             << QPoint(width() -  4,  4)
             << QPoint(width() -  4, height() - 1)
             << QPoint(width() - 88, height() - 1)
             << QPoint(width() - 88, 12);

    lPainter.setPen(QPen(lColor));
    lPainter.setBrush(QBrush(lColor));
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GTitleBar::slotWindowTitleChanged(const QString& title) {
    m_title->setText(title);
}
//===============================================
void GTitleBar::slotWindowIconChanged(const QIcon &icon) {
    m_icon->setPixmap(icon.pixmap(QSize(16, 16)));
}
//===============================================
void GTitleBar::slotMinimize() {
    window()->showMinimized();
}
//===============================================
void GTitleBar::slotMaximize() {
    if(window()->windowState() == Qt::WindowMaximized) {
        window()->showNormal();
        GPicto::Instance()->setColor(QColor("#171722"));
        m_maximizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowmaximize));
    }
    else{
        window()->showMaximized();
        GPicto::Instance()->setColor(QColor("#171722"));
        m_maximizeButton->setIcon(GPicto::Instance()->getPicto(fa::windowrestore));
    }
}
//===============================================
void GTitleBar::paintEvent(QPaintEvent *event) {
    if(m_pixmap != 0) {
        QPainter lPainter(this);
        lPainter.drawPixmap(0, 0, *m_pixmap);
    }
}
//===============================================
void GTitleBar::resizeEvent(QResizeEvent *event) {
    createPixmap();
    createBackground();
    createButtonMap();
    m_icon->setGeometry(20, 10, 20, 20);
    m_title->setGeometry(40, 4, width() - 116, height() - 1);
    m_minimizeButton->setGeometry(width() - 80, 8, 20, 20);
    m_maximizeButton->setGeometry(width() - 55, 8, 20, 20);
    m_closeButton->setGeometry(width() - 28, 8, 20, 20);
}
//===============================================
void GTitleBar::mousePressEvent(QMouseEvent *event) {
    m_diffX = event->x();
    m_diffY = event->y();
    setCursor(QCursor(Qt::SizeAllCursor));
}
//===============================================
void GTitleBar::mouseMoveEvent(QMouseEvent *event) {
    QPoint lPos = event->globalPos();
    window()->move(lPos.x() - m_diffX, lPos.y() - m_diffY);
}
//===============================================
void GTitleBar::mouseReleaseEvent(QMouseEvent *event) {
    setCursor(QCursor(Qt::ArrowCursor));
}
//===============================================

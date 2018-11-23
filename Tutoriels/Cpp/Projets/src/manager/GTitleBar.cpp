//===============================================
#include "GTitleBar.h"
#include "ui_GTitleBar.h"
#include "GPrint.h"
//===============================================
GTitleBar::GTitleBar(QWidget *parent) :
    QWidget(parent), ui(new Ui::GTitleBar) {
    ui->setupUi(this);
    setAttribute(Qt::WA_StyledBackground, true);
    m_title = new QLabel(this);
    m_titleBar = 0;
}
//===============================================
GTitleBar::~GTitleBar() {
    delete ui;
}
//===============================================
void GTitleBar::createTitleBar() {
    if(m_titleBar != 0) delete m_titleBar;
    m_titleBar = new QPixmap(size());
    m_titleBar->fill(Qt::transparent);

    QPainter lPainter(m_titleBar);
    QColor lColor(0, 0, 0, 0);
    QColor lColor2(0, 0, 0, 220);
    QColor lColor3(177, 177, 203, 255);

    QLinearGradient lGradient(QPointF(0, 0), QPointF(0, height()));
    lGradient.setColorAt(0, lColor);
    lGradient.setColorAt(1, lColor2);

    QPolygon lPolygon;

    lPolygon << QPoint(20,  4)
             << QPoint(width() - 4,  4)
             << QPoint(width() - 4, height())
             << QPoint(4, height())
             << QPoint(4, 20);

    lPainter.setPen(QPen(lColor3));
    lPainter.setBrush(QBrush(lGradient));
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GTitleBar::createButtons() {
    QPolygon lPolygon;

    lPolygon << QPoint(width() - 80,  4)
            << QPoint(width() -  4,  4)
            << QPoint(width() -  4, height() - 1)
            << QPoint(width() - 88, height() - 1)
            << QPoint(width() - 88, 12);

    QColor lColor(177, 177, 203, 255);

    QPainter lPainter(m_titleBar);
    lPainter.setPen(QPen(lColor));
    lPainter.setBrush(QBrush(lColor));
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GTitleBar::slotWindowTitleChanged(const QString& title) {
    m_title->setText(title);
}
//===============================================
void GTitleBar::paintEvent(QPaintEvent *event) {
    if(m_titleBar != 0) {
        QPainter lPainter(this);
        lPainter.drawPixmap(0, 0, *m_titleBar);
    }
}
//===============================================
void GTitleBar::resizeEvent(QResizeEvent *event) {
    createTitleBar();
    createButtons();
    m_title->move(28, 4);
    m_title->resize(width() - 116, height() - 1);
}
//===============================================

//===============================================
#include "GReadyVision.h"
#include "ui_GReadyVision.h"
//===============================================
GReadyVision::GReadyVision(QWidget *parent) :
    QWidget(parent), ui(new Ui::GReadyVision) {
    ui->setupUi(this);
    setWindowFlags(Qt::FramelessWindowHint);
    setAttribute(Qt::WA_TranslucentBackground, true);

    m_sizeGrip = new QSizeGrip(this);
    m_pixmap = 0;

    // connect
    connect(this, SIGNAL(windowTitleChanged(QString)), ui->m_titleBar, SLOT(slotWindowTitleChanged(QString)));
    connect(this, SIGNAL(windowIconChanged(QIcon)), ui->m_titleBar, SLOT(slotWindowIconChanged(QIcon)));
    connect(ui->m_mainMenu, SIGNAL(emitStatusBar(QString)), ui->m_statusBar, SLOT(slotStatusBar(QString)));
    connect(ui->m_section, SIGNAL(emitStatusBar(QString)), ui->m_statusBar, SLOT(slotStatusBar(QString)));
    connect(ui->m_mainMenu, SIGNAL(emitAddModule(QString)), ui->m_section, SLOT(slotAddModule(QString)));

    // emit
    emit windowTitleChanged(windowTitle());
    emit windowIconChanged(windowIcon());
}
//===============================================
GReadyVision::~GReadyVision() {
    delete ui;
}
//===============================================
void GReadyVision::createPixmap() {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
    m_pixmap->fill(Qt::transparent);
}
//===============================================
void GReadyVision::createBackground() {
    QPainter lPainter(m_pixmap);
    QColor lColor(23, 23, 34);

    QPolygon lPolygon;
    lPolygon << QPoint(0, 16)
             << QPoint(16, 0)
             << QPoint(width() - 1, 0)
             << QPoint(width() -  1, height() - 33)
             << QPoint(width() - 17, height() - 17)
             << QPoint(width() - 156, height() - 17)
             << QPoint(width() - 172, height() -  1)
             << QPoint(16, height() - 1)
             << QPoint(16, height() - 150)
             << QPoint(0, height() - 166);

    lPainter.setPen(QPen(lColor));
    lPainter.setBrush(QBrush(lColor));
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GReadyVision::createBorder() {
    QPainter lPainter(m_pixmap);
    QColor lColor(177, 177, 203);

    QPolygon lPolygon;
    lPolygon << QPoint(4, 20)
          << QPoint(20, 4)
          << QPoint(width() - 4, 4)
          << QPoint(width() - 4, height() - 37)
          << QPoint(width() - 20, height() - 21)
          << QPoint(width() - 158, height() - 21)
          << QPoint(width() - 174, height() - 5)
          << QPoint(20, height() - 5)
          << QPoint(20, height() - 152)
          << QPoint(4, height() - 168);

    lPainter.setPen(QPen(lColor));
    lPainter.setBrush(Qt::NoBrush);
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GReadyVision::resizeEvent(QResizeEvent *event) {
    createPixmap();
    createBackground();
    createBorder();
    m_sizeGrip->move(width() - 20, height() - 20);
}
//===============================================
void GReadyVision::paintEvent(QPaintEvent *event) {
    if(m_pixmap != 0){
        QPainter lPainter(this);
        lPainter.drawPixmap(0, 0, *m_pixmap);
    }
}
//===============================================

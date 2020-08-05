//===============================================
#include "GWindowShape.h"
#include "GTitle.h"
//===============================================
GWindowShape::GWindowShape(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowShape");
    setWindowFlags(Qt::FramelessWindowHint);
    setAttribute(Qt::WA_TranslucentBackground, true);

    m_pixmap = 0;

    GTitle* lTitle = GTitle::Create("WINDOW_SHAPE");

    m_mainLayout = new QGridLayout;
    m_mainLayout->addWidget(lTitle, 0, 0, Qt::AlignTop);
    m_mainLayout->setContentsMargins(0, 0, 0, 0);
    m_mainLayout->setSpacing(0);

    setLayout(m_mainLayout);

    connect(lTitle, SIGNAL(emitShowMinimized()), this, SLOT(showMinimized()));
    connect(lTitle, SIGNAL(emitShowMaximized()), this, SLOT(slotShowMaximized()));
    connect(lTitle, SIGNAL(emitClose()), this, SLOT(close()));

    connect(this, SIGNAL(emitShowMaximized(QString)), lTitle, SIGNAL(emitShowMaximized(QString)));
    connect(this, SIGNAL(windowIconChanged(QIcon)), lTitle, SIGNAL(emitWindowIconChanged(QIcon)));
    connect(this, SIGNAL(windowTitleChanged(QString)), lTitle, SIGNAL(emitWindowTitleChanged(QString)));

    setWindowIcon(QIcon("res/img/logo.png"));
    setWindowTitle(tr("rVision"));
}
//===============================================
GWindowShape::~GWindowShape() {

}
//===============================================
void GWindowShape::resizeEvent(QResizeEvent *event) {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
    m_pixmap->fill(Qt::transparent);

    QPainter lPainter(m_pixmap);

    QPolygon lBackground;
    lBackground << QPoint(13, 0)
                << QPoint(width(), 0)
                << QPoint(width(), height() - 25)
                << QPoint(width() - 131, height() - 25)
                << QPoint(width() - 146, height())
                << QPoint(23, height())
                << QPoint(23, height() - 163)
                << QPoint(0, height() - 178)
                << QPoint(0, 13);

    lPainter.setPen(Qt::NoPen);
    lPainter.setBrush(QBrush(QColor("#343449")));
    lPainter.drawPolygon(lBackground);

    QPolygon lPolygon;
    lPolygon << QPoint(15, 4)
             << QPoint(width() - 4, 4)
             << QPoint(width() - 4, height() - 29)
             << QPoint(width() - 133, height() - 29)
             << QPoint(width() - 148, height() - 4)
             << QPoint(27, height() - 4)
             << QPoint(27, height() - 165)
             << QPoint(4, height() - 180)
             << QPoint(4, 15);

    lPainter.setPen(QPen(QColor("white")));
    lPainter.setBrush(Qt::NoBrush);
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GWindowShape::paintEvent(QPaintEvent *event) {
    QPainter lPainter(this);
    lPainter.drawPixmap(0, 0, *m_pixmap);
}
//===============================================
void GWindowShape::slotShowMaximized() {
    if(windowState() == Qt::WindowMaximized) {
        showNormal();
        emit emitShowMaximized("NORMAL");
    }
    else{
        showMaximized();
        emit emitShowMaximized("MAXIMIZED");
    }
}
//===============================================

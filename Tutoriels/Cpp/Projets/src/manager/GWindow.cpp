//===============================================
#include "GWindow.h"
#include "GWindowReadyVision.h"
#include "GConfig.h"
//===============================================
GWindow::GWindow(QWidget *parent) :
    QWidget(parent) {
    setObjectName("GWindow");
    setAttribute(Qt::WA_TranslucentBackground, true);

    m_pixmap = 0;
}
//===============================================
GWindow::~GWindow() {

}
//===============================================
GWindow* GWindow::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "READY_VISION") return new GWindowReadyVision(parent);
    return new GWindowReadyVision(parent);
}
//===============================================
GWindow* GWindow::Create(const QString &key, QWidget* parent) {
    if(key == "READY_VISION") return new GWindowReadyVision(parent);
    return new GWindowReadyVision(parent);
}
//===============================================
void GWindow::resizeEvent(QResizeEvent *event) {
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
void GWindow::paintEvent(QPaintEvent *event) {
    QPainter lPainter(this);
    lPainter.drawPixmap(0, 0, *m_pixmap);
}
//===============================================

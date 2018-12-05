//===============================================
#include "GDialog.h"
#include "GDialogOpenFile.h"
#include "GConfig.h"
//===============================================
GDialog::GDialog(QWidget *parent) :
    QDialog(parent) {
    setObjectName("GDialog");
    setAttribute(Qt::WA_TranslucentBackground, true);

    m_pixmap = 0;
}
//===============================================
GDialog::~GDialog() {

}
//===============================================
GDialog* GDialog::Create(QWidget* parent) {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "OPEN_FILE_DIALOG") return new GDialogOpenFile(parent);
    return new GDialogOpenFile(parent);
}
//===============================================
GDialog* GDialog::Create(const QString &key, QWidget* parent) {
    if(key == "OPEN_FILE_DIALOG") return new GDialogOpenFile(parent);
    return new GDialogOpenFile(parent);
}
//===============================================
void GDialog::resizeEvent(QResizeEvent *event) {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
    m_pixmap->fill(Qt::transparent);

    QPainter lPainter(m_pixmap);

    QPolygon lBackground;
    lBackground << QPoint(13, 0)
                << QPoint(width(), 0)
                << QPoint(width(), height())
                << QPoint(0, height())
                << QPoint(0, 13);

    lPainter.setPen(Qt::NoPen);
    lPainter.setBrush(QBrush(QColor("#343449")));
    lPainter.drawPolygon(lBackground);

    QPolygon lPolygon;
    lPolygon << QPoint(15, 4)
             << QPoint(width() - 4, 4)
             << QPoint(width() - 4, height() - 4)
             << QPoint(4, height() - 4)
             << QPoint(4, 15);

    lPainter.setPen(QPen(QColor("white")));
    lPainter.setBrush(Qt::NoBrush);
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GDialog::paintEvent(QPaintEvent *event) {
    QPainter lPainter(this);
    lPainter.drawPixmap(0, 0, *m_pixmap);
}
//===============================================

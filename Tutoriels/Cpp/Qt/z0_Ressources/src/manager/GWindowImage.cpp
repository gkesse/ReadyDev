//===============================================
#include "GWindowImage.h"
//===============================================
GWindowImage::GWindowImage(QWidget *parent) :
    GWindowA(parent) {
    setObjectName("GWindowImage");
    setWindowFlags(Qt::FramelessWindowHint);
    setAttribute(Qt::WA_TranslucentBackground);
    m_image = new QImage("res/img/gopro.png");
}
//===============================================
GWindowImage::~GWindowImage() {

}
//===============================================
void GWindowImage::paintEvent(QPaintEvent *event) {
    QPainter lPainter(this);
    lPainter.drawImage(0, 0, *m_image);
}
//===============================================

//===============================================
#include "GSplitterButtonHandle.h"
//===============================================
GSplitterButtonHandle::GSplitterButtonHandle(Qt::Orientation orientation, QSplitter *parent) :
    QSplitterHandle(orientation, parent) {

}
//===============================================
GSplitterButtonHandle::~GSplitterButtonHandle() {

}
//===============================================
void GSplitterButtonHandle::paintEvent(QPaintEvent *event) {
    QPainter lPainter(this);
    QLinearGradient lGradient;
    if (orientation() == Qt::Horizontal) {
        lGradient.setStart(rect().left(), rect().height()/2);
        lGradient.setFinalStop(rect().right(), rect().height()/2);
    }
    else {
        lGradient.setStart(rect().width()/2, rect().top());
        lGradient.setFinalStop(rect().width()/2, rect().bottom());
    }
    lPainter.fillRect(event->rect(), QBrush(lGradient));
}
//===============================================
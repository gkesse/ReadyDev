//===============================================
#include "GSplitter.h"
#include "GSplitterHandle.h"
//===============================================
GSplitter::GSplitter(QWidget *parent) :
    QSplitter(parent) {

}
//===============================================
GSplitter::GSplitter(Qt::Orientation orientation, QWidget *parent) :
    QSplitter(orientation, parent) {

}
//===============================================
GSplitter::~GSplitter() {

}
//===============================================
QSplitterHandle* GSplitter::createHandle() {
    return new GSplitterHandle(orientation(), this);
}
//===============================================

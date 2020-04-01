//===============================================
#include "GSplitterButton.h"
#include "GSplitterButtonHandle.h"
//===============================================
GSplitterButton::GSplitterButton(QWidget *parent) :
    QSplitter(parent) {

}
//===============================================
GSplitterButton::GSplitterButton(Qt::Orientation orientation, QWidget *parent) :
    QSplitter(orientation, parent) {

}
//===============================================
GSplitterButton::~GSplitterButton() {

}
//===============================================
QSplitterHandle* GSplitterButton::createHandle() {
    return new GSplitterButtonHandle(orientation(), this);
}
//===============================================

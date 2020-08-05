//===============================================
#ifndef _GSplitterButtonHandle_
#define _GSplitterButtonHandle_
//===============================================
#include "GInclude.h"
//===============================================
class GSplitterButtonHandle : public QSplitterHandle {
    Q_OBJECT

public:
    GSplitterButtonHandle(Qt::Orientation orientation, QSplitter *parent = 0);
    ~GSplitterButtonHandle();

protected:
    void paintEvent(QPaintEvent *event);
};
//===============================================
#endif
//===============================================

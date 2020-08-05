//===============================================
#ifndef _GSplitterHandle_
#define _GSplitterHandle_
//===============================================
#include "GInclude.h"
//===============================================
class GSplitterHandle : public QSplitterHandle {
    Q_OBJECT

public:
    GSplitterHandle(Qt::Orientation orientation, QSplitter *parent = 0);
    ~GSplitterHandle();

protected:
    void paintEvent(QPaintEvent *event);
};
//===============================================
#endif
//===============================================

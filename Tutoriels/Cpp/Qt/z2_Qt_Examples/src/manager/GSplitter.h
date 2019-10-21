//===============================================
#ifndef _GSplitter_
#define _GSplitter_
//===============================================
#include "GInclude.h"
//===============================================
class GSplitter : public QSplitter {
    Q_OBJECT

public:
    GSplitter(QWidget *parent = 0);
    GSplitter(Qt::Orientation orientation, QWidget *parent = 0);
    ~GSplitter();

protected:
    QSplitterHandle* createHandle();
};
//===============================================
#endif
//===============================================

//===============================================
#ifndef _GSplitterButton_
#define _GSplitterButton_
//===============================================
#include "GInclude.h"
//===============================================
class GSplitterButton : public QSplitter {
    Q_OBJECT

public:
    GSplitterButton(QWidget *parent = 0);
    GSplitterButton(Qt::Orientation orientation, QWidget *parent = 0);
    ~GSplitterButton();

protected:
    QSplitterHandle* createHandle();
};
//===============================================
#endif
//===============================================

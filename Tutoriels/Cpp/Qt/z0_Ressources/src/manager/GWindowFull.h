//===============================================
#ifndef _GWindowFull_
#define _GWindowFull_
//================================================
#include "GWindowA.h"
//===============================================
class GWindowFull : public GWindowA {
    Q_OBJECT

public:
    GWindowFull(QWidget* parent = 0);
    ~GWindowFull();

protected:
    void resizeEvent(QResizeEvent *event);
    void mousePressEvent(QMouseEvent *event);

private:
    QWidget* m_mainPage;
};
//===============================================
#endif
//===============================================

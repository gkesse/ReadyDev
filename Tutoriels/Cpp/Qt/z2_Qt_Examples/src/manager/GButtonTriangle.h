//===============================================
#ifndef _GButtonTriangle_
#define _GButtonTriangle_
//===============================================
#include "GInclude.h"
//===============================================
class GButtonTriangle : public QWidget {
    Q_OBJECT

public:
    GButtonTriangle(QWidget *parent = 0);
    ~GButtonTriangle();

protected:
    void paintEvent(QPaintEvent *event);

private:
    const static int G_FIRST_BUTTON_X = 0;
    const static int G_FIRST_BUTTON_Y = 0;
    const static int G_BUTTON_WIDTH = 100;
    const static int G_BUTTON_HEIGHT = 30;
    const static int G_TRIANGLE_WIDTH = 30;

private:
    QList<QColor> colors;
    QList<QPushButton*> m_buttonMap;
    int m_buttonCount;
};
//===============================================
#endif
//===============================================

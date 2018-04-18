//===============================================
#ifndef _GWindowQtFormGL_
#define _GWindowQtFormGL_
//===============================================
#include <iostream>
//===============================================
#include "GInclude.h"
//===============================================
#include <QTimer>
//===============================================
using namespace std;
//===============================================
class GWindowQtFormGL : public QGLWidget {
    Q_OBJECT

public:
    GWindowQtFormGL(QWidget* parent = 0);
    ~GWindowQtFormGL();

public:
    void setBackground();
    void setTimer();

public slots:
    void slotTimerUpdate();

protected:
    void initializeGL();
    void paintGL();
    void resizeGL(int w, int h);

private:
    QTimer *m_timer;
};
//===============================================
#endif
//===============================================

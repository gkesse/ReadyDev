//===============================================
#ifndef _GWindowNormal_
#define _GWindowNormal_
//================================================
#include "GWindow.h"
//===============================================
class GWindowNormal : public GWindow {
    Q_OBJECT

public:
    GWindowNormal(QWidget* parent = 0);
    ~GWindowNormal();

public slots:
    void slotWindowMaximize();

private:
    bool m_windowMaximize;
};
//===============================================
#endif
//===============================================

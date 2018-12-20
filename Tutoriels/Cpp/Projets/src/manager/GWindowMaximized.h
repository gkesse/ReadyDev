//===============================================
#ifndef _GWindowMaximized_
#define _GWindowMaximized_
//===============================================
#include "GWindow.h"
//===============================================
class GWindowMaximized : public GWindow {
    Q_OBJECT

public:
    GWindowMaximized(QWidget *parent = 0);
    ~GWindowMaximized();
};
//===============================================
#endif
//===============================================

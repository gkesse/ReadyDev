//===============================================
#ifndef _GWindowFullScreen_
#define _GWindowFullScreen_
//===============================================
#include "GWindow.h"
//===============================================
class GWindowFullScreen : public GWindow {
    Q_OBJECT

public:
    GWindowFullScreen(QWidget *parent = 0);
    ~GWindowFullScreen();
};
//===============================================
#endif
//===============================================

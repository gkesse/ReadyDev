//================================================
#ifndef _GWindowFullscreen_
#define _GWindowFullscreen_
//================================================
#include "GWindow.h"
//================================================
class GWindowFullscreen : public GWindow {
public:
    GWindowFullscreen();
    ~GWindowFullscreen();

public:
    static GWindowFullscreen* Instance();
    void setFlags();

private:
    static GWindowFullscreen* m_instance;
};
//================================================
#endif
//================================================

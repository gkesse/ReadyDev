//================================================
#ifndef _GWindowNormal_
#define _GWindowNormal_
//================================================
#include "GWindow.h"
//================================================
class GWindowNormal : public GWindow {
public:
    GWindowNormal();
    ~GWindowNormal();

public:
    static GWindowNormal* Instance();

private:
    static GWindowNormal* m_instance;
};
//================================================
#endif
//================================================

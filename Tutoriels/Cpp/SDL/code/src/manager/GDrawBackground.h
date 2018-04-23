//================================================
#ifndef _GDrawBackground_
#define _GDrawBackground_
//================================================
#include "GDraw.h"
#include "GInclude.h"
//================================================
class GDrawBackground : public GDraw {
public:
    GDrawBackground();
    ~GDrawBackground();

public:
    static GDrawBackground* Instance();

private:
    static GDrawBackground* m_instance;
};
//================================================
#endif
//================================================

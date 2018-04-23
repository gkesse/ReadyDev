//================================================
#ifndef _GDrawTextureFull_
#define _GDrawTextureFull_
//================================================
#include "GDraw.h"
#include "GInclude.h"
//================================================
class GDrawTextureFull : public GDraw {
public:
    GDrawTextureFull();
    ~GDrawTextureFull();

public:
    static GDrawTextureFull* Instance();
    void initDraw();
    void draw();

private:
    static GDrawTextureFull* m_instance;
};
//================================================
#endif
//================================================

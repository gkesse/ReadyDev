//================================================
#ifndef _GDrawTextureBmp_
#define _GDrawTextureBmp_
//================================================
#include "GDraw.h"
#include "GInclude.h"
//================================================
class GDrawTextureBmp : public GDraw {
public:
    GDrawTextureBmp();
    ~GDrawTextureBmp();

public:
    static GDrawTextureBmp* Instance();
    void initDraw();
    void draw();

private:
    static GDrawTextureBmp* m_instance;
};
//================================================
#endif
//================================================

//================================================
#ifndef _GDrawTexture_
#define _GDrawTexture_
//================================================
#include "GDraw.h"
#include "GInclude.h"
//================================================
class GDrawTexture : public GDraw {
public:
    GDrawTexture();
    ~GDrawTexture();

public:
    static GDrawTexture* Instance();
    void initDraw();
    void draw();

private:
    static GDrawTexture* m_instance;
};
//================================================
#endif
//================================================

//===============================================
#ifndef _GDrawSDLColor_
#define _GDrawSDLColor_
//================================================
#include "GInclude.h"
#include "GDrawSDL.h"
//===============================================
class GDrawSDLColor : public GDrawSDL {
public:
    GDrawSDLColor();
    ~GDrawSDLColor();

public:
    static GDrawSDLColor* Instance();
    void initDraw();
    void draw();

private:
    static GDrawSDLColor* m_instance;
    GLuint m_program;
};
//===============================================
#endif
//===============================================

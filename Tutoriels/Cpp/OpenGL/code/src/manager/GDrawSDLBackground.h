//===============================================
#ifndef _GDrawSDLBackground_
#define _GDrawSDLBackground_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLBackground : public GDrawSDL {
public:
    GDrawSDLBackground();
    ~GDrawSDLBackground();

public:
    static GDrawSDLBackground* Instance();
    void initDraw();
    void draw();

private:
    static GDrawSDLBackground* m_instance;
    GLuint m_buffers[1];
};
//===============================================
#endif
//===============================================

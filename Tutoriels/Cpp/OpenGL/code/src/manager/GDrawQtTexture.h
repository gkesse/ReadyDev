//===============================================
#ifndef _GDrawQtTexture_
#define _GDrawQtTexture_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtTexture : public GDrawQt {
public:
    GDrawQtTexture();
    ~GDrawQtTexture();

public:
    static GDrawQtTexture* Instance();
    void initDraw();
    void draw();

private:
    static GDrawQtTexture* m_instance;
    GLuint m_program;
    GLuint m_textureId;
    GLuint m_VOA;
};
//===============================================
#endif
//===============================================

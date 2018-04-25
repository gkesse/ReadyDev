//===============================================
#ifndef _GDrawSDLTexture_
#define _GDrawSDLTexture_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLTexture : public GDrawSDL {
public:
    GDrawSDLTexture();
    ~GDrawSDLTexture();

public:
    static GDrawSDLTexture* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLTexture* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
};
//===============================================
#endif
//===============================================

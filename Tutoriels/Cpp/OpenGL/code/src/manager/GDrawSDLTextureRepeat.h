//===============================================
#ifndef _GDrawSDLTextureRepeat_
#define _GDrawSDLTextureRepeat_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLTextureRepeat : public GDrawSDL {
public:
    GDrawSDLTextureRepeat();
    ~GDrawSDLTextureRepeat();

public:
    static GDrawSDLTextureRepeat* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();
    void handleEvents(SDL_Event* event);
    void onKeyDown(SDL_Event* event);

private:
    static GDrawSDLTextureRepeat* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GLuint m_texture;
    float m_angleU;
    float m_angleV;
};
//===============================================
#endif
//===============================================

//===============================================
#ifndef _GDrawSDLTextureVbo_
#define _GDrawSDLTextureVbo_
//================================================
#include "GDrawSDL.h"
#include "GObjBoxVbo.h"
//===============================================
class GDrawSDLTextureVbo : public GDrawSDL {
public:
    GDrawSDLTextureVbo();
    ~GDrawSDLTextureVbo();

public:
    static GDrawSDLTextureVbo* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateDraw();
    void draw();
    void handleEvents(SDL_Event* event);
    void onKeyDown(SDL_Event* event);

private:
    static GDrawSDLTextureVbo* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GObjBoxVbo m_objBoxVbo;
    float m_angle;
};
//===============================================
#endif
//===============================================

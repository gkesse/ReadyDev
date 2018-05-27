//===============================================
#ifndef _GDrawSDLTextureVao_
#define _GDrawSDLTextureVao_
//================================================
#include "GDrawSDL.h"
#include "GObjBoxVao.h"
//===============================================
class GDrawSDLTextureVao : public GDrawSDL {
public:
    GDrawSDLTextureVao();
    ~GDrawSDLTextureVao();

public:
    static GDrawSDLTextureVao* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateDraw();
    void draw();
    void handleEvents(SDL_Event* event);
    void onKeyDown(SDL_Event* event);

private:
    static GDrawSDLTextureVao* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GObjBoxVao m_objBoxVao;
    float m_angle;
};
//===============================================
#endif
//===============================================

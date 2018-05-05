//===============================================
#ifndef _GDrawSDLCubeVao_
#define _GDrawSDLCubeVao_
//================================================
#include "GDrawSDL.h"
#include "GObjCubeVao.h"
//===============================================
class GDrawSDLCubeVao : public GDrawSDL {
public:
    GDrawSDLCubeVao();
    ~GDrawSDLCubeVao();

public:
    static GDrawSDLCubeVao* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();
    void handleEvents(SDL_Event* event);
    void onKeyDown(SDL_Event* event);

private:
    static GDrawSDLCubeVao* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GObjCubeVao m_objCubeVao;
};
//===============================================
#endif
//===============================================

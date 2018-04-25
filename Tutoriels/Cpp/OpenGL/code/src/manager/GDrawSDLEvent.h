//===============================================
#ifndef _GDrawSDLEvent_
#define _GDrawSDLEvent_
//================================================
#include "GDrawSDL.h"
#include "GObjCube.h"
//===============================================
class GDrawSDLEvent : public GDrawSDL {
public:
    GDrawSDLEvent();
    ~GDrawSDLEvent();

public:
    static GDrawSDLEvent* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();
    void handleEvents(SDL_Event* event);
    void onKeyDown(SDL_Event* event);

private:
    static GDrawSDLEvent* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GObjCube m_objCube;
    float m_angle;
};
//===============================================
#endif
//===============================================

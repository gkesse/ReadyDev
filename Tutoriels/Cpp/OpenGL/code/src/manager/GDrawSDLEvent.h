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
    void updateDraw();
    void draw();

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

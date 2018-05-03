//===============================================
#ifndef _GDrawSDLCubeAnimate_
#define _GDrawSDLCubeAnimate_
//================================================
#include "GDrawSDL.h"
#include "GObjCube.h"
//===============================================
class GDrawSDLCubeAnimate : public GDrawSDL {
public:
    GDrawSDLCubeAnimate();
    ~GDrawSDLCubeAnimate();

public:
    static GDrawSDLCubeAnimate* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateDraw();
    void draw();

private:
    static GDrawSDLCubeAnimate* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GObjCube m_objCube;
    float m_angle;
};
//===============================================
#endif
//===============================================

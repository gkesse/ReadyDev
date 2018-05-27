//===============================================
#ifndef _GDrawSDLCubeObj_
#define _GDrawSDLCubeObj_
//================================================
#include "GDrawSDL.h"
#include "GObjCube.h"
//===============================================
class GDrawSDLCubeObj : public GDrawSDL {
public:
    GDrawSDLCubeObj();
    ~GDrawSDLCubeObj();

public:
    static GDrawSDLCubeObj* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLCubeObj* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GObjCube m_objCube;
};
//===============================================
#endif
//===============================================

//===============================================
#ifndef _GDrawSDLCube_
#define _GDrawSDLCube_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLCube : public GDrawSDL {
public:
    GDrawSDLCube();
    ~GDrawSDLCube();

public:
    static GDrawSDLCube* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLCube* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
};
//===============================================
#endif
//===============================================

//===============================================
#ifndef _GDrawSDLCubeVbo_
#define _GDrawSDLCubeVbo_
//================================================
#include "GDrawSDL.h"
#include "GObjCubeVbo.h"
//===============================================
class GDrawSDLCubeVbo : public GDrawSDL {
public:
    GDrawSDLCubeVbo();
    ~GDrawSDLCubeVbo();

public:
    static GDrawSDLCubeVbo* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLCubeVbo* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    GObjCubeVbo m_objCubeVbo;
};
//===============================================
#endif
//===============================================

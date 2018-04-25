//===============================================
#ifndef _GDrawSDLScale_
#define _GDrawSDLScale_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLScale : public GDrawSDL {
public:
    GDrawSDLScale();
    ~GDrawSDLScale();

public:
    static GDrawSDLScale* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLScale* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
};
//===============================================
#endif
//===============================================

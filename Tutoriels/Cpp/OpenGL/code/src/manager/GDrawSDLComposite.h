//===============================================
#ifndef _GDrawSDLComposite_
#define _GDrawSDLComposite_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLComposite : public GDrawSDL {
public:
    GDrawSDLComposite();
    ~GDrawSDLComposite();

public:
    static GDrawSDLComposite* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLComposite* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
};
//===============================================
#endif
//===============================================

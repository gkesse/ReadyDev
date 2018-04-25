//===============================================
#ifndef _GDrawSDLTranslate_
#define _GDrawSDLTranslate_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLTranslate : public GDrawSDL {
public:
    GDrawSDLTranslate();
    ~GDrawSDLTranslate();

public:
    static GDrawSDLTranslate* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLTranslate* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    float m_angle;
};
//===============================================
#endif
//===============================================

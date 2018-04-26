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
    void updateDraw();
    void draw();

private:
    static GDrawSDLTranslate* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    float m_angle;
    float m_x;
    float m_y;
    float m_z;
};
//===============================================
#endif
//===============================================

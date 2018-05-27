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
    void updateDraw();
    void draw();

private:
    static GDrawSDLScale* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    float m_angle;
    glm::vec3 m_vec;
};
//===============================================
#endif
//===============================================

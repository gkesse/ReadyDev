//===============================================
#ifndef _GDrawSDLRotation_
#define _GDrawSDLRotation_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLRotation : public GDrawSDL {
public:
    GDrawSDLRotation();
    ~GDrawSDLRotation();

public:
    static GDrawSDLRotation* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLRotation* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    float m_angle;
};
//===============================================
#endif
//===============================================

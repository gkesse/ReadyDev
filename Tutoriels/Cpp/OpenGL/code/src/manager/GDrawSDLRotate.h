//===============================================
#ifndef _GDrawSDLRotate_
#define _GDrawSDLRotate_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLRotate : public GDrawSDL {
public:
    GDrawSDLRotate();
    ~GDrawSDLRotate();

public:
    static GDrawSDLRotate* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateDraw();
    void draw();

private:
    static GDrawSDLRotate* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    float m_angle;
};
//===============================================
#endif
//===============================================
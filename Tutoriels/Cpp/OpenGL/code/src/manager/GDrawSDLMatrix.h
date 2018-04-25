//===============================================
#ifndef _GDrawSDLMatrix_
#define _GDrawSDLMatrix_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLMatrix : public GDrawSDL {
public:
    GDrawSDLMatrix();
    ~GDrawSDLMatrix();

public:
    static GDrawSDLMatrix* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void draw();

private:
    static GDrawSDLMatrix* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GLuint m_program;
    float m_angle;
};
//===============================================
#endif
//===============================================

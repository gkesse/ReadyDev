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
    void draw();

private:
    static GDrawSDLMatrix* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    float m_vertices[6];
    float m_colors[9];
    GLuint m_buffers[2];
    GLuint m_program;
};
//===============================================
#endif
//===============================================

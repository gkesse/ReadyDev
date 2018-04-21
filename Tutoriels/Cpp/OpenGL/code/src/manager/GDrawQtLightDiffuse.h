//===============================================
#ifndef _GDrawQtLightDiffuse_
#define _GDrawQtLightDiffuse_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GTorus.h"
//===============================================
class GDrawQtLightDiffuse : public GDrawQt {
public:
    GDrawQtLightDiffuse();
    ~GDrawQtLightDiffuse();

public:
    static GDrawQtLightDiffuse* Instance();
    void initDraw();
    void draw();
    void resize(int w, int h);
    void setMatrices();

private:
    static GDrawQtLightDiffuse* m_instance;
    GLuint m_program;
    GLuint m_vertexArrays[1];
    int width, height;

    float m_angle;
    GTorus* m_torus;
    glm::mat4 m_model;
    glm::mat4 m_view;
    glm::mat4 m_projection;
};
//===============================================
#endif
//===============================================

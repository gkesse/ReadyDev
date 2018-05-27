//===============================================
#ifndef _GDrawQtLightADS_
#define _GDrawQtLightADS_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GTorus.h"
//===============================================
class GDrawQtLightADS : public GDrawQt {
public:
    GDrawQtLightADS();
    ~GDrawQtLightADS();

public:
    static GDrawQtLightADS* Instance();
    void initDraw();
    void draw();
    void resize(int w, int h);
    void setMatrices();

private:
    static GDrawQtLightADS* m_instance;
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

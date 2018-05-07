//===============================================
#ifndef _GDrawQtShaderFunction_
#define _GDrawQtShaderFunction_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTorus.h"
//===============================================
class GDrawQtShaderFunction : public GDrawQt {
public:
    GDrawQtShaderFunction();
    ~GDrawQtShaderFunction();

public:
    static GDrawQtShaderFunction* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();

private:
    static GDrawQtShaderFunction* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTorus* m_objTorus;
    float m_angle;
};
//===============================================
#endif
//===============================================

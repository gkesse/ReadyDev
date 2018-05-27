//===============================================
#ifndef _GDrawQtLightDirectional_
#define _GDrawQtLightDirectional_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTorus.h"
//===============================================
class GDrawQtLightDirectional : public GDrawQt {
public:
    GDrawQtLightDirectional();
    ~GDrawQtLightDirectional();

public:
    static GDrawQtLightDirectional* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();
    void onKeyPress(QKeyEvent* event);

private:
    static GDrawQtLightDirectional* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTorus* m_objTorus;
    float m_angle;
};
//===============================================
#endif
//===============================================

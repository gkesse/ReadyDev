//===============================================
#ifndef _GDrawQtLightTwoSide_
#define _GDrawQtLightTwoSide_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTeapot.h"
//===============================================
class GDrawQtLightTwoSide : public GDrawQt {
public:
    GDrawQtLightTwoSide();
    ~GDrawQtLightTwoSide();

public:
    static GDrawQtLightTwoSide* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();

private:
    static GDrawQtLightTwoSide* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTeapot* m_objTeapot;
    float m_angle;
};
//===============================================
#endif
//===============================================

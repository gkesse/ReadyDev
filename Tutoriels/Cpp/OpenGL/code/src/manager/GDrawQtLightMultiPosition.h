//===============================================
#ifndef _GDrawQtLightMultiPosition_
#define _GDrawQtLightMultiPosition_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjPlane.h"
#include "GObjPig.h"
//===============================================
class GDrawQtLightMultiPosition : public GDrawQt {
public:
    GDrawQtLightMultiPosition();
    ~GDrawQtLightMultiPosition();

public:
    static GDrawQtLightMultiPosition* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();
    void onKeyPress(QKeyEvent* event);

private:
    static GDrawQtLightMultiPosition* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjPlane* m_objPlane;
    GObjPig* m_objPig;
    float m_angle;
};
//===============================================
#endif
//===============================================
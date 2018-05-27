//===============================================
#ifndef _GDrawQtLightTwoSideMix_
#define _GDrawQtLightTwoSideMix_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTeapot.h"
//===============================================
class GDrawQtLightTwoSideMix : public GDrawQt {
public:
    GDrawQtLightTwoSideMix();
    ~GDrawQtLightTwoSideMix();

public:
    static GDrawQtLightTwoSideMix* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();

private:
    static GDrawQtLightTwoSideMix* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTeapot* m_objTeapot;
    float m_angle;
};
//===============================================
#endif
//===============================================

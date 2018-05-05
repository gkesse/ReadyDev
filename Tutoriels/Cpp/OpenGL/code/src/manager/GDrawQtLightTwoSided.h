//===============================================
#ifndef _GDrawQtLightTwoSided_
#define _GDrawQtLightTwoSided_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTeapot.h"
//===============================================
class GDrawQtLightTwoSided : public GDrawQt {
public:
    GDrawQtLightTwoSided();
    ~GDrawQtLightTwoSided();

public:
    static GDrawQtLightTwoSided* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void draw();

private:
    static GDrawQtLightTwoSided* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTeapot* m_objTeapot;
};
//===============================================
#endif
//===============================================

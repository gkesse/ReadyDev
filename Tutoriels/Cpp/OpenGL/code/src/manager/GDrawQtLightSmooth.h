//===============================================
#ifndef _GDrawQtLightSmooth_
#define _GDrawQtLightSmooth_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjOgre.h"
//===============================================
class GDrawQtLightSmooth : public GDrawQt {
public:
    GDrawQtLightSmooth();
    ~GDrawQtLightSmooth();

public:
    static GDrawQtLightSmooth* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();

private:
    static GDrawQtLightSmooth* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjOgre* m_objOgre;
    float m_angle;
};
//===============================================
#endif
//===============================================

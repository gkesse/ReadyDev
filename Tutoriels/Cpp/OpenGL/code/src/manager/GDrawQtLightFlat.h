//===============================================
#ifndef _GDrawQtLightFlat_
#define _GDrawQtLightFlat_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjOgre.h"
//===============================================
class GDrawQtLightFlat : public GDrawQt {
public:
    GDrawQtLightFlat();
    ~GDrawQtLightFlat();

public:
    static GDrawQtLightFlat* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();

private:
    static GDrawQtLightFlat* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjOgre* m_objOgre;
    float m_angle;
    float m_angle2;
};
//===============================================
#endif
//===============================================

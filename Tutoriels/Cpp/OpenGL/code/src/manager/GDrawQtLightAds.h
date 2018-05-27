//===============================================
#ifndef _GDrawQtLightAds_
#define _GDrawQtLightAds_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTorus.h"
//===============================================
class GDrawQtLightAds : public GDrawQt {
public:
    GDrawQtLightAds();
    ~GDrawQtLightAds();

public:
    static GDrawQtLightAds* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void draw();

private:
    static GDrawQtLightAds* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTorus* m_objTorus;
};
//===============================================
#endif
//===============================================

//===============================================
#ifndef _GDrawQtLightADS_
#define _GDrawQtLightADS_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTorus.h"
//===============================================
class GDrawQtLightADS : public GDrawQt {
public:
    GDrawQtLightADS();
    ~GDrawQtLightADS();

public:
    static GDrawQtLightADS* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void draw();

private:
    static GDrawQtLightADS* m_instance;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    glm::mat4 m_view;
    GObjTorus* m_objTorus;
};
//===============================================
#endif
//===============================================

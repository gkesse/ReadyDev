//===============================================
#ifndef _GDrawQtCamara_
#define _GDrawQtCamara_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTeapot.h"
//===============================================
class GDrawQtCamara : public GDrawQt {
public:
    GDrawQtCamara();
    ~GDrawQtCamara();

public:
    static GDrawQtCamara* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();
    void onKeyPress(QKeyEvent* event);

private:
    static GDrawQtCamara* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTeapot* m_objTeapot;
    float m_angle;
};
//===============================================
#endif
//===============================================

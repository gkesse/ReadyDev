//===============================================
#ifndef _GDrawQtEvent_
#define _GDrawQtEvent_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTeapot.h"
//===============================================
class GDrawQtEvent : public GDrawQt {
public:
    GDrawQtEvent();
    ~GDrawQtEvent();

public:
    static GDrawQtEvent* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();
    void onKeyPress(QKeyEvent* event);

private:
    static GDrawQtEvent* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTeapot* m_objTeapot;
    float m_angle;
};
//===============================================
#endif
//===============================================

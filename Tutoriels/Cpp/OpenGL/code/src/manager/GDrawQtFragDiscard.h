//===============================================
#ifndef _GDrawQtFragDiscard_
#define _GDrawQtFragDiscard_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTeapot.h"
//===============================================
class GDrawQtFragDiscard : public GDrawQt {
public:
    GDrawQtFragDiscard();
    ~GDrawQtFragDiscard();

public:
    static GDrawQtFragDiscard* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();

private:
    static GDrawQtFragDiscard* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTeapot* m_objTeapot;
    float m_angle;
};
//===============================================
#endif
//===============================================

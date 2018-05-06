//===============================================
#ifndef _GDrawQtSubRoutine_
#define _GDrawQtSubRoutine_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTeapot.h"
#include "GObjTorus.h"
//===============================================
class GDrawQtSubRoutine : public GDrawQt {
public:
    GDrawQtSubRoutine();
    ~GDrawQtSubRoutine();

public:
    static GDrawQtSubRoutine* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();

private:
    static GDrawQtSubRoutine* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTeapot* m_objTeapot;
    GObjTorus* m_objTorus;
    float m_angle;
};
//===============================================
#endif
//===============================================

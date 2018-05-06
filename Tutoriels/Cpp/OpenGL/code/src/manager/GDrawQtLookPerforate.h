//===============================================
#ifndef _GDrawQtLookPerforate_
#define _GDrawQtLookPerforate_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
#include "GObjTeapot.h"
//===============================================
class GDrawQtLookPerforate : public GDrawQt {
public:
    GDrawQtLookPerforate();
    ~GDrawQtLookPerforate();

public:
    static GDrawQtLookPerforate* Instance();
    void initDraw();
    void initCamera(int width, int height);
    void updateCamera(int w, int h);
    void updateDraw();
    void draw();

private:
    static GDrawQtLookPerforate* m_instance;
    GLuint m_program;
    glm::mat4 m_projection;
    glm::mat4 m_modelView;
    GObjTeapot* m_objTeapot;
    float m_angle;
};
//===============================================
#endif
//===============================================

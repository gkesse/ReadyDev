//===============================================
#ifndef _GDrawQtShading_
#define _GDrawQtShading_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtShading : public GDrawQt {
public:
    GDrawQtShading();
    ~GDrawQtShading();

public:
    static GDrawQtShading* Instance();
    void initDraw();
    void draw();
    void showActiveUniforms();
    void initUniformBlockBuffer();

private:
    static GDrawQtShading* m_instance;
    GLuint m_program;
    GLuint m_vertexArrays[1];
    float m_angle;
};
//===============================================
#endif
//===============================================

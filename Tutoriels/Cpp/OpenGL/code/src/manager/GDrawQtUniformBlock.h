//===============================================
#ifndef _GDrawQtFuzzy_
#define _GDrawQtFuzzy_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtFuzzy : public GDrawQt {
public:
    GDrawQtFuzzy();
    ~GDrawQtFuzzy();

public:
    static GDrawQtFuzzy* Instance();
    void initDraw();
    void draw();
    void showActiveUniforms();
    void initUniformBlockBuffer();

private:
    static GDrawQtFuzzy* m_instance;
    GLuint m_program;
    GLuint m_vertexArrays[1];
    float m_angle;
};
//===============================================
#endif
//===============================================

//===============================================
#ifndef _GDrawQtUniformBlock_
#define _GDrawQtUniformBlock_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtUniformBlock : public GDrawQt {
public:
    GDrawQtUniformBlock();
    ~GDrawQtUniformBlock();

public:
    static GDrawQtUniformBlock* Instance();
    void initDraw();
    void draw();
    void initUniformBlockBuffer();

private:
    static GDrawQtUniformBlock* m_instance;
    GLuint m_program;
    GLuint m_vertexArrays[1];
    float m_angle;
};
//===============================================
#endif
//===============================================

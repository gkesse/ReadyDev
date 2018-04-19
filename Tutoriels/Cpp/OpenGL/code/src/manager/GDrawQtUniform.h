//===============================================
#ifndef _GDrawQtUniform_
#define _GDrawQtUniform_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtUniform : public GDrawQt {
public:
    GDrawQtUniform();
    ~GDrawQtUniform();

public:
    static GDrawQtUniform* Instance();
    void initDraw();
    void draw();

private:
    static GDrawQtUniform* m_instance;
    GLuint m_vertexArrays[1];
};
//===============================================
#endif
//===============================================

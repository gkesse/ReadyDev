//===============================================
#ifndef _GDrawQtBind_
#define _GDrawQtBind_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtBind : public GDrawQt {
public:
    GDrawQtBind();
    ~GDrawQtBind();

public:
    static GDrawQtBind* Instance();
    void initDraw();
    void draw();

private:
    static GDrawQtBind* m_instance;
    GLuint m_vertexArrays[1];
};
//===============================================
#endif
//===============================================

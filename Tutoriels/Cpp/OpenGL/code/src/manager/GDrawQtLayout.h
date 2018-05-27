//===============================================
#ifndef _GDrawQtLayout_
#define _GDrawQtLayout_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtLayout : public GDrawQt {
public:
    GDrawQtLayout();
    ~GDrawQtLayout();

public:
    static GDrawQtLayout* Instance();
    void initDraw();
    void draw();

private:
    static GDrawQtLayout* m_instance;
    GLuint m_vertexArrays[1];
};
//===============================================
#endif
//===============================================

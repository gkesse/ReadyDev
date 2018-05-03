//===============================================
#ifndef _GDrawQtRead_
#define _GDrawQtRead_
//================================================
#include "GDrawQt.h"
//===============================================
class GDrawQtRead : public GDrawQt {
public:
    GDrawQtRead();
    ~GDrawQtRead();

public:
    static GDrawQtRead* Instance();
    void initDraw();
    void draw();

private:
    static GDrawQtRead* m_instance;
    GLuint m_vertexArrays[1];
};
//===============================================
#endif
//===============================================

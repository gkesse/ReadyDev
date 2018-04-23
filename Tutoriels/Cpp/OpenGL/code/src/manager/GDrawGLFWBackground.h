//===============================================
#ifndef _GDrawGLFWBackground_
#define _GDrawGLFWBackground_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawGLFWBackground : public GDrawQt {
public:
    GDrawGLFWBackground();
    ~GDrawGLFWBackground();

public:
    static GDrawGLFWBackground* Instance();

private:
    static GDrawGLFWBackground* m_instance;
};
//===============================================
#endif
//===============================================

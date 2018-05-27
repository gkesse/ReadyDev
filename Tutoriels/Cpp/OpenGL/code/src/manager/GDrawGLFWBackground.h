//===============================================
#ifndef _GDrawGLFWBackground_
#define _GDrawGLFWBackground_
//================================================
#include "GDrawGLFW.h"
//===============================================
class GDrawGLFWBackground : public GDrawGLFW {
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

//===============================================
#ifndef _GDrawSDLSimple_
#define _GDrawSDLSimple_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLSimple : public GDrawSDL {
public:
    GDrawSDLSimple();
    ~GDrawSDLSimple();

public:
    static GDrawSDLSimple* Instance();
    void draw();

private:
    static GDrawSDLSimple* m_instance;
};
//===============================================
#endif
//===============================================

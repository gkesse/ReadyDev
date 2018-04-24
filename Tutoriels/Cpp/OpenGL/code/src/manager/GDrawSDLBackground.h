//===============================================
#ifndef _GDrawSDLBackground_
#define _GDrawSDLBackground_
//================================================
#include "GDrawSDL.h"
//===============================================
class GDrawSDLBackground : public GDrawSDL {
public:
    GDrawSDLBackground();
    ~GDrawSDLBackground();

public:
    static GDrawSDLBackground* Instance();

private:
    static GDrawSDLBackground* m_instance;
};
//===============================================
#endif
//===============================================

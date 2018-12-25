//================================================
#ifndef _GAntiAliasing_
#define _GAntiAliasing_
//================================================
#include "GInclude.h"
//================================================
class GAntiAliasing {
public:
    GAntiAliasing();
    ~GAntiAliasing();
	
public:
    static GAntiAliasing* Instance();
    virtual void enable();
};
//================================================
#endif
//================================================

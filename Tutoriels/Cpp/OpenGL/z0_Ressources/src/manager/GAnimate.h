//================================================
#ifndef _GAnimate_
#define _GAnimate_
//================================================
#include "GInclude.h"
//================================================
class GAnimate {
public:
    GAnimate();
    ~GAnimate();
	
public:
    static GAnimate* Instance();
    virtual void animate();
};
//================================================
#endif
//================================================

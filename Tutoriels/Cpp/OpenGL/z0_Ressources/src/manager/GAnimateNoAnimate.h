//================================================
#ifndef _GAnimateNoAnimate_
#define _GAnimateNoAnimate_
//================================================
#include "GAnimate.h"
//================================================
class GAnimateNoAnimate : public GAnimate {
public:
    GAnimateNoAnimate();
    ~GAnimateNoAnimate();
	
public:
    static GAnimateNoAnimate* Instance();
	
private:
    static GAnimateNoAnimate* m_instance;
};
//================================================
#endif
//================================================

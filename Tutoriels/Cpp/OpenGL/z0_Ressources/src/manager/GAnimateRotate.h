//================================================
#ifndef _GAnimateRotate_
#define _GAnimateRotate_
//================================================
#include "GAnimate.h"
//================================================
class GAnimateRotate : public GAnimate {
public:
    GAnimateRotate();
    ~GAnimateRotate();
	
public:
    static GAnimateRotate* Instance();
    void animate();
	
private:
    static GAnimateRotate* m_instance;
};
//================================================
#endif
//================================================

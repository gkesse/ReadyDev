//================================================
#ifndef _GAntiAliasingEnable_
#define _GAntiAliasingEnable_
//================================================
#include "GAntiAliasing.h"
//================================================
class GAntiAliasingEnable : public GAntiAliasing {
public:
    GAntiAliasingEnable();
    ~GAntiAliasingEnable();
	
public:
    static GAntiAliasingEnable* Instance();
    void enable();
	
private:
    static GAntiAliasingEnable* m_instance;
};
//================================================
#endif
//================================================

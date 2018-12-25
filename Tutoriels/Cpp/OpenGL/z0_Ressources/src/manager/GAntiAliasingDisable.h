//================================================
#ifndef _GAntiAliasingDisable_
#define _GAntiAliasingDisable_
//================================================
#include "GAntiAliasing.h"
//================================================
class GAntiAliasingDisable : public GAntiAliasing {
public:
    GAntiAliasingDisable();
    ~GAntiAliasingDisable();
	
public:
    static GAntiAliasingDisable* Instance();
	
private:
    static GAntiAliasingDisable* m_instance;
};
//================================================
#endif
//================================================

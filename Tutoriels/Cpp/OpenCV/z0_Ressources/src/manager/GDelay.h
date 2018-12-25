//================================================
#ifndef _GDelay_
#define _GDelay_
//================================================
#include "GInclude.h"
//================================================
class GDelay {
public:
    GDelay();
    ~GDelay();
	
public:
    static GDelay* Instance();
    void loop();
    void delay(const int& ms, char& c);
	
private:
    static GDelay* m_instance;
};
//================================================
#endif
//================================================

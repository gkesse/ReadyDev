//================================================
#ifndef _GStyle_
#define _GStyle_
//================================================
#include "GInclude.h"
//================================================
class GStyle {
public:
    GStyle();
    ~GStyle();
	
public:
    static GStyle* Instance();
    void load(const string& file);
	
private:
    static GStyle* m_instance;
};
//================================================
#endif
//================================================

//================================================
#ifndef _GSetting_
#define _GSetting_
//================================================
#include "GInclude.h"
//================================================
class GSetting {
public:
    GSetting();
    ~GSetting();
	
public:
    static GSetting* Instance();
    void load(const string& file);

private:
    const static char G_CHAR_COMMENT = '#';

private:
    static GSetting* m_instance;
};
//================================================
#endif
//================================================

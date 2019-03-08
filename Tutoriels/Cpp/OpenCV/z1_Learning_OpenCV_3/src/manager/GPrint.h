//================================================
#ifndef _GPrint_
#define _GPrint_
//================================================
#include "GInclude.h"
//================================================
class GPrint {
public:
    GPrint();
    ~GPrint();
	
public:
    static GPrint* Instance();
    void print(const vector<string>& data, const string& name = "");

private:
    static GPrint* m_instance;
};
//================================================
#endif
//================================================

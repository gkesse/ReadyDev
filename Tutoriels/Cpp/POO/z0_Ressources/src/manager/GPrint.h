//===============================================
#ifndef _GPrint_
#define _GPrint_
//===============================================
#include "GInclude.h"
//===============================================
class GPrint {
private:
    GPrint();

public:
    ~GPrint();
    static GPrint* Instance();
    void print(const string& data);

private:
    static GPrint* m_instance;
};
//===============================================
#endif
//===============================================

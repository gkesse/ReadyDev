//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GSingletonO GSingletonO;
//===============================================
struct GSingletonO {
    void (*Print)();
    void (*Set_Data)(const char* data);
    char* (*Get_Data)();

    char m_data[50];
};
//===============================================
GSingletonO* GSingleton();
//===============================================
#endif
//===============================================

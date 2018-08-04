//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include "GDatabase.h"
//===============================================
typedef struct GSingletonO GSingletonO;
//===============================================
struct GSingletonO {
    void (*Set_Data)(const char* data);
    char* (*Get_Data)();
    char m_data[50];
};
//===============================================
GSingletonO GSingleton();
//===============================================
#endif
//===============================================

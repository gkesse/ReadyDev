//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GSingletonO GSingletonO;
//===============================================
struct _GSingletonO {
    void (*Delete)();
    void (*Set_Name)(const char* name);
    void (*Print)();
    char* m_name;
};
//===============================================
GSingletonO* GSingleton_New();
void GSingleton_Delete();
GSingletonO* GSingleton();
//===============================================
#endif
//===============================================

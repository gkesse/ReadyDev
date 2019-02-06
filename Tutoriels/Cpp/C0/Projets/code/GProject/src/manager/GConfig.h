//===============================================
#ifndef _GConfig_
#define _GConfig_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GConfigO GConfigO;
//===============================================
struct _GConfigO {
    void* m_child;
    void (*Delete)();
    void (*Set_Data)(const char* key, const char* value);
    char* (*Get_Data)(const char* key);
    void (*Show)();
    void (*Clear)();
    void (*Remove)(const char* key);
};
//===============================================
GConfigO* GConfig_New();
void GConfig_Delete();
GConfigO* GConfig();
//===============================================
#endif
//===============================================

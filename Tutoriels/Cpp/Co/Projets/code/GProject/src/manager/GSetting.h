//===============================================
#ifndef _GSetting_
#define _GSetting_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GSettingO GSettingO;
//===============================================
struct _GSettingO {
    void* m_child;
    void (*Delete)();
    void (*Load)(const char* file);
};
//===============================================
GSettingO* GSetting_New();
void GSetting_Delete();
GSettingO* GSetting();
//===============================================
#endif
//===============================================

//===============================================
#ifndef _GModule_
#define _GModule_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GModule GModule;
//===============================================
struct GModule {
    char m_data[50];
};
//===============================================
GModule* GModule_Constructor();
GModule* GModule_Constructor2(const char* data);
void GModule_Destructor(GModule* obj);
void GModule_Print(GModule* obj);
void GModule_Set_Data(GModule* obj, const char* data);
char* GModule_Get_Data(GModule* obj);
//===============================================
#endif
//===============================================

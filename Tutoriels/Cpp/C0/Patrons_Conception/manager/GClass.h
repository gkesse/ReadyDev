//===============================================
#ifndef _GClass_
#define _GClass_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GClass GClass;
//===============================================
struct GClass {
    void (*Destructor)(GClass* obj);
    void (*Print)(GClass* obj);
    void (*Set_Data)(GClass* obj, const char* data);
    char* (*Get_Data)(GClass* obj);
    
    char m_data[50];
};
//===============================================
GClass* GClass_Constructor();
GClass* GClass_Constructor2(const char* data);
//===============================================
#endif
//===============================================

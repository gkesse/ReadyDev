//===============================================
#ifndef _GPerson_
#define _GPerson_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GPersonO GPersonO;
//===============================================
struct _GPersonO {
    void (*Delete)(GPersonO* obj);
    void (*Set_Name)(GPersonO* obj, const char* name);
    void (*Print)(GPersonO* obj);
    char* m_name;
};
//===============================================
GPersonO* GPerson_New();
void GPerson_Delete(GPersonO* obj);
//===============================================
#endif
//===============================================

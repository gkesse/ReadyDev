//===============================================
#ifndef _GPrint_
#define _GPrint_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GPrintO GPrintO;
//===============================================
struct _GPrintO {
    void* m_child;
    void (*Delete)();
    void (*Print)(const char* data);
};
//===============================================
GPrintO* GPrint_New();
void GPrint_Delete();
GPrintO* GPrint();
//===============================================
#endif
//===============================================

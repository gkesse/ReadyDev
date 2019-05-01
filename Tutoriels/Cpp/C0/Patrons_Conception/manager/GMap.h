//===============================================
#ifndef _GMap_
#define _GMap_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GMapO GMapO;
typedef struct GNodeO GNodeO;
//===============================================
struct GNodeO {
    int m_index;
    char m_key[50];
    char m_value[50];
    GNodeO* m_next;
};
//===============================================
struct GMapO {
    void (*Set_Data)(const char* key, const char* value);
    void (*Show_Data)();
    void (*Get_Size)();
    void (*Get_Data)(const char* key);
    
    GNodeO* m_start;
    int m_size;
};
//===============================================
GMapO* GMap();
//===============================================
#endif
//===============================================

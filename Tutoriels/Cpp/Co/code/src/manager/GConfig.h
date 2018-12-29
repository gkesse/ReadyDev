//===============================================
#ifndef _GConfig_
#define _GConfig_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GConfigO GConfigO;
typedef struct GNodeO GNodeO;
//===============================================
struct GNodeO {
    int m_index;
    char m_key[50];
    char m_value[50];
    GNodeO* m_next;
};
//===============================================
struct GConfigO {
    void (*Set_Data)(const char* key, const char* value);
    char* (*Get_Data)(const char* key);
    void (*Show)();
    
    GNodeO* m_start;
    int m_size;
};
//===============================================
GConfigO* GConfig();
//===============================================
#endif
//===============================================

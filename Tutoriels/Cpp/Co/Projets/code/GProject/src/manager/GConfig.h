//===============================================
#ifndef _GConfig_
#define _GConfig_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GConfigO GConfigO;
typedef struct _GNodeO GNodeO;
//===============================================
struct _GNodeO {
    int m_index;
    char* m_key;
    char* m_value;
    GNodeO* m_next;
};
//===============================================
struct _GConfigO {
    void (*Set_Data)(const char* key, const char* value);
    char* (*Get_Data)(const char* key);
    void (*Show)();
    void (*Delete)();
    void (*Clear)();
    void (*Remove)(const char* key);
    
    GNodeO* m_start;
    int m_size;
};
//===============================================
GConfigO* GConfig();
//===============================================
#endif
//===============================================

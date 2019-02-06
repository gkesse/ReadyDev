//===============================================
#ifndef _GConfigNormal_
#define _GConfigNormal_
//===============================================
#include "GConfig.h"
//===============================================
typedef struct _GConfigNormalO GConfigNormalO;
typedef struct _GNodeO GNodeO;
//===============================================
struct _GNodeO {
    int m_index;
    char* m_key;
    char* m_value;
    GNodeO* m_next;
};
//===============================================
struct _GConfigNormalO {
    GConfigO* m_parent;
    GNodeO* m_start;
    int m_size;
};
//===============================================
GConfigO* GConfigNormal_New();
void GConfigNormal_Delete();
GConfigO* GConfigNormal();
//===============================================
#endif
//===============================================

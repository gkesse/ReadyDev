//===============================================
#ifndef _GStrategy_
#define _GStrategy_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GStrategyO GStrategyO;
//===============================================
struct _GStrategyO {
	void* m_child;
    void (*Delete)(GStrategyO* obj);
    void (*Set_Name)(GStrategyO* obj, const char* name);
    void (*Print)(GStrategyO* obj);
};
//===============================================
GStrategyO* GStrategy_New();
void GStrategy_Delete(GStrategyO* obj);
GStrategyO* GStrategy(const char* key);
//===============================================
#endif
//===============================================

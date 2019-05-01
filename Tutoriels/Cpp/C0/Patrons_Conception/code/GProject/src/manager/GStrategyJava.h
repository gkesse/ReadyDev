//===============================================
#ifndef _GStrategyJava_
#define _GStrategyJava_
//===============================================
#include "GStrategy.h"
//===============================================
typedef struct _GStrategyJavaO GStrategyJavaO;
//===============================================
struct _GStrategyJavaO {
	void* m_parent;
	char* m_name;
};
//===============================================
GStrategyO* GStrategyJava_New();
void GStrategyJava_Delete(GStrategyO* obj);
//===============================================
#endif
//===============================================

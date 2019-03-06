//===============================================
#include "GStrategy.h"
#include "GStrategyJava.h"
#include "GStrategyPython.h"
#include "GString.h"
//===============================================
GStrategyO* GStrategy_New() {
    GStrategyO* lObj = (GStrategyO*)malloc(sizeof(GStrategyO));
    lObj->m_child = 0;
    lObj->Delete = GStrategy_Delete;
    return lObj;
}
//===============================================
void GStrategy_Delete(GStrategyO* obj) {
    if(obj != 0) {
    	if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
GStrategyO* GStrategy(const char* key) {
    if(GString()->Is_Equal(key, "JAVA")) return GStrategyJava_New();
    if(GString()->Is_Equal(key, "PYTHON")) return GStrategyPython_New();
    return GStrategyJava_New();
}
//===============================================

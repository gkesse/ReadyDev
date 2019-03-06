//===============================================
#include "GProcess.h"
#include "GProcessClass.h"
#include "GProcessInheritance.h"
#include "GProcessPolymorphism.h"
#include "GProcessSingleton.h"
#include "GProcessStrategy.h"
#include "GString.h"
#include "GConfig.h"
//===============================================
GProcessO* GProcess_New() {
    GProcessO* lObj = (GProcessO*)malloc(sizeof(GProcessO));
    lObj->m_child = 0;
    return lObj;
}
//===============================================
void GProcess_Delete(GProcessO* obj) {
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
GProcessO* GProcess() {
    char* lKey = GConfig()->Get_Data("PROCESS");
    if(GString()->Is_Equal(lKey, "CLASS")) return GProcessClass();
    if(GString()->Is_Equal(lKey, "INHERITANCE")) return GProcessInheritance();
    if(GString()->Is_Equal(lKey, "POLYMORPHISM")) return GProcessPolymorphism();
    if(GString()->Is_Equal(lKey, "SINGLETON")) return GProcessSingleton();
    if(GString()->Is_Equal(lKey, "STRATEGY")) return GProcessStrategy();
    return GProcessClass();
}
//===============================================

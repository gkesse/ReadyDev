//===============================================
#include "GMenu.h"
#include "GMenuNormal.h"
#include "GKString.h"
#include "GConfig.h"
//===============================================
GMenuO* GMenu_Constructor();
void GMenu_Init(GMenuO* obj);
void GMenu_Strategy(const char* key, GMenuO* obj);
//===============================================
GMenuO* GMenu_Constructor() {
    GMenuO* lObj = (GMenuO*)malloc(sizeof(GMenuO));
    GMenu_Init(lObj);
    return lObj;
}
//===============================================
void GMenu_Init(GMenuO* obj) {
    obj->Strategy = GMenu_Strategy;
}
//===============================================
GMenuO* GKMenu(const char* key) {
	GMenuO* lObj = GMenu_Constructor();
	lObj->Strategy(key, lObj);
    return lObj;
}
//===============================================
void GMenu_Strategy(const char* key, GMenuO* obj) {
    if(GKString()->Is_Equal(key, "NORMAL")) {GMenuNormal()->Strategy(obj);}
    else {GMenuNormal()->Strategy(obj);}
}
//===============================================


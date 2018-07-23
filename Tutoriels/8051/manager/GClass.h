//===============================================
#ifndef _GClass_
#define _GClass_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct {
	char* m_name;
} GClass;
//===============================================
GClass* GClass_Constructor() {
	GClass* lObj = (GClass*)malloc(sizeof(GClass));
	lObj->m_name = "_NONE";
	return lObj;
}
//===============================================
void GClass_Destructor(GClass* obj) {
	free(obj);
	obj = 0;
}
//===============================================
void GClass_Set_Data(GClass* obj, char* name) {
	obj->m_name = name;
}
//===============================================
void GClass_Get_Data(GClass* obj, char* name) {
	obj->m_name = name;
}
//===============================================
#endif
//===============================================

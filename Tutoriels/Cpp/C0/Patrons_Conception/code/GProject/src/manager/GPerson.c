//===============================================
#include "GPerson.h"
#include "GString.h"
//===============================================
void GPerson_Set_Name(GPersonO* obj, const char* name);
void GPerson_Print(GPersonO* obj);
//===============================================
GPersonO* GPerson_New() {
    GPersonO* lObj = (GPersonO*)malloc(sizeof(GPersonO));
    lObj->Delete = GPerson_Delete;
    lObj->Set_Name = GPerson_Set_Name;
    lObj->Print = GPerson_Print;
    lObj->m_name = 0;
    return lObj;
}
//===============================================
void GPerson_Delete(GPersonO* obj) {
    if(obj != 0) {
        if(obj->m_name != 0) {
            free(obj->m_name);
            obj->m_name = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
void GPerson_Set_Name(GPersonO* obj, const char* name) {
	GString()->Free(obj->m_name);
	obj->m_name = GString()->Copy(name);
}
//===============================================
void GPerson_Print(GPersonO* obj) {
	printf("Je suis une persone: %s\n", obj->m_name);
}
//===============================================

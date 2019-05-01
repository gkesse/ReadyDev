//===============================================
#include "GAircraft.h"
#include "GString.h"
//===============================================
void GAircraft_Set_Name(GAircraftO* obj, const char* name);
void GAircraft_Print(GAircraftO* obj);
//===============================================
GAircraftO* GAircraft_New() {
    GAircraftO* lObj = (GAircraftO*)malloc(sizeof(GAircraftO));
    lObj->m_child = 0;
    lObj->Delete = GAircraft_Delete;
    lObj->Set_Name = GAircraft_Set_Name;
    lObj->Print = GAircraft_Print;
    lObj->m_name = 0;
    return lObj;
}
//===============================================
void GAircraft_Delete(GAircraftO* obj) {
    if(obj != 0) {
    	if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
    	if(obj->m_name != 0) {
            free(obj->m_name);
            obj->m_name = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
void GAircraft_Set_Name(GAircraftO* obj, const char* name) {
	GString()->Free(obj->m_name);
	obj->m_name = GString()->Copy(name);
}
//===============================================
void GAircraft_Print(GAircraftO* obj) {
	printf("Je suis un avion: %s\n", obj->m_name);
}
//===============================================

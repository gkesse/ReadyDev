//===============================================
#include "GAnimal.h"
#include "GString.h"
//===============================================
void GAnimal_Set_Name(GAnimalO* obj, const char* name);
void GAnimal_Show_Name(GAnimalO* obj);
//===============================================
GAnimalO* GAnimal_New() {
    GAnimalO* lObj = (GAnimalO*)malloc(sizeof(GAnimalO));
    lObj->Delete = GAnimal_Delete;
    lObj->Set_Name = GAnimal_Set_Name;
    lObj->Show_Name = GAnimal_Show_Name;
    lObj->m_name = 0;
    return lObj;
}
//===============================================
void GAnimal_Delete(GAnimalO* obj) {
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
void GAnimal_Set_Name(GAnimalO* obj, const char* name) {
	GString()->Free(obj->m_name);
	obj->m_name = GString()->Copy(name);
}
//===============================================
void GAnimal_Show_Name(GAnimalO* obj) {
	printf("Je suis un animal: %s\n", obj->m_name);
}
//===============================================

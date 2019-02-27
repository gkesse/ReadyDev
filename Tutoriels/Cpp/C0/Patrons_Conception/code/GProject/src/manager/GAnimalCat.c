//===============================================
#include "GAnimalCat.h"
#include "GString.h"
//===============================================
void GAnimalCat_Set_Name(GAnimalCatO* obj, const char* name);
void GAnimalCat_Show_Name(GAnimalCatO* obj);
void GAnimalCat_Set_Breed(GAnimalCatO* obj, const char* breed);
void GAnimalCat_Print(GAnimalCatO* obj);
//===============================================
GAnimalCatO* GAnimalCat_New() {
	GAnimalO* lParent = GAnimal_New();
    GAnimalCatO* lChild = (GAnimalCatO*)malloc(sizeof(GAnimalCatO));

    lChild->m_parent = lParent;
    lChild->Delete = GAnimalCat_Delete;
    lChild->Set_Name = GAnimalCat_Set_Name;
    lChild->Show_Name = GAnimalCat_Show_Name;
    lChild->Set_Breed = GAnimalCat_Set_Breed;
    lChild->Print = GAnimalCat_Print;
    return lChild;
}
//===============================================
void GAnimalCat_Delete(GAnimalCatO* obj) {
    if(obj != 0) {
    	GAnimalO* lParent = obj->m_parent;
    	lParent->Delete(lParent);
        free(obj);
        obj = 0;
    }
}
//===============================================
void GAnimalCat_Set_Name(GAnimalCatO* obj, const char* name) {
	GAnimalO* lParent = obj->m_parent;
	lParent->Set_Name(lParent, name);
}
//===============================================
void GAnimalCat_Show_Name(GAnimalCatO* obj) {
	GAnimalO* lParent = obj->m_parent;
	lParent->Show_Name(lParent);
}
//===============================================
void GAnimalCat_Set_Breed(GAnimalCatO* obj, const char* breed) {
	GString()->Free(obj->m_breed);
	obj->m_breed = GString()->Copy(breed);
}
//===============================================
void GAnimalCat_Print(GAnimalCatO* obj) {
	GAnimalO* lParent = obj->m_parent;
	printf("Je suis un chat: %s | %s\n", obj->m_breed, lParent->m_name);
}
//===============================================

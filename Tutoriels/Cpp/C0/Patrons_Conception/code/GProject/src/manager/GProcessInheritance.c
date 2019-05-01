//===============================================
#include "GProcessInheritance.h"
#include "GAnimal.h"
#include "GAnimalCat.h"
//===============================================
static GProcessO* m_GProcessInheritanceO = 0;
//===============================================
void GProcessInheritance_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessInheritance_New() {
    GProcessO* lParent = GProcess_New();
    GProcessInheritanceO* lChild = (GProcessInheritanceO*)malloc(sizeof(GProcessInheritanceO));
    lChild->m_parent = lParent;
    lParent->m_child = lChild;
    lParent->Delete = GProcessInheritance_Delete;
    lParent->Run = GProcessInheritance_Run;
    return lParent;
}
//===============================================
void GProcessInheritance_Delete(GProcessO* obj) {
    GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessInheritance() {
    if(m_GProcessInheritanceO == 0) {
        m_GProcessInheritanceO = GProcessInheritance_New();
    }
    return m_GProcessInheritanceO;
}

//===============================================
void GProcessInheritance_Run(int argc, char** argv) {
	GAnimalO* lAnimal = GAnimal_New();
	lAnimal->Set_Name(lAnimal, "JERRY");
	lAnimal->Show_Name(lAnimal);
	lAnimal->Delete(lAnimal);

	GAnimalCatO* lCat = GAnimalCat_New();
	lCat->Set_Name(lCat, "TOM");
	lCat->Set_Breed(lCat, "Siamois");
	lCat->Show_Name(lCat);
	lCat->Print(lCat);
	lCat->Delete(lCat);
}
//===============================================

//===============================================
#ifndef _GAnimalCat_
#define _GAnimalCat_
//===============================================
#include "GAnimal.h"
//===============================================
typedef struct _GAnimalCatO GAnimalCatO;
//===============================================
struct _GAnimalCatO {
	void* m_parent;
    void (*Delete)(GAnimalCatO* obj);
    void (*Set_Name)(GAnimalCatO* obj, const char* name);
    void (*Show_Name)(GAnimalCatO* obj);
    void (*Set_Breed)(GAnimalCatO* obj, const char* breed);
    void (*Print)(GAnimalCatO* obj);
    char* m_breed;
};
//===============================================
GAnimalCatO* GAnimalCat_New();
void GAnimalCat_Delete(GAnimalCatO* obj);
//===============================================
#endif
//===============================================

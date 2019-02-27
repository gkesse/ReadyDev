//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GAnimalO GAnimalO;
//===============================================
struct _GAnimalO {
    void (*Delete)(GAnimalO* obj);
    void (*Set_Name)(GAnimalO* obj, const char* name);
    void (*Show_Name)(GAnimalO* obj);
    char* m_name;
};
//===============================================
GAnimalO* GAnimal_New();
void GAnimal_Delete(GAnimalO* obj);
//===============================================
#endif
//===============================================

//===============================================
#ifndef _GAircraft_
#define _GAircraft_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GAircraftO GAircraftO;
//===============================================
struct _GAircraftO {
	void* m_child;
    void (*Delete)(GAircraftO* obj);
    void (*Set_Name)(GAircraftO* obj, const char* name);
    void (*Set_Model)(GAircraftO* obj, const char* model);
    void (*Print)(GAircraftO* obj);
    char* m_name;
};
//===============================================
GAircraftO* GAircraft_New();
void GAircraft_Delete(GAircraftO* obj);
//===============================================
#endif
//===============================================

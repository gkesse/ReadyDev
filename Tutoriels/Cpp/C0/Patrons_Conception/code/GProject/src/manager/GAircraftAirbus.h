//===============================================
#ifndef _GAircraftAirbus_
#define _GAircraftAirbus_
//===============================================
#include "GAircraft.h"
//===============================================
typedef struct _GAircraftAirbusO GAircraftAirbusO;
//===============================================
struct _GAircraftAirbusO {
	void* m_parent;
	char* m_model;
};
//===============================================
GAircraftO* GAircraftAirbus_New();
void GAircraftAirbus_Delete(GAircraftO* obj);
//===============================================
#endif
//===============================================

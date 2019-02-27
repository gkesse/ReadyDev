//===============================================
#include "GAircraftAirbus.h"
#include "GString.h"
//===============================================
void GAircraftAirbus_Set_Model(GAircraftO* obj, const char* model);
void GAircraftAirbus_Print(GAircraftO* obj);
//===============================================
GAircraftO* GAircraftAirbus_New() {
	GAircraftO* lParent = GAircraft_New();
    GAircraftAirbusO* lChild = (GAircraftAirbusO*)malloc(sizeof(GAircraftAirbusO));

    lChild->m_parent = lParent;
    lChild->m_model = 0;

    lParent->m_child = lChild;
    lParent->Delete = GAircraftAirbus_Delete;
    lParent->Set_Model = GAircraftAirbus_Set_Model;
    lParent->Print = GAircraftAirbus_Print;
    return lParent;
}
//===============================================
void GAircraftAirbus_Delete(GAircraftO* obj) {
	GAircraft_Delete(obj);
}
//===============================================
void GAircraftAirbus_Set_Model(GAircraftO* obj, const char* model) {
	GAircraftAirbusO* lAircraft = obj->m_child;
	GString()->Free(lAircraft->m_model);
	lAircraft->m_model = GString()->Copy(model);
}
//===============================================
void GAircraftAirbus_Print(GAircraftO* obj) {
	GAircraftAirbusO* lAircraft = obj->m_child;
	printf("Je suis un avion Airbus:  %s | %s\n", obj->m_name, lAircraft->m_model);
}
//===============================================

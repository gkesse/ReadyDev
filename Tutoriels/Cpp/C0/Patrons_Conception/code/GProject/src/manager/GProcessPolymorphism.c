//===============================================
#include "GProcessPolymorphism.h"
#include "GAircraft.h"
//===============================================
static GProcessO* m_GProcessPolymorphismO = 0;
//===============================================
void GProcessPolymorphism_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessPolymorphism_New() {
    GProcessO* lParent = GProcess_New();
    GProcessPolymorphismO* lChild = (GProcessPolymorphismO*)malloc(sizeof(GProcessPolymorphismO));
    lChild->m_parent = lParent;
    lParent->m_child = lChild;
    lParent->Delete = GProcessPolymorphism_Delete;
    lParent->Run = GProcessPolymorphism_Run;
    return lParent;
}
//===============================================
void GProcessPolymorphism_Delete(GProcessO* obj) {
    GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessPolymorphism() {
    if(m_GProcessPolymorphismO == 0) {
        m_GProcessPolymorphismO = GProcessPolymorphism_New();
    }
    return m_GProcessPolymorphismO;
}

//===============================================
void GProcessPolymorphism_Run(int argc, char** argv) {
	GAircraftO* lAircraft = 0;

	lAircraft = GAircraft_New();
	lAircraft->Set_Name(lAircraft, "BOEING");
	lAircraft->Print(lAircraft);
	lAircraft->Delete(lAircraft);

	lAircraft = GAircraftAirbus_New();
	lAircraft->Set_Name(lAircraft, "AIRBUS");
	lAircraft->Set_Model(lAircraft, "AIRBUS 380");
	lAircraft->Print(lAircraft);
	lAircraft->Delete(lAircraft);
}
//===============================================

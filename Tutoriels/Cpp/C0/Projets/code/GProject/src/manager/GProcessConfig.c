//===============================================
#include "GProcessConfig.h"
#include "GConfig.h"
//===============================================
static GProcessO* m_GProcessConfigO = 0;
//===============================================
void GProcessConfig_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessConfig_New() {
    GProcessO* lParent = GProcess_New();
    GProcessConfigO* lChild = (GProcessConfigO*)malloc(sizeof(GProcessConfigO));
    lChild->m_parent = lParent;
    lParent->m_child = lChild;
    lParent->Delete = GProcessConfig_Delete;
    lParent->Run = GProcessConfig_Run;
    return lParent;
}
//===============================================
void GProcessConfig_Delete(GProcessO* obj) {
    GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessConfig() {
    if(m_GProcessConfigO == 0) {
        m_GProcessConfigO = GProcessConfig_New();
    }
    return m_GProcessConfigO;
}
//===============================================
void GProcessConfig_Run(int argc, char** argv) {
	GConfig()->Set_Data("Nom", "KESSE");
	GConfig()->Set_Data("Prenom", "Gerard");
	GConfig()->Set_Data("Email", "gerard.kesse@readydev.com");
	GConfig()->Set_Data("Diplome", "Ingenieur");
	GConfig()->Set_Data("Formation", "Informatique Industrielle");
	GConfig()->Set_Data("Ecole", "Polytech'Montpellier");
	GConfig()->Show();
}
//===============================================

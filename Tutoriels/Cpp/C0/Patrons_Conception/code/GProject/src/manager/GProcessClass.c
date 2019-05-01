//===============================================
#include "GProcessClass.h"
#include "GPerson.h"
//===============================================
static GProcessO* m_GProcessClassO = 0;
//===============================================
void GProcessClass_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessClass_New() {
    GProcessO* lParent = GProcess_New();
    GProcessClassO* lChild = (GProcessClassO*)malloc(sizeof(GProcessClassO));
    lChild->m_parent = lParent;
    lParent->m_child = lChild;
    lParent->Delete = GProcessClass_Delete;
    lParent->Run = GProcessClass_Run;
    return lParent;
}
//===============================================
void GProcessClass_Delete(GProcessO* obj) {
    GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessClass() {
    if(m_GProcessClassO == 0) {
        m_GProcessClassO = GProcessClass_New();
    }
    return m_GProcessClassO;
}

//===============================================
void GProcessClass_Run(int argc, char** argv) {
	GPersonO* lPerson = GPerson_New();
	lPerson->Set_Name(lPerson, "Gerard KESSE");
	lPerson->Print(lPerson);
	lPerson->Set_Name(lPerson, "Deborah YOBOUE");
	lPerson->Print(lPerson);
	lPerson->Delete(lPerson);
}
//===============================================

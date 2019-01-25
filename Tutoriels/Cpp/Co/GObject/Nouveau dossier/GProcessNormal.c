//===============================================
#include "GProcessNormal.h"
#include "Vehicule.h"
//===============================================
static GProcessO* m_GProcessNormalO = 0;
//===============================================
void GProcessNormal_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessNormal_New() {
	GProcessO* lObj = GProcess_New();
	GProcessNormalO* lChild = (GProcessNormalO*)malloc(sizeof(GProcessNormalO));
	lChild->m_parent = lObj;
	lObj->m_child = lChild;
	lObj->Delete = GProcessNormal_Delete;
	lObj->Run = GProcessNormal_Run;
	return lObj;
}
//===============================================
void GProcessNormal_Delete(GProcessO* obj) {
	GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessNormal() {
	if(m_GProcessNormalO == 0) {
		m_GProcessNormalO = GProcessNormal_New();
	}
	return m_GProcessNormalO;
}

//===============================================
void GProcessNormal_Run(int argc, char** argv) {
	Vehicule *v = NULL;

	g_type_init ();
	v = g_object_new (TYPE_VEHICULE, NULL);
	VEHICULE_GET_PRIVATE(v)->vitesse = 100;
	g_object_unref (v);
}
//===============================================

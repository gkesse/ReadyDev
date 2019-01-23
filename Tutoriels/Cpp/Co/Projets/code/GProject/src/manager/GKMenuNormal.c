//===============================================
#include "GKMenuNormal.h"
//===============================================
static GKMenuO* m_GKMenuNormalO = 0;
//===============================================
GKMenuO* GKMenuNormal_New();
void GKMenuNormal_Delete(GKMenuO* obj);
void GKMenuNormal_Create(GKMenuO* obj);
//===============================================
GKMenuO* GKMenuNormal_New() {
	GKMenuO* lObj = GKMenu_New();
	GKMenuNormalO* lChild = (GKMenuNormalO*)malloc(sizeof(GKMenuNormalO));
	lChild->m_parent = lObj;
	lObj->m_child = lChild;
	lObj->Delete = GKMenuNormal_Delete;
	lObj->Create = GKMenuNormal_Create;
	return lObj;
}
//===============================================
void GKMenuNormal_Delete(GKMenuO* obj) {
	GKMenu_Delete(obj);
}
//===============================================
GKMenuO* GKMenuNormal() {
	if(m_GKMenuNormalO == 0) {
		m_GKMenuNormalO = GKMenuNormal_New();
	}
	return m_GKMenuNormalO;
}
//===============================================
void GKMenuNormal_Create(GKMenuO* obj) {

}
//===============================================

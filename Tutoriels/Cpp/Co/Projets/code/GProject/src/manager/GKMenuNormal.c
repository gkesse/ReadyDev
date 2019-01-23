//===============================================
#include "GKMenuNormal.h"
//===============================================
static GKMenuNormalO* m_GKMenuNormalO = 0;
//===============================================
GKMenuNormalO* GKMenuNormal_Constructor();
void GKMenuNormal_Interface(GKMenuNormalO* obj);
void GKMenuNormal_Strategy(GKMenuO* obj);
void GKMenuNormal_Run(GKMenuO* obj);
void GKMenuNormal_Set_Data(GKMenuO* obj, const int data);
//===============================================
GKMenuNormalO* GKMenuNormal_Constructor() {
	GKMenuNormalO* lObj = (GKMenuNormalO*)malloc(sizeof(GKMenuNormalO));
	GKMenuNormal_Interface(lObj);
	return lObj;
}
//===============================================
void GKMenuNormal_Interface(GKMenuNormalO* obj) {
	obj->Strategy = GKMenuNormal_Strategy;
}
//===============================================
GKMenuNormalO* GKMenuNormal() {
	if(m_GKMenuNormalO == 0) {
		m_GKMenuNormalO = GKMenuNormal_Constructor();
	}
	return m_GKMenuNormalO;
}
//===============================================
void GKMenuNormal_Strategy(GKMenuO* obj) {
	obj->Run = GKMenuNormal_Run;
	obj->Set_Data = GKMenuNormal_Set_Data;
}
//===============================================
void GKMenuNormal_Run(GKMenuO* obj) {
	printf("HELLLLLLLLLLLLLLLo ----> %d\n", obj->m_data);
}
//===============================================
void GKMenuNormal_Set_Data(GKMenuO* obj, const int data) {
	obj->m_data = data;
}
//===============================================

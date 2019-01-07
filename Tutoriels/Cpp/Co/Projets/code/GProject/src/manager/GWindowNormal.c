//===============================================
#include "GWindowNormal.h"
//===============================================
static GWindowNormalO* m_GWindowNormalO = 0;
//===============================================
GWindowNormalO* GWindowNormal_Constructor();
void GWindowNormal_Interface(GWindowNormalO* obj);
void GWindowNormal_Strategy(GProcessO* obj);
void GWindowNormal_Run(int argc, char** argv);
//===============================================
GWindowNormalO* GWindowNormal_Constructor() {
	GWindowNormalO* lObj = (GWindowNormalO*)malloc(sizeof(GWindowNormalO));
	GWindowNormal_Interface(lObj);
	return lObj;
}
//===============================================
void GWindowNormal_Interface(GWindowNormalO* obj) {
	obj->Strategy = GWindowNormal_Strategy;
}
//===============================================
GWindowNormalO* GWindowNormal() {
	if(m_GWindowNormalO == 0) {
		m_GWindowNormalO = GWindowNormal_Constructor();
	}
	return m_GWindowNormalO;
}
//===============================================
void GWindowNormal_Strategy(GProcessO* obj) {
	obj->Run = GWindowNormal_Run;
}
//===============================================
void GWindowNormal_Run(int argc, char** argv) {

}
//===============================================

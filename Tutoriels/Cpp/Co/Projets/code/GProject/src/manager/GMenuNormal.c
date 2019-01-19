//===============================================
#include "GMenuNormal.h"
//===============================================
static GMenuNormalO* m_GMenuNormalO = 0;
//===============================================
GMenuNormalO* GMenuNormal_Constructor();
void GMenuNormal_Interface(GMenuNormalO* obj);
void GMenuNormal_Strategy(GMenuO* obj);
//===============================================
GMenuNormalO* GMenuNormal_Constructor() {
	GMenuNormalO* lObj = (GMenuNormalO*)malloc(sizeof(GMenuNormalO));
	GMenuNormal_Interface(lObj);
	return lObj;
}
//===============================================
void GMenuNormal_Interface(GMenuNormalO* obj) {
	obj->Strategy = GMenuNormal_Strategy;
}
//===============================================
GMenuNormalO* GMenuNormal() {
	if(m_GMenuNormalO == 0) {
		m_GMenuNormalO = GMenuNormal_Constructor();
	}
	return m_GMenuNormalO;
}
//===============================================
void GMenuNormal_Strategy(GMenuO* obj) {

}
//===============================================

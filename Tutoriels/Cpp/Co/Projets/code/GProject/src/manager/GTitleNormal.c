//===============================================
#include "GTitleNormal.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
static GTitleNormalO* m_GTitleNormalO = 0;
//===============================================
GTitleNormalO* GTitleNormal_Constructor();
void GTitleNormal_Interface(GTitleNormalO* obj);
void GTitleNormal_Strategy(GTitleO* obj);
void GTitleNormal_Run(int argc, char** argv);
//===============================================
GTitleNormalO* GTitleNormal_Constructor() {
	GTitleNormalO* lObj = (GTitleNormalO*)malloc(sizeof(GTitleNormalO));
	GTitleNormal_Interface(lObj);
	return lObj;
}
//===============================================
void GTitleNormal_Interface(GTitleNormalO* obj) {
	obj->Strategy = GTitleNormal_Strategy;
}
//===============================================
GTitleNormalO* GTitleNormal() {
	if(m_GTitleNormalO == 0) {
		m_GTitleNormalO = GTitleNormal_Constructor();
	}
	return m_GTitleNormalO;
}
//===============================================
void GTitleNormal_Strategy(GTitleO* obj) {
	obj->Run = GTitleNormal_Run;
}
//===============================================
void GTitleNormal_Run(int argc, char** argv) {
	GWindow()->Initialize(&argc, &argv);
	GStyle()->Load("res/css/style.css");
	GWindow()->Show();
}
//===============================================

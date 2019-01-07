//===============================================
#include "GProcessWindow.h"
#include "GWindow.h"
//===============================================
static GProcessWindowO* m_GProcessWindowO = 0;
//===============================================
GProcessWindowO* GProcessWindow_Constructor();
void GProcessWindow_Interface(GProcessWindowO* obj);
void GProcessWindow_Strategy(GProcessO* obj);
void GProcessWindow_Run(int argc, char** argv);
//===============================================
GProcessWindowO* GProcessWindow_Constructor() {
	GProcessWindowO* lObj = (GProcessWindowO*)malloc(sizeof(GProcessWindowO));
	GProcessWindow_Interface(lObj);
	return lObj;
}
//===============================================
void GProcessWindow_Interface(GProcessWindowO* obj) {
	obj->Strategy = GProcessWindow_Strategy;
}
//===============================================
GProcessWindowO* GProcessWindow() {
	if(m_GProcessWindowO == 0) {
		m_GProcessWindowO = GProcessWindow_Constructor();
	}
	return m_GProcessWindowO;
}
//===============================================
void GProcessWindow_Strategy(GProcessO* obj) {
	obj->Run = GProcessWindow_Run;
}
//===============================================
void GProcessWindow_Run(int argc, char** argv) {
	GWindow()->Initialize(&argc,&argv);
	GWindow()->Show();
}
//===============================================

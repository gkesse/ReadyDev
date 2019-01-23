//===============================================
#include "GProcessWindow.h"
#include "GWindow.h"
#include "GStyle.h"
//===============================================
static GProcessO* m_GProcessWindowO = 0;
//===============================================
void GProcessWindow_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessWindow_New() {
	GProcessO* lObj = GProcess_New();
	GProcessWindowO* lChild = (GProcessWindowO*)malloc(sizeof(GProcessWindowO));
	lChild->m_parent = lObj;
	lObj->m_child = lChild;
	lObj->Delete = GProcessWindow_Delete;
	lObj->Run = GProcessWindow_Run;
	return lObj;
}
//===============================================
void GProcessWindow_Delete(GProcessO* obj) {
	GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessWindow() {
	if(m_GProcessWindowO == 0) {
		m_GProcessWindowO = GProcessWindow_New();
	}
	return m_GProcessWindowO;
}

//===============================================
void GProcessWindow_Run(int argc, char** argv) {
	GWindow()->Initialize(&argc, &argv);
	GStyle()->Load("res/css/style.css");
	GWindow()->Show();
}
//===============================================

//===============================================
#include "GFree.h"
//===============================================
static GFreeO* m_GFreeO = 0;
//===============================================
GFreeO* GFree_Constructor();
void GFree_Init(GFreeO* obj);
void GFree_Free(void* ptr);
void GFree_Free2(void** ptr, int size);
//===============================================
GFreeO* GFree_Constructor() {
	GFreeO* lObj = (GFreeO*)malloc(sizeof(GFreeO));
	GFree_Init(lObj);
	return lObj;
}
//===============================================
void GFree_Init(GFreeO* obj) {
	obj->Free = GFree_Free;
	obj->Free2 = GFree_Free2;
}
//===============================================
GFreeO* GFree() {
	if(m_GFreeO == 0) {
		m_GFreeO = GFree_Constructor();
	}
	return m_GFreeO;
}
//===============================================
void GFree_Free(void* ptr) {
	if(ptr == 0) return;
	free(ptr);
	ptr = 0;
}
//===============================================
void GFree_Free2(void** ptr, int size) {
	if(ptr == 0) return;
	for(int i = 0; i < size; i++) {
		free(ptr[i]);
	}
	free(ptr);
	ptr = 0;
}
//===============================================

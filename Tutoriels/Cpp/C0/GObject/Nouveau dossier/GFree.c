//===============================================
#include "GFree.h"
//===============================================
static GFreeO* m_GFreeO = 0;
//===============================================
GFreeO* GFree_New();
void GFree_Delete();
void GFree_Free(void* ptr);
void GFree_Free2(void** ptr, int size);
//===============================================
GFreeO* GFree_New() {
	GFreeO* lObj = (GFreeO*)malloc(sizeof(GFreeO));
	lObj->Delete = GFree_Delete;
	lObj->Free = GFree_Free;
	lObj->Free2 = GFree_Free2;
	return lObj;
}
//===============================================
void GFree_Delete() {
	if(m_GFreeO != 0) {
		free(m_GFreeO);
		m_GFreeO = 0;
	}
}
//===============================================
GFreeO* GFree() {
	if(m_GFreeO == 0) {
		m_GFreeO = GFree_New();
	}
	return m_GFreeO;
}
//===============================================
void GFree_Free(void* ptr) {
	if(ptr != 0) {
		free(ptr);
		ptr = 0;
	}
}
//===============================================
void GFree_Free2(void** ptr, int size) {
	if(ptr != 0) {
		for(int i = 0; i < size; i++) {
			if(ptr[i] != 0) {
				free(ptr[i]);
				ptr[i] = 0;
			}
		}
		free(ptr);
		ptr = 0;
	}
}
//===============================================

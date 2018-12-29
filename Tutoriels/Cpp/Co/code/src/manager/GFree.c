//===============================================
#include "GFree.h"
//===============================================
static GFreeO* m_GFreeO = 0;
//===============================================
GFreeO* GFree_Constructor();
void GFree_Init(GFreeO* obj);
void GFree_Free(void* ptr);
//===============================================
GFreeO* GFree_Constructor() {
    GFreeO* lObj = (GFreeO*)malloc(sizeof(GFreeO));
    GFree_Init(lObj);
    return lObj; 
}
//===============================================
void GFree_Init(GFreeO* obj) {
    obj->Free = GFree_Free;
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
    free(ptr);
    ptr = 0;
}
//===============================================

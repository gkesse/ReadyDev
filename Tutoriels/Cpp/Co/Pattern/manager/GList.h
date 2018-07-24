//===============================================
#ifndef _GList_
#define _GList_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GList GList;
typedef struct GNode GNode;
//===============================================
static GList* m_GList = 0;
//===============================================
GList* GList_Instance();
GList* GList_Constructor();
void GList_Init();
void GList_Add(void* data);
//===============================================
struct GNode {
    void* m_data;
    GNode* m_next;
};
//===============================================
struct GList {
    void (*Add)(void* data);
    GNode* m_start;
};
//===============================================
GList* GList_Constructor() {
    GList* lList = (GList*)malloc(sizeof(GList));
    lList->m_start = 0;
    return lList; 
}
//===============================================
void GList_Init() {
    m_GList->Add = GList_Add;
}
//===============================================
GList* GList_Instance() {
    if(m_GList == 0) {
        m_GList = GList_Constructor();
    }
    return m_GList;
}
//===============================================
void GList_Add(void* data) {
    if(m_GList->m_start == 0) {
        GNode* lNode = (GNode*)malloc(sizeof(GNode));
        lNode->m_data = data;
        lNode->m_next = 0;
        m_GList->m_start = lNode;
        return;
    }
    GNode* lNode = (GNode*)malloc(sizeof(GNode));
    lNode->m_data = data;
    lNode->m_next = m_GList->m_start;
    m_GList->m_start = lNode;
}
//===============================================
#endif
//===============================================

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
void GList_Init(GList* list);
void GList_Add(const char* data);
void GList_Show();
//===============================================
struct GNode {
    char m_data[50];
    GNode* m_next;
};
//===============================================
struct GList {
    void (*Add)(const char* data);
    void (*Show)();
    GNode* m_start;
};
//===============================================
GList* GList_Constructor() {
    GList* lList = (GList*)malloc(sizeof(GList));
    lList->m_start = 0;
    GList_Init(lList);
    return lList; 
}
//===============================================
void GList_Init(GList* list) {
    list->Add = GList_Add;
    list->Show = GList_Show;
}
//===============================================
GList* GList_Instance() {
    if(m_GList == 0) {
        m_GList = GList_Constructor();
    }
    return m_GList;
}
//===============================================
void GList_Add(const char* data) {
    GNode* lNode = (GNode*)malloc(sizeof(GNode));
    sprintf(lNode->m_data, "%s", data);
    lNode->m_next = m_GList->m_start;
    m_GList->m_start = lNode;
}
//===============================================
void GList_Show() {
    GNode* lNode = m_GList->m_start;
    while(lNode != 0) {
        printf("%s\n", lNode->m_data);
        lNode = lNode->m_next;
    }
    printf("\n");
}
//===============================================
#endif
//===============================================

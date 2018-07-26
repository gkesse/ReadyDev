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
void GList_Add_Data(const char* data);
void GList_Show_Data();
void GList_Get_Size();
void GList_Get_Data(int index);
void GList_Change_Data(int index, const char* data);
//===============================================
struct GNode {
    int m_index;
    char m_data[50];
    GNode* m_next;
};
//===============================================
struct GList {
    void (*Add_Data)(const char* data);
    void (*Show_Data)();
    void (*Get_Size)();
    void (*Get_Data)(int index);
    void (*Change_Data)(int index, const char* data);
    GNode* m_start;
    int m_size;
};
//===============================================
GList* GList_Constructor() {
    GList* lList = (GList*)malloc(sizeof(GList));
    lList->m_start = 0;
    lList->m_size = 0;
    GList_Init(lList);
    return lList; 
}
//===============================================
void GList_Init(GList* list) {
    list->Add_Data = GList_Add_Data;
    list->Show_Data = GList_Show_Data;
    list->Get_Size = GList_Get_Size;
    list->Get_Data = GList_Get_Data;
    list->Change_Data = GList_Change_Data;
}
//===============================================
GList* GList_Instance() {
    if(m_GList == 0) {
        m_GList = GList_Constructor();
    }
    return m_GList;
}
//===============================================
void GList_Add_Data(const char* data) {
    GNode* lNode = (GNode*)malloc(sizeof(GNode));
    sprintf(lNode->m_data, "%s", data);
    lNode->m_next = 0;
    lNode->m_index = m_GList->m_size;
    if(m_GList->m_start == 0) {
        m_GList->m_start = lNode;
        m_GList->m_size += 1;
        return;
    }
    GNode* lNode2 = m_GList->m_start;
    while(lNode2->m_next != 0) {
        lNode2 = lNode2->m_next;
    }
    lNode2->m_next = lNode;
    m_GList->m_size += 1;
}
//===============================================
void GList_Show_Data() {
    GNode* lNode = m_GList->m_start;
    while(lNode != 0) {
        printf("Donnee[%d]: %s\n", lNode->m_index, lNode->m_data);
        lNode = lNode->m_next;
    }
    printf("\n");
}
//===============================================
void GList_Get_Size() {
   int lSize = m_GList->m_size; 
   printf("Taille: %d\n", lSize);
}
//===============================================
void GList_Get_Data(int index) {
    GNode* lNode = m_GList->m_start;
    while(lNode != 0) {
        if(lNode->m_index == index) {
            char* lData = lNode->m_data;
            printf("Donnee[%d]: %s\n", index, lData);
            return;
        }
        lNode = lNode->m_next;
    }
    printf("ERREUR: Index [%d] Inexistant", index);
}
//===============================================
void GList_Change_Data(int index, const char* data) {
    GNode* lNode = m_GList->m_start;
    while(lNode != 0) {
        if(lNode->m_index == index) {
            sprintf(lNode->m_data, "%s", data);
            return;
        }
        lNode = lNode->m_next;
    }
}
//===============================================
void GList_Change_Data(int index, const char* data) {
    GNode* lNode = m_GList->m_start;
    while(lNode != 0) {
        if(lNode->m_index == index) {
            sprintf(lNode->m_data, "%s", data);
            return;
        }
        lNode = lNode->m_next;
    }
}
//===============================================
#endif
//===============================================

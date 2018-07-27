//===============================================
#ifndef _GMap_
#define _GMap_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GMap GMap;
typedef struct GNode GNode;
//===============================================
static GMap m_GMap;
static int m_GMap_Instance = FALSE;
//===============================================
GMap GMap_Instance();
GMap GMap_Constructor();
void GMap_Init(GMap* list);
void GMap_Set_Data(const char* key, const char* value);
void GMap_Show_Data();
void GMap_Get_Size();
void GMap_Get_Data(const char* key);
//===============================================
struct GNode {
    int m_index;
    char m_key[50];
    char m_value[50];
    GNode* m_next;
};
//===============================================
struct GMap {
    void (*Set_Data)(const char* key, const char* value);
    void (*Show_Data)();
    void (*Get_Size)();
    void (*Get_Data)(const char* key);
    
    GNode* m_start;
    int m_size;
};
//===============================================
GMap GMap_Constructor() {
    GMap lMap;
    lMap.m_start = 0;
    lMap.m_size = 0;
    GMap_Init(&lMap);
    return lMap; 
}
//===============================================
void GMap_Init(GMap* map) {
    map->Set_Data = GMap_Set_Data;
    map->Show_Data = GMap_Show_Data;
    map->Get_Size = GMap_Get_Size;
    map->Get_Data = GMap_Get_Data;
}
//===============================================
GMap GMap_Instance() {
    if(m_GMap_Instance == FALSE) {
        m_GMap = GMap_Constructor();
        m_GMap_Instance = TRUE;
    }
    return m_GMap;
}
//===============================================
void GMap_Set_Data(const char* key, const char* value) {
    int lExist = FALSE;
    GNode* lNode = m_GMap.m_start;
    while(lNode != 0) {
        int lStrcmp = strcmp(lNode->m_key, key);
        if(lStrcmp == 0) {
            sprintf(lNode->m_value, "%s", value);
            lExist = TRUE;
            break;
        }
        lNode = lNode->m_next;
    }

    if(lExist == FALSE) {
        lNode = (GNode*)malloc(sizeof(GNode));
        sprintf(lNode->m_key, "%s", key);
        sprintf(lNode->m_value, "%s", value);
        lNode->m_next = 0;
        lNode->m_index = m_GMap.m_size;
        if(m_GMap.m_start == 0) {
            m_GMap.m_start = lNode;
            m_GMap.m_size += 1;
            return;
        }
    
        GNode* lNode2 = m_GMap.m_start;
        while(lNode2->m_next != 0) {
            lNode2 = lNode2->m_next;
        }
        lNode2->m_next = lNode;
        m_GMap.m_size += 1;
    }
}
//===============================================
void GMap_Show_Data() {
    GNode* lNode = m_GMap.m_start;
    while(lNode != 0) {
        printf("Donnee[%d]: %s: %s\n", lNode->m_index, lNode->m_key, lNode->m_value);
        lNode = lNode->m_next;
    }
    printf("\n");
}
//===============================================
void GMap_Get_Size() {
   int lSize = m_GMap.m_size; 
   printf("Taille: %d\n", lSize);
}
//===============================================
void GMap_Get_Data(const char* key) {
    GNode* lNode = m_GMap.m_start;
    while(lNode != 0) {
        int lStrcmp = strcmp(lNode->m_key, key);
        if(lStrcmp == 0) {
            printf("Donnee[%d]: %s: %s\n", lNode->m_index, lNode->m_key, lNode->m_value);
            return;
        }
        lNode = lNode->m_next;
    }
    printf("ERREUR: La cle [%s] n'existe pas...", key);
}
//===============================================
#endif
//===============================================

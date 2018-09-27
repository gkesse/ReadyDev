//===============================================
#include "GMap.h"
//===============================================
static GMapO* m_GMapO = 0;
//===============================================
GMapO* GMap_Constructor();
void GMap_Init(GMapO* obj);
void GMap_Set_Data(const char* key, const char* value);
void GMap_Show_Data();
void GMap_Get_Size();
void GMap_Get_Data(const char* key);
//===============================================
GMapO* GMap_Constructor() {
    GMapO* lObj = (GMapO*)malloc(sizeof(GMapO));
    lObj->m_start = 0;
    lObj->m_size = 0;
    GMap_Init(lObj);
    return lObj; 
}
//===============================================
void GMap_Init(GMapO* obj) {
    obj->Set_Data = GMap_Set_Data;
    obj->Show_Data = GMap_Show_Data;
    obj->Get_Size = GMap_Get_Size;
    obj->Get_Data = GMap_Get_Data;
}
//===============================================
GMapO* GMap() {
    if(m_GMapO == 0) {
        m_GMapO = GMap_Constructor();
    }
    return m_GMapO;
}
//===============================================
void GMap_Set_Data(const char* key, const char* value) {
    int lExist = FALSE;
    GNodeO* lNode = m_GMapO->m_start;
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
        lNode = (GNodeO*)malloc(sizeof(GNodeO));
        sprintf(lNode->m_key, "%s", key);
        sprintf(lNode->m_value, "%s", value);
        lNode->m_next = 0;
        lNode->m_index = m_GMapO->m_size;
        if(m_GMapO->m_start == 0) {
            m_GMapO->m_start = lNode;
            m_GMapO->m_size += 1;
            return;
        }
    
        GNodeO* lNode2 = m_GMapO->m_start;
        while(lNode2->m_next != 0) {
            lNode2 = lNode2->m_next;
        }
        lNode2->m_next = lNode;
        m_GMapO->m_size += 1;
    }
}
//===============================================
void GMap_Show_Data() {
    GNodeO* lNode = m_GMapO->m_start;
    while(lNode != 0) {
        printf("Donnee[%d]: %s: %s\n", lNode->m_index, lNode->m_key, lNode->m_value);
        lNode = lNode->m_next;
    }
    printf("\n");
}
//===============================================
void GMap_Get_Size() {
   int lSize = m_GMapO->m_size; 
   printf("Taille: %d\n", lSize);
}
//===============================================
void GMap_Get_Data(const char* key) {
    GNodeO* lNode = m_GMapO->m_start;
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

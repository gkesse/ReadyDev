//===============================================
#include "GConfig.h"
//===============================================
static GConfigO* m_GConfigO = 0;
//===============================================
GConfigO* GConfig_Constructor();
void GConfig_Init(GConfigO* obj);
void GConfig_Set_Data(const char* key, const char* value);
char* GConfig_Get_Data(const char* key);
void GConfig_Print();
//===============================================
GConfigO* GConfig_Constructor() {
    GConfigO* lObj = (GConfigO*)malloc(sizeof(GConfigO));
    lObj->m_start = 0;
    lObj->m_size = 0;
    GConfig_Init(lObj);
    return lObj; 
}
//===============================================
void GConfig_Init(GConfigO* obj) {
    obj->Set_Data = GConfig_Set_Data;
    obj->Get_Data = GConfig_Get_Data;
    obj->Print = GConfig_Print;
}
//===============================================
GConfigO* GConfig() {
    if(m_GConfigO == 0) {
        m_GConfigO = GConfig_Constructor();
    }
    return m_GConfigO;
}
//===============================================
void GConfig_Set_Data(const char* key, const char* value) {
    int lExist = FALSE;
    GNodeO* lNode = m_GConfigO->m_start;
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
        lNode->m_index = m_GConfigO->m_size;
        if(m_GConfigO->m_start == 0) {
            m_GConfigO->m_start = lNode;
            m_GConfigO->m_size += 1;
            return;
        }
    
        GNodeO* lNode2 = m_GConfigO->m_start;
        while(lNode2->m_next != 0) {
            lNode2 = lNode2->m_next;
        }
        lNode2->m_next = lNode;
        m_GConfigO->m_size += 1;
    }
}
//===============================================
char* GConfig_Get_Data(const char* key) {
    GNodeO* lNode = m_GConfigO->m_start;
    while(lNode != 0) {
        int lStrcmp = strcmp(lNode->m_key, key);
        if(lStrcmp == 0) {
            return lNode->m_value;
        }
        lNode = lNode->m_next;
    }
    return "_NONE_";
}
//===============================================
void GConfig_Print() {
    GNodeO* lNode = m_GConfigO->m_start;
    while(lNode != 0) {
        char* lKey = lNode->m_key;
        char* lValue = lNode->m_value;
        printf("%s = %s\n", lKey, lValue);
        lNode = lNode->m_next;
    }
}
//===============================================

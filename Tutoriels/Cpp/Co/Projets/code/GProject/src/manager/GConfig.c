//===============================================
#include "GConfig.h"
//===============================================
static GConfigO* m_GConfigO = 0;
//===============================================
GConfigO* GConfig_New();
void GConfig_Delete();
void GConfig_Clear();
void GConfig_Clear();
void GConfig_Remove(const char* key);
void GConfig_Remove_Node(GNodeO* node);
void GConfig_Set_Data(const char* key, const char* value);
char* GConfig_Get_Data(const char* key);
void GConfig_Show();
//===============================================
GConfigO* GConfig_New() {
	GConfigO* lObj = (GConfigO*)malloc(sizeof(GConfigO));
	lObj->Set_Data = GConfig_Set_Data;
	lObj->Get_Data = GConfig_Get_Data;
	lObj->Show = GConfig_Show;
	lObj->Delete = GConfig_Delete;
	lObj->Clear = GConfig_Clear;
	lObj->Remove = GConfig_Remove;
	lObj->m_start = 0;
	lObj->m_size = 0;
	return lObj;
}
//===============================================
void GConfig_Delete() {
	GConfig_Clear();
	if(m_GConfigO != 0) {
		free(m_GConfigO);
		m_GConfigO = 0;
	}
}
//===============================================
void GConfig_Clear() {
	GNodeO* lNode = m_GConfigO->m_start;
	while(lNode != 0) {
		GNodeO* lNext = lNode->m_next;
		GConfig_Remove_Node(lNode);
		lNode = lNext;
	}
}
//===============================================
void GConfig_Remove(const char* key) {
	GNodeO* lNode = m_GConfigO->m_start;
	GNodeO* lPrevious = 0;
	GNodeO* lNext = 0;
	while(lNode != 0) {
		lNext = lNode->m_next;
		int lStrcmp = strcmp(lNode->m_key, key);
		if(lStrcmp == 0) {
			if(lPrevious == 0) {
				m_GConfigO->m_start = lNext;
			}
			else {
				lPrevious->m_next = lNext;
			}
			GConfig_Remove_Node(lNode);
			break;
		}
		lPrevious = lNode;
		lNode = lNode->m_next;
	}
}
//===============================================
void GConfig_Remove_Node(GNodeO* node) {
	if(node != 0) {
		if(node->m_key != 0) {
			free(node->m_key);
			node->m_key = 0;
		}
		if(node->m_value != 0) {
			free(node->m_value);
			node->m_value = 0;
		}
		free(node);
		node = 0;
		if(m_GConfigO->m_size > 0) m_GConfigO->m_size -= 1;
	}
}
//===============================================
GConfigO* GConfig() {
	if(m_GConfigO == 0) {
		m_GConfigO = GConfig_New();
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
		int lKey = strlen(key) + 1;
		int lValue = strlen(value) + 1;
		lNode->m_key = (char*)malloc(sizeof(char)*lKey);
		lNode->m_value = (char*)malloc(sizeof(char)*lValue);
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
void GConfig_Show() {
	GNodeO* lNode = m_GConfigO->m_start;
	while(lNode != 0) {
		char* lKey = lNode->m_key;
		char* lValue = lNode->m_value;
		printf("%s = %s\n", lKey, lValue);
		lNode = lNode->m_next;
	}
}
//===============================================

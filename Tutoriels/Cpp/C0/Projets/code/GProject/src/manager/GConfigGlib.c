//===============================================
#include "GConfigGlib.h"
//===============================================
static GConfigO* m_GConfigGlibO = 0;
//===============================================
void GConfigGlib_Delete_Obj();
void GConfigGlib_Clear();
void GConfigGlib_Remove(const char* key);
void GConfigGlib_Set_Data(const char* key, const char* value);
char* GConfigGlib_Get_Data(const char* key);
void GConfigGlib_Show();
//===============================================
static void GConfigGlib_On_Show(gpointer key, gpointer value, gpointer params);
static void GConfigGlib_On_Clear(gpointer key, gpointer value, gpointer params);
//===============================================
GConfigO* GConfigGlib_New() {
    GConfigO* lParent = GConfig_New();
    GConfigGlibO* lChild = (GConfigGlibO*)malloc(sizeof(GConfigGlibO));

    lChild->m_parent = lParent;
    lChild->m_dataMap =  g_hash_table_new(g_str_hash, g_str_equal);

    lParent->m_child = lChild;
    lParent->Delete = GConfigGlib_Delete;
    lParent->Set_Data = GConfigGlib_Set_Data;
    lParent->Get_Data = GConfigGlib_Get_Data;
    lParent->Show = GConfigGlib_Show;
    lParent->Clear = GConfigGlib_Clear;
    lParent->Remove = GConfigGlib_Remove;
    return lParent;
}
//===============================================
void GConfigGlib_Delete() {
    GConfigGlib_Clear();
    GConfigGlib_Delete_Obj();
    GConfig_Delete();
}
//===============================================
void GConfigGlib_Delete_Obj() {
    GConfigGlibO* lConfigGlib = m_GConfigGlibO->m_child;
    g_hash_table_destroy(lConfigGlib->m_dataMap);
}
//===============================================
void GConfigGlib_Clear() {
    GConfigGlibO* lConfigGlib = m_GConfigGlibO->m_child;
    g_hash_table_foreach(lConfigGlib->m_dataMap, GConfigGlib_On_Clear, 0);
}
//===============================================
static void GConfigGlib_On_Clear(gpointer key, gpointer value, gpointer params) {
    g_free(key);
    g_free(value);
}
//===============================================
void GConfigGlib_Remove(const char* key) {
    GConfigGlibO* lConfigGlib = m_GConfigGlibO->m_child;
    gpointer lKey;
    gpointer lValue;
    gboolean lOk = g_hash_table_lookup_extended(lConfigGlib->m_dataMap, key, &lKey, &lValue);
    if(lOk == TRUE) {
        g_hash_table_remove(lConfigGlib->m_dataMap, key);
        g_free(lKey);
        g_free(lValue);
    }
}
//===============================================
GConfigO* GConfigGlib() {
    if(m_GConfigGlibO == 0) {
        m_GConfigGlibO = GConfigGlib_New();
    }
    return m_GConfigGlibO;
}
//===============================================
void GConfigGlib_Set_Data(const char* key, const char* value) {
    GConfigGlibO* lConfigGlib = m_GConfigGlibO->m_child;
    gpointer lKey;
    gpointer lValue;
    gboolean lOk = g_hash_table_lookup_extended(lConfigGlib->m_dataMap, key, &lKey, &lValue);
    if(lOk == TRUE) {
        g_hash_table_insert(lConfigGlib->m_dataMap, g_strdup(key), g_strdup(value));
        g_free(lKey);
        g_free(lValue);
    }
    else {
        g_hash_table_insert(lConfigGlib->m_dataMap, g_strdup(key), g_strdup(value));
    }
}
//===============================================
char* GConfigGlib_Get_Data(const char* key) {
    GConfigGlibO* lConfigGlib = m_GConfigGlibO->m_child;
    char* lValue = g_hash_table_lookup(lConfigGlib->m_dataMap, key);
    return lValue;
}
//===============================================
void GConfigGlib_Show() {
    GConfigGlibO* lConfigGlib = m_GConfigGlibO->m_child;
    g_hash_table_foreach(lConfigGlib->m_dataMap, GConfigGlib_On_Show, 0);
}
//===============================================
static void GConfigGlib_On_Show(gpointer key, gpointer value, gpointer params) {
    printf("%s = %s\n", (char*)key, (char*)value);
}
//===============================================

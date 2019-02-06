//===============================================
#include "GConfig.h"
//===============================================
static GObject* GConfig_Constructor(GType type, guint nParams, GObjectConstructParam* params);
static void GConfig_Set_Data(gpointer key, gpointer value);
static char* GConfig_Get_Data(gpointer key);
//===============================================
G_DEFINE_TYPE (GConfig, GConfig, G_TYPE_OBJECT)
//===============================================
static void GConfig_init (GConfig* self) {
	g_return_if_fail(self != NULL);
}
//===============================================
static void GConfig_class_init (GConfigClass* klass) {
	GObjectClass* lObjectClass = G_OBJECT_CLASS(klass);
	lObjectClass->constructor = GConfig_Constructor;

	klass->m_instance = 0;
	klass->Set_Data = GConfig_Set_Data;
	klass->Get_Data = GConfig_Get_Data;

	g_type_class_add_private(klass, sizeof(GConfigPrivate));
}
//===============================================
static GObject* GConfig_Constructor(GType type, guint nParams, GObjectConstructParam* params) {
	GConfigClass* klass = g_type_class_peek(GOBJ_TYPE_GCONFIG);

	if(klass->m_instance == 0) {
		GObjectClass* lObjectClass = G_OBJECT_CLASS(GConfig_parent_class);
		klass->m_instance = lObjectClass->constructor(type, nParams, params);
		GConfigPrivate *lPrivate = GOBJ_GCONFIG_GET_PRIVATE(klass->m_instance);
		lPrivate->m_dataMap = g_hash_table_new(g_str_hash, g_str_equal);
	}
	else {
		klass->m_instance = g_object_ref(klass->m_instance);
	}

	return klass->m_instance;
}
//===============================================
GConfig* GConfigI() {
	return  g_object_new(GOBJ_TYPE_GCONFIG, NULL);
}
//===============================================
static void GConfig_Set_Data(gpointer key, gpointer value) {
	GConfigClass* klass = GOBJ_GCONFIG_CLASS(GConfigI());
	GConfigPrivate *lPrivate = GOBJ_GCONFIG_GET_PRIVATE(klass->m_instance);
	g_hash_table_insert(lPrivate->m_dataMap, key, value);
}//===============================================
static char* GConfig_Get_Data(gpointer key) {
	GConfigClass* klass = GOBJ_GCONFIG_CLASS(GConfigI());
	GConfigPrivate *lPrivate = GOBJ_GCONFIG_GET_PRIVATE(klass->m_instance);
	return (char*)g_hash_table_lookup(lPrivate->m_dataMap, key);
}
//===============================================

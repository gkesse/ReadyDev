//===============================================
#ifndef _GConfig_
#define _GConfig_
//===============================================
#include "GInclude.h"
//===============================================
#define GOBJ_TYPE_GCONFIG \
		(GConfig_get_type())
#define GOBJ_GCONFIG(obj) \
		(G_TYPE_CHECK_INSTANCE_CAST((obj), GOBJ_TYPE_GCONFIG, GConfig))
#define GOBJ_GCONFIG_CLASS(klass) \
		(G_TYPE_CHECK_CLASS_CAST((klass), GOBJ_TYPE_GCONFIG, GConfigClass))
#define GOBJ_IS_GCONFIG(obj) \
		(G_TYPE_CHECK_INSTANCE_TYPE((obj), GOBJ_TYPE_GCONFIG))
#define GOBJ_IS_GCONFIG_CLASS(klass) \
		(G_TYPE_CHECK_CLASS_TYPE((klass), GOBJ_TYPE_GCONFIG))
#define GOBJ_GCONFIG_GET_CLASS(obj) \
		(G_TYPE_INSTANCE_GET_CLASS((obj), GOBJ_TYPE_GCONFIG, GConfigClass))
#define GOBJ_GCONFIG_GET_PRIVATE(obj) \
		(G_TYPE_INSTANCE_GET_PRIVATE((obj), GOBJ_TYPE_GCONFIG, GConfigPrivate))
//===============================================
typedef struct _GConfig GConfig;
typedef struct _GConfigClass GConfigClass;
typedef struct _GConfigPrivate GConfigPrivate;
//===============================================
struct _GConfig {
	GObject m_parent;
};
//===============================================
struct _GConfigClass {
	GObjectClass m_parent;
	void (*Set_Data)(gpointer key, gpointer value);
	char* (*Get_Data)(gpointer key);
	GObject* m_instance;
};
//===============================================
struct _GConfigPrivate {
	GHashTable* m_dataMap;
};
//===============================================
GType GConfig_get_type();
GConfig* GConfigI();
//===============================================
#endif
//===============================================

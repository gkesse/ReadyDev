//===============================================
#ifndef _GKMenu_
#define _GKMenu_
//===============================================
#include "GInclude.h"
//===============================================
G_BEGIN_DECLS
//===============================================
#define GTK_GKMENU(obj) \
		GTK_CHECK_CAST(obj, GKMenu_Get_Type(), GKMenuO)
#define GTK_GKMENU_CLASS(klass) \
		GTK_CHECK_CLASS_CAST(klass, GKMenu_Get_Type(), GKMenuClass)
#define GTK_IS_GKMENU(obj) \
		GTK_CHECK_TYPE(obj, GKMenu_Get_Type())
//===============================================
typedef struct _GKMenuO GKMenuO;
typedef struct _GKMenuClass GKMenuClass;
//===============================================
struct _GKMenuO {
	GtkWidget m_widget;
	void* m_child;

	void (*Delete)(GKMenuO* obj);
	void (*Create)(GKMenuO* obj);

	int width;
	int height;
};
//===============================================
struct _GKMenuClass {
	GtkWidgetClass m_parent;
};
//===============================================
GKMenuO* GKMenu_New();
void GKMenu_Delete(GKMenuO* obj);
GKMenuO* GKMenu(const char* key);
//===============================================
GtkType GKMenu_Get_Type();
//===============================================
G_END_DECLS
//===============================================
#endif
//===============================================

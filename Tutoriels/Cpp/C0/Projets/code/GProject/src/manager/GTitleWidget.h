//===============================================
#ifndef _GTitleWidget_
#define _GTitleWidget_
//===============================================
#include "GInclude.h"
//===============================================
G_BEGIN_DECLS
//===============================================
#define GTK_TYPE_GTITLE \
	(GTitleWidget_get_type())
#define GTK_GTITLE(obj) \
   GTK_CHECK_CAST(obj, GTK_TYPE_GTITLE, GTitleWidget)
#define GTK_GTITLE_CLASS(class) \
   GTK_CHECK_CLASS_CAST(class, GTK_TYPE_GTITLE, GTitleWidgetClass)
#define GTK_IS_GTITLE(obj) \
   GTK_CHECK_TYPE(obj, GTK_TYPE_GTITLE)
//===============================================
typedef struct _GTitleWidget GTitleWidget;
typedef struct _GTitleWidgetClass GTitleWidgetClass;
//===============================================
struct _GTitleWidget {
	GtkWidget parent_instance;
	void (*Emit_Minimize)(GTitleWidget* titleWidget);
	void (*Emit_Maximize)(GTitleWidget* titleWidget);
	void (*Emit_Close)(GTitleWidget* titleWidget);
};
//===============================================
struct _GTitleWidgetClass {
	GtkWidgetClass parent_class;
};
//===============================================
GType GTitleWidget_get_type();
GTitleWidget* GTitleWidget_New();
//===============================================
G_END_DECLS
//===============================================
#endif
//===============================================

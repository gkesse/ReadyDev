//===============================================
#include "GKMenu.h"
#include "GKMenuNormal.h"
#include "GKString.h"
#include "GConfig.h"
//===============================================
void GKMenu_Create(GKMenuO* obj);
//===============================================
static void GKMenu_Class_Init (GKMenuClass* klass);
static void GKMenu_Obj_Init (GKMenuO* obj);
static void gtk_led_realize (GtkWidget* widget);
static void gtk_led_size_request(GtkWidget* widget, GtkRequisition* requisition);
static void gtk_led_size_allocate(GtkWidget* widget, GtkAllocation* allocation);
static gboolean gtk_led_expose(GtkWidget* widget, GdkEventExpose* event);
static void gtk_led_destroy(GtkObject* object);
//===============================================
GKMenuO* GKMenu_New() {
	GKMenuO* lObj = (GKMenuO*)malloc(sizeof(GKMenuO));
	lObj->m_child = 0;
	lObj->Delete = GKMenu_Delete;
	lObj->Create = GKMenu_Create;
	return lObj;
}
//===============================================
void GKMenu_Delete(GKMenuO* obj) {
	if(obj != 0) {
		if(obj->m_child != 0) {
			free(obj->m_child);
			obj->m_child = 0;
		}
		free(obj);
		obj = 0;
	}
}
//===============================================
GKMenuO* GKMenu(const char* key) {
    if(GKString()->Is_Equal(key, "NORMAL")) return GKMenuNormal();
    return GKMenuNormal();
}
//===============================================
void GKMenu_Create(GKMenuO* obj) {}
//===============================================
GtkType GKMenu_Get_Type() {
	static GtkType lType = 0;

	if(!lType) {
		static const GtkTypeInfo lTypeInfo = {
				"GKMenuO",
				sizeof (GKMenuO),
				sizeof (GKMenuClass),
				(GtkClassInitFunc)GKMenu_Class_Init,
				(GtkObjectInitFunc)GKMenu_Obj_Init,
				NULL,
				NULL,
				(GtkClassInitFunc) NULL
		};
		lType = gtk_type_unique(GTK_TYPE_WIDGET, &lTypeInfo);
	}

	return lType;
}
//===============================================
static void GKMenu_Class_Init (GKMenuClass* klass) {
	GtkWidgetClass* lWidget;
	GtkObjectClass* lObj;

	lWidget = (GtkWidgetClass*)klass;
	lObj = (GtkObjectClass*)klass;

	lWidget->realize = gtk_led_realize;
	lWidget->size_request = gtk_led_size_request;
	lWidget->size_allocate = gtk_led_size_allocate;
	lWidget->expose_event = gtk_led_expose;

	lObj->destroy = gtk_led_destroy;
}
//===============================================
static void GKMenu_Obj_Init (GKMenuO* obj) {

}
//===============================================
static void gtk_led_realize(GtkWidget* widget) {
	GdkWindowAttr lAttributes;
	guint lAttributesMask;

	g_return_if_fail(widget != NULL);
	g_return_if_fail(GTK_IS_GKMENU(widget));

	GTK_WIDGET_SET_FLAGS (widget, GTK_REALIZED);

	lAttributes.window_type = GDK_WINDOW_CHILD;
	lAttributes.x = widget->allocation.x;
	lAttributes.y = widget->allocation.y;
	lAttributes.width = widget->allocation.width;
	lAttributes.height = widget->allocation.height;
	lAttributes.wclass = GDK_INPUT_OUTPUT;
	lAttributes.event_mask = gtk_widget_get_events(widget) | GDK_EXPOSURE_MASK;

	lAttributesMask = GDK_WA_X | GDK_WA_Y;

	widget->window = gdk_window_new(
			gtk_widget_get_parent_window(widget),
			&lAttributes, lAttributesMask
	);

	gdk_window_set_user_data(widget->window, widget);

	widget->style = gtk_style_attach(widget->style, widget->window);
	gtk_style_set_background(widget->style, widget->window, GTK_STATE_NORMAL);
}
//===============================================
static void gtk_led_size_request (GtkWidget* widget, GtkRequisition* requisition) {
	g_return_if_fail (widget != NULL);
	g_return_if_fail (GTK_IS_GKMENU(widget));
	g_return_if_fail (requisition != NULL);

	requisition->width = GTK_GKMENU(widget)->width;
	requisition->height = GTK_GKMENU(widget)->height;
}
//===============================================
static void gtk_led_size_allocate (GtkWidget* widget, GtkAllocation* allocation) {
	g_return_if_fail(widget != NULL);
	g_return_if_fail(GTK_IS_GKMENU(widget));
	g_return_if_fail(allocation != NULL);


	widget->allocation = *allocation;

	if (GTK_WIDGET_REALIZED (widget)) {
		gdk_window_move_resize (
				widget->window,
				allocation->x, allocation->y,
				allocation->width, allocation->height
		);
	}
}
//===============================================
static gboolean gtk_led_expose(GtkWidget* widget, GdkEventExpose* event) {
   g_return_val_if_fail (widget != NULL, FALSE);
   g_return_val_if_fail (GTK_IS_GKMENU(widget), FALSE);
   g_return_val_if_fail (event != NULL, FALSE);

   //gtk_led_paint (widget);

   return FALSE;
}
//===============================================
static void gtk_led_destroy (GtkObject* object) {

	g_return_if_fail(object != NULL);
	g_return_if_fail(GTK_IS_GKMENU(object));

	//GKMenuO* lObj = GTK_GKMENU(object);

	GKMenuClass* klass = gtk_type_class(gtk_widget_get_type ());

	if (GTK_OBJECT_CLASS(klass)->destroy) {
		(*GTK_OBJECT_CLASS(klass)->destroy)(object);
	}
}
//===============================================

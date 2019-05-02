//===============================================
#include "GTitleWidget.h"
//===============================================
static void GTitleWidget_init(GTitleWidget* widget);
static void GTitleWidget_class_init (GTitleWidgetClass* class);
static void GTitleWidget_constructed(GObject* object);
//===============================================
static void GTitleWidget_Emit_Minimize(GTitleWidget* titleWidget);
static void GTitleWidget_Emit_Maximize(GTitleWidget* titleWidget);
static void GTitleWidget_Emit_Close(GTitleWidget* titleWidget);
//===============================================
enum {
	MINIMIZE,
	MAXIMIZE,
	CLOSE,
	LAST_SIGNAL
};
//===============================================
static guint gTitleWidget_Signals[LAST_SIGNAL] = {0};
//===============================================
GType GTitleWidget_get_type() {
	static GType lType = 0;

	if (!lType) {
		const GTypeInfo lTypeInfo = {
				sizeof(GTitleWidgetClass),
				NULL,
				NULL,
				(GClassInitFunc)GTitleWidget_class_init,
				NULL,
				NULL,
				sizeof(GTitleWidget),
				0,
				(GInstanceInitFunc)GTitleWidget_init,
				NULL,
		};

		lType = g_type_register_static (GTK_TYPE_WIDGET, "GTitleWidget", &lTypeInfo, G_TYPE_FLAG_VALUE_ABSTRACT);
	}

	return lType;
}
//===============================================
static void GTitleWidget_init(GTitleWidget* widget) {
	printf("GTitleWidget_init\n");
	widget->Emit_Minimize = GTitleWidget_Emit_Minimize;
	widget->Emit_Maximize = GTitleWidget_Emit_Maximize;
	widget->Emit_Close = GTitleWidget_Emit_Close;
}
//===============================================
static void GTitleWidget_class_init (GTitleWidgetClass* class) {
	printf("GTitleWidget_class_init\n");
	GObjectClass* lObjectClass = G_OBJECT_CLASS(class);

	lObjectClass->constructed = GTitleWidget_constructed;

	gTitleWidget_Signals[MINIMIZE] = g_signal_newv(
			"minimize",
			G_TYPE_FROM_CLASS(lObjectClass),
			G_SIGNAL_RUN_FIRST,
			NULL,
			NULL,
			NULL,
			NULL,
			G_TYPE_NONE,
			0 ,
			NULL);

	gTitleWidget_Signals[MAXIMIZE] = g_signal_newv(
			"maximize",
			G_TYPE_FROM_CLASS(lObjectClass),
			G_SIGNAL_RUN_FIRST,
			NULL,
			NULL,
			NULL,
			NULL,
			G_TYPE_NONE,
			0 ,
			NULL);

	gTitleWidget_Signals[CLOSE] = g_signal_newv(
			"close",
			G_TYPE_FROM_CLASS(lObjectClass),
			G_SIGNAL_RUN_FIRST,
			NULL,
			NULL,
			NULL,
			NULL,
			G_TYPE_NONE,
			0 ,
			NULL);
}
//===============================================
GTitleWidget* GTitleWidget_New() {
	GTitleWidget* lWidget = g_object_new(GTK_TYPE_GTITLE, NULL);
	return lWidget;
}
//===============================================
static void GTitleWidget_constructed(GObject* object) {
	printf("GTitleWidget_constructed\n");
}
//===============================================
static void GTitleWidget_Emit_Minimize(GTitleWidget* titleWidget) {
	printf("GTitleWidget_Emit_Minimize\n");
	g_signal_emit(G_OBJECT(titleWidget), gTitleWidget_Signals[MINIMIZE], 0);
}
//===============================================
static void GTitleWidget_Emit_Maximize(GTitleWidget* titleWidget) {
	printf("GTitleWidget_Emit_Maximize\n");
	g_signal_emit(G_OBJECT(titleWidget), gTitleWidget_Signals[MAXIMIZE], 0);
}
//===============================================
static void GTitleWidget_Emit_Close(GTitleWidget* titleWidget) {
	printf("GTitleWidget_Emit_Close\n");
	g_signal_emit(G_OBJECT(titleWidget), gTitleWidget_Signals[CLOSE], 0);
}
//===============================================

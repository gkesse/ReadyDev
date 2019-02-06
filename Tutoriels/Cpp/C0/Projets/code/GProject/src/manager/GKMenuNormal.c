//===============================================
#include "GKMenuNormal.h"
//===============================================
GtkWidget* GKMenuNormal_Widget(GtkMenu* menu);
GtkWidget* GKMenuNormal_Add_Module();
//===============================================
static gboolean GKMenuNormal_On_Add_Module(GtkWidget* widget, GdkEvent* event, gpointer params);
static void GKMenuNormal_On_Add_Menu(GtkMenuItem* menuItem, gpointer params);
//===============================================
const char* gAddMenuMap[] = {
		"Ajouter un module database",
		"Ajouter un module image",
		"Ajouter un module vidéo"
};
//===============================================
GKMenuO* GKMenuNormal_New() {
	GKMenuO* lParent = GKMenu_New();
	GKMenuNormalO* lChild = (GKMenuNormalO*)malloc(sizeof(GKMenuNormalO));

	lChild->m_parent = lParent;
	lChild->m_addModuleMenu = GKMenuNormal_Add_Module();

	lParent->m_child = lChild;
	lParent->Delete = GKMenuNormal_Delete;
	lParent->m_widget = GKMenuNormal_Widget(GTK_MENU(lChild->m_addModuleMenu));
	return lParent;
}
//===============================================
void GKMenuNormal_Delete(GKMenuO* obj) {
	GKMenu_Delete(obj);
}
//===============================================
GtkWidget* GKMenuNormal_Widget(GtkMenu* menu) {
	GtkWidget* lWidget = gtk_event_box_new();
	gtk_widget_set_name(GTK_WIDGET(lWidget), "GBox");

	GtkWidget* lLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 0);

	GtkWidget* lAddModule = gtk_button_new();
	gtk_widget_set_name(GTK_WIDGET(lAddModule), "GButton");
	GdkPixbuf* lAddModulePix = gdk_pixbuf_new_from_file_at_scale("res/img/plus.png", 16, 16, TRUE, 0);
	GtkWidget* lAddModuleImg = gtk_image_new_from_pixbuf (lAddModulePix);
	gtk_button_set_image(GTK_BUTTON(lAddModule), lAddModuleImg);
	gtk_widget_set_can_focus(GTK_WIDGET(lAddModule), FALSE);

	gtk_box_pack_start(GTK_BOX(lLayout), lAddModule, FALSE, FALSE, 0);

	gtk_container_add(GTK_CONTAINER(lWidget), lLayout);

	g_signal_connect(G_OBJECT(lAddModule), "event", G_CALLBACK(GKMenuNormal_On_Add_Module), menu);

	return lWidget;
}
//===============================================
GKMenuO* GKMenuNormal() {
	return GKMenuNormal_New();
}
//===============================================
GtkWidget* GKMenuNormal_Add_Module() {
	GtkWidget* lMenu = gtk_menu_new();
	gtk_widget_set_name(GTK_WIDGET(lMenu), "GMenu");

	int lSize = sizeof(gAddMenuMap) / sizeof(char*);

	for(int i = 0; i < lSize; i++) {
		gchar* lMenuName = g_strdup(gAddMenuMap[i]);
		gchar* lMenuNameUtf8 = g_locale_to_utf8(lMenuName, -1, NULL, NULL, NULL);
		GtkWidget* lMenuItem = gtk_menu_item_new_with_label(lMenuNameUtf8);
		gtk_menu_shell_append(GTK_MENU_SHELL(lMenu), lMenuItem);
		g_signal_connect(lMenuItem, "activate", G_CALLBACK(GKMenuNormal_On_Add_Menu), lMenu);
        gtk_widget_show(lMenuItem);
        g_free(lMenuName);
        g_free(lMenuNameUtf8);
	}

	return lMenu;
}
//===============================================
static gboolean GKMenuNormal_On_Add_Module(GtkWidget* widget, GdkEvent* event, gpointer params) {
    if(event->type == GDK_BUTTON_PRESS) {
        GdkEventButton* lButtonEvent = (GdkEventButton*)event;
        gtk_menu_popup(GTK_MENU(params), NULL, NULL, NULL, NULL, lButtonEvent->button, lButtonEvent->time);
        return TRUE;
    }
    return FALSE;
}
//===============================================
static void GKMenuNormal_On_Add_Menu(GtkMenuItem* menuItem, gpointer params) {
	const char* lMenuName = gtk_menu_item_get_label(GTK_MENU_ITEM(menuItem));
	printf("%s\n", lMenuName);
}
//===============================================

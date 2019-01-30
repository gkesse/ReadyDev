//===============================================
#include "GKMenuNormal.h"
//===============================================
GtkWidget* GKMenuNormal_Widget();
//===============================================
GKMenuO* GKMenuNormal_New() {
    GKMenuO* lParent = GKMenu_New();
    GKMenuNormalO* lChild = (GKMenuNormalO*)malloc(sizeof(GKMenuNormalO));

    lChild->m_parent = lParent;

    lParent->m_child = lChild;
    lParent->Delete = GKMenuNormal_Delete;
    lParent->m_widget = GKMenuNormal_Widget();
    return lParent;
}
//===============================================
void GKMenuNormal_Delete(GKMenuO* obj) {
    GKMenu_Delete(obj);
}
//===============================================
GtkWidget* GKMenuNormal_Widget() {
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

    return lWidget;
}
//===============================================
GKMenuO* GKMenuNormal() {
    return GKMenuNormal_New();
}
//===============================================

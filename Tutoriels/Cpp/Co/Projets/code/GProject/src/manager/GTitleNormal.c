//===============================================
#include "GTitleNormal.h"
//===============================================
GtkWidget* GTitleNormal_Widget();
//===============================================
static void GTitleNormal_On_Close(GtkButton* button, gpointer params);
//===============================================
GTitleO* GTitleNormal_New() {
	GTitleO* lParent = GTitle_New();
	GTitleNormalO* lChild = (GTitleNormalO*)malloc(sizeof(GTitleNormalO));

	lChild->m_parent = lParent;

	lParent->m_child = lChild;
	lParent->Delete = GTitleNormal_Delete;
	lParent->m_widget = GTitleNormal_Widget();
	return lParent;
}
//===============================================
void GTitleNormal_Delete(GTitleO* obj) {
	GTitle_Delete(obj);
}
//===============================================
GtkWidget* GTitleNormal_Widget() {
	GtkWidget* lWidget = gtk_event_box_new();
	gtk_widget_set_name(GTK_WIDGET(lWidget), "GBox");

	GtkWidget* lLayout = gtk_box_new(GTK_ORIENTATION_HORIZONTAL, 5);

	GdkPixbuf* lIconPix = gdk_pixbuf_new_from_file_at_scale("res/img/logo2.png", 32, 32, TRUE, 0);
	GtkWidget* lIcon = gtk_image_new_from_pixbuf(lIconPix);

	GtkWidget* lTitle = gtk_label_new("C | ReadyDev");
	gtk_widget_set_name(GTK_WIDGET(lTitle), "GLabel_Title");
	gtk_widget_set_halign(GTK_WIDGET(lTitle), GTK_ALIGN_START);

	GtkWidget* lMinimize = gtk_button_new();
	gtk_widget_set_name(GTK_WIDGET(lMinimize), "GButton");
	GdkPixbuf* lMinimizePix = gdk_pixbuf_new_from_file_at_scale("res/img/minimize.png", 16, 16, TRUE, 0);
	GtkWidget* lMinimizeImg = gtk_image_new_from_pixbuf (lMinimizePix);
	gtk_button_set_image(GTK_BUTTON(lMinimize), lMinimizeImg);

	GtkWidget* lMaximize = gtk_button_new();
	gtk_widget_set_name(GTK_WIDGET(lMaximize), "GButton");
	GdkPixbuf* lMaximizePix = gdk_pixbuf_new_from_file_at_scale("res/img/maximize.png", 16, 16, TRUE, 0);
	GtkWidget* lMaximizeImg = gtk_image_new_from_pixbuf (lMaximizePix);
	gtk_button_set_image(GTK_BUTTON(lMaximize), lMaximizeImg);

	GtkWidget* lClose = gtk_button_new();
	gtk_widget_set_name(GTK_WIDGET(lClose), "GButton");
	GdkPixbuf* lClosePix = gdk_pixbuf_new_from_file_at_scale("res/img/close.png", 16, 16, TRUE, 0);
	GtkWidget* lCloseImg = gtk_image_new_from_pixbuf (lClosePix);
	gtk_button_set_image(GTK_BUTTON(lClose), lCloseImg);

	gtk_box_pack_start(GTK_BOX(lLayout), lIcon, FALSE, FALSE, 0);
	gtk_box_pack_start(GTK_BOX(lLayout), lTitle, TRUE, TRUE, 0);
	gtk_box_pack_start(GTK_BOX(lLayout), lMinimize, FALSE, FALSE, 0);
	gtk_box_pack_start(GTK_BOX(lLayout), lMaximize, FALSE, FALSE, 0);
	gtk_box_pack_start(GTK_BOX(lLayout), lClose, FALSE, FALSE, 0);

	gtk_container_add(GTK_CONTAINER(lWidget), lLayout);

	g_signal_connect(G_OBJECT(lClose), "pressed", G_CALLBACK(GTitleNormal_On_Close), 0);

	return lWidget;
}
//===============================================
GTitleO* GTitleNormal() {
	return GTitleNormal_New();
}
//===============================================
static void GTitleNormal_On_Close(GtkButton* button, gpointer params) {
	gtk_main_quit();
}
//===============================================

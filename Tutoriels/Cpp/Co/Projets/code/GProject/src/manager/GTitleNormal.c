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
	GtkWidget* lWidget = gtk_box_new(GTK_ORIENTATION_HORIZONTAL, 5);
	GtkWidget* lIcon = gtk_label_new("ICON");
	GtkWidget* lTitle = gtk_label_new("C | ReadyDev");
	GtkWidget* lClose = gtk_button_new_with_label("Fermer");

	GtkWidget *image = gtk_image_new_from_file("document-new-symbolic.png");
	gtk_button_set_image(GTK_BUTTON(lClose), image);

    gtk_box_pack_start(GTK_BOX(lWidget), lIcon, FALSE, FALSE, 0);
    gtk_box_pack_start(GTK_BOX(lWidget), lTitle, TRUE, TRUE, 0);
    gtk_box_pack_start(GTK_BOX(lWidget), lClose, FALSE, FALSE, 0);

    g_signal_connect(G_OBJECT(lClose), "pressed", G_CALLBACK(GTitleNormal_On_Close), 0);

	return lWidget;
	return 0;
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

//===============================================
#include "GTitleNormal.h"
//===============================================
GtkWidget* GTitleNormal_Widget();
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
	GtkWidget* lWidget = gtk_hbox_new(FALSE, 5);
	GtkWidget* lIcon = gtk_label_new("ICON");
	GtkWidget* lTitle = gtk_label_new("TITLE");
    gtk_box_pack_start(GTK_BOX(lWidget), lIcon, FALSE, FALSE, 0);
    gtk_box_pack_start(GTK_BOX(lWidget), lTitle, FALSE, FALSE, 0);
	return lWidget;
}
//===============================================
GTitleO* GTitleNormal() {
	return GTitleNormal_New();
}
//===============================================

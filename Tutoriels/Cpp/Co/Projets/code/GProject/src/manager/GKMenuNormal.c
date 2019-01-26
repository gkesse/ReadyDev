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
	GtkWidget* lWidget = gtk_box_new(GTK_ORIENTATION_VERTICAL, 0);
	GtkWidget* lButton1 = gtk_button_new_with_label("Module");
    gtk_box_pack_start(GTK_BOX(lWidget), lButton1, FALSE, FALSE, 0);
	return lWidget;
}
//===============================================
GKMenuO* GKMenuNormal() {
	return GKMenuNormal_New();
}
//===============================================

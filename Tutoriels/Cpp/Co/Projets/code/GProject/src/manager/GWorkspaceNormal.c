//===============================================
#include "GWorkspaceNormal.h"
//===============================================
GtkWidget* GWorkspaceNormal_Widget();
//===============================================
GWorkspaceO* GWorkspaceNormal_New() {
    GWorkspaceO* lParent = GWorkspace_New();
    GWorkspaceNormalO* lChild = (GWorkspaceNormalO*)malloc(sizeof(GWorkspaceNormalO));

    lChild->m_parent = lParent;

    lParent->m_child = lChild;
    lParent->Delete = GWorkspaceNormal_Delete;
    lParent->m_widget = GWorkspaceNormal_Widget();
    return lParent;
}
//===============================================
void GWorkspaceNormal_Delete(GWorkspaceO* obj) {
    GWorkspace_Delete(obj);
}
//===============================================
GtkWidget* GWorkspaceNormal_Widget() {
	GtkWidget* lWidget = gtk_event_box_new();
	gtk_widget_set_name(GTK_WIDGET(lWidget), "GBox");

	GtkWidget* lLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 0);

	gtk_container_add(GTK_CONTAINER(lWidget), lLayout);

    return lWidget;
}
//===============================================
GWorkspaceO* GWorkspaceNormal() {
    return GWorkspaceNormal_New();
}
//===============================================

//===============================================
#include "GWindowNormal.h"
#include "GTitle.h"
#include "GKMenu.h"
#include "GWorkspace.h"
//===============================================
static GWindowO* m_GWindowNormalO = 0;
//===============================================
void GWindowNormal_Initialize(int argc, char** argv);
void GWindowNormal_Show();
//===============================================
static void GWindowNormal_On_Destroy();
//===============================================
GWindowO* GWindowNormal_New() {
    GWindowO* lParent = GWindow_New();
    GWindowNormalO* lChild = (GWindowNormalO*)malloc(sizeof(GWindowNormalO));

    lChild->m_parent = lParent;

    lParent->m_child = lChild;
    lParent->Delete = GWindowNormal_Delete;
    lParent->Initialize = GWindowNormal_Initialize;
    lParent->Show = GWindowNormal_Show;
    return lParent;
}
//===============================================
void GWindowNormal_Delete() {
    GWindow_Delete();
}
//===============================================
GWindowO* GWindowNormal() {
    if(m_GWindowNormalO == 0) {
        m_GWindowNormalO = GWindowNormal_New();
    }
    return m_GWindowNormalO;
}
//===============================================
void GWindowNormal_Initialize(int argc, char** argv) {
    gtk_init(&argc, &argv);
}
//===============================================
void GWindowNormal_Show() {
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_widget_set_name(GTK_WIDGET(lWindow), "GWindow");
    gtk_window_set_position(GTK_WINDOW(lWindow), GTK_WIN_POS_CENTER);
    gtk_window_set_default_size(GTK_WINDOW(lWindow), 400, 400);
    gtk_window_set_title(GTK_WINDOW(lWindow), "C | ReadyDev");
    gtk_window_set_decorated(GTK_WINDOW(lWindow), FALSE);

    GtkWidget* lTitle = GTitle("NORMAL")->m_widget;
    GtkWidget* lMenu = GKMenu("NORMAL")->m_widget;
    GtkWidget* lWorkspace = GWorkspace("NORMAL")->m_widget;

    GtkWidget* lCenterLayout = gtk_box_new(GTK_ORIENTATION_HORIZONTAL, 10);
    gtk_box_pack_start(GTK_BOX(lCenterLayout), lMenu, FALSE, FALSE, 0);
    gtk_box_pack_start(GTK_BOX(lCenterLayout), lWorkspace, TRUE, TRUE, 0);

    GtkWidget* lMainLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 10);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lTitle, FALSE, FALSE, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lCenterLayout, TRUE, TRUE, 0);

    gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);

    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindowNormal_On_Destroy), NULL);

    gtk_widget_show_all(lWindow);
    gtk_main();
}
//===============================================
static void GWindowNormal_On_Destroy() {
    gtk_main_quit();
}
//===============================================

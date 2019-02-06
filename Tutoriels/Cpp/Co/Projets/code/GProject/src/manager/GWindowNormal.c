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
static gboolean GWindowNormal_On_Window_State_Event(GtkWidget* widget, GdkEvent* event, gpointer params);
static void GWindowNormal_On_Minimize(GTitleWidget* titleWidget, gpointer params);
static void GWindowNormal_On_Maximize(GTitleWidget* titleWidget, gpointer params);
static void GWindowNormal_On_Close(GTitleWidget* titleWidget, gpointer params);
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

	GTitleO* lTitle = GTitle("NORMAL");
	GKMenuO* lMenu = GKMenu("NORMAL");
	GWorkspaceO* lWorkspace = GWorkspace("NORMAL");

	GtkWidget* lCenterLayout = gtk_box_new(GTK_ORIENTATION_HORIZONTAL, 10);
	gtk_box_pack_start(GTK_BOX(lCenterLayout), lMenu->m_widget, FALSE, FALSE, 0);
	gtk_box_pack_start(GTK_BOX(lCenterLayout), lWorkspace->m_widget, TRUE, TRUE, 0);

	GtkWidget* lMainLayout = gtk_box_new(GTK_ORIENTATION_VERTICAL, 10);
	gtk_box_pack_start(GTK_BOX(lMainLayout), lTitle->m_widget, FALSE, FALSE, 0);
	gtk_box_pack_start(GTK_BOX(lMainLayout), lCenterLayout, TRUE, TRUE, 0);

	gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);

	g_signal_connect(G_OBJECT(lWindow), "window-state-event", G_CALLBACK(GWindowNormal_On_Window_State_Event), lWindow);
	g_signal_connect(G_OBJECT(lTitle->m_titleWidget), "minimize", G_CALLBACK(GWindowNormal_On_Minimize), lWindow);
	g_signal_connect(G_OBJECT(lTitle->m_titleWidget), "maximize", G_CALLBACK(GWindowNormal_On_Maximize), lWindow);
	g_signal_connect(G_OBJECT(lTitle->m_titleWidget), "close", G_CALLBACK(GWindowNormal_On_Close), lWindow);

	gtk_widget_show_all(GTK_WIDGET(lWindow));
	gtk_main();
}
//===============================================
static gboolean GWindowNormal_On_Window_State_Event(GtkWidget* widget, GdkEvent* event, gpointer params) {
	if(event->type == GDK_WINDOW_STATE) {
		GdkEventWindowState* lWindowState = (GdkEventWindowState*)event;
		if(lWindowState->new_window_state == GDK_WINDOW_STATE_FOCUSED) {
			if(lWindowState->changed_mask == GDK_WINDOW_STATE_ICONIFIED) {
				printf("GDK_WINDOW_STATE_FOCUSED\n");
				GtkWidget* lWindow = (GtkWidget*)params;
				gtk_window_deiconify(GTK_WINDOW(lWindow));
				gtk_window_present(GTK_WINDOW(lWindow));
				return TRUE;
			}
		}
	}
	return FALSE;
}
//===============================================
static void GWindowNormal_On_Minimize(GTitleWidget* titleWidget, gpointer params) {
	GtkWidget* lWindow = (GtkWidget*)params;
	//gtk_window_iconify(GTK_WINDOW(lWindow));
	gtk_widget_show_all(GTK_WIDGET(lWindow));
}
//===============================================
static void GWindowNormal_On_Maximize(GTitleWidget* titleWidget, gpointer params) {
	GtkWidget* lWindow = (GtkWidget*)params;

	if(m_GWindowNormalO->m_maximize == FALSE) {
		gtk_window_maximize(GTK_WINDOW(lWindow));
		m_GWindowNormalO->m_maximize = TRUE;
	}
	else {
		gtk_window_unmaximize(GTK_WINDOW(lWindow));
		m_GWindowNormalO->m_maximize = FALSE;
	}
}
//===============================================
static void GWindowNormal_On_Close(GTitleWidget* titleWidget, gpointer params) {
	gtk_main_quit();
}
//===============================================

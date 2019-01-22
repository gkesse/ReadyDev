//===============================================
#include "GWindowNormal.h"
//===============================================
static GWindowNormalO* m_GWindowNormalO = 0;
//===============================================
GWindowNormalO* GWindowNormal_Constructor();
void GWindowNormal_Interface(GWindowNormalO* obj);
void GWindowNormal_Strategy(GWindowO* obj);
void GWindowNormal_Initialize(int* argc, char*** argv);
void GWindowNormal_Show();
void GWindowNormal_OnDestroy();
//===============================================
GWindowNormalO* GWindowNormal_Constructor() {
	GWindowNormalO* lObj = (GWindowNormalO*)malloc(sizeof(GWindowNormalO));
	GWindowNormal_Interface(lObj);
	return lObj;
}
//===============================================
void GWindowNormal_Interface(GWindowNormalO* obj) {
	obj->Strategy = GWindowNormal_Strategy;
}
//===============================================
GWindowNormalO* GWindowNormal() {
	if(m_GWindowNormalO == 0) {
		m_GWindowNormalO = GWindowNormal_Constructor();
	}
	return m_GWindowNormalO;
}
//===============================================
void GWindowNormal_Strategy(GWindowO* obj) {
	obj->Initialize = GWindowNormal_Initialize;
	obj->Show = GWindowNormal_Show;
}
//===============================================
void GWindowNormal_Initialize(int* argc, char*** argv) {
	gtk_init(argc, argv);
}
//===============================================
void GWindowNormal_Show() {
	GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
	gtk_window_set_position(GTK_WINDOW(lWindow), GTK_WIN_POS_CENTER);
	gtk_window_set_default_size(GTK_WINDOW(lWindow), 400, 400);
	gtk_window_set_title(GTK_WINDOW(lWindow), "C | ReadyDev");

	GtkWidget* lTitle = gtk_button_new_with_label("Title");
	GtkWidget* lBody = gtk_button_new_with_label("Body");

	GtkWidget* lMainLayout = gtk_vbox_new(TRUE, 0);
	gtk_box_pack_start(GTK_BOX(lMainLayout), lTitle, FALSE, FALSE, 0);
	gtk_box_pack_start(GTK_BOX(lMainLayout), lBody, FALSE, FALSE, 0);
	gtk_box_set_homogeneous(GTK_BOX(lMainLayout), FALSE);
	gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);

	g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindowNormal_OnDestroy), NULL);

	gtk_widget_show_all(lWindow);
	gtk_main();
}
//===============================================
void GWindowNormal_OnDestroy() {
	gtk_main_quit();
}
//===============================================


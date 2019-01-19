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
	gtk_window_set_title(GTK_WINDOW(lWindow), "C | ReadyDev");
	gtk_window_set_default_size(GTK_WINDOW(lWindow), 400, 400);
	gtk_window_set_position(GTK_WINDOW(lWindow), GTK_WIN_POS_CENTER);

	GtkWidget* lGrid = gtk_grid_new ();
    gtk_grid_set_row_homogeneous(GTK_GRID(lGrid), FALSE);
    gtk_grid_set_column_homogeneous(GTK_GRID(lGrid), FALSE);
    gtk_container_set_border_width(GTK_CONTAINER (lGrid), 15);
    gtk_grid_set_column_spacing(GTK_GRID(lGrid), 5);
    gtk_grid_set_row_spacing(GTK_GRID(lGrid), 5);
    gtk_widget_set_name(lGrid, "myGrid");
    g_object_set (lGrid, "margin", 22, NULL);


    /*     Create a red Button    */
    GtkWidget* button1 = gtk_button_new_with_label("Red");
    g_object_set(button1, "margin", 5, NULL);

    /*     Create a yellow Button    */
    GtkWidget* button2 = gtk_button_new_with_label("Yellow");
    gtk_widget_set_name(button2, "myButton_yellow");
    gtk_widget_set_size_request(button2, 160, 130);
    g_object_set (button2, "margin", 5, NULL);

    /*     Create a green Button    */
    GtkWidget* button3 = gtk_button_new_with_label("Green");
    gtk_widget_set_name(button3, "myButton_green");
    gtk_widget_set_size_request(button3, 160, 130);
    g_object_set (button3, "margin", 5, NULL);

    /*     Create a blue Button    */
    GtkWidget* button4 = gtk_button_new_with_label("Blue");
    gtk_widget_set_name(button4, "myButton_blue");
    gtk_widget_set_size_request(button4, 160, 130);
    g_object_set (button4, "margin", 5, NULL);


    /*     Putting all together      */
    /*gtk_grid_attach(GTK_GRID(lGrid), button1, 0, 0, 1, 1);
    gtk_grid_attach(GTK_GRID(lGrid), button2, 1, 0, 1, 1);
    gtk_grid_attach(GTK_GRID(lGrid), button3, 0, 1, 1, 1);
    gtk_grid_attach(GTK_GRID(lGrid), button4, 1, 1, 1, 1);*/

    gtk_container_add (GTK_CONTAINER (lWindow), button1);


	g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindowNormal_OnDestroy), NULL);

	gtk_widget_show_all(lWindow);
	gtk_main();
}
//===============================================
void GWindowNormal_OnDestroy() {
	gtk_main_quit();
}
//===============================================


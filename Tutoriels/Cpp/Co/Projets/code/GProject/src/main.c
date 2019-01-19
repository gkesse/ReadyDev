//===============================================
#include <stdio.h>
#include <stdlib.h>
#include <gtk/gtk.h>
//===============================================
#include "gtkled.h"
//===============================================
static void cb_switch (GtkWidget* widget, gpointer data) {
	GtkWidget* led = (GtkWidget*)data;
	gtk_led_set_state(GTK_LED(led), ! gtk_led_get_state(GTK_LED(led)));
}
//===============================================
int main (int argc, char ** argv)
{
	GtkWidget * win;
	GtkWidget * hbox;
	GtkWidget * btn;
	GtkWidget * led;


	gtk_init (& argc, & argv);


	/*
	 * Creation de la fenetre principale et ajout d'un container.
	 */
	win = gtk_window_new (GTK_WINDOW_TOPLEVEL);
	gtk_window_set_title (GTK_WINDOW (win), "Test de GtkLed");
	gtk_window_set_position (GTK_WINDOW (win), GTK_WIN_POS_CENTER);
	gtk_window_set_default_size (GTK_WINDOW (win), 250, 50);

	g_signal_connect (
			G_OBJECT (win),
			"destroy",
			G_CALLBACK (gtk_main_quit),
			NULL
	);

	hbox = gtk_hbox_new (0, FALSE);
	gtk_container_set_border_width (GTK_CONTAINER (hbox), 5);
	gtk_container_add (GTK_CONTAINER (win), hbox);


	/*
	 * Creation d'un bouton et d'un GtkLed.
	 */
	btn = gtk_button_new_with_label ("Switch led state");
	gtk_box_pack_start (GTK_BOX (hbox), btn, TRUE, TRUE, 0);

	led = gtk_led_new ("led_on.png", "led_off.png", TRUE);

	if (led == NULL) {
		printf ("Impossible de créer le widget GtkLed !\n");
	} else {
		gtk_box_pack_start (GTK_BOX (hbox), led, TRUE, TRUE, 0);

		g_signal_connect (
				G_OBJECT (btn),
				"clicked",
				G_CALLBACK (cb_switch),
				(gpointer) led
		);
	}


	gtk_widget_show_all (win);
	gtk_main ();


	return EXIT_SUCCESS;
}

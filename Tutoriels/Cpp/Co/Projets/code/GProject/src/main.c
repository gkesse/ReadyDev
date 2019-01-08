#include <gtk/gtk.h>

int main( int argc, char *argv[])
{
    gtk_init(&argc, &argv);

    GtkWidget *window = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    gtk_window_set_default_size(GTK_WINDOW(window), 800, 500);

    GtkWidget *mainbox = gtk_grid_new();

    GtkWidget *button = gtk_button_new_with_label("Short button");
    gtk_widget_set_hexpand (button, TRUE);
    gtk_widget_set_halign (button, GTK_ALIGN_START);
    gtk_grid_attach(GTK_GRID(mainbox), button, 0, 0, 1, 1);

    button = gtk_button_new_with_label("Very very long button");
    gtk_widget_set_halign(button, GTK_ALIGN_END);
    gtk_grid_attach(GTK_GRID(mainbox), button, 1, 0, 1, 1);

    button = gtk_button_new_with_label("Tiny btn");
    gtk_widget_set_halign(button, GTK_ALIGN_END);
    gtk_grid_attach(GTK_GRID(mainbox), button, 1, 1, 1, 1);

    gtk_container_add(GTK_CONTAINER(window), mainbox);
    gtk_widget_show_all(window);

    gtk_main();

    return 0;
}

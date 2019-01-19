//===============================================
#include "GStyle.h"
//===============================================
static GStyleO* m_GStyleO = 0;
//===============================================
GStyleO* GStyle_Constructor();
void GStyle_Init(GStyleO* obj);
void GStyle_Load(const char* file);
//===============================================
GStyleO* GStyle_Constructor() {
	GStyleO* lObj = (GStyleO*)malloc(sizeof(GStyleO));
	GStyle_Init(lObj);
	return lObj;
}
//===============================================
void GStyle_Init(GStyleO* obj) {
	obj->Load = GStyle_Load;
}
//===============================================
GStyleO* GStyle() {
	if(m_GStyleO == 0) {
		m_GStyleO = GStyle_Constructor();
	}
	return m_GStyleO;
}
//===============================================
void GStyle_Load(const char* file) {
	GtkCssProvider *provider;
	GdkDisplay *display;
	GdkScreen *screen;

	provider = gtk_css_provider_new ();
	display = gdk_display_get_default ();
	screen = gdk_display_get_default_screen (display);
	gtk_style_context_add_provider_for_screen (screen, GTK_STYLE_PROVIDER(provider), GTK_STYLE_PROVIDER_PRIORITY_APPLICATION);

	GError *error = 0;
	gtk_css_provider_load_from_file(provider, g_file_new_for_path(file), &error);
	g_object_unref (provider);
}
//===============================================

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
	GtkCssProvider* lCssProvider = gtk_css_provider_new();
	gtk_css_provider_load_from_path(lCssProvider, file, NULL);
	gtk_style_context_add_provider_for_screen(gdk_screen_get_default(), GTK_STYLE_PROVIDER(lCssProvider), GTK_STYLE_PROVIDER_PRIORITY_USER);
}
//===============================================

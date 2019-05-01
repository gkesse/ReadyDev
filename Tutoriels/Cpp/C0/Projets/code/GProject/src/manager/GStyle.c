//===============================================
#include "GStyle.h"
//===============================================
static GStyleO* m_GStyleO = 0;
//===============================================
GStyleO* GStyle_New();
void GStyle_Delete();
void GStyle_Load(const char* file);
//===============================================
GStyleO* GStyle_New() {
    GStyleO* lObj = (GStyleO*)malloc(sizeof(GStyleO));
    lObj->m_child = 0;
    lObj->Delete = GStyle_Delete;
    lObj->Load = GStyle_Load;
    return lObj;
}
//===============================================
void GStyle_Delete() {
    GStyleO* lObj = GStyle();
    if(lObj != 0) {
        if(lObj->m_child != 0) {
            free(lObj->m_child);
            lObj->m_child = 0;
        }
        free(lObj);
        lObj = 0;
    }
}
//===============================================
GStyleO* GStyle() {
    if(m_GStyleO == 0) {
        m_GStyleO = GStyle_New();
    }
    return m_GStyleO;
}
//===============================================
void GStyle_Load(const char* file) {
    GtkCssProvider* lProvider = gtk_css_provider_new();
    GdkDisplay* lDisplay = gdk_display_get_default();
    GdkScreen* lScreen = gdk_display_get_default_screen(lDisplay);
    gtk_style_context_add_provider_for_screen (lScreen, GTK_STYLE_PROVIDER(lProvider), GTK_STYLE_PROVIDER_PRIORITY_APPLICATION);

    GError* lError = 0;
    gtk_css_provider_load_from_file(lProvider, g_file_new_for_path(file), &lError);
    g_object_unref(lProvider);
}
//===============================================

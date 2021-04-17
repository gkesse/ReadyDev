<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Création d'interfaces homme-machine avec Gtk en C<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la création d'interfaces homme-machine avec <b>Gtk </b>en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>GTK </b>est une bibliothèque de création d'interfaces homme-machine dévoppé à l'origine pour les besoins du logiciel de traitement d'images GIMP.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/b_gtk.png" alt="/Tutoriels/Software_Development/C0/img/b_gtk.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ <a class="Link7 GLink1" style="color:lime;" href="../#Installation">Installer l'environnement C</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Gtk.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616843526757"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616843526757");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous MSYS2"><a class="Link9" href="#Installation">1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Installer Gtk"><a class="Link9" href="#Installation">1.1.1 - Installer Gtk</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S --needed -y mingw-w64-i686-gtk3</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet avec Gtk en C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616852257743"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616852257743");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous MSYS2"><a class="Link9" href="#Tests">1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Éditer le programme"><a class="Link9" href="#Tests">1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;gtk/gtk.h&gt;
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params);
static gboolean GWindow_OnDeleteEvent(GtkWidget* obj, GdkEvent* event, gpointer params);
//===============================================
int main(int argc, char** argv) {
    gtk_init(&argc, &argv);
    
    GtkWidget* lWindow = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    
    GtkWidget* lLabel = gtk_label_new(0);
    gtk_label_set_text(GTK_LABEL(lLabel), "Bonjour tout le monde");
    
    GtkWidget* lMainLayout = gtk_vbox_new(0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lLabel, 1, 1, 0);

    gtk_container_add(GTK_CONTAINER(lWindow), lMainLayout);
    gtk_widget_show_all(lWindow);
    
    gtk_window_set_title(GTK_WINDOW(lWindow), "ReadyApp");
    gtk_container_set_border_width(GTK_CONTAINER(lWindow), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWindow), 600, 330);
    
    g_signal_connect(G_OBJECT(lWindow), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    g_signal_connect(G_OBJECT(lWindow), "delete_event", G_CALLBACK(GWindow_OnDeleteEvent), NULL);
    
    gtk_main();
    return 0;
}
//===============================================
static void GWindow_OnDestroy(GtkWidget* obj, gpointer params) {
    gtk_main_quit();
}
//===============================================
static gboolean GWindow_OnDeleteEvent(GtkWidget* obj, GdkEvent* event, gpointer params) {
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -std=gnu11 -c ./main.c -o ./main.o \
`pkg-config --cflags gtk+-3.0`</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -std=gnu11 -c ./main.c -o ./main.o \
-I/mingw32/include/gtk-3.0 -I/mingw32/include/pango-1.0 -I/mingw32/include -I/mingw32/include/glib-2.0 \
-I/mingw32/lib/glib-2.0/include -I/mingw32/include/harfbuzz -I/mingw32/include/freetype2 \
-I/mingw32/include/libpng16 -mms-bitfields -I/mingw32/include/fribidi -I/mingw32/include/cairo \
-I/mingw32/include/lzo -I/mingw32/include/pixman-1 -mms-bitfields -mms-bitfields -mms-bitfields \
-mms-bitfields -mms-bitfields -mms-bitfields -mms-bitfields -I/mingw32/include/gdk-pixbuf-2.0 \
-mms-bitfields -mms-bitfields -mms-bitfields -I/mingw32/include/atk-1.0 -mms-bitfields -mms-bitfields \
-mms-bitfields -pthread -mms-bitfields</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Éditer les liens du projet"><a class="Link9" href="#Tests">1.1.3 - Éditer les liens du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -o ./rdc.exe ./main.o  \
`pkg-config --libs gtk+-3.0`</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -o ./rdc.exe ./main.o  \
-L/mingw32/lib \ 
-lgtk-3 -lgdk-3 -lz -lgdi32 -limm32 -lshell32 -lole32 -Wl,-luuid -lwinmm -ldwmapi -lsetupapi \
-lcfgmgr32 -lpangowin32-1.0 -lpangocairo-1.0 -lpango-1.0 -lharfbuzz -latk-1.0 -lcairo-gobject \
-lcairo -lgdk_pixbuf-2.0 -lgio-2.0 -lgobject-2.0 -lglib-2.0 -lintl</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.4 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdc.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_gtk_test.png" alt="/Tutoriels/Software_Development/C0/img/i_gtk_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration avec Gtk en C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616870903473"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616870903473");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface graphique permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GGtk_Run(int argc, char** argv) {
    gtk_init(&argc, &argv);

    GManager()-&gt;LoadStyle();
    GManager()-&gt;LoadImg();
    GManager()-&gt;LoadData();
    GPicto()-&gt;Load();
    GWidget("window");

    gtk_main();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Système d'administration"><a class="Link9" href="#Système d'administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GWindow.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GWindow_Widget(GWidgetO* obj) {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;;
    GtkWidget* lWidget = gtk_window_new(GTK_WINDOW_TOPLEVEL);
    obj-&gt;widget = lWidget;
    
    GWidgetO* lTitleBar = GWidget("titlebar");
    GWidgetO* lAddressBar = GWidget("addressbar");

    GWidgetO* lAddressKey = GWidget("addresskey");
    lApp-&gt;address_key = lAddressKey;

    GWidgetO* lWorkspace = GWidget("stackwidget");
    lApp-&gt;page_map = lWorkspace;
    gtk_widget_set_name(lWorkspace-&gt;widget, "workspace");
    
    GtkWidget* lMainLayout = gtk_vbox_new(0, 0);
    gtk_widget_set_name(lMainLayout, "GWindow");
    gtk_box_pack_start(GTK_BOX(lMainLayout), lTitleBar-&gt;widget, 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), GManager()-&gt;SpaceV(10), 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lAddressBar-&gt;widget, 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), GManager()-&gt;SpaceV(10), 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lAddressKey-&gt;widget, 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), GManager()-&gt;SpaceV(10), 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lMainLayout), lWorkspace-&gt;widget, 1, 1, 0);

    gtk_container_add(GTK_CONTAINER(lWidget), lMainLayout);
    gtk_widget_show_all(lWidget);

    GWindow_AddPage(obj, "home", "Accueil", GWidget("home")-&gt;widget, 1);
    GWindow_AddPage(obj, "home/login", "Connexion", GWidget("login")-&gt;widget, 0);
    GWindow_AddPage(obj, "home/sqlite", "SQLite", GWidget("sqlite")-&gt;widget, 0);
    GWindow_AddPage(obj, "home/opencv", "OpenCV", GWidget("opencv")-&gt;widget, 0);
    GWindow_AddPage(obj, "home/debug", "Debug", GWidget("debug")-&gt;widget, 0);

    gtk_window_set_title(GTK_WINDOW(lWidget), lApp-&gt;app_name);
    gtk_container_set_border_width(GTK_CONTAINER(lWidget), 0);
    gtk_widget_set_size_request(GTK_WIDGET(lWidget), lApp-&gt;win_width, lApp-&gt;win_height);
    
    g_signal_connect(G_OBJECT(lWidget), "destroy", G_CALLBACK(GWindow_OnDestroy), NULL);
    g_signal_connect(G_OBJECT(lWidget), "delete_event", G_CALLBACK(GWindow_OnDeleteEvent), NULL);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme des fonctionnalités"><a class="Link9" href="#Système d'administration">Programme des fonctionnalités</a></h2><br><h3 class="Title8 GTitle3">GHome.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GHome_Widget(GWidgetO* obj) {
    GtkWidget* lWidget = gtk_vbox_new(1, 0);
    obj-&gt;widget = lWidget;

    GWidgetO* lListBox = GWidget("listbox");
    lListBox-&gt;AddItemClick(lListBox, obj);
    lListBox-&gt;AddItem(lListBox, "home/login", "Connexion", "user");
    lListBox-&gt;AddItem(lListBox, "home/sqlite", "SQLite", "database");
    lListBox-&gt;AddItem(lListBox, "home/opencv", "OpenCV", "camera");
    lListBox-&gt;AddItem(lListBox, "home/debug", "Debug", "filetexto");
    
    gtk_box_pack_start(GTK_BOX(lWidget), lListBox-&gt;widget, 0, 0, 0);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GListBox.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GListBox_AddItem(GWidgetO* obj, char* key, char* text, char* icon) {
    GListBoxO* lChild = obj-&gt;child;
    GMapO(GListBox, GVOID_PTR, GVOID_PTR)* lWidgetMap = lChild-&gt;widgetMap;
    GtkWidget* lItem = gtk_button_new();
    gtk_widget_set_name(lItem, "item");
    GtkWidget* lLayout = gtk_hbox_new(0, 0);
    gtk_widget_set_name(lLayout, "row");
    GtkWidget* lButton = GManager()-&gt;Button(icon, text, 5, 0);
    gtk_box_pack_start(GTK_BOX(lLayout), lButton, 0, 0, 0);
    gtk_box_pack_start(GTK_BOX(lLayout), gtk_hbox_new(0, 0), 1, 1, 0);
    gtk_container_add(GTK_CONTAINER(lItem), lLayout);
    gtk_box_pack_start(GTK_BOX(obj-&gt;widget), lItem, 0, 0, 0);
    lWidgetMap-&gt;SetData(lWidgetMap, lItem, key, 0);
    g_signal_connect(G_OBJECT(lItem), "clicked", G_CALLBACK(GListBox_OnItemClick), obj);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GListBox.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GListBox_OnItemClick(GtkWidget* widget, gpointer params) {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;;
    GWidgetO* lObj = (GWidgetO*)params;
    GListBoxO* lChild = lObj-&gt;child;
    GMapO(GListBox, GVOID_PTR, GVOID_PTR)* lWidgetMap = lChild-&gt;widgetMap;
    char* lWidgetId = lWidgetMap-&gt;GetData(lWidgetMap, widget, 0);
    lApp-&gt;widget_id = lWidgetId;
    lObj-&gt;EmitItemClick(lObj);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de choix d'une fonctionnalité"><a class="Link9" href="#Système d'administration">Programme de choix d'une fonctionnalité</a></h2><br><h3 class="Title8 GTitle3">GListBox.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GListBox_OnItemClick(GtkWidget* widget, gpointer params) {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;;
    GWidgetO* lObj = (GWidgetO*)params;
    GListBoxO* lChild = lObj-&gt;child;
    GMapO(GListBox, GVOID_PTR, GVOID_PTR)* lWidgetMap = lChild-&gt;widgetMap;
    char* lWidgetId = lWidgetMap-&gt;GetData(lWidgetMap, widget, 0);
    lApp-&gt;widget_id = lWidgetId;
    lObj-&gt;EmitItemClick(lObj);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHome.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GHome_OnItemClickObs(GWidgetO* obj) {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    char* lWidgetId = lApp-&gt;widget_id;
    GManager()-&gt;SetPage(lWidgetId);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme d'affichage d'une fonctionnalité"><a class="Link9" href="#Système d'administration">Programme d'affichage d'une fonctionnalité</a></h2><br><h3 class="Title8 GTitle3">GManager.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GManager_SetPage(char* address) {
    sGApp* lApp = GManager()-&gt;mgr-&gt;app;
    GMapO(GManager, GVOID_PTR, GVOID_PTR)* lPageId = lApp-&gt;page_id;
    GMapO(GManager, GVOID_PTR, GVOID_PTR)* lTitleMap = lApp-&gt;title_map;
    int lPageIndex = (int)lPageId-&gt;GetData(lPageId, address, lPageId-&gt;EqualChar);
    char* lTitle = lTitleMap-&gt;GetData(lTitleMap, address, lTitleMap-&gt;EqualChar);
    lApp-&gt;page_map-&gt;SetCurrentIndex(lApp-&gt;page_map, lPageIndex);
    gtk_label_set_text(GTK_LABEL(lApp-&gt;title), lTitle);
    lApp-&gt;address_key-&gt;SetContent(lApp-&gt;address_key, address);
    gtk_entry_set_text(GTK_ENTRY(lApp-&gt;address_bar), address);
    gtk_widget_show_all(lApp-&gt;address_key-&gt;widget);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><h3 class="Title8 GTitle3">Page d'accueil</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system.png" alt="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system.png"></div><br><h3 class="Title8 GTitle3">Page de connexion</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system_02.png" alt="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Page de débogage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system_03.png" alt="/Tutoriels/Software_Development/C0/img/i_gtk_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br><span class="GColor1" style="color:lime;">Bibliothèques C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1616876598687"><div class="Row26">List 1 &gt; C &gt; libs</div></div><script>loadList1("Loader_1616876598687","C","libs");</script></div><br></div></div></div></div><br>
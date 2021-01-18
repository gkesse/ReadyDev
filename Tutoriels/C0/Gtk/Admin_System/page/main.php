<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système d'administration Gtk en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système d'administration Gtk en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_gtk_admin_system.png" alt="/Tutoriels/C0/img/b_gtk_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système d'administration Gtk en C"><a class="Link3" href="#">Créer un système d'administration Gtk en C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Gtk en C-Introduction"><a class="Link9" href="#Créer un système d'administration Gtk en C">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système d'administration Gtk en C qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Gtk en C-Programme principal"><a class="Link9" href="#Créer un système d'administration Gtk en C">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GGtk_Run(int argc, char** argv) {
    gtk_init(&argc, &argv);

    GManager()-&gt;LoadStyle();
    GManager()-&gt;LoadImg();
    GManager()-&gt;LoadData();
    GPicto()-&gt;Load();
    GWidget("window");

    gtk_main();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Gtk en C-Système d'administration"><a class="Link9" href="#Créer un système d'administration Gtk en C">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GWindow.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration Gtk en C-Résultat"><a class="Link9" href="#Créer un système d'administration Gtk en C">Résultat</a></h2><br><h3 class="Title8 GTitle3">Page d'accueil</h3><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/i_gtk_admin_system.png" alt="/Tutoriels/C0/img/i_gtk_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Gtk</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1610959358568"><div class="Row26">List 1 &gt; C &gt; gtk</div></div><script>loadList1("Loader_1610959358568","C","gtk");</script></div><br></div></div></div></div><br>
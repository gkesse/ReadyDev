<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet Gtk en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet Gtk en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_gtk_project.png" alt="/Tutoriels/C0/img/b_gtk_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet Gtk en C"><a class="Link3" href="#">Créer un projet Gtk en C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet Gtk en C-Introduction"><a class="Link9" href="#Créer un projet Gtk en C">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet Gtk en C qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet Gtk en C-Programme principal"><a class="Link9" href="#Créer un projet Gtk en C">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Gtk en C-Fichier Makefile"><a class="Link9" href="#Créer un projet Gtk en C">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.c.mak<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = $(GPROJECT_SRC)
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/rdc 

GINCS = \
    -I$(GSRC)/include \
    `pkg-config --cflags gtk+-3.0` \
    
GLIBS = \
    `pkg-config --libs gtk+-3.0` \

GOBJS = \
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \

GCFLAGS = \
    -std=gnu18 \
    -W -Wall \
    -Wno-unused-parameter \
    -Wno-deprecated-declarations \
    
all: clean_exe compile run
 
compile: $(GOBJS)
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	gcc -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.c
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GBUILD) ; fi
	gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	@echo
	$(GTARGET) $(argv)
	@echo
clean_exe:
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	rm -f $(GBIN)/*
clean:
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GBUILD) ; fi
	rm -f $(GBUILD)/* $(GBIN)/*</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Gtk en C-Variables d'environnement"><a class="Link9" href="#Créer un projet Gtk en C">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">envs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
export "GPROJECT_ROOT=/c/Users/Admin/Downloads/Programs"
export "GPROJECT_PATH=${GPROJECT_ROOT}/ReadyC"
export "GPROJECT_SRC=${GPROJECT_PATH}/gtk/code/readyapp/src"
#================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
lArgv="${@:2}"
#================================================
make -f Makefile.c.mak $1 "argv=$lArgv"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Gtk en C-Compilation automatique"><a class="Link9" href="#Créer un projet Gtk en C">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./make_c all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Gtk en C-Compilation manuelle"><a class="Link9" href="#Créer un projet Gtk en C">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">rm -f bin/*
gcc -std=gnu18 -W -Wall -Wno-unused-parameter -Wno-deprecated-declarations \
-c src/main.c -o build/main.o -Isrc/include `pkg-config --cflags gtk+-3.0`
gcc -o bin/rdc   build/main.o  `pkg-config --libs gtk+-3.0` 
bin/rdc</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Gtk en C-Résultat"><a class="Link9" href="#Créer un projet Gtk en C">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/i_gtk_project.png" alt="/Tutoriels/C0/img/i_gtk_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Gtk</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1610959358568"><div class="Row26">List 1 &gt; C &gt; gtk</div></div><script>loadList1("Loader_1610959358568","C","gtk");</script></div><br></div></div></div></div><br>
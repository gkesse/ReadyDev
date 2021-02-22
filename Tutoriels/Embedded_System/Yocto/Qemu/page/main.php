<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une image Qemu avec Yocto</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une image Qemu avec <b>Yocto</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Un <b>système embarqué</b> est un système électronique et informatique autonome, souvent temps réel, spécialisé dans une tâche précise et dont les ressources sont généralement limitées spatialement (encombrement réduit) et énergétiquement (consommation restreinte).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/b_yocto_qemu.png" alt="/Tutoriels/Embedded_System/img/b_yocto_qemu.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une image Qemu avec Yocto"><a class="Link3" href="#">Créer une image Qemu avec Yocto</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une image Qemu avec Yocto-Introduction"><a class="Link9" href="#Créer une image Qemu avec Yocto">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une image Qemu avec Yocto.<br><br><h2 class="Title7 GTitle2" id="Créer une image Qemu avec Yocto-Variables d'environnement"><a class="Link9" href="#Créer une image Qemu avec Yocto">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">envs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
export "GRLIB_ROOT=/home/osboxes/Programs/ReadyLib/dev"
#================================================
export "GPOKY_ROOT=$GRLIB_ROOT/poky"
export "GPOKY_URL=git://git.yoctoproject.org/poky"
export "GPOKY_SRC=$GPOKY_ROOT/poky"
export "GPOKY_BUILD=$GPOKY_ROOT/build_qemu"
export "GPOKY_IMAGE=core-image-minimal"
export "GPOKY_LAYER_ADD=/home/osboxes/Programs/ReadyLib/dev/rpi/meta-raspberrypi"
#================================================
export "GRPI_ROOT=$GRLIB_ROOT/rpi"
export "GRPI_URL=git://git.yoctoproject.org/meta-raspberrypi"
export "GRPI_SRC=$GRPI_ROOT/meta-raspberrypi"
#================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
lArgv="${@:2}"
#================================================
make -f Makefile.cmd.mak $1 "argv=$lArgv"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une image Qemu avec Yocto-Fichier Makefile"><a class="Link9" href="#Créer une image Qemu avec Yocto">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.cmd.mak</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">#================================================
SHELL := /bin/bash
#================================================
# poky
poky_download:
	@if ! [ -d $(GPOKY_ROOT) ] ; then mkdir -p $(GPOKY_ROOT) ; fi
	cd $(GPOKY_ROOT) && sudo git clone $(GPOKY_URL)
poky_conf_init:
	. $(GPOKY_SRC)/oe-init-build-env $(GPOKY_BUILD)
poky_conf_write:
	sudo chmod 777 $(GPOKY_BUILD)/conf/*
poky_conf_close:
	sudo chmod 644 $(GPOKY_BUILD)/conf/*
poky_conf_build:
	. $(GPOKY_SRC)/oe-init-build-env $(GPOKY_BUILD) && \
	cd $(GPOKY_BUILD) && bitbake $(GPOKY_IMAGE)
poky_layer_ls:
	. $(GPOKY_SRC)/oe-init-build-env $(GPOKY_BUILD) && \
	bitbake-layers  show-layers
poky_layer_add:
	. $(GPOKY_SRC)/oe-init-build-env $(GPOKY_BUILD) && \
	bitbake-layers  add-layer  $(GPOKY_LAYER_ADD)
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une image Qemu avec Yocto-Télécharger Poky"><a class="Link9" href="#Créer une image Qemu avec Yocto">Télécharger Poky</a></h2><br><h3 class="Title8 GTitle3">Terminal (automatique)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make_c poki_download</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (manuel)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git clone git://git.yoctoproject.org/poky</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une image Qemu avec Yocto-Initialiser Poky"><a class="Link9" href="#Créer une image Qemu avec Yocto">Initialiser Poky</a></h2><br><h3 class="Title8 GTitle3">Terminal (automatique)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make_c poki_conf_init</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (manuel)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">. oe-init-build-env build_qemu</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une image Qemu avec Yocto-Résultat"><a class="Link9" href="#Créer une image Qemu avec Yocto">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_yocto_qemu.png" alt="/Tutoriels/Embedded_System/img/i_yocto_qemu.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Linux Embarqué avec Yocto</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1614013376693"><div class="Row26">List 1 &gt; Embedded_System &gt; yocto</div></div><script>loadList1("Loader_1614013376693","Embedded_System","yocto");</script></div><br></div></div></div></div><br>
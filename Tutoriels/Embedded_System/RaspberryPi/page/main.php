<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec le RaspberryPi</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec le <b>RaspberryPi</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>RaspberryPi </b>est un&nbsp; mini PC embarqué à processeur ARM permettant l'exécution de plusieurs variantes du système d'exploitation libre GNU/Linux, notamment Debian, et des logiciels compatibles. Il fonctionne aussi avec le système d'exploitation Microsoft Windows : Windows 10 IoT Core, Windows 10 on ARM, celui de Google Android Pi et même une version de l'OS/MVT d'IBM accompagnée du système APL\360. Le Raspberry Pi dispose de pins GPIO qui permettent la connexion de cartes d'extension ou d'autres composants électroniques pour réaliser des montages. <br><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/RaspberryPi/img/b_rpi.png" class="lazy" data-src="/Tutoriels/Embedded_System/RaspberryPi/img/b_rpi.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement RaspberryPi.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619311315651"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619311315651");</script></div><br><h2 class="Title7 GTitle2" id="Installation-Installer-RaspberryPi-Imager"><a class="Link9" href="#Installation">Installer RaspberryPi Imager</a></h2><br><b>Raspberry Pi Imager</b> est le moyen rapide et facile d'installer le système d'exploitation Raspberry Pi et d'autres systèmes d'exploitation sur une carte microSD, prête à être utilisée avec votre Raspberry Pi.<br><br><h3 class="Title8 GTitle3">Télécharger RaspberryPi Imager</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.raspberrypi.org/software/">https://www.raspberrypi.org/software/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/imager/">https://downloads.raspberrypi.org/imager/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/imager/imager_1.6.1.exe">https://downloads.raspberrypi.org/imager/imager_1.6.1.exe</a><br><br><b>imager_1.6.1.exe</b><br><br><h3 class="Title8 GTitle3">Installer RaspberryPi Imager</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">imager_1.6.1.exe
Install
Finish</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer RaspberryPi Imager</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Windows
RaspberryPi Imager</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Configurer-une-image-predefinie-Raspbian-Lite-sous-RaspberryPi-Imager"><a class="Link9" href="#Installation">Configurer une image prédéfinie Raspbian Lite sous RaspberryPi Imager</a></h2><br><h3 class="Title8 GTitle3">Configurer Raspbian Lite</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Raspberry Pi Imager
Système d'exploitation
Choisissez l'OS
Raspberry Pi OS (other)
Raspberry Pi OS Lite (32-bit)</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Configurer-une-image-personnalisee-Raspbian-Lite-sous-RaspberryPi-Imager"><a class="Link9" href="#Installation">Configurer une image personnalisée Raspbian Lite sous RaspberryPi Imager</a></h2><br><h3 class="Title8 GTitle3">Télécharger Raspbian Lite</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.raspberrypi.org/software/operating-systems/">https://www.raspberrypi.org/software/operating-systems/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-03-25/">https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-03-25/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-03-25/2021-03-04-raspios-buster-armhf-lite.zip">https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-03-25/2021-03-04-raspios-buster-armhf-lite.zip</a><br><br><b>2021-03-04-raspios-buster-armhf-lite.zip</b><br><br><h3 class="Title8 GTitle3">Extraire Raspbian Lite</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Extraire -&gt; 2021-03-04-raspios-buster-armhf-lite.zip</pre></div></div><br><h3 class="Title8 GTitle3">Configurer Raspbian Lite</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Raspberry Pi Imager
Système d'exploitation
Choisissez l'OS
Utiliser une image personnalisée
2021-03-04-raspios-buster-armhf-lite.img</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Configurer-une-image-personnalisee-Ubuntu-Desktop-sous-RaspberryPi-Imager"><a class="Link9" href="#Installation">Configurer une image personnalisée Ubuntu Desktop sous RaspberryPi Imager</a></h2><br><h3 class="Title8 GTitle3">Télécharger Ubuntu Desktop</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://cdimage.ubuntu.com/releases/20.10/release/">https://cdimage.ubuntu.com/releases/20.10/release/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://cdimage.ubuntu.com/releases/20.10/release/ubuntu-20.10-preinstalled-desktop-arm64+raspi.img.xz">https://cdimage.ubuntu.com/releases/20.10/release/ubuntu-20.10-preinstalled-desktop-arm64+raspi.img.xz</a><br><br><b>ubuntu-20.10-preinstalled-desktop-arm64+raspi.img.xz</b><br><br><h3 class="Title8 GTitle3">Extraire Ubuntu Desktop</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Extraire -&gt; ubuntu-20.10-preinstalled-desktop-arm64+raspi.img.xz</pre></div></div><br><h3 class="Title8 GTitle3">Configurer Ubuntu Desktop</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Raspberry Pi Imager
Système d'exploitation
Choisissez l'OS
Utiliser une image personnalisée
ubuntu-20.10-preinstalled-desktop-arm64+raspi.img</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Preparer-la-carte-SD-sous-RaspberryPi-Imager"><a class="Link9" href="#Installation">Préparer la carte SD sous RaspberryPi Imager</a></h2><br><h3 class="Title8 GTitle3">Configurer la carte SD</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">RaspberryPi Imager
Carte SD
Choisissez la Carte SD
Mass Storage device USB Device - 127.9 GB</pre></div></div><br><h3 class="Title8 GTitle3">Graver l'image sur la carte SD</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">RaspberryPi Imager
Écrire
Continuer ? -&gt; Oui
Retirer la carte -&gt; Continuer</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Demarrer-le-RaspberryPi"><a class="Link9" href="#Installation">Démarrer le RaspberryPi</a></h2><br><h3 class="Title8 GTitle3">Insérer la carte SD dans le RaspberryPi</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Insérer -&gt; Carte SD -&gt; RaspberryPi</pre></div></div><br><h3 class="Title8 GTitle3">Mettre le RaspberryPi sous tension</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Mettre -&gt; RaspberryPi -&gt; sous tension</pre></div></div><br><h3 class="Title8 GTitle3">Saisir les identifiants</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Login    (Par défaut) -&gt; pi
Password (Par défaut) -&gt; raspberry</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Configurer-le-reseau-WiFi-sous-Raspbian-Lite"><a class="Link9" href="#Installation">Configurer le réseau WiFi sous Raspbian Lite</a></h2><br><b>Wi-Fi</b> est un ensemble de protocoles de communication sans fil régis par les normes du groupe IEEE 802.11 (ISO/CEI 8802-11). Un réseau Wi-Fi permet de relier par ondes radio plusieurs appareils informatiques (ordinateur, routeur, smartphone, modem Internet, etc.) au sein d'un réseau informatique afin de permettre la transmission de données entre eux.<br><br><h3 class="Title8 GTitle3">Ouvrir le fichier de configuration</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo nano /etc/wpa_supplicant/wpa_supplicant.conf</pre></div></div><br><h3 class="Title8 GTitle3">Configurer les paramètres WiFi</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
update_config=1
country=FR

network={
    ssid="ReadyDev"
    psk="******"
}</pre></div></div><br><h3 class="Title8 GTitle3">Redémarrer le RaspberryPi</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo shutdown -r now</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier la connexion WiFi</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">ip a s</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Mettre-a-jour-le-systeme-sous-Raspbian-Lite"><a class="Link9" href="#Installation">Mettre à jour le système sous Raspbian Lite</a></h2><br><h3 class="Title8 GTitle3">Mettre à jour le système</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo apt update
sudo apt full-upgrade
sudo apt dist-upgrade</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Mettre-a-jour-le-systeme-sous-Ubuntu-Desktop"><a class="Link9" href="#Installation">Mettre à jour le système sous Ubuntu Desktop</a></h2><br><h3 class="Title8 GTitle3">Mettre à jour le système</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo apt update
sudo apt upgrade</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Configurer-la-connexion-SSH-sous-Ubuntu-Desktop"><a class="Link9" href="#Installation">Configurer la connexion SSH sous Ubuntu Desktop</a></h2><br>Le protocole Secure Shell (<b>SSH</b>) est un protocole de réseau cryptographique permettant d'exploiter les services réseau en toute sécurité sur un réseau non sécurisé. Les applications typiques incluent la ligne de commande à distance , la connexion et l'exécution de commande à distance, mais tout service réseau peut être sécurisé avec SSH. SSH fournit un canal sécurisé sur un réseau non sécurisé en utilisant une architecture client-serveur , connectant une application client SSH à un serveur SSH . La spécification du protocole distingue deux versions principales, appelées SSH-1 et SSH-2. Le port TCP standard pour SSH est 22. SSH est généralement utilisé pour accéder aux systèmes d' exploitation de type Unix, mais il peut également être utilisé sur Microsoft Windows.<br><br><h3 class="Title8 GTitle3">Installer le serveur SSH</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo apt install openssh-server</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer le serveur SSH</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo systemctl start ssh</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier le serveur SSH</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo systemctl status ssh</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Demarrer-la-connexion-SSH-sous-MobaXterm"><a class="Link9" href="#Installation">Démarrer la connexion SSH sous MobaXterm</a></h2><br><b>MobaXterm </b>est votre boîte à outils ultime pour l'informatique à distance . Dans une seule application Windows, il fournit de nombreuses fonctions conçues pour les programmeurs, les webmasters, les administrateurs informatiques et à peu près tous les utilisateurs qui doivent gérer leurs tâches à distance de manière plus simple. MobaXterm fournit tous les outils réseau à distance importants (SSH, X11, RDP, VNC, FTP, MOSH, ...) et les commandes Unix (bash, ls, cat, sed, grep, awk, rsync, ...) sur le bureau Windows , dans un seul fichier exe portable qui fonctionne hors de la boîte<br><br><h3 class="Title8 GTitle3">Télécharger MobaXterm</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://mobaxterm.mobatek.net/download.html">https://mobaxterm.mobatek.net/download.html</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://mobaxterm.mobatek.net/download-home-edition.html">https://mobaxterm.mobatek.net/download-home-edition.html</a><br><br><b>MobaXterm_Installer_v21.1.zip</b><br><br><h3 class="Title8 GTitle3">Extraire MobaXterm</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">MobaXterm_Installer_v21.1.zip
Clic droit -&gt; Extraire vers MobaXterm_Installer_v21.1/</pre></div></div><br><h3 class="Title8 GTitle3">Installer Mobaxterm</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">MobaXterm_installer_21.1.msi
Next
Cocher -&gt; I accept the terms in the License Agreement
Next
Destination Folder -&gt; C:\Program Files (x86)\Mobatek\MobaXterm\
Next
Install
Finish</pre></div></div><br><h3 class="Title8 GTitle3">Créer une session SSH</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">MobaXterm
Session
SSH

Basic SSH settings
Remote ssh -&gt; 192.168.1.45
Check -&gt; Specify username -&gt; pi

Bookmark settings
Session name -&gt; Ubuntu

OK</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer la connexion SSH</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">MobaXterm
Sessions
Ubuntu
Double clic</pre></div></div><br></div></div></div></div><br><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Yocto"><a class="Link3" href="#">Yocto</a></h1><div class="Body3"><br>Le projet <b>Yocto </b>est un projet open source collaboratif de la Linux Foundation dont le but est de produire des outils et des processus permettant la création de distributions Linux pour les logiciels embarqués et IoT indépendants de l'architecture sous-jacente du matériel embarqué. L'objectif du projet Yocto est d'améliorer le processus de développement logiciel pour les distributions Linux embarquées. Le projet Yocto fournit des outils, des métadonnées et des processus interopérables qui permettent le développement rapide et répétable de systèmes embarqués basés sur Linux dans lesquels chaque aspect du processus de développement peut être personnalisé.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619354920059"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619354920059");</script></div><br><h2 class="Title7 GTitle2" id="Yocto-Generer-une-image-Linux-embarque-sous-Ubuntu"><a class="Link9" href="#Yocto">Générer une image Linux embarqué sous Ubuntu</a></h2><br><b>Linux embarqué</b> (en anglais Embedded Linux) désigne un système d'exploitation dérivé de Linux et adapté à un système embarqué. Il existe de nombreuses versions de Linux embarqués adaptés à différents types de matériels (téléphones portables, set-top boxes, boitiers Internet (ADSL, Fibre ...), dispositifs lecteurs multimédia sur TV, etc). Contrairement aux versions de Linux destinées aux ordinateurs personnels et aux serveurs, les différents systèmes Linux embarqués sont conçus pour des systèmes aux ressources limitées. Les systèmes embarqués sous Linux disposent généralement de peu de RAM et utilisent fréquemment de la mémoire flash plutôt qu'un disque dur. Comme ils sont souvent dédiés à un nombre de tâches réduites sur une cible matérielle bien définie, ils utilisent plutôt des versions du noyau Linux optimisées pour des contextes précis. Les distributions Linux destinées à l'embarqué disposent souvent d'un noyau temps réel. <br><br><h3 class="Title8 GTitle3">Installer les dépendances</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo apt install -y \
gawk \
wget \
git-core \
diffstat \
unzip \
texinfo \
build-essential \
chrpath \
socat \
cpio \
python3 \
python3-pip \
xz-utils \
debianutils \
iputils-ping \
python3-git \
python3-jinja2 \
libegl1-mesa \
libsdl1.2-dev \
pylint3 \
xterm \
gcc-multilib \
python3-pexpect \
bmap-tools \</pre></div></div><br><h3 class="Title8 GTitle3">Télécharger la distribution de référence Poky</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git clone -b dunfell git://git.yoctoproject.org/poky.git</pre></div></div><br><h3 class="Title8 GTitle3">Télécharger la couche RaspberryPi</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">cd poky/
git clone -b dunfell git://git.yoctoproject.org/meta-raspberrypi.git</pre></div></div><br><h3 class="Title8 GTitle3">Lister les machines RaspberryPi supportées</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">ls -l meta-raspberrypi/conf/machine/</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">drwxrwxr-x 2 rpi4 rpi4 4096 mars  14 00:54 include
-rw-rw-r-- 1 rpi4 rpi4  300 mars  14 00:54 raspberrypi0.conf
-rw-rw-r-- 1 rpi4 rpi4  585 mars  14 00:54 raspberrypi0-wifi.conf
-rw-rw-r-- 1 rpi4 rpi4  342 mars  14 00:54 raspberrypi2.conf
-rw-rw-r-- 1 rpi4 rpi4 1022 mars  14 00:54 raspberrypi3-64.conf
-rw-rw-r-- 1 rpi4 rpi4  633 mars  14 00:54 raspberrypi3.conf
-rw-rw-r-- 1 rpi4 rpi4 1054 mars  14 00:54 raspberrypi4-64.conf
-rw-rw-r-- 1 rpi4 rpi4  595 mars  14 00:54 raspberrypi4.conf
-rw-rw-r-- 1 rpi4 rpi4  402 mars  14 00:54 raspberrypi-cm3.conf
-rw-rw-r-- 1 rpi4 rpi4  244 mars  14 00:54 raspberrypi-cm.conf
-rw-rw-r-- 1 rpi4 rpi4  364 mars  14 00:54 raspberrypi.conf</pre></div></div><br><h3 class="Title8 GTitle3">Initialiser les variables d'environnement</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">. oe-init-build-env build-rpi</pre></div></div><br><h3 class="Title8 GTitle3">Configurer la machine</h3><br><span class="GColor1" style="color:lime;">build-rpi/conf/local.conf</span><br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">MACHINE ??= "raspberrypi4-64"
DISTRO ?= "poky"
PACKAGE_CLASSES ?= "package_rpm"
EXTRA_IMAGE_FEATURES ?= "debug-tweaks"
USER_CLASSES ?= "buildstats image-mklibs image-prelink"
PATCHRESOLVE = "noop"

BB_DISKMON_DIRS ??= "\
    STOPTASKS,${TMPDIR},1G,100K \
    STOPTASKS,${DL_DIR},1G,100K \
    STOPTASKS,${SSTATE_DIR},1G,100K \
    STOPTASKS,/tmp,100M,100K \
    ABORT,${TMPDIR},100M,1K \
    ABORT,${DL_DIR},100M,1K \
    ABORT,${SSTATE_DIR},100M,1K \
    ABORT,/tmp,10M,1K"
    
PACKAGECONFIG_append_pn-qemu-system-native = " sdl"
CONF_VERSION = "1"</pre></div></div><br><h3 class="Title8 GTitle3">Configurer les couches</h3><br><span class="GColor1" style="color:lime;">build-rpi/conf/bblayers.conf</span><br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">POKY_BBLAYERS_CONF_VERSION = "2"

BBPATH = "${TOPDIR}"
BBFILES ?= ""

BBLAYERS ?= " \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-poky \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-yocto-bsp \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-raspberrypi \
  "</pre></div></div><br><h3 class="Title8 GTitle3">Générer l'image Linux embarqué (minimal)<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">bitbake core-image-minimal</pre></div></div><br><h3 class="Title8 GTitle3">Générer l'image Linux embarqué (base)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">bitbake core-image-base</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'image Linux embarqué (*.rpi-sdimg)<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">tmp/deploy/images/raspberrypi4/core-image-minimal-raspberrypi4.rpi-sdimg</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'image Linux embarqué (*.wic.bz2 ; *.wic.bmap)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">tmp/deploy/images/raspberrypi4-64/core-image-base-raspberrypi4-64.wic.bz2
tmp/deploy/images/raspberrypi4-64/core-image-base-raspberrypi4-64.wic.bmap</pre></div></div><br><h2 class="Title7 GTitle2" id="Yocto-Graver-l-image-Linux-embarque-sur-une-carte-SD-sous-Ubuntu"><a class="Link9" href="#Yocto">Graver l'image Linux embarqué sur une carte SD sous Ubuntu</a></h2><br>Une <b>carte SD</b> (« SD » étant le sigle de l'expression anglaise « Secure Digital ») est une carte mémoire amovible de stockage de données numériques créée en janvier 2000 par une alliance formée entre les industriels Panasonic, SanDisk et Toshiba. Les cartes SD sont utilisées pour le stockage de fichiers dans les appareils photo numériques, les caméscopes numériques, les systèmes de navigation GPS, les consoles de jeux vidéo, les téléphones mobiles dont les smartphones, ou encore les systèmes embarqués. <br><br><h3 class="Title8 GTitle3">Vérifier les périphériques de stockage actuellement connectés</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">lsblk -p</pre></div></div><br><h3 class="Title8 GTitle3">Connecter la carte SD au système</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Connecter -&gt; Carte SD -&gt; Système</pre></div></div><br><h3 class="Title8 GTitle3">Détecter le nom de la carte SD</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">lsblk -p</pre></div></div><br><h3 class="Title8 GTitle3">Démonter la carte SD du système</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">umount /dev/sda?</pre></div></div><br><h3 class="Title8 GTitle3">Graver l'image Linux embarqué sur la carte SD (*.rpi-sdimg)<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo dd if=core-image-minimal-raspberrypi4.rpi-sdimg of=/dev/sda</pre></div></div><br><h3 class="Title8 GTitle3">Graver l'image Linux embarqué sur la carte SD (*.wic.bz2 ; *.wic.bmap)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo bmaptool copy core-image-base-raspberrypi4-64.wic.bz2 \
--bmap core-image-base-raspberrypi4-64.wic.bmap /dev/sda</pre></div></div><br><h2 class="Title7 GTitle2" id="Yocto-Demarrer-le-RaspberryPi"><a class="Link9" href="#Yocto">Démarrer le RaspberryPi</a></h2><br><h3 class="Title8 GTitle3">Insérer la carte SD dans le RaspberryPi</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Insérer -&gt; Carte SD -&gt; RaspberryPi</pre></div></div><br><h3 class="Title8 GTitle3">Mettre le RaspberryPi sous tension</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Mettre -&gt; RaspberryPi -&gt; sous tension</pre></div></div><br><h3 class="Title8 GTitle3">Saisir le login par défaut</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Login -&gt; root</pre></div></div><br><h3 class="Title8 GTitle3">Saisir le mot de passe par défaut</h3><br>Il n'y a aucun mot de passe par défaut<br><br><h2 class="Title7 GTitle2" id="Yocto-Configurer-le-module-UART-sous-Yocto"><a class="Link9" href="#Yocto">Configurer le module UART sous Yocto</a></h2><br>Un <b>UART</b>, pour Universal Asynchronous Receiver Transmitter, est un émetteur-récepteur asynchrone universel. C'est le composant utilisé pour faire la liaison entre l'ordinateur et le port série. L'ordinateur envoie les données en parallèle (autant de fils que de bits de données). Il faut donc transformer ces données pour les faire passer à travers une liaison série qui utilise un seul fil pour faire passer tous les bits de données. Il envoie les bits de données un par un, du moins significatif au plus significatif, encadré par des bits de démarrage et d'arrêt de sorte qu'une synchronisation précise soit gérée par le canal de communication. Deux niveaux de signal sont couramment utilisés, RS-232 , sur un système 12 volts , et RS-485 , sur un système 5 volts.<br><br><h3 class="Title8 GTitle3">Configurer le module UART</h3><br><span class="GColor1" style="color:lime;">build-rpi/conf/local.conf</span><br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">MACHINE ??= "raspberrypi4-64"
DISTRO ?= "poky"
PACKAGE_CLASSES ?= "package_rpm"
EXTRA_IMAGE_FEATURES ?= "debug-tweaks"
USER_CLASSES ?= "buildstats image-mklibs image-prelink"
PATCHRESOLVE = "noop"

BB_DISKMON_DIRS ??= "\
    STOPTASKS,${TMPDIR},1G,100K \
    STOPTASKS,${DL_DIR},1G,100K \
    STOPTASKS,${SSTATE_DIR},1G,100K \
    STOPTASKS,/tmp,100M,100K \
    ABORT,${TMPDIR},100M,1K \
    ABORT,${DL_DIR},100M,1K \
    ABORT,${SSTATE_DIR},100M,1K \
    ABORT,/tmp,10M,1K"
    
PACKAGECONFIG_append_pn-qemu-system-native = " sdl"
CONF_VERSION = "1"

ENABLE_UART = "1"</pre></div></div><br><h3 class="Title8 GTitle3">Générer l'image Linux embarqué</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">bitbake core-image-base</pre></div></div><br><h2 class="Title7 GTitle2" id="Yocto-Configurer-le-mot-de-passe-de-l-utilisateur-root-sous-Yocto"><a class="Link9" href="#Yocto">Configurer le mot de passe de l'utilisateur root sous Yocto</a></h2><br><h3 class="Title8 GTitle3">Configurer le mot de passe de l'utilisateur root<br></h3><br><span class="GColor1" style="color:lime;">build-rpi/conf/local.conf</span><br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">MACHINE ??= "raspberrypi4-64"
DISTRO ?= "poky"
PACKAGE_CLASSES ?= "package_rpm"
EXTRA_IMAGE_FEATURES ?= "debug-tweaks"
USER_CLASSES ?= "buildstats image-mklibs image-prelink"
PATCHRESOLVE = "noop"

BB_DISKMON_DIRS ??= "\
    STOPTASKS,${TMPDIR},1G,100K \
    STOPTASKS,${DL_DIR},1G,100K \
    STOPTASKS,${SSTATE_DIR},1G,100K \
    STOPTASKS,/tmp,100M,100K \
    ABORT,${TMPDIR},100M,1K \
    ABORT,${DL_DIR},100M,1K \
    ABORT,${SSTATE_DIR},100M,1K \
    ABORT,/tmp,10M,1K"
    
PACKAGECONFIG_append_pn-qemu-system-native = " sdl"
CONF_VERSION = "1"

INHERIT += " extrausers"
EXTRA_USERS_PARAMS += " usermod -P '******' root;"</pre></div></div><br><h3 class="Title8 GTitle3">Générer l'image Linux embarqué</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">bitbake core-image-base</pre></div></div><br><h2 class="Title7 GTitle2" id="Yocto-Configurer-un-utilisateur-invite-sous-Yocto"><a class="Link9" href="#Yocto">Configurer un utilisateur invité sous Yocto</a></h2><br><h3 class="Title8 GTitle3">Configurer un utilisateur invité<br></h3><br><span class="GColor1" style="color:lime;">build-rpi/conf/local.conf</span><br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">MACHINE ??= "raspberrypi4-64"
DISTRO ?= "poky"
PACKAGE_CLASSES ?= "package_rpm"
EXTRA_IMAGE_FEATURES ?= "debug-tweaks"
USER_CLASSES ?= "buildstats image-mklibs image-prelink"
PATCHRESOLVE = "noop"

BB_DISKMON_DIRS ??= "\
    STOPTASKS,${TMPDIR},1G,100K \
    STOPTASKS,${DL_DIR},1G,100K \
    STOPTASKS,${SSTATE_DIR},1G,100K \
    STOPTASKS,/tmp,100M,100K \
    ABORT,${TMPDIR},100M,1K \
    ABORT,${DL_DIR},100M,1K \
    ABORT,${SSTATE_DIR},100M,1K \
    ABORT,/tmp,10M,1K"
    
PACKAGECONFIG_append_pn-qemu-system-native = " sdl"
CONF_VERSION = "1"

INHERIT += " extrausers"
EXTRA_USERS_PARAMS += " useradd -P '******' gkesse;"</pre></div></div><br><h3 class="Title8 GTitle3">Générer l'image Linux embarqué</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">bitbake core-image-base</pre></div></div><br><h2 class="Title7 GTitle2" id="Yocto-Configurer-le-module-WiFi-sous-Yocto"><a class="Link9" href="#Yocto">Configurer le module WiFi sous Yocto</a></h2><br><b>Wi-Fi</b> est un ensemble de protocoles de communication sans fil régis par les normes du groupe IEEE 802.11 (ISO/CEI 8802-11). Un réseau Wi-Fi permet de relier par ondes radio plusieurs appareils informatiques (ordinateur, routeur, smartphone, modem Internet, etc.) au sein d'un réseau informatique afin de permettre la transmission de données entre eux.<br><br><h3 class="Title8 GTitle3">Configurer le module WiFi</h3><br><span class="GColor1" style="color:lime;">build-rpi/conf/local.conf</span><br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">MACHINE ??= "raspberrypi4-64"
DISTRO ?= "poky"
PACKAGE_CLASSES ?= "package_rpm"
EXTRA_IMAGE_FEATURES ?= "debug-tweaks"
USER_CLASSES ?= "buildstats image-mklibs image-prelink"
PATCHRESOLVE = "noop"

BB_DISKMON_DIRS ??= "\
    STOPTASKS,${TMPDIR},1G,100K \
    STOPTASKS,${DL_DIR},1G,100K \
    STOPTASKS,${SSTATE_DIR},1G,100K \
    STOPTASKS,/tmp,100M,100K \
    ABORT,${TMPDIR},100M,1K \
    ABORT,${DL_DIR},100M,1K \
    ABORT,${SSTATE_DIR},100M,1K \
    ABORT,/tmp,10M,1K"
    
PACKAGECONFIG_append_pn-qemu-system-native = " sdl"
CONF_VERSION = "1"

DISTRO_FEATURES_append = " bluez5 bluetooth wifi"
IMAGE_INSTALL_append = " linux-firmware-bcm43430 bluez5 i2c-tools python-smbus bridge-utils hostapd dhcp-server iptables wpa-supplicant"</pre></div></div><br><h3 class="Title8 GTitle3">Configurer les couches réseau</h3><br><span class="GColor1" style="color:lime;">build-rpi/conf/bblayers.conf</span><br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">POKY_BBLAYERS_CONF_VERSION = "2"

BBPATH = "${TOPDIR}"
BBFILES ?= ""

BBLAYERS ?= " \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-poky \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-yocto-bsp \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-raspberrypi \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-openembedded/meta-oe \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-openembedded/meta-python \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-openembedded/meta-networking \
  "</pre></div></div><br><h3 class="Title8 GTitle3">Générer l'image Linux embarqué</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">bitbake core-image-base</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'image Linux embarqué</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">tmp/deploy/images/raspberrypi4/core-image-minimal-raspberrypi4.rpi-sdimg</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Buildroot"><a class="Link3" href="#">Buildroot</a></h1><div class="Body3"><br><b>Buildroot </b>est un ensemble de Makefiles et de correctifs qui simplifie et automatise le processus de création d'un environnement Linux complet et amorçable pour un système embarqué , tout en utilisant la compilation croisée pour permettre la construction de plusieurs plates-formes cibles sur un seul système de développement basé sur Linux.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619395596885"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619395596885");</script></div><br><h2 class="Title7 GTitle2" id="Buildroot-Generer-une-image-Linux-embarque-sous-Ubuntu"><a class="Link9" href="#Buildroot">Générer une image Linux embarqué sous Ubuntu</a></h2><br><b>Linux embarqué</b> (en anglais Embedded Linux) désigne un système d'exploitation dérivé de Linux et adapté à un système embarqué. Il existe de nombreuses versions de Linux embarqués adaptés à différents types de matériels (téléphones portables, set-top boxes, boitiers Internet (ADSL, Fibre ...), dispositifs lecteurs multimédia sur TV, etc). Contrairement aux versions de Linux destinées aux ordinateurs personnels et aux serveurs, les différents systèmes Linux embarqués sont conçus pour des systèmes aux ressources limitées. Les systèmes embarqués sous Linux disposent généralement de peu de RAM et utilisent fréquemment de la mémoire flash plutôt qu'un disque dur. Comme ils sont souvent dédiés à un nombre de tâches réduites sur une cible matérielle bien définie, ils utilisent plutôt des versions du noyau Linux optimisées pour des contextes précis. Les distributions Linux destinées à l'embarqué disposent souvent d'un noyau temps réel.<br><br><h3 class="Title8 GTitle3">Télécharger Buildroot</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">wget https://buildroot.org/downloads/buildroot-2021.02.1.tar.gz</pre></div></div><br><h3 class="Title8 GTitle3">Extraire Buildroot</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">tar xzfv buildroot-2021.02.1.tar.gz</pre></div></div><br><h3 class="Title8 GTitle3">Lister les machines</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">cd buildroot-2021.02.1
ls -l configs</pre></div></div><br><h3 class="Title8 GTitle3">Générer la configuration par défaut</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">make raspberrypi4_64_defconfig</pre></div></div><br><h3 class="Title8 GTitle3">Générer l'image Linux embarqué</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">make</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'image Linux embarqué</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">output/images/sdcard.img</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Graver-l-image-Linux-embarque-sur-une-carte-SD-sous-Ubuntu"><a class="Link9" href="#Buildroot">Graver l'image Linux embarqué sur une carte SD sous Ubuntu</a></h2><br>Une <b>carte SD</b> (« SD » étant le sigle de l'expression anglaise « Secure Digital ») est une carte mémoire amovible de stockage de données numériques créée en janvier 2000 par une alliance formée entre les industriels Panasonic, SanDisk et Toshiba. Les cartes SD sont utilisées pour le stockage de fichiers dans les appareils photo numériques, les caméscopes numériques, les systèmes de navigation GPS, les consoles de jeux vidéo, les téléphones mobiles dont les smartphones, ou encore les systèmes embarqués.<br><br><h3 class="Title8 GTitle3">Vérifier l'image Linux embarqué</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">output/images/sdcard.img</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier les périphériques de stockage actuellement connectés</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">lsblk -p</pre></div></div><br><h3 class="Title8 GTitle3">Connecter la carte SD au système</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Connecter -&gt; Carte SD -&gt; Système</pre></div></div><br><h3 class="Title8 GTitle3">Détecter le nom de la carte SD</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">lsblk -p</pre></div></div><br><h3 class="Title8 GTitle3">Démonter la carte SD du système</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">umount /dev/sda?</pre></div></div><br><h3 class="Title8 GTitle3">Graver l'image Linux embarqué sur la carte SD</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo dd if=output/images/sdcard.img of=/dev/sda</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Demarrer-le-RaspberryPi"><a class="Link9" href="#Buildroot">Démarrer le RaspberryPi</a></h2><br><h3 class="Title8 GTitle3">Insérer la carte SD dans le RaspberryPi</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Insérer -&gt; Carte SD -&gt; RaspberryPi</pre></div></div><br><h3 class="Title8 GTitle3">Mettre le RaspberryPi sous tension</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Mettre -&gt; RaspberryPi -&gt; sous tension</pre></div></div><br><h3 class="Title8 GTitle3">Saisir le login par défaut</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Login -&gt; root</pre></div></div><br><h3 class="Title8 GTitle3">Saisir le mot de passe par défaut</h3><br>Il n'y a aucun mot de passe par défaut<br><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-l-architecture-materielle-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer l'architecture matérielle sous Buildroot</a></h2><br><b>AArch64 </b>ou ARM64 est l'extension 64 bits de l'architecture ARM. Pour exécuter un binaire aarch64 il faut donc un processeur ARM de la famille ARMv8 qui supporte les instructions 64 bits et une distribution Linux qui soit prévue pour fonctionner en 64 bits sur ce type de processeur.<br><br><h3 class="Title8 GTitle3">Configurer l'architecture matérielle</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target options
    Target Architecture
        AArch64 (little endian)</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-format-du-fichier-executable-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le format du fichier executable sous Buildroot</a></h2><br><b>ELF </b>est un format de fichier binaire utilisé pour l'enregistrement de code compilé (objets, exécutables, bibliothèques de fonctions). Il a été développé par l’USL (Unix System Laboratories) pour remplacer les anciens formats a.out et COFF qui avait atteint leurs limites. Aujourd'hui, ce format est utilisé dans la plupart des systèmes d'exploitation de type Unix (GNU / Linux, Solaris, IRIX, System V, BSD), à l'exception de Mac OS X.<br><br><h3 class="Title8 GTitle3">Configurer le format du fichier executable</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target options
    Target Binary Format
        ELF</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-la-variante-de-processeur-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer la variante de processeur sous Buildroot</a></h2><br>L'ARM <b>Cortex-A72</b> est un processeur de la famille des ARMv8, 64 bits, proposé par ARM, à la suite des ARM Cortex-A50, en février 2015. Il est présenté comme 3,5 fois plus rapide que l'ARM Cortex-A15, doit être gravé en technologie 16 nm FinFET+, utilise comme les Cortex-A50 un bus CCI-500 et pourra être couplé à un processeur graphique Mali-T880. D'après ARM, une dizaine de ses clients prévoient, lors de l'annonce, développer ce processeur, parmi lesquels HiSilicon (marque des semi-conducteurs de Huawei), MediaTek ou encore Rockchip. À la mi-2019, le Raspberry Pi 4, comporte 4 Cortex-A72 à 1,5 GHz, tandis-que NXP propose une station de travail dont le SoC comporte 16 cœurs Cortex-A72 et supportant 64 Go de RAM (NXP Layerscape LX2160A).<br><br><h3 class="Title8 GTitle3">Configurer la variante de processeur</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target options
    Target Architecture Variant
        cortex-A72</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-format-de-la-virgule-flottante-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le format de la virgule flottante sous Buildroot</a></h2><br>	Une extension facultative des jeux d'instructions Arm, Thumb et ThumbEE dans les profils Armv7-A et Armv7-R. VFPv4U est une variante de <b>VFPv4 </b>qui prend en charge le recouvrement des exceptions à virgule flottante pour prendre en charge le code. VFPv4 et VFPv4U ajoutent à la fois l'extension demi-précision et les instructions d'ajout multiple fusionnées aux fonctionnalités de VFPv3. VFPv4 peut être implémenté avec 32 ou 16 registres de mots doubles.<br><br><h3 class="Title8 GTitle3">Configurer le format de la virgule flottante</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target options
    Floating point strategy
        VFPv4</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-fichier-de-sauvegarde-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le fichier de sauvegarde sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer le fichier de sauvegarde</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Build options
    Location to save buildroot config
        buildroot-2021.02.1/configs/raspberrypi4_64_defconfig</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-repertoire-de-telechargement-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le répertoire de téléchargement sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer le répertoire de téléchargement</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Build options
    Download dir
        $(TOPDIR)/dl</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-repertoire-machine-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le répertoire machine sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer le répertoire machine</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Build options
    Host dir
        $(BASE_DIR)/host</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-cache-de-compilation-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le cache de compilation sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer le cache de compilation</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Build options
    [*] Enable compiler cache</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-la-chaine-de-compilation-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer la chaine de compilation sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer la chaine de compilation</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Toolchain
    Toolchain type
        Buildroot toolchain</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-la-librairie-C-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer la librairie C sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer la librairie C</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Toolchain
    C library
        glibc</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-support-C---sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le support C++ sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer le support C++</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Toolchain
     [*] Enable C++ support</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-nom-de-la-machine-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le nom de la machine sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer le nom de la machine</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">System configuration
    System hostname
        buildroot_rpi4</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-message-d-accueil-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le message d'accueil sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Configurer le message d'accueil</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">System configuration
    System banner
        Welcome to Buildroot_RPI4</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-la-boite-a-outil-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer la boîte à outil sous Buildroot</a></h2><br><b>BusyBox </b>est un logiciel qui implémente un grand nombre des commandes standard sous Unix, à l'instar des GNU Core Utilities. Comme chaque fichier binaire exécutable pour GNU/Linux, il comporte plusieurs kilooctets d'informations additionnelles; l'idée de combiner plus de deux cents programmes en un seul fichier exécutable permet de diminuer la taille de manière considérable. Distribué sous la licence GNU GPL version 2, BusyBox est un logiciel libre.<br><br><h3 class="Title8 GTitle3">Configurer la boîte à outil</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">System configuration
Init system
BusyBox</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-mot-de-passe-root-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le mot de passe root sous Buildroot</a></h2><br><h3 class="Title8 GTitle3">Activer le mot de passe root</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">System configuration
    [*] Enable root login with password</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le mot de passe root</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">System configuration
    Root password
        superadmin</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-shell-par-defaut-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le shell par defaut sous Buildroot</a></h2><br><b>Bash </b>(acronyme de Bourne-Again shell) est un interpréteur en ligne de commande de type script. C'est le shell Unix du projet GNU. Fondé sur le Bourne shell, Bash lui apporte de nombreuses améliorations, provenant notamment du Korn shell et du C shell. Bash est un logiciel libre publié sous licence publique générale GNU. Il est l'interprète par défaut sur de nombreux Unix libres, notamment sur les systèmes GNU/Linux. C'était aussi le shell par défaut de Mac OS X, remplacé avec macOS Catalina (10.15) par zsh. Il a été d'abord porté sous Microsoft Windows par le projet Cygwin, et depuis Windows 10 constitue une option à part entière, nommée Windows Subsystem for Linux du système d'exploitation.<br><br><h3 class="Title8 GTitle3">Configurer la boîte à outils</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">System configuration
Init system
BusyBox</pre></div></div><br><h3 class="Title8 GTitle3">Activer l'affichage du contenu de la boîte à outils</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target packages
    [*]   Show packages that are also provided by busybox</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le shell par défaut</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">System configuration
    /bin/sh
        bash</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-timezone-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le timezone sous Buildroot</a></h2><br>Un <b>fuseau horaire </b>est une zone de la surface terrestre qui observe une heure uniforme en tout lieu. Pour des raisons pratiques, ces fuseaux ont tendance à suivre les frontières des pays ou de leurs subdivisions. Généralement, ils diffèrent du temps universel coordonné d'un nombre d'heures entiers, mais quelques-uns sont décalés de 30 ou 45 minutes. Aux latitudes élevées, certains pays font en plus usage d'une heure d'été pendant une partie de l'année, modifiant ainsi leur fuseau horaire.<br><br><h3 class="Title8 GTitle3">Configurer le timezone</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">System configuration
    [*] Install timezone info</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-noyau-Linux-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le noyau Linux sous Buildroot</a></h2><br>Le <b>noyau Linux</b> est un noyau de système d'exploitation de type UNIX. Il est utilisé dans plusieurs systèmes d'exploitation dont notamment GNU/Linux (couramment appelé « Linux ») et Android. Le noyau Linux est un logiciel partiellement libre (contenant des BLOB et des modules non-libre - consultez Linux-libre) développé essentiellement en langage C par des milliers de bénévoles et salariés collaborant sur Internet. <span class="GColor1" style="color:lime;">Le noyau est le cœur du système</span>, c'est lui qui s'occupe de fournir aux logiciels une interface de programmation pour utiliser le matériel. Le noyau Linux a été créé en 1991 par Linus Torvalds pour les compatibles PC. Initialement conçu pour l'architecture de processeur x86, il a ensuite été porté sur de nombreuses autres, dont m68k, PowerPC, ARM, SPARC, MIPS et RISC-V. Il s'utilise dans une très large gamme de matériel, des systèmes embarqués aux superordinateurs, en passant par les téléphones mobiles et ordinateurs personnels.<br><br><h3 class="Title8 GTitle3">Activer le noyau Linux</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Kernel
    [*] Linux Kernel</pre></div></div><br><h3 class="Title8 GTitle3">Définir la version du noyau Linux</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Kernel
    Kernel version
        Custom Git repository</pre></div></div><br><h3 class="Title8 GTitle3">Définir l'URL du noyau Linux</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Kernel
    URL of custom repository
        https://github.com/raspberrypi/linux.git</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-systeme-de-fichier-image-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le système de fichier image sous Buildroot</a></h2><br>Le terme <b>système de fichiers</b> (abrégé « FS » pour File System, parfois filesystem en anglais) désigne de façon ambigüe : soit l'organisation hiérarchique des fichiers au sein d'un système d'exploitation (on parle par exemple du file system d'une machine unix organisé à partir de sa racine (/)), soit l'organisation des fichiers au sein d'un volume physique ou logique, qui peut être de différents types (par exemple NTFS, FAT, FAT32, ext2fs, ext3fs, ext4fs, zfs, btrfs, etc.), et qui a également une racine mais peut en avoir plusieurs. De façon générale, un système de fichiers ou système de gestion de fichiers (SGF) est une façon de stocker les informations et de les organiser dans des fichiers sur ce que l'on appelle, en génie logiciel, des mémoires secondaires (pour le matériel informatique, il s'agit de mémoire de masse comme un disque dur, un disque SSD, un CD-ROM, une clé USB, une disquette, etc.). <br><br><h3 class="Title8 GTitle3">Configurer le système de fichier image</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Filesystem images
    [*] ext2/3/4 root filesystem
        ext2/3/4 variant
            ext4</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-chargeur-de-demarrage-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le chargeur de démarrage sous Buildroot</a></h2><br><b>U-Boot</b> (de l'anglais « Universal-Boot », signifiant « Démarrage universel ») est un logiciel libre, utilisé comme chargeur d'amorçage, surtout sur les systèmes embarqués. Il est destiné à remplacer le BIOS et l'UEFI. Il est notamment utilisé au sein de SpaceX pour leurs fusées Falcon et capsule spatial Dragon. U-boot possède un grand nombre de fonctionnalités : gestion du port série ; pile protocolaire usb ; avec prise en charge des claviers et stockage de masse ; gestion du réseau, avec possibilité de charger des images depuis le réseau ; chargement avec ramdisk ; device tree. Le chargeur d'amorçage Barebox est dérivé d'U-Boot version 2.<br><br><h3 class="Title8 GTitle3">Configurer le chargeur de démarrage</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Bootloaders
    Build system
        Kconfig
    U-Boot Version
        Custom Git repository
    URL of custom repository
        https://github.com/u-boot/u-boot.git
    Custom repository version
        rpi</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-serveur-ssh-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le serveur ssh sous Buildroot</a></h2><br>Le protocole Secure Shell (<b>SSH</b>) est un protocole de réseau cryptographique permettant d'exploiter les services réseau en toute sécurité sur un réseau non sécurisé. Les applications typiques incluent la ligne de commande à distance , la connexion et l'exécution de commande à distance, mais tout service réseau peut être sécurisé avec SSH. SSH fournit un canal sécurisé sur un réseau non sécurisé en utilisant une architecture client-serveur , connectant une application client SSH à un serveur SSH . La spécification du protocole distingue deux versions principales, appelées SSH-1 et SSH-2. Le port TCP standard pour SSH est 22. SSH est généralement utilisé pour accéder aux systèmes d' exploitation de type Unix, mais il peut également être utilisé sur Microsoft Windows.<br><br><h3 class="Title8 GTitle3">Configurer le serveur ssh</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target packages
    Networking applications
        [*] openssh
            [*]   client
            [*]   server
            [*]   key utilities</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-serveur-x11-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le serveur x11 sous Buildroot</a></h2><br>X Window, <b>X11 </b>ou simplement X est un protocole de système de fenêtrage qui gère l'écran, la souris et également le clavier. Il est souvent appelé X Window (sans s, à ne pas confondre avec Windows avec un s). C'est le système standard ouvert d'interaction graphique avec l'utilisateur sur les UNIX (Linux, BSD, etc.). Le serveur X est optionnel sur macOS (qui utilise nativement Quartz). Il est possible d'installer un serveur X sur la plupart des systèmes d'exploitation, dont Windows1. On dit communément d'une application qu'elle tourne sous X lorsqu'elle est conçue pour l'environnement X. X est actuellement dirigé par la Fondation X.Org, avec son implémentation actuelle : X.Org. <br><br><h3 class="Title8 GTitle3">Configurer le serveur x11</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target packages
    Graphic libraries and applications (graphic/text)
        [*] X.org X Window System
            X11R7 Servers
                [*] xorg-server
                    X Window System server type
                        Modular X.org
            X11R7 Applications
                [*] xinit 
            X11R7 Drivers
                [*] xf86-input-keyboard
                [*] xf86-input-mouse
                [*] xf86-input-synaptics
                [*] xf86-video-fbdev
                [*] xf86-video-fbturbo</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-module-OpenGL-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le module OpenGL sous Buildroot</a></h2><br><b>OpenGL </b>(Open Graphics Library) est un ensemble normalisé de fonctions de calcul d'images 2D ou 3D lancé par Silicon Graphics en 1992. Cette interface de programmation est disponible sur de nombreuses plateformes où elle est utilisée pour des applications qui vont du jeu vidéo jusqu'à la CAO en passant par la modélisation. OpenGL permet à un programme de déclarer la géométrie d'objets sous forme de points, de vecteurs, de polygones, de bitmaps et de textures. OpenGL effectue ensuite des calculs de projection en vue de déterminer l'image à l'écran, en tenant compte de la distance, de l'orientation, des ombres, de la transparence et du cadrage.<br><br><h3 class="Title8 GTitle3">Configurer le module OpenGL</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target packages
    Graphic libraries and applications (graphic/text)
        [*] mesa3d
            [*]   Gallium vc4 driver
            [*]   DRI swrast driver
            [*]   OpenGL GLX
            [*]   OpenGL ES</pre></div></div><br><h2 class="Title7 GTitle2" id="Buildroot-Configurer-le-module-Qt-sous-Buildroot"><a class="Link9" href="#Buildroot">Configurer le module Qt sous Buildroot</a></h2><br><b>Qt&nbsp; </b>est une API orientée objet et développée en C++, conjointement par The Qt Company et Qt Project. Qt offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc. ; Par certains aspects, elle ressemble à un framework lorsqu'on l'utilise pour concevoir des interfaces graphiques ou que l'on conçoit l'architecture de son application en utilisant les mécanismes des signaux et slots par exemple. Qt permet la portabilité des applications qui n'utilisent que ses composants par simple recompilation du code source. Les environnements pris en charge sont les Unix (dont GNU/Linux) qui utilisent le système graphique X Window System ou Wayland, Windows, Mac OS X, Tizen et également Genode. Le fait d'être une bibliothèque logicielle multiplateforme attire un grand nombre de personnes qui ont donc l'occasion de diffuser leurs programmes sur les principaux OS existants. Qt intègre des bindings avec plus d'une dizaine de langages autres que le C++, comme Ada, C#, Java, Python, Ruby, Visual Basic, etc.<br><br><h3 class="Title8 GTitle3">Configurer le module widgets</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Target packages
    Graphic libraries and applications (graphic/text)
        [*] Qt5
            [*]     gui module
                [*]       widgets module</pre></div></div><br></div></div></div></div><br>
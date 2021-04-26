<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec le RaspberryPi</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec le <b>RaspberryPi</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>RaspberryPi </b>est un&nbsp; mini PC embarqué à processeur ARM permettant l'exécution de plusieurs variantes du système d'exploitation libre GNU/Linux, notamment Debian, et des logiciels compatibles. Il fonctionne aussi avec le système d'exploitation Microsoft Windows : Windows 10 IoT Core, Windows 10 on ARM, celui de Google Android Pi et même une version de l'OS/MVT d'IBM accompagnée du système APL\360. Le Raspberry Pi dispose de pins GPIO qui permettent la connexion de cartes d'extension ou d'autres composants électroniques pour réaliser des montages. <br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/RaspberryPi/img/b_rpi.png" alt="/Tutoriels/Embedded_System/RaspberryPi/img/b_rpi.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement RaspberryPi.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619311315651"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619311315651");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Préparation de la carte SD"><a class="Link9" href="#Installation">1 - Préparation de la carte SD</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Préparation sous Windows"><a class="Link9" href="#Installation">1.1 - Préparation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Préparation sous RaspberryPi Imager"><a class="Link9" href="#Installation">1.1.1 - Préparation sous RaspberryPi Imager</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.1 - Télécharger RaspberryPi Imager"><a class="Link9" href="#Installation">1.1.1.1 - Télécharger RaspberryPi Imager</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.raspberrypi.org/software/">https://www.raspberrypi.org/software/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/imager/">https://downloads.raspberrypi.org/imager/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/imager/imager_1.6.1.exe">https://downloads.raspberrypi.org/imager/imager_1.6.1.exe</a><br><br><b>imager_1.6.1.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.2 - Installer RaspberryPi Imager"><a class="Link9" href="#Installation">1.1.1.2 - Installer RaspberryPi Imager</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">imager_1.6.1.exe
Install
Finish</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.3 - Démarrer RaspberryPi Imager"><a class="Link9" href="#Installation">1.1.1.3 - Démarrer RaspberryPi Imager</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
RaspberryPi Imager</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4 - Configurer le système d'exploitation"><a class="Link9" href="#Installation">1.1.1.4 - Configurer le système d'exploitation</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.1 - Configurer une image prédéfinie"><a class="Link9" href="#Installation">1.1.1.4.1 - Configurer une image prédéfinie</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.1.1 - Configurer Raspbian Lite"><a class="Link9" href="#Installation">1.1.1.4.1.1 - Configurer Raspbian Lite</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Raspberry Pi Imager
Système d'exploitation
Choisissez l'OS
Raspberry Pi OS (other)
Raspberry Pi OS Lite (32-bit)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2 - Configurer une image personnalisée"><a class="Link9" href="#Installation">1.1.1.4.2 - Configurer une image personnalisée</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2.1 - Configurer Raspbian Lite"><a class="Link9" href="#Installation">1.1.1.4.2.1 - Configurer Raspbian Lite</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2.1.1 - Télécharger Raspbian Lite"><a class="Link9" href="#Installation">1.1.1.4.2.1.1 - Télécharger Raspbian Lite</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.raspberrypi.org/software/operating-systems/">https://www.raspberrypi.org/software/operating-systems/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-03-25/">https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-03-25/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-03-25/2021-03-04-raspios-buster-armhf-lite.zip">https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-03-25/2021-03-04-raspios-buster-armhf-lite.zip</a><br><br><b>2021-03-04-raspios-buster-armhf-lite.zip</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2.1.2 - Extraire Raspbian Lite"><a class="Link9" href="#Installation">1.1.1.4.2.1.2 - Extraire Raspbian Lite</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Extraire -&gt; 2021-03-04-raspios-buster-armhf-lite.zip</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2.1.3 - Configurer Raspbian Lite"><a class="Link9" href="#Installation">1.1.1.4.2.1.3 - Configurer Raspbian Lite</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Raspberry Pi Imager
Système d'exploitation
Choisissez l'OS
Utiliser une image personnalisée
2021-03-04-raspios-buster-armhf-lite.img</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2.2 - Configurer Ubuntu Desktop"><a class="Link9" href="#Installation">1.1.1.4.2.2 - Configurer Ubuntu Desktop</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2.2.1 - Télécharger Ubuntu Desktop"><a class="Link9" href="#Installation">1.1.1.4.2.2.1 - Télécharger Ubuntu Desktop</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://cdimage.ubuntu.com/releases/20.10/release/">https://cdimage.ubuntu.com/releases/20.10/release/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://cdimage.ubuntu.com/releases/20.10/release/ubuntu-20.10-preinstalled-desktop-arm64+raspi.img.xz">https://cdimage.ubuntu.com/releases/20.10/release/ubuntu-20.10-preinstalled-desktop-arm64+raspi.img.xz</a><br><br><b>ubuntu-20.10-preinstalled-desktop-arm64+raspi.img.xz</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2.2.2 - Extraire Ubuntu Desktop"><a class="Link9" href="#Installation">1.1.1.4.2.2.2 - Extraire Ubuntu Desktop</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Extraire -&gt; ubuntu-20.10-preinstalled-desktop-arm64+raspi.img.xz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.4.2.2.3 - Configurer Ubuntu Desktop"><a class="Link9" href="#Installation">1.1.1.4.2.2.3 - Configurer Ubuntu Desktop</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Raspberry Pi Imager
Système d'exploitation
Choisissez l'OS
Utiliser une image personnalisée
ubuntu-20.10-preinstalled-desktop-arm64+raspi.img</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.5 - Configurer la carte SD"><a class="Link9" href="#Installation">1.1.1.5 - Configurer la carte SD</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">RaspberryPi Imager
Carte SD
Choisissez la Carte SD
Mass Storage device USB Device - 127.9 GB</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.1.6 - Graver l'image sur la carte SD"><a class="Link9" href="#Installation">1.1.1.6 - Graver l'image sur la carte SD</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">RaspberryPi Imager
Écrire
Continuer ? -&gt; Oui
Retirer la carte -&gt; Continuer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-2 - Démarrage du RaspberryPi"><a class="Link9" href="#Installation">2 - Démarrage du RaspberryPi</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Insérer la carte SD dans le RaspberryPi
Mettre le RaspberryPi sous Tension
Suivre les instructions
Configurer le système d'exploitation</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Utilisateur  (Par défaut) -&gt; pi
Mot de passe (Par défaut) -&gt; raspberry</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-3 - Configuration du réseau"><a class="Link9" href="#Installation">3 - Configuration du réseau</a></h2><br><h2 class="Title7 GTitle2" id="Installation-3.1 - Configuration sous Raspbian"><a class="Link9" href="#Installation">3.1 - Configuration sous Raspbian</a></h2><br><h2 class="Title7 GTitle2" id="Installation-3.1.1 - Configuration des paramètres WiFi"><a class="Link9" href="#Installation">3.1.1 - Configuration des paramètres WiFi</a></h2><br><h2 class="Title7 GTitle2" id="Installation-3.1.1.1 - Configurer les paramètres WiFi"><a class="Link9" href="#Installation">3.1.1.1 - Configurer les paramètres WiFi</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo nano /etc/wpa_supplicant/wpa_supplicant.conf</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on definit le chemin du programme (wpa_supplicant)
# et on le protege en l'associant a un groupe (netdev)
ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
# on autorise la mise a jour du programme (1)
update_config=1
# on fixe le fuseau horaire du systeme 
# en definissant le code du pays ou il fonctionne (FR)
country=FR

# on definit la configuration reseau du systeme
network={
    # on definit le nom du reseau (ReadyDev)
    ssid="ReadyDev"
    # on definit le mot de passe du reseau
    psk="******"
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-3.1.1.2 - Redémarrer le RaspberryPi"><a class="Link9" href="#Installation">3.1.1.2 - Redémarrer le RaspberryPi</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo shutdown -r now</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-3.1.1.3 - Vérifier la connexion WiFi"><a class="Link9" href="#Installation">3.1.1.3 - Vérifier la connexion WiFi</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ip a s</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-4 - Mise à jour du système"><a class="Link9" href="#Installation">4 - Mise à jour du système</a></h2><br><h2 class="Title7 GTitle2" id="Installation-4.1 - Mise à jour sous Raspbian"><a class="Link9" href="#Installation">4.1 - Mise à jour sous Raspbian</a></h2><br><h2 class="Title7 GTitle2" id="Installation-4.1.1 - Mettre à jour le système"><a class="Link9" href="#Installation">4.1.1 - Mettre à jour le système</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt update
sudo apt full-upgrade
sudo apt dist-upgrade</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-4.2 - Mise à jour sous Ubuntu"><a class="Link9" href="#Installation">4.2 - Mise à jour sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Installation-4.2.1 - Mettre à jour le système"><a class="Link9" href="#Installation">4.2.1 - Mettre à jour le système</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt update
sudo apt upgrade</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-5 - Configuration de la connexion SSH"><a class="Link9" href="#Installation">5 - Configuration de la connexion SSH</a></h2><br><h2 class="Title7 GTitle2" id="Installation-5.1 - Configuration sous Ubuntu"><a class="Link9" href="#Installation">5.1 - Configuration sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Installation-5.1.1 - Installer le serveur SSH"><a class="Link9" href="#Installation">5.1.1 - Installer le serveur SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install openssh-server</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-5.1.2 - Démarrer le serveur SSH"><a class="Link9" href="#Installation">5.1.2 - Démarrer le serveur SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo systemctl start ssh</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-5.1.3 - Vérifier le serveur SSH"><a class="Link9" href="#Installation">5.1.3 - Vérifier le serveur SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo systemctl status ssh</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-6 - Démarrage de la connexion SSH"><a class="Link9" href="#Installation">6 - Démarrage de la connexion SSH</a></h2><br><h2 class="Title7 GTitle2" id="Installation-6.1 - Démarrage sous Windows"><a class="Link9" href="#Installation">6.1 - Démarrage sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-6.1.1 - Démarrage sous MobaXterm"><a class="Link9" href="#Installation">6.1.1 - Démarrage sous MobaXterm</a></h2><br><h2 class="Title7 GTitle2" id="Installation-6.1.1.1 - Créer la connexion SSH"><a class="Link9" href="#Installation">6.1.1.1 - Créer la connexion SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MobaXterm
Session
SSH

Basic SSH settings
Remote ssh -&gt; 192.168.1.45
Check -&gt; Specify username -&gt; pi

Bookmark settings
Session name -&gt; Ubuntu

OK</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-6.1.1.2 - Démarrer la connexion SSH"><a class="Link9" href="#Installation">6.1.1.2 - Démarrer la connexion SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MobaXterm
Sessions
Ubuntu
Double clic</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Yocto"><a class="Link3" href="#">Yocto</a></h1><div class="Body3"><br><b>Yocto </b>est un ensemble d'outils et de processus permettant la création de distributions Linux pour les logiciels embarqués et IoT, indépendamment de l'architecture sous-jacente du matériel embarqué.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619354920059"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619354920059");</script></div><br><h2 class="Title7 GTitle2" id="Yocto-1 - Génération d'une image Linux embarqué"><a class="Link9" href="#Yocto">1 - Génération d'une image Linux embarqué</a></h2><br><h2 class="Title7 GTitle2" id="Yocto-1.1 - Génération sous Ubuntu"><a class="Link9" href="#Yocto">1.1 - Génération sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Yocto-1.1.1 - Installer les dépendances"><a class="Link9" href="#Yocto">1.1.1 - Installer les dépendances</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install -y \
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
python3-pexpect \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Yocto-1.1.2 - Télécharger les sources"><a class="Link9" href="#Yocto">1.1.2 - Télécharger les sources</a></h2><br><h2 class="Title7 GTitle2" id="Yocto-1.1.2.1 - Télécharger la distribution de référence Poky"><a class="Link9" href="#Yocto">1.1.2.1 - Télécharger la distribution de référence Poky</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git clone -b dunfell git://git.yoctoproject.org/poky.git</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Yocto-1.1.2.2 - Télécharger la couche du RaspberryPi"><a class="Link9" href="#Yocto">1.1.2.2 - Télécharger la couche du RaspberryPi</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd poky/
git clone -b dunfell git://git.yoctoproject.org/meta-raspberrypi.git</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Yocto-1.1.3 - Lister les machines supportées"><a class="Link9" href="#Yocto">1.1.3 - Lister les machines supportées</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ls -l meta-raspberrypi/conf/machine/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">drwxrwxr-x 2 rpi4 rpi4 4096 mars  14 00:54 include
-rw-rw-r-- 1 rpi4 rpi4  300 mars  14 00:54 raspberrypi0.conf
-rw-rw-r-- 1 rpi4 rpi4  585 mars  14 00:54 raspberrypi0-wifi.conf
-rw-rw-r-- 1 rpi4 rpi4  342 mars  14 00:54 raspberrypi2.conf
-rw-rw-r-- 1 rpi4 rpi4 1022 mars  14 00:54 raspberrypi3-64.conf
-rw-rw-r-- 1 rpi4 rpi4  633 mars  14 00:54 raspberrypi3.conf
-rw-rw-r-- 1 rpi4 rpi4 1054 mars  14 00:54 raspberrypi4-64.conf
-rw-rw-r-- 1 rpi4 rpi4  595 mars  14 00:54 raspberrypi4.conf
-rw-rw-r-- 1 rpi4 rpi4  402 mars  14 00:54 raspberrypi-cm3.conf
-rw-rw-r-- 1 rpi4 rpi4  244 mars  14 00:54 raspberrypi-cm.conf
-rw-rw-r-- 1 rpi4 rpi4  364 mars  14 00:54 raspberrypi.conf</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Yocto-1.1.4 - Initialiser les variables d'environnement"><a class="Link9" href="#Yocto">1.1.4 - Initialiser les variables d'environnement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">. oe-init-build-env rpi-build</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Yocto-1.1.5 - Configurer la machine"><a class="Link9" href="#Yocto">1.1.5 - Configurer la machine</a></h2><br><h3 class="Title8 GTitle3">poky/conf/local.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on definit la machine cible
MACHINE ??= "raspberrypi4-64"
# configuration de base
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
CONF_VERSION = "1"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Yocto-1.1.6 - Configurer les couches"><a class="Link9" href="#Yocto">1.1.6 - Configurer les couches</a></h2><br><h3 class="Title8 GTitle3">poky/onf/bblayers.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># configuration de base
POKY_BBLAYERS_CONF_VERSION = "2"

BBPATH = "${TOPDIR}"
BBFILES ?= ""

# on ajoute la couche meta-raspberrypi
BBLAYERS ?= " \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-poky \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-yocto-bsp \
  /home/rpi4/Programs/ReadyRPI/app/yocto/poky/meta-raspberrypi \
  "</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Yocto-1.1.7 - Générer l'image"><a class="Link9" href="#Yocto">1.1.7 - Générer l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bitbake core-image-base</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># chemin de l'image générée
tmp/deploy/images/raspberrypi4/core-image-minimal-raspberrypi4.rpi-sdimg</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Yocto-2 - Gravure de l'image Linux embarqué"><a class="Link9" href="#Yocto">2 - Gravure de l'image Linux embarqué</a></h2><br><h2 class="Title7 GTitle2" id="Yocto-2.1 - Gravure sous Ubuntu"><a class="Link9" href="#Yocto">2.1 - Gravure sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Yocto-2.1.1 - Gravure sous dd"><a class="Link9" href="#Yocto">2.1.1 - Gravure sous dd</a></h2><br><h2 class="Title7 GTitle2" id="Yocto-2.1.1.1 - Graver l'image sur la carte SD"><a class="Link9" href="#Yocto">2.1.1.1 - Graver l'image sur la carte SD</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># chemin de l'image générée
tmp/deploy/images/raspberrypi4/core-image-minimal-raspberrypi4.rpi-sdimg</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on observe les périphériques de stockage montés
# en retirant la carte SD de la machine
# et en affichant les périphériques de stockage montés
lsblk -p
# on détecte la carte SD en la connectant sur la machine
# et en affichant les périphériques de stockage montés
lsblk -p
# on démonte la carte SD de la machine
umount /dev/sda*
# on grave l'image sur la carte SD
sudo dd if=core-image-minimal-raspberrypi4.rpi-sdimg of=/dev/sda</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Buildroot"><a class="Link3" href="#">Buildroot</a></h1><div class="Body3"><br><b>Buildroot </b>est un ensemble de Makefiles et de correctifs qui simplifie et automatise le processus de création d'un environnement Linux complet et amorçable pour un système embarqué , tout en utilisant la compilation croisée pour permettre la construction de plusieurs plates-formes cibles sur un seul système de développement basé sur Linux.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619395596885"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619395596885");</script></div><br><h2 class="Title7 GTitle2" id="Buildroot-1 - Génération d'une image Linux embarqué"><a class="Link9" href="#Buildroot">1 - Génération d'une image Linux embarqué</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1 - Génération sous Ubuntu"><a class="Link9" href="#Buildroot">1.1 - Génération sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.1 - Télécharger Buildroot"><a class="Link9" href="#Buildroot">1.1.1 - Télécharger Buildroot</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on telecharge buildroot
wget https://buildroot.org/downloads/buildroot-2021.02.1.tar.gz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.2 - Extraire Buildroot"><a class="Link9" href="#Buildroot">1.1.2 - Extraire Buildroot</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on extraire buildroot
tar xzfv buildroot-2021.02.1.tar.gz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.3 - Lister les machines"><a class="Link9" href="#Buildroot">1.1.3 - Lister les machines</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on liste les machines supportees
cd buildroot-2021.02.1
ls -l configs</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.4 - Générer la configuration par défaut"><a class="Link9" href="#Buildroot">1.1.4 - Générer la configuration par défaut</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on genere la configuration par defaut pour le raspberrypi
make raspberrypi4_64_defconfig</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5 - Personnaliser la configuration"><a class="Link9" href="#Buildroot">1.1.5 - Personnaliser la configuration</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on personnalise la configuration pour le raspberrypi
make menuconfig</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.1 - Configuration du materiel"><a class="Link9" href="#Buildroot">1.1.5.1 - Configuration du materiel</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.1.1 - Configuration de l'architecture"><a class="Link9" href="#Buildroot">1.1.5.1.1 - Configuration de l'architecture</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Target options
    Target Architecture
        AArch64 (little endian)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.1.2 - Configuration du fichier executable"><a class="Link9" href="#Buildroot">1.1.5.1.2 - Configuration du fichier executable</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Target options
    Target Binary Format
        ELF</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.1.3 - Configuration de la variante de processeur"><a class="Link9" href="#Buildroot">1.1.5.1.3 - Configuration de la variante de processeur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Target options
    Target Architecture Variant
        cortex-A72</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.1.4 - Configuration du format de la virgule flottante"><a class="Link9" href="#Buildroot">1.1.5.1.4 - Configuration du format de la virgule flottante</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Target options
    Floating point strategy
        VFPv4</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.2 - Configuration des options de construction"><a class="Link9" href="#Buildroot">1.1.5.2 - Configuration des options de construction</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.2.1 - Configuration du fichier de sauvegarde de buildroot"><a class="Link9" href="#Buildroot">1.1.5.2.1 - Configuration du fichier de sauvegarde de buildroot</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Build options
    Location to save buildroot config
        buildroot-2021.02.1/configs/raspberrypi4_64_defconfig</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.2.2 - Configuration du repertoire de téléchargement"><a class="Link9" href="#Buildroot">1.1.5.2.2 - Configuration du repertoire de téléchargement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Build options
    Download dir
        $(TOPDIR)/dl</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.2.3 - Configuration du repertoire machine"><a class="Link9" href="#Buildroot">1.1.5.2.3 - Configuration du repertoire machine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Build options
    Host dir
        $(BASE_DIR)/host</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.2.4 - Configuration du cache de compilation"><a class="Link9" href="#Buildroot">1.1.5.2.4 - Configuration du cache de compilation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Build options
    [*] Enable compiler cache</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.3 - Configuration de la chaine de compilation"><a class="Link9" href="#Buildroot">1.1.5.3 - Configuration de la chaine de compilation</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.3.1 - Configuration du type de la chaine de compilation"><a class="Link9" href="#Buildroot">1.1.5.3.1 - Configuration du type de la chaine de compilation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Toolchain
    Toolchain type
        Buildroot toolchain</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.3.2 - Configuration de la librairie C"><a class="Link9" href="#Buildroot">1.1.5.3.2 - Configuration de la librairie C</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Toolchain
    C library
        glibc</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.3.3 - Configuration du support C++"><a class="Link9" href="#Buildroot">1.1.5.3.3 - Configuration du support C++</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Toolchain
     [*] Enable C++ support</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4- Configuration du système"><a class="Link9" href="#Buildroot">1.1.5.4- Configuration du système</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.1 - Configuration du nom de la machine"><a class="Link9" href="#Buildroot">1.1.5.4.1 - Configuration du nom de la machine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">System configuration
    System hostname
        buildroot_rpi4</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.2 - Configuration du message d'accueil"><a class="Link9" href="#Buildroot">1.1.5.4.2 - Configuration du message d'accueil</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">System configuration
    System banner
        Welcome to Buildroot_RPI4</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.3 - Configuration du gestionnaire de commandes"><a class="Link9" href="#Buildroot">1.1.5.4.3 - Configuration du gestionnaire de commandes</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">System configuration
Init system
BusyBox</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.4 - Configuration du mot de passe root"><a class="Link9" href="#Buildroot">1.1.5.4.4 - Configuration du mot de passe root</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.4.1 - Activer le mot de passe root"><a class="Link9" href="#Buildroot">1.1.5.4.4.1 - Activer le mot de passe root</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">System configuration
    [*] Enable root login with password</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.4.2 - Configurer le mot de passe root"><a class="Link9" href="#Buildroot">1.1.5.4.4.2 - Configurer le mot de passe root</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">System configuration
    Root password
        superadmin</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.5 - Configuration du shell par defaut"><a class="Link9" href="#Buildroot">1.1.5.4.5 - Configuration du shell par defaut</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.5.1 - Définir le gestionnaire de commandes"><a class="Link9" href="#Buildroot">1.1.5.4.5.1 - Définir le gestionnaire de commandes</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">System configuration
Init system
BusyBox</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.5.2 - Activer l'affichage du contenu du gestionnaire"><a class="Link9" href="#Buildroot">1.1.5.4.5.2 - Activer l'affichage du contenu du gestionnaire</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Target packages
    [*]   Show packages that are also provided by busybox</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.5.3 - Sélectionner le shell par défaut"><a class="Link9" href="#Buildroot">1.1.5.4.5.3 - Sélectionner le shell par défaut</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">System configuration
    /bin/sh
        bash</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.4.6 - Configuration du timezone"><a class="Link9" href="#Buildroot">1.1.5.4.6 - Configuration du timezone</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">System configuration
    [*] Install timezone info</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.5 - Configuration du noyau Linux"><a class="Link9" href="#Buildroot">1.1.5.5 - Configuration du noyau Linux</a></h2><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.5.1 - Activer le noyau Linux"><a class="Link9" href="#Buildroot">1.1.5.5.1 - Activer le noyau Linux</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Kernel
    [*] Linux Kernel</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.5.2 - Définir la version du noyau Linux"><a class="Link9" href="#Buildroot">1.1.5.5.2 - Définir la version du noyau Linux</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Kernel
    Kernel version
        Custom Git repository</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Buildroot-1.1.5.5.3 - Définir l'URL du noyau Linux"><a class="Link9" href="#Buildroot">1.1.5.5.3 - Définir l'URL du noyau Linux</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Kernel
    URL of custom repository
        https://github.com/raspberrypi/linux.git</xmp></pre></div><br></div></div></div></div><br>
<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Configurations avec le RaspberryPi</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre les configurations avec le <b>RaspberryPi</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Un <b>système embarqué</b> est un système électronique et informatique autonome, souvent temps réel, spécialisé dans une tâche précise et dont les ressources sont généralement limitées spatialement (encombrement réduit) et énergétiquement (consommation restreinte).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/b_raspberrypi_configurations.png" alt="/Tutoriels/Embedded_System/img/b_raspberrypi_configurations.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module Yocto"><a class="Link3" href="#">Opérations sur le module Yocto</a></h1><div class="Body3"><br>Yocto est un outil permettant de construire des systèmes d'exploitation Linux embarqué.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614900631373"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614900631373");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1 - Créer une image RaspberryPi3 Qt5 avec Yocto"><a class="Link9" href="#Opérations sur le module Yocto">1 - Créer une image RaspberryPi3 Qt5 avec Yocto</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.1 - Identifiants osboxes sous VirtualBox."><a class="Link9" href="#Opérations sur le module Yocto">1.1 - Identifiants osboxes sous VirtualBox.</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Login -&gt; osboxes
Password -&gt; osboxes.org</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.2 - Désactiver la mise en veille prolongée sous Windows."><a class="Link9" href="#Opérations sur le module Yocto">1.2 - Désactiver la mise en veille prolongée sous Windows.</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
Choisir un mode de gestion d'alimentation
Choisir l'action des boutons d'alimentation
Modifier des paramètres actuellement non disponible
Décocher -&gt; Veille
Décocher -&gt; Veille prolongée
Enregistrer les modification</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.3 - Configurer le clavier sous Ubuntu"><a class="Link9" href="#Opérations sur le module Yocto">1.3 - Configurer le clavier sous Ubuntu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo setxkbmap fr</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.4 - Mettre à jour le système sous Ubuntu"><a class="Link9" href="#Opérations sur le module Yocto">1.4 - Mettre à jour le système sous Ubuntu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt update</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.5 - Installer le serveur ssh sous Ubuntu"><a class="Link9" href="#Opérations sur le module Yocto">1.5 - Installer le serveur ssh sous Ubuntu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install openssh-server</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reading package lists... Done
Building dependency tree
Reading state information... Done
openssh-server is already the newest version (1:7.2p2-4ubuntu2.10).
0 upgraded, 0 newly installed, 0 to remove and 431 not upgraded.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.6 - Vérifier l'état du serveur SSH sous Ubuntu"><a class="Link9" href="#Opérations sur le module Yocto">1.6 - Vérifier l'état du serveur SSH sous Ubuntu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">systemctl status ssh</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">● ssh.service - OpenBSD Secure Shell server
   Loaded: loaded (/lib/systemd/system/ssh.service; enabled; vendor preset: enabled)
   Active: active (running) since Thu 2021-03-11 15:25:59 EST; 6min ago
 Main PID: 5707 (sshd)
   CGroup: /system.slice/ssh.service
           └─5707 /usr/sbin/sshd -D

Mar 11 15:25:58 osboxes systemd[1]: Starting OpenBSD Secure Shell server...
Mar 11 15:25:59 osboxes sshd[5707]: Server listening on 0.0.0.0 port 22.
Mar 11 15:25:59 osboxes sshd[5707]: Server listening on :: port 22.
Mar 11 15:25:59 osboxes systemd[1]: Started OpenBSD Secure Shell server.
Mar 11 15:27:28 osboxes sshd[5895]: Accepted password for osboxes from 192.168.1.39 port 57279 ssh2
Mar 11 15:27:28 osboxes sshd[5895]: pam_unix(sshd:session): session opened for user osboxes by (uid=0)
Mar 11 15:27:29 osboxes sshd[5903]: Accepted password for osboxes from 192.168.1.39 port 57280 ssh2
Mar 11 15:27:29 osboxes sshd[5903]: pam_unix(sshd:session): session opened for user osboxes by (uid=0)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.7 - Rechercher l'adresse IP sous Ubuntu"><a class="Link9" href="#Opérations sur le module Yocto">1.7 - Rechercher l'adresse IP sous Ubuntu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ip a s</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">1: lo: &lt;LOOPBACK,UP,LOWER_UP&gt; mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host
       valid_lft forever preferred_lft forever
2: enp0s3: &lt;BROADCAST,MULTICAST,UP,LOWER_UP&gt; mtu 1500 qdisc pfifo_fast state UP group default qlen 1000
    link/ether 08:00:27:33:7b:cb brd ff:ff:ff:ff:ff:ff
    inet 192.168.1.40/24 brd 192.168.1.255 scope global dynamic enp0s3
       valid_lft 38740sec preferred_lft 38740sec
    inet6 2a01:e0a:5ee:d720:c402:7e4e:8bef:f114/64 scope global temporary dynamic
       valid_lft 86223sec preferred_lft 81510sec
    inet6 2a01:e0a:5ee:d720:ffba:ba34:3211:8bc9/64 scope global mngtmpaddr noprefixroute dynamic
       valid_lft 86223sec preferred_lft 86223sec
    inet6 fe80::dbc0:18be:26b6:2991/64 scope link
       valid_lft forever preferred_lft forever</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.8 - Démarrer la connexion SSH sous MobaXterm"><a class="Link9" href="#Opérations sur le module Yocto">1.8 - Démarrer la connexion SSH sous MobaXterm</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Session -&gt; SSH

Basic SSH settings
Remote host -&gt; 192.168.1.40
Cocher -&gt; Specify username -&gt; osboxes

Bookmark settings
Session name -&gt; Ubuntu</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">osboxes@192.168.1.40's password: osboxes.org</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.9 - Installer les dépendances sous Ubuntu"><a class="Link9" href="#Opérations sur le module Yocto">1.9 - Installer les dépendances sous Ubuntu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install gawk wget git-core diffstat unzip texinfo gcc-multilib \
build-essential chrpath socat cpio python3 python3-pip python3-pexpect \
xz-utils debianutils iputils-ping python3-git python3-jinja2 libegl1-mesa libsdl1.2-dev \
pylint3 xterm</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.10 - Télécharger poky sous Ubuntu"><a class="Link9" href="#Opérations sur le module Yocto">1.10 - Télécharger poky sous Ubuntu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git clone -b sumo git://git.yoctoproject.org/poky.git</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.11 - Télécharger les méta-données sous Ubuntu"><a class="Link9" href="#Opérations sur le module Yocto">1.11 - Télécharger les méta-données sous Ubuntu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd poky
git clone -b sumo git://git.openembedded.org/meta-openembedded
git clone -b sumo https://github.com/meta-qt5/meta-qt5
git clone -b sumo git://git.yoctoproject.org/meta-security.git
git clone -b sumo git://git.yoctoproject.org/meta-raspberrypi.git
git clone -b sumo https://github.com/jumpnow/meta-rpi</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.12 - Préparer le répertoire de construction"><a class="Link9" href="#Opérations sur le module Yocto">1.12 - Préparer le répertoire de construction</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">mkdir -p rpi-build/conf
cp -f meta-rpi/conf/local.conf.sample rpi-build/conf/local.conf
cp -f meta-rpi/conf/bblayers.conf.sample rpi-build/conf/bblayers.conf</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.13 - Initialiser la construction"><a class="Link9" href="#Opérations sur le module Yocto">1.13 - Initialiser la construction</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">. oe-init-build-env rpi-build</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.14 - Configurer les couches"><a class="Link9" href="#Opérations sur le module Yocto">1.14 - Configurer les couches</a></h2><br><h3 class="Title8 GTitle3">rpi-build/conf/bblayers.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># POKY_BBLAYERS_CONF_VERSION is increased each time build/conf/bblayers.conf
# changes incompatibly
POKY_BBLAYERS_CONF_VERSION = "2"

BBPATH = "${TOPDIR}"
BBFILES ?= ""

BBLAYERS ?= " \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-poky \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-openembedded/meta-oe \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-openembedded/meta-multimedia \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-openembedded/meta-networking \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-openembedded/meta-perl \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-openembedded/meta-python \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-qt5 \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-raspberrypi \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-security \
    /home/osboxes/Programs/ReadyOpt/yocto/poky/meta-rpi \
"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.15 - Construire l'image"><a class="Link9" href="#Opérations sur le module Yocto">1.15 - Construire l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bitbake qt5-image</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Parsing recipes: 100% |##########################################################################| Time: 0:31:23
Parsing of 2299 .bb files complete (0 cached, 2299 parsed). 3228 targets, 317 skipped, 0 masked, 0 errors.
NOTE: Resolving any missing task queue dependencies

Build Configuration:
BB_VERSION           = "1.38.0"
BUILD_SYS            = "i686-linux"
NATIVELSBSTRING      = "ubuntu-16.04"
TARGET_SYS           = "arm-poky-linux-gnueabi"
MACHINE              = "raspberrypi3"
DISTRO               = "poky"
DISTRO_VERSION       = "2.5.3"
TUNE_FEATURES        = "arm armv7ve vfp thumb neon vfpv4 callconvention-hard cortexa7"
TARGET_FPU           = "hard"
meta
meta-poky            = "sumo:b39f4146de84d7b36861859ec669d9c8e2ca77c6"
meta-oe
meta-multimedia
meta-networking
meta-perl
meta-python          = "sumo:8760facba1bceb299b3613b8955621ddaa3d4c3f"
meta-qt5             = "sumo:b3be596efaea39a75f48a3d5b32bf3a0df4e9e60"
meta-raspberrypi     = "sumo:2d40b000021bc8a9ef7f329ed0ad410f8d227b97"
meta-security        = "sumo:2160c5de874234045ba4e201a0703185b65dbae4"
meta-rpi             = "sumo:ebf564db195628a17a6685c4b1f8b6de4ac74827"

NOTE: Fetching uninative binary shim from http://downloads.yoctoproject.org/releases/uninative/2.4/i686-nativesdk-libc.tar.bz2;sha256sum=fafacfc537a6ce2bd122bd16c146881ab5ac69bd575abf6cb68a0dd33fa70ea2
Initialising tasks: 100% |#######################################################################| Time: 0:00:29
NOTE: Executing SetScene Tasks
NOTE: Executing RunQueue Tasks
Currently  1 running tasks (210 of 4101)   5% |###                                                             |
0: binutils-cross-arm-2.30-r0 do_fetch (pid 7970)  54% |#########################                       | 323K/s</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2 - Créer une image RaspberryPi4 Qt5 Touchscreen avec Yocto"><a class="Link9" href="#Opérations sur le module Yocto">2 - Créer une image RaspberryPi4 Qt5 Touchscreen avec Yocto</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git clone -b dunfell git://git.yoctoproject.org/poky.git
cd poky/
git clone -b dunfell git://git.openembedded.org/meta-openembedded
git clone -b dunfell https://github.com/meta-qt5/meta-qt5
git clone -b dunfell git://git.yoctoproject.org/meta-raspberrypi.git</xmp></pre></div><br><h3 class="Title8 GTitle3">conf/local.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">...
MACHINE ??= "raspberry4"
MACHINE_FEATURES += "touchscreen"
...
EXTRA_IMAGE_FEATURES ?= "debug-tweaks"
IMAGE_FSTYPES = "tar.xz ext3 rpi-sdimg"
...</xmp></pre></div><br><h3 class="Title8 GTitle3">conf/bblayers.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># POKY_BBLAYERS_CONF_VERSION is increased each time build/conf/bblayers.conf
# changes incompatibly
POKY_BBLAYERS_CONF_VERSION = "2"

BBPATH = "${TOPDIR}"
BBFILES ?= ""

BBLAYERS ?= " \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta-poky \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta-yocto-bsp \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta-qt5 \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta-raspberrypi \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta-openembedded/meta-oe \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta-openembedded/meta-multimedia \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta-openembedded/meta-python \
  /home/osboxes/Programs/ReadyOpt/rpi4/poky/meta-openembedded/meta-networking \
  "</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bitbake core-image-sato</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">
Parsing recipes: 100% |##########################################################################| Time: 1:05:25
Parsing of 2275 .bb files complete (0 cached, 2275 parsed). 3387 targets, 146 skipped, 0 masked, 0 errors.
NOTE: Resolving any missing task queue dependencies

Build Configuration:
BB_VERSION           = "1.46.0"
BUILD_SYS            = "i686-linux"
NATIVELSBSTRING      = "ubuntu-16.04"
TARGET_SYS           = "arm-poky-linux-gnueabi"
MACHINE              = "raspberrypi4"
DISTRO               = "poky"
DISTRO_VERSION       = "3.1.6"
TUNE_FEATURES        = "arm vfp cortexa7 neon vfpv4 thumb callconvention-hard"
TARGET_FPU           = "hard"
meta
meta-poky
meta-yocto-bsp       = "dunfell:d20ef1f5a5de7820b3e9b7f539b51f94954e9cd5"
meta-qt5             = "dunfell:b4d24d70aca75791902df5cd59a4f4a54aa4a125"
meta-raspberrypi     = "dunfell:77190af02d48adc2b28216775e6318e9eeda571c"
meta-oe
meta-multimedia
meta-python
meta-networking      = "dunfell:346681e7bf9c78008a845fc89031be4fd4ceb3a1"

NOTE: Fetching uninative binary shim http://downloads.yoctoproject.org/releases/uninative/3.0/i686-nativesdk-libc.tar.xz;sha256sum=e6cc2fc056234cffa6a2ff084cce27d544ea3f487a62b5e253351cefd4421900 (will check PREMIRRORS first)
Initialising tasks: 100% |#######################################################################| Time: 0:01:01
Sstate summary: Wanted 2750 Found 0 Missed 2750 Current 0 (0% match, 0% complete)
NOTE: Executing Tasks
Currently  1 running tasks (205 of 6785)   3% |#                                                               |
0: mpfr-native-4.0.2-r0 do_compile - 1m18s (pid 601)</xmp></pre></div><br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-Liens"><a class="Link9" href="#Opérations sur le module Yocto">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.yoctoproject.org/docs/current/mega-manual/mega-manual.html">https://www.yoctoproject.org/docs/current/mega-manual/mega-manual.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.yoctoproject.org/brief-yoctoprojectqs/index.html">https://docs.yoctoproject.org/brief-yoctoprojectqs/index.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://meta-raspberrypi.readthedocs.io/en/latest/">https://meta-raspberrypi.readthedocs.io/en/latest/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://kas.readthedocs.io/en/1.0/intro.html">https://kas.readthedocs.io/en/1.0/intro.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module Xenomai"><a class="Link3" href="#">Opérations sur le module Xenomai</a></h1><div class="Body3"><br>Xenomai est un module permettant d'apporter des fonctionnalités temps réel à un noyau Linux standard.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614775778507"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614775778507");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-1 - Xenomai"><a class="Link9" href="#Opérations sur le module Xenomai">1 - Xenomai</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-1.1 - Télécharger Xenomai"><a class="Link9" href="#Opérations sur le module Xenomai">1.1 - Télécharger Xenomai</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">wget https://xenomai.org/downloads/xenomai/stable/xenomai-3.1.tar.bz2
tar xjfv xenomai-3.1.tar.bz2
rm -f xenomai-3.1.tar.bz2</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-1.2 - Lister les architectures supportées"><a class="Link9" href="#Opérations sur le module Xenomai">1.2 - Lister les architectures supportées</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd xenomai-3.1
ls -l kernel/cobalt/arch/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">total 16
drwxr-xr-x 3 osboxes osboxes 4096 Feb  3  2020 arm
drwxr-xr-x 3 osboxes osboxes 4096 Feb  3  2020 arm64
drwxr-xr-x 3 osboxes osboxes 4096 Feb  3  2020 powerpc
drwxr-xr-x 3 osboxes osboxes 4096 Jan 16  2020 x86</xmp></pre></div><br>Le RaspberryPi est associé à l'architecture (arm).<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-2 - Linux Kernel"><a class="Link9" href="#Opérations sur le module Xenomai">2 - Linux Kernel</a></h2><br>Linux Kernel est le noyau Linux. Il contient l'ensemble des fonctionnalités d'une distribution Linux. On s'instéresse ici au noyau Linux (v5.4) associé au RaspberryPi.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-2.1 - Télécharger Lunix Kernel"><a class="Link9" href="#Opérations sur le module Xenomai">2.1 - Télécharger Lunix Kernel</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git clone https://github.com/raspberrypi/linux.git -b rpi-5.4.y --depth 1</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Cloning into 'linux'...
remote: Enumerating objects: 70468, done.
remote: Counting objects: 100% (70468/70468), done.
remote: Compressing objects: 100% (67792/67792), done.
remote: Total 70468 (delta 5352), reused 13178 (delta 1858), pack-reused 0
Receiving objects: 100% (70468/70468), 187.59 MiB | 1.80 MiB/s, done.
Resolving deltas: 100% (5352/5352), done.
Checking connectivity... done.
Checking out files: 100% (66405/66405), done.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-3 - Patch"><a class="Link9" href="#Opérations sur le module Xenomai">3 - Patch</a></h2><br>Le Patch est l'ensemble des correctifs du module Xenomai associé à une version spécifique du noyau Linux pour une architecture donnée. On s'instéresse ici au Patch de l'architecture (arm) associé au noyau Linux (v5.4).<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-3.1 - Télécharger le patch"><a class="Link9" href="#Opérations sur le module Xenomai">3.1 - Télécharger le patch</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">wget https://xenomai.org/downloads/ipipe/v5.x/arm/ipipe-core-5.4.93-arm-0.patch</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">--2021-03-06 16:02:58--  https://xenomai.org/downloads/ipipe/v5.x/arm/ipipe-core-5.4.93-arm-0.patch
Resolving xenomai.org (xenomai.org)... 62.210.215.82
Connecting to xenomai.org (xenomai.org)|62.210.215.82|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 636304 (621K) [text/x-diff]
Saving to: ‘ipipe-core-5.4.93-arm-0.patch’

ipipe-core-5.4.93-arm-0.patch      100%[==============================================================&gt;] 621.39K  --.-KB/s    in 0.1s

2021-03-06 16:02:58 (5.40 MB/s) - ‘ipipe-core-5.4.93-arm-0.patch’ saved [636304/636304]

FINISHED --2021-03-06 16:02:58--
Total wall clock time: 0.4s
Downloaded: 1 files, 621K in 0.1s (5.40 MB/s)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-Liens"><a class="Link9" href="#Opérations sur le module Xenomai">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://xenomai.org/downloads/xenomai/stable/">https://xenomai.org/downloads/xenomai/stable/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://xenomai.org/downloads/ipipe/">https://xenomai.org/downloads/ipipe/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://source.denx.de/Xenomai/xenomai/-/wikis/Installing_Xenomai_3">https://source.denx.de/Xenomai/xenomai/-/wikis/Installing_Xenomai_3</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/raspberrypi/linux">https://github.com/raspberrypi/linux</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.kernel.org/doc/html/latest/">https://www.kernel.org/doc/html/latest/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://xenomai.org/documentation/xenomai-3/html/README.INSTALL/">https://xenomai.org/documentation/xenomai-3/html/README.INSTALL/</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur les patchs"><a class="Link3" href="#">Opérations sur les patchs</a></h1><div class="Body3"><br>Un patch est ensemble de correctifs associé à un module à une version donnée.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614788582368"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614788582368");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1 - Fichiers"><a class="Link9" href="#Opérations sur les patchs">1 - Fichiers</a></h2><br>Un patch peut être crée entre deux fichiers.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.1 - Créer un module à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.1 - Créer un module à la version v1.0</a></h2><br><h3 class="Title8 GTitle3">module_setup_v1.0</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 50</xmp></pre></div><br>Après la révision du module à la version v1.0, on remarque une erreur à ligne (3).<br>On note l'erreur : <span class="GColor1" style="color:gray;">10 + 60 = 50</span><br>On définit le correctif : <span class="GColor1" style="color:teal;">10 + 60 = 70</span><br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.2 - Créer un correctif à la version v1.0.1"><a class="Link9" href="#Opérations sur les patchs">1.2 - Créer un correctif à la version v1.0.1</a></h2><br><h3 class="Title8 GTitle3">module_setup_v1.0.1</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.3 - Créer le path à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.3 - Créer le path à la version v1.0</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">diff -u module_setup_v1.0 module_setup_v1.0.1 &gt; module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">module_patch_v1.0.patch</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">--- module_setup_v1.0   2021-03-03 11:13:11.566919552 -0500
+++ module_setup_v1.0.1 2021-03-03 11:14:45.882919552 -0500
@@ -1,4 +1,4 @@
 10 + 10 = 20
 10 + 30 = 40
-10 + 60 = 50
+10 + 60 = 70</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.4 - Appliquer le patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.4 - Appliquer le patch à la version v1.0</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p0 &lt; module_patch_v1.0.patch</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patching file module_setup_v1.0</xmp></pre></div><br><h3 class="Title8 GTitle3">module_setup_v1.0</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br>On remarque que le patch s'est appliqué avec succès. L'erreur a été corrigée.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.5 - Réappliquer le patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.5 - Réappliquer le patch à la version v1.0</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p0 &lt; module_patch_v1.0.patch</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reversed (or previously applied) patch detected!  Assume -R? [n] R</xmp></pre></div><br>Cette trace indique le patch a été déjà appliqué. Dans ce cas, il est recommandé d'arrêter le processus (Ctrl + C)<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.6 - Annuler l'application d'un patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.6 - Annuler l'application d'un patch à la version v1.0</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p0 -R &lt; module_setup_v1.0</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patching file module_setup_v1.0</xmp></pre></div><br><h3 class="Title8 GTitle3">module_setup_v1.0</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 50</xmp></pre></div><br>On remarque le patch appliqué a été annulé avec succès. L'erreur a été rétablie.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2 - Répertoires"><a class="Link9" href="#Opérations sur les patchs">2 - Répertoires</a></h2><br>Un patch peut être crée entre deux répertoires.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.1 - Créer un module à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.1 - Créer un module à la version v1.0</a></h2><br><h3 class="Title8 GTitle3">module_repo_v1.0/module_setup</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 50</xmp></pre></div><br>Après la révision du module à la version v1.0, on remarque une erreur à ligne (3).<br>On note l'erreur : <span class="GColor1" style="color:gray;">10 + 60 = 50</span><br>On définit le correctif : <span class="GColor1" style="color:teal;">10 + 60 = 70</span><br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.2 - Créer un correctif à la version v1.0.1"><a class="Link9" href="#Opérations sur les patchs">2.2 - Créer un correctif à la version v1.0.1</a></h2><br><h3 class="Title8 GTitle3">module_repo_v1.0.1/module_setup</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.3 - Créer le path à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.3 - Créer le path à la version v1.0</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">diff -Naur module_repo_v1.0/ module_repo_v1.0.1/ &gt; module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">module_patch_v1.0.patch</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">diff -Naur module_repo_v1.0/module_setup module_repo_v1.0.1/module_setup
--- module_repo_v1.0/module_setup       2021-03-03 22:14:58.918006002 -0500
+++ module_repo_v1.0.1/module_setup     2021-03-03 21:10:36.386006002 -0500
@@ -1,3 +1,3 @@
 10 + 10 = 20
 10 + 30 = 40
-10 + 60 = 50
+10 + 60 = 70
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.4 - Appliquer le patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.4 - Appliquer le patch à la version v1.0</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd module_repo_v1.0/
patch -p1 &lt; ../module_patch_v1.0.patch</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patching file module_setup</xmp></pre></div><br><h3 class="Title8 GTitle3">module_repo_v1.0/module_setup</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br>On remarque que le patch s'est appliqué avec succès. L'erreur a été corrigée.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.5 - Réappliquer le patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.5 - Réappliquer le patch à la version v1.0</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p1 &lt; ../module_patch_v1.0.patch</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reversed (or previously applied) patch detected!  Assume -R? [n] R</xmp></pre></div><br>Cette trace indique le patch a été déjà appliqué. Dans ce cas, il est recommandé d'arrêter le processus (Ctrl + C)<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.6 - Annuler l'application d'un patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.6 - Annuler l'application d'un patch à la version v1.0</a></h2><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p1 -R &lt; ../module_patch_v1.0.patch</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patching file module_setup</xmp></pre></div><br><h3 class="Title8 GTitle3">module_repo_v1.0/module_setup</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br>On remarque le patch appliqué a été annulé avec succès. L'erreur a été rétablie.<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur l'utilitaire xz"><a class="Link3" href="#">Opérations sur l'utilitaire xz</a></h1><div class="Body3"><br>xz est un utilitaire de compression et décompression de fichiers de données.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614877234333"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614877234333");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire xz-1- Format (xz)"><a class="Link9" href="#Opérations sur l'utilitaire xz">1- Format (xz)</a></h2><br>Il supporte les fichiers de données au format (xz).<br><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire xz-1.1 - Compresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire xz">1.1 - Compresser un fichier</a></h2><br><pre class="Code2"><xmp class="AceCode" data-mode="sh">xz -k9 module_patch_v1.0.patch</xmp></pre><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_patch_v1.0.patch.xz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire xz-1.2 - Décompresser des données"><a class="Link9" href="#Opérations sur l'utilitaire xz">1.2 - Décompresser des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">xz -d module_patch_v1.0.patch.xz</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur l'utilitaire tar"><a class="Link3" href="#">Opérations sur l'utilitaire tar</a></h1><div class="Body3"><br>tar est un utilitaire de compression et décompression de fichiers de données.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614879908480"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614879908480");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-1 - Format (tar)"><a class="Link9" href="#Opérations sur l'utilitaire tar">1 - Format (tar)</a></h2><br>Il supporte les fichiers de données au format (tar).<br><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-1.1 - Compresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire tar">1.1 - Compresser un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar cfv module_setup_v1.0.tar module_setup_v1.0</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_setup_v1.0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-1.2 - Décompresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire tar">1.2 - Décompresser un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar xfv module_setup_v1.0.tar</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_setup_v1.0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-2 - Format (tar.gz)"><a class="Link9" href="#Opérations sur l'utilitaire tar">2 - Format (tar.gz)</a></h2><br>Il supporte les fichiers de données au format (tar.gz).<br><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-2.1 - Compresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire tar">2.1 - Compresser un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar czfv module_setup_v1.0.tar.gz module_setup_v1.0</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_setup_v1.0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-2.2 - Décompresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire tar">2.2 - Décompresser un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar xzfv module_setup_v1.0.tar.gz</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_setup_v1.0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-3 - Format (tar.bz2)"><a class="Link9" href="#Opérations sur l'utilitaire tar">3 - Format (tar.bz2)</a></h2><br>Il supporte les fichiers de données au format (tar.bz2).<br><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-3.1 - Compresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire tar">3.1 - Compresser un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar cjfv module_setup_v1.0.tar.bz2 module_setup_v1.0</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_setup_v1.0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-3.2 - Décompresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire tar">3.2 - Décompresser un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar xjfv module_setup_v1.0.tar.bz2</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_setup_v1.0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-4 - Format (tar.xz)"><a class="Link9" href="#Opérations sur l'utilitaire tar">4 - Format (tar.xz)</a></h2><br>Il supporte les fichiers de données au format (tar.xz).<br><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-4.1 - Compresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire tar">4.1 - Compresser un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar cJfv module_setup_v1.0.tar.xz module_setup_v1.0</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_setup_v1.0</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-4.2 - Décompresser un fichier"><a class="Link9" href="#Opérations sur l'utilitaire tar">4.2 - Décompresser un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar xJfv module_setup_v1.0.tar.xz</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_setup_v1.0</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur l'utilitaire gcc"><a class="Link3" href="#">Opérations sur l'utilitaire gcc</a></h1><div class="Body3"><br>gcc est le compilateur C utilisé par les distributions Linux.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614939561286"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614939561286");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1 - Installer une nouvelle version"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1 - Installer une nouvelle version</a></h2><br>Dans certaine situation, il est nécessaire d'installer une version particulière de gcc.<br><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1.1 - Déterminer la version en cours"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1.1 - Déterminer la version en cours</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc (Ubuntu 5.4.0-6ubuntu1~16.04.12) 5.4.0 20160609
Copyright (C) 2015 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1.2 - Configurer la chaine d'outils"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1.2 - Configurer la chaine d'outils</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo add-apt-repository ppa:ubuntu-toolchain-r/test</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Toolchain test builds; see https://wiki.ubuntu.com/ToolChain

 More info: https://launchpad.net/~ubuntu-toolchain-r/+archive/ubuntu/test
Press [ENTER] to continue or ctrl-c to cancel adding it

Error: retrieving gpg key timed out.
gpg: keyring `/tmp/tmputa65ljy/secring.gpg' created
gpg: keyring `/tmp/tmputa65ljy/pubring.gpg' created
gpg: requesting key BA9EF27F from hkp server keyserver.ubuntu.com
gpg: /tmp/tmputa65ljy/trustdb.gpg: trustdb created
gpg: key BA9EF27F: public key "Launchpad Toolchain builds" imported
gpg: Total number processed: 1
gpg:               imported: 1  (RSA: 1)
OK</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1.3 - Mettre à jour le système"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1.3 - Mettre à jour le système</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt-get update</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Hit:1 http://us.archive.ubuntu.com/ubuntu xenial InRelease
Get:2 http://us.archive.ubuntu.com/ubuntu xenial-updates InRelease [109 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu xenial-backports InRelease [107 kB]
Get:4 http://us.archive.ubuntu.com/ubuntu xenial-updates/main i386 DEP-11 Metadata [326 kB]
Get:5 http://us.archive.ubuntu.com/ubuntu xenial-updates/universe i386 DEP-11 Metadata [284 kB]
Get:6 http://us.archive.ubuntu.com/ubuntu xenial-updates/multiverse i386 DEP-11 Metadata [7,148 B]
Get:7 http://us.archive.ubuntu.com/ubuntu xenial-backports/main i386 DEP-11 Metadata [3,328 B]
Get:8 http://us.archive.ubuntu.com/ubuntu xenial-backports/universe i386 DEP-11 Metadata [6,616 B]
Get:9 http://ppa.launchpad.net/ubuntu-toolchain-r/test/ubuntu xenial InRelease [17.5 kB]
Get:10 http://ppa.launchpad.net/ubuntu-toolchain-r/test/ubuntu xenial/main i386 Packages [86.5 kB]
Get:11 http://ppa.launchpad.net/ubuntu-toolchain-r/test/ubuntu xenial/main Translation-en [14.6 kB]
Hit:12 http://packages.ros.org/ros/ubuntu xenial InRelease
Get:13 http://security.ubuntu.com/ubuntu xenial-security InRelease [109 kB]
Get:14 http://security.ubuntu.com/ubuntu xenial-security/main i386 DEP-11 Metadata [93.5 kB]
Get:15 http://security.ubuntu.com/ubuntu xenial-security/universe i386 DEP-11 Metadata [130 kB]
Get:16 http://security.ubuntu.com/ubuntu xenial-security/multiverse i386 DEP-11 Metadata [2,468 B]
Fetched 1,297 kB in 8min 1s (2,694 B/s)
Reading package lists... Done</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1.4 - Installer la nouvelle version"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1.4 - Installer la nouvelle version</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt-get install gcc-8 g++-8</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reading package lists... Done
Building dependency tree
Reading state information... Done
g++-8 is already the newest version (8.4.0-1ubuntu1~16.04.1).
gcc-8 is already the newest version (8.4.0-1ubuntu1~16.04.1).
The following package was automatically installed and is no longer required:
  snapd-login-service
Use 'sudo apt autoremove' to remove it.
0 upgraded, 0 newly installed, 0 to remove and 40 not upgraded.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1.5 - Mettre à jour la nouvelle version"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1.5 - Mettre à jour la nouvelle version</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo update-alternatives --install /usr/bin/gcc gcc /usr/bin/gcc-8 60 --slave /usr/bin/g++ g++ /usr/bin/g++-8</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">update-alternatives: using /usr/bin/gcc-8 to provide /usr/bin/gcc (gcc) in auto mode</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1.6 - Choisir la version par défaut"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1.6 - Choisir la version par défaut</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">update-alternatives --config gcc</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">There is only one alternative in link group gcc (providing /usr/bin/gcc): /usr/bin/gcc-8
Nothing to configure.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1.7 - Vérifier la version par défaut"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1.7 - Vérifier la version par défaut</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc (Ubuntu 8.4.0-1ubuntu1~16.04.1) 8.4.0
Copyright (C) 2018 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le système Windows"><a class="Link3" href="#">Opérations sur le système Windows</a></h1><div class="Body3"><br>Windows est un système d'exploitation pour ordinateur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1615155239421"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1615155239421");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Windows-1 - Disques"><a class="Link9" href="#Opérations sur le système Windows">1 - Disques</a></h2><br>Un disque est une mémoire de masse permettant de stocker des données.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le système Windows-1.1 - Lister les disques montés"><a class="Link9" href="#Opérations sur le système Windows">1.1 - Lister les disques montés</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">wmic diskdrive list brief</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Caption                         DeviceID            Model                           Partitions  Size
ST320LT007-9ZV142               \\.\PHYSICALDRIVE0  ST320LT007-9ZV142               3           320070320640
Mass Storage Device USB Device  \\.\PHYSICALDRIVE1  Mass Storage Device USB Device  2           127861977600</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Windows-1.2 - Supprimer un volume"><a class="Link9" href="#Opérations sur le système Windows">1.2 - Supprimer un volume</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Bouton Windows
Créer et formater des partions du disque dur
Disque (1) -&gt; Partition (1) -&gt; Clic droit -&gt; Supprimer le disque</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Windows-1.3 - Formater un volume avec (GuiFormat)"><a class="Link9" href="#Opérations sur le système Windows">1.3 - Formater un volume avec (GuiFormat)</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://ridgecrop.co.uk/index.htm?guiformat.htm">http://ridgecrop.co.uk/index.htm?guiformat.htm</a><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Drive -&gt; G:\
Allocation unit size -&gt; 32768
Volume label -&gt; RPI_4
Format options -&gt; Check -&gt; Quick Format
Start -&gt; Close</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Windows-1.4 - Graver un disque avec (Win32 Disk Imager)"><a class="Link9" href="#Opérations sur le système Windows">1.4 - Graver un disque avec (Win32 Disk Imager)</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/win32diskimager/">https://sourceforge.net/projects/win32diskimager/</a><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Fichier image -&gt; 2021-01-11-raspios-buster-armhf-lite.img
Périphérique -&gt; [G:\]
Hash -&gt; None
Ecrire -&gt; Fermer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Windows-Liens"><a class="Link9" href="#Opérations sur le système Windows">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.microsoft.com/fr-fr/windows/">https://docs.microsoft.com/fr-fr/windows/</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le système Linux"><a class="Link3" href="#">Opérations sur le système Linux</a></h1><div class="Body3"><br>Linux est un système d'exploitation.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1615161978689"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1615161978689");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1 - Disque"><a class="Link9" href="#Opérations sur le système Linux">1 - Disque</a></h2><br>Un disque est un support de stockage de données.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1 - Formatage"><a class="Link9" href="#Opérations sur le système Linux">1.1 - Formatage</a></h2><br>Le formatage est l'action de préparer un disque à recevoir des données en y inscrivant un système de fichiers.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.1 - Méthode 1 (Graphique)"><a class="Link9" href="#Opérations sur le système Linux">1.1.1 - Méthode 1 (Graphique)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo gnome-disks</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_linux_disk_format.png" alt="/Tutoriels/Embedded_System/img/i_linux_disk_format.png"></div><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_linux_disk_format_02.png" alt="/Tutoriels/Embedded_System/img/i_linux_disk_format_02.png"></div><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_linux_disk_format_03.png" alt="/Tutoriels/Embedded_System/img/i_linux_disk_format_03.png"></div><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_linux_disk_format_04.png" alt="/Tutoriels/Embedded_System/img/i_linux_disk_format_04.png"></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2 - Méthode 2 (Terminal)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2 - Méthode 2 (Terminal)</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.1 - Identifier la partition"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.1 - Identifier la partition</a></h2><br>L'identification est l'action de déterminer le chemin d'accès à une partition de disque.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.1.1 - Identifier la partition avec (lsblk)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.1.1 - Identifier la partition avec (lsblk)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">lsblk -o model,name,type,fstype,size,label</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MODEL            NAME   TYPE FSTYPE   SIZE LABEL
Storage Device   sdb    disk        119.1G
CD-ROM           sr0    rom          1024M
VBOX HARDDISK    sda    disk          500G
                 ├─sda4 part ext4   270.1G
                 ├─sda2 part ext4     954M
                 ├─sda3 part swap     8.4G
                 └─sda1 part ext4   220.6G</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.1.2 - Identifier la partition avec (blkid)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.1.2 - Identifier la partition avec (blkid)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo blkid</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">/dev/sda1: UUID="75f494bc-4425-4695-9902-df5e65c8353d" TYPE="ext4" PARTUUID="be672965-01"
/dev/sda2: UUID="167f8b73-6bf4-4874-a479-5c2c706389ea" TYPE="ext4" PARTUUID="be672965-02"
/dev/sda3: UUID="7018327d-6764-4664-9598-9de389c1d449" TYPE="swap" PARTUUID="be672965-03"
/dev/sda4: UUID="26325eaa-7c61-42ff-a438-ef509001045e" TYPE="ext4" PARTUUID="be672965-04"
/dev/sdb: PTUUID="c5b0bae6" PTTYPE="dos"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.1.3 - Identifier la partition avec (fdisk)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.1.3 - Identifier la partition avec (fdisk)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo fdisk -l</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Disk /dev/sda: 500 GiB, 536870912000 bytes, 1048576000 sectors
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: dos
Disk identifier: 0xbe672965

Device     Boot     Start        End   Sectors   Size Id Type
/dev/sda1            2048  462639103 462637056 220.6G 83 Linux
/dev/sda2  *    462639104  464592895   1953792   954M 83 Linux
/dev/sda3       464592896  482168831  17575936   8.4G 82 Linux swap / Solaris
/dev/sda4       482168832 1048573951 566405120 270.1G 83 Linux


Disk /dev/sdb: 119.1 GiB, 127865454592 bytes, 249737216 sectors
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: dos
Disk identifier: 0xc5b0bae6</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.2 - Démonter la partition"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.2 - Démonter la partition</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo umount /dev/sdb1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.3 - Formater la partition"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.3 - Formater la partition</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.3.1 - Formater en (fat32)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.3.1 - Formater en (fat32)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkfs.vfat /dev/sdb1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.3.2 - Formater en (ntfs)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.3.2 - Formater en (ntfs)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkfs.ntfs /dev/sdb1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.3.3 - Formater en (ext3)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.3.3 - Formater en (ext3)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkfs.ext3 /dev/sdb1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.3.4 - Formater en (ext4)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.3.4 - Formater en (ext4)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkfs.ext4 /dev/sdb1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.3.5 - Formater en (swap)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.3.5 - Formater en (swap)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkswap /dev/sdb1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.1.2.3.6 - Formater en (f2fs)"><a class="Link9" href="#Opérations sur le système Linux">1.1.2.3.6 - Formater en (f2fs)</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkfs.f2fs /dev/sdb1</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.2 - Partitionnement"><a class="Link9" href="#Opérations sur le système Linux">1.2 - Partitionnement</a></h2><br>Le partitionnement est l'action de diviser un disque en plusieurs partitions.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.2.1 - Partitionner un disque"><a class="Link9" href="#Opérations sur le système Linux">1.2.1 - Partitionner un disque</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="null">lsblk -o model,name,type,fstype,size,label</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="null">MODEL            NAME   TYPE FSTYPE   SIZE LABEL
Storage Device   sdb    disk        119.1G
CD-ROM           sr0    rom          1024M
VBOX HARDDISK    sda    disk          500G
                 ├─sda4 part ext4   270.1G
                 ├─sda2 part ext4     954M
                 ├─sda3 part swap     8.4G
                 └─sda1 part ext4   220.6G</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo parted -s /dev/sdb \
mklabel msdos \
mkpart primary fat32 1M 100M \
mkpart primary ext4 100M 100%</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">lsblk -o model,name,type,fstype,size,label</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MODEL            NAME   TYPE FSTYPE   SIZE LABEL
Storage Device   sdb    disk        119.1G
                 ├─sdb2 part          119G
                 └─sdb1 part           94M
CD-ROM           sr0    rom          1024M
VBOX HARDDISK    sda    disk          500G
                 ├─sda4 part ext4   270.1G
                 ├─sda2 part ext4     954M
                 ├─sda3 part swap     8.4G
                 └─sda1 part ext4   220.6G</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.2.2 - Formater les partitions"><a class="Link9" href="#Opérations sur le système Linux">1.2.2 - Formater les partitions</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkfs.vfat /dev/sdb1</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">mkfs.fat 3.0.28 (2015-05-16)</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkfs.ext4 /dev/sdb2</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">mke2fs 1.42.13 (17-May-2015)
Creating filesystem with 31192832 4k blocks and 7798784 inodes
Filesystem UUID: 9beee73c-a5a4-452c-ab0d-f2fd2517e1d5
Superblock backups stored on blocks:
        32768, 98304, 163840, 229376, 294912, 819200, 884736, 1605632, 2654208,
        4096000, 7962624, 11239424, 20480000, 23887872

Allocating group tables: done
Writing inode tables: done
Creating journal (32768 blocks): done
Writing superblocks and filesystem accounting information: done</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">lsblk -o model,name,type,fstype,size,label</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MODEL            NAME   TYPE FSTYPE   SIZE LABEL
Storage Device   sdb    disk        119.1G
                 ├─sdb2 part ext4     119G
                 └─sdb1 part vfat      94M
CD-ROM           sr0    rom          1024M
VBOX HARDDISK    sda    disk          500G
                 ├─sda4 part ext4   270.1G
                 ├─sda2 part ext4     954M
                 ├─sda3 part swap     8.4G
                 └─sda1 part ext4   220.6G
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.2.3 - Renommer les partitions"><a class="Link9" href="#Opérations sur le système Linux">1.2.3 - Renommer les partitions</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="null">sudo fatlabel /dev/sdb1 BOOT
sudo e2label /dev/sdb2 ROOT</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="null">lsblk -o model,name,type,fstype,size,label</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="null">MODEL            NAME   TYPE FSTYPE   SIZE LABEL
Storage Device   sdb    disk        119.1G
                 ├─sdb2 part ext4     119G ROOT
                 └─sdb1 part vfat      94M BOOT
CD-ROM           sr0    rom          1024M
VBOX HARDDISK    sda    disk          500G
                 ├─sda4 part ext4   270.1G
                 ├─sda2 part ext4     954M
                 ├─sda3 part swap     8.4G
                 └─sda1 part ext4   220.6G</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.2.4 - Monter les partitions"><a class="Link9" href="#Opérations sur le système Linux">1.2.4 - Monter les partitions</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkdir -p /media/rpidisk/BOOT
sudo mkdir -p /media/rpidisk/ROOT</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mount /dev/sdb1 /media/rpidisk/BOOT
sudo mount /dev/sdb2 /media/rpidisk/ROOT</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">lsblk</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">NAME   MAJ:MIN RM   SIZE RO TYPE MOUNTPOINT
sr0     11:0    1  1024M  0 rom
sdb      8:32   1 119.1G  0 disk
├─sdb2   8:34   1   119G  0 part /media/rpidisk/ROOT
└─sdb1   8:33   1    94M  0 part /media/rpidisk/BOOT
sda      8:0    0   500G  0 disk
├─sda4   8:4    0 270.1G  0 part /home
├─sda2   8:2    0   954M  0 part /boot
├─sda3   8:3    0   8.4G  0 part [SWAP]
└─sda1   8:1    0 220.6G  0 part /</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-1.2.5 - Déterminer l'UUID des partitions"><a class="Link9" href="#Opérations sur le système Linux">1.2.5 - Déterminer l'UUID des partitions</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo blkid</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">/dev/sda1: UUID="75f494bc-4425-4695-9902-df5e65c8353d" TYPE="ext4" PARTUUID="be672965-01"
/dev/sda2: UUID="167f8b73-6bf4-4874-a479-5c2c706389ea" TYPE="ext4" PARTUUID="be672965-02"
/dev/sda3: UUID="7018327d-6764-4664-9598-9de389c1d449" TYPE="swap" PARTUUID="be672965-03"
/dev/sda4: UUID="26325eaa-7c61-42ff-a438-ef509001045e" TYPE="ext4" PARTUUID="be672965-04"
/dev/sdb1: SEC_TYPE="msdos" LABEL="BOOT" UUID="FB4D-B1FA" TYPE="vfat" PARTUUID="c20172f1-01"
/dev/sdb2: LABEL="ROOT" UUID="9beee73c-a5a4-452c-ab0d-f2fd2517e1d5" TYPE="ext4" PARTUUID="c20172f1-02"</xmp></pre></div><br>On s'intéresse ici au $PARTUUID$.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">/dev/sdb1 -> LABEL="BOOT" -> PARTUUID="c20172f1-01"
/dev/sdb2 -> LABEL="ROOT" -> PARTUUID="c20172f1-02"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le système Linux-Liens"><a class="Link9" href="#Opérations sur le système Linux">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://debian-facile.org/doc:systeme:mkfs">https://debian-facile.org/doc:systeme:mkfs</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://linux.die.net/man/8/parted">https://linux.die.net/man/8/parted</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://lancesimms.com/RaspberryPi/">https://lancesimms.com/RaspberryPi/</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module VirtualBox"><a class="Link3" href="#">Opérations sur le module VirtualBox</a></h1><div class="Body3"><br>VirtualBox est un outil de virtualisation matérielle. Il permet d'exécuter plusieurs systèmes d'exploitation sur une même machine.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1615160556905"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1615160556905");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module VirtualBox-1. USB"><a class="Link9" href="#Opérations sur le module VirtualBox">1. USB</a></h2><br>Un périphérique USB est un périphérique capable de se connecter à la machine Host via un port USB.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module VirtualBox-1.1 - Connecter un périphérique USB"><a class="Link9" href="#Opérations sur le module VirtualBox">1.1 - Connecter un périphérique USB</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_virtualbox_usb_connect.png" alt="/Tutoriels/Embedded_System/img/i_virtualbox_usb_connect.png"></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module VirtualBox-Liens"><a class="Link9" href="#Opérations sur le module VirtualBox">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.virtualbox.org/manual/UserManual.html">https://www.virtualbox.org/manual/UserManual.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Système Embarqué RaspberryPi</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1614775612367"><div class="Row26">List 1 &gt; Embedded_System &gt; rpi_conf</div></div><script>loadList1("Loader_1614775612367","Embedded_System","rpi_conf");</script></div><br></div></div></div></div><br>
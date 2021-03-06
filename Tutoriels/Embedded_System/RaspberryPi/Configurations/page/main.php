<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">onfigurations avec le RaspberryPi</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à gérer une diode LED en C avec le <b>RaspberryPi</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Un <b>système embarqué</b> est un système électronique et informatique autonome, souvent temps réel, spécialisé dans une tâche précise et dont les ressources sont généralement limitées spatialement (encombrement réduit) et énergétiquement (consommation restreinte).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/b_raspberrypi_environment.png" alt="/Tutoriels/Embedded_System/img/b_raspberrypi_environment.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module Yocto"><a class="Link3" href="#">Opérations sur le module Yocto</a></h1><div class="Body3"><br>Yocto est un outil permettant de construire des systèmes d'exploitation Linux embarqué.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614900631373"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614900631373");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1 - Installer les dépendances"><a class="Link9" href="#Opérations sur le module Yocto">1 - Installer les dépendances</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install gawk wget git-core diffstat unzip texinfo gcc-multilib \
build-essential chrpath socat cpio python3 python3-pip python3-pexpect \
xz-utils debianutils iputils-ping python3-git python3-jinja2 libegl1-mesa libsdl1.2-dev \
pylint3 xterm</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reading package lists... Done
Building dependency tree
Reading state information... Done
build-essential is already the newest version (12.1ubuntu2).
debianutils is already the newest version (4.7).
diffstat is already the newest version (1.61-1).
gawk is already the newest version (1:4.1.3+dfsg-0.1).
gcc-multilib is already the newest version (4:5.3.1-1ubuntu1).
iputils-ping is already the newest version (3:20121221-5ubuntu2).
python3 is already the newest version (3.5.1-3).
python3-pexpect is already the newest version (4.0.1-1).
xz-utils is already the newest version (5.1.1alpha+20120614-2ubuntu2).
chrpath is already the newest version (0.16-1).
pylint3 is already the newest version (1.5.2-1ubuntu1).
python3-git is already the newest version (1.0.1+git137-gc8b8379-2.1).
socat is already the newest version (1.7.3.1-1).
texinfo is already the newest version (6.1.0.dfsg.1-5).
cpio is already the newest version (2.11+dfsg-5ubuntu1.1).
git-core is already the newest version (1:2.7.4-0ubuntu1.9).
libegl1-mesa is already the newest version (18.0.5-0ubuntu0~16.04.1).
libsdl1.2-dev is already the newest version (1.2.15+dfsg1-3ubuntu0.1).
python3-jinja2 is already the newest version (2.8-1ubuntu0.1).
unzip is already the newest version (6.0-20ubuntu1.1).
wget is already the newest version (1.17.1-1ubuntu1.5).
xterm is already the newest version (322-1ubuntu1.2).
python3-pip is already the newest version (8.1.1-2ubuntu0.6).
The following package was automatically installed and is no longer required:
  snapd-login-service
Use 'sudo apt autoremove' to remove it.
0 upgraded, 0 newly installed, 0 to remove and 0 not upgraded.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2 - Poky"><a class="Link9" href="#Opérations sur le module Yocto">2 - Poky</a></h2><br>Poky est la distribution de référence du module Yocto.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2.1 - Télécharger Poky"><a class="Link9" href="#Opérations sur le module Yocto">2.1 - Télécharger Poky</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git clone git://git.yoctoproject.org/poky</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Cloning into 'poky'...
remote: Enumerating objects: 506093, done.
remote: Counting objects: 100% (506093/506093), done.
remote: Compressing objects: 100% (119137/119137), done.
remote: Total 506093 (delta 379034), reused 506093 (delta 379034)
Receiving objects: 100% (506093/506093), 172.38 MiB | 2.81 MiB/s, done.
Resolving deltas: 100% (379034/379034), done.
Checking connectivity... done.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2.2 - Lister les machines"><a class="Link9" href="#Opérations sur le module Yocto">2.2 - Lister les machines</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ls -l meta-yocto-bsp/conf/machine/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">total 20
-rw-rw-r-- 1 osboxes osboxes 2233 Mar  4 18:40 beaglebone-yocto.conf
-rw-rw-r-- 1 osboxes osboxes  734 Mar  4 18:40 edgerouter.conf
-rw-rw-r-- 1 osboxes osboxes  425 Mar  4 18:40 genericx86-64.conf
-rw-rw-r-- 1 osboxes osboxes  431 Mar  4 18:40 genericx86.conf
drwxrwxr-x 2 osboxes osboxes 4096 Mar  4 18:40 include</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2.3 - Lister les tags"><a class="Link9" href="#Opérations sur le module Yocto">2.3 - Lister les tags</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd poky/
git fetch --tags
git tag</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">1.1_M1.final
1.1_M1.rc1
1.1_M1.rc2
1.1_M2.final
1.1_M2.rc1
...
zeus-22.0.0
zeus-22.0.1
zeus-22.0.2
zeus-22.0.3
zeus-22.0.4</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2.4 - Créer une branche locale"><a class="Link9" href="#Opérations sur le module Yocto">2.4 - Créer une branche locale</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git checkout tags/yocto-3.2.2 -b local-yocto-3.2.2</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Switched to a new branch 'local-yocto-3.2.2'</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2.5 - Lister les branches locales"><a class="Link9" href="#Opérations sur le module Yocto">2.5 - Lister les branches locales</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git branch</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">* local-yocto-3.2.2
  master</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-3 - Qemu"><a class="Link9" href="#Opérations sur le module Yocto">3 - Qemu</a></h2><br>Qemu est un emulator d'architecture matérielle.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-3.1 - Configurer l'environnement"><a class="Link9" href="#Opérations sur le module Yocto">3.1 - Configurer l'environnement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">. oe-init-build-env</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">You had no conf/local.conf file. This configuration file has therefore been
created for you with some default values. You may wish to edit it to, for
example, select a different MACHINE (target hardware). See conf/local.conf
for more information as common configuration options are commented.

You had no conf/bblayers.conf file. This configuration file has therefore been
created for you with some default values. To add additional metadata layers
into your configuration please add entries to conf/bblayers.conf.

The Yocto Project has extensive documentation about OE including a reference
manual which can be found at:
    http://yoctoproject.org/documentation

For more information about OpenEmbedded see their website:
    http://www.openembedded.org/


### Shell environment set up for builds. ###

You can now run 'bitbake &lt;target&gt;'

Common targets are:
    core-image-minimal
    core-image-sato
    meta-toolchain
    meta-ide-support

You can also run generated qemu images with a command like 'runqemu qemux86'

Other commonly useful commands are:
 - 'devtool' and 'recipetool' handle common recipe tasks
 - 'bitbake-layers' handles common layer tasks
 - 'oe-pkgdata-util' handles common target package tasks</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-3.2 - Construire une image"><a class="Link9" href="#Opérations sur le module Yocto">3.2 - Construire une image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bitbake core-image-minimal</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Loading cache: 100% |                                                                                                    | ETA:  --:--:--
Loaded 0 entries from dependency cache.
Parsing recipes: 100% |###################################################################################################| Time: 0:09:56
Parsing of 784 .bb files complete (0 cached, 784 parsed). 1354 targets, 42 skipped, 0 masked, 0 errors.
NOTE: Resolving any missing task queue dependencies

Build Configuration:
BB_VERSION           = "1.48.0"
BUILD_SYS            = "i686-linux"
NATIVELSBSTRING      = "ubuntu-16.04"
TARGET_SYS           = "x86_64-poky-linux"
MACHINE              = "qemux86-64"
DISTRO               = "poky"
DISTRO_VERSION       = "3.2.2"
TUNE_FEATURES        = "m64 core2"
TARGET_FPU           = ""
meta
meta-poky
meta-yocto-bsp       = "local-yocto-3.2.2:d5d6286a66f46f4523e35e0e3f20cd7396195fdc"

NOTE: Fetching uninative binary shim http://downloads.yoctoproject.org/releases/uninative/2.10/i686-nativesdk-libc.tar.xz;sha256sum=233e09b5ff30e15341232a0c16fa8448ff31dccb8f3f3e2ad3948cdac8c4a598 (will check PREMIRRORS first)
Initialising tasks: 100% |################################################################################################| Time: 0:00:12
Sstate summary: Wanted 1087 Found 0 Missed 1087 Current 0 (0% match, 0% complete)
NOTE: Executing Tasks
Currently  1 running tasks (54 of 3077)   1% |#                                                                                         |
0: automake-native-1.16.2-r0 do_configure - 10s (pid 14893)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-3.3 - Simuler l'image"><a class="Link9" href="#Opérations sur le module Yocto">3.3 - Simuler l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">runqemu qemux86</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4 - RaspberryPi"><a class="Link9" href="#Opérations sur le module Yocto">4 - RaspberryPi</a></h2><br>RaspberryPi est un mini PC embarqué.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.1 - Télécharger les méta-données"><a class="Link9" href="#Opérations sur le module Yocto">4.1 - Télécharger les méta-données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd poky/
git clone git://git.yoctoproject.org/meta-raspberrypi</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Cloning into 'meta-raspberrypi'...
remote: Enumerating objects: 8562, done.
remote: Counting objects: 100% (8562/8562), done.
remote: Compressing objects: 100% (4230/4230), done.
remote: Total 8562 (delta 4924), reused 6975 (delta 3925)
Receiving objects: 100% (8562/8562), 1.74 MiB | 677.00 KiB/s, done.
Resolving deltas: 100% (4924/4924), done.
Checking connectivity... done.</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd poky/
git clone https://github.com/openembedded/meta-openembedded.git</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Cloning into 'meta-openembedded'...
remote: Enumerating objects: 253, done.
remote: Counting objects: 100% (253/253), done.
remote: Compressing objects: 100% (146/146), done.
remote: Total 148798 (delta 131), reused 192 (delta 96), pack-reused 148545
Receiving objects: 100% (148798/148798), 46.68 MiB | 715.00 KiB/s, done.
Resolving deltas: 100% (87593/87593), done.
Checking connectivity... done.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.2 - Configurer l'environnement"><a class="Link9" href="#Opérations sur le module Yocto">4.2 - Configurer l'environnement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd poky/
. oe-init-build-env rpi-build</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">You had no conf/local.conf file. This configuration file has therefore been
created for you with some default values. You may wish to edit it to, for
example, select a different MACHINE (target hardware). See conf/local.conf
for more information as common configuration options are commented.

You had no conf/bblayers.conf file. This configuration file has therefore been
created for you with some default values. To add additional metadata layers
into your configuration please add entries to conf/bblayers.conf.

The Yocto Project has extensive documentation about OE including a reference
manual which can be found at:
    http://yoctoproject.org/documentation

For more information about OpenEmbedded see their website:
    http://www.openembedded.org/


### Shell environment set up for builds. ###

You can now run 'bitbake &lt;target&gt;'

Common targets are:
    core-image-minimal
    core-image-sato
    meta-toolchain
    meta-ide-support

You can also run generated qemu images with a command like 'runqemu qemux86'

Other commonly useful commands are:
 - 'devtool' and 'recipetool' handle common recipe tasks
 - 'bitbake-layers' handles common layer tasks
 - 'oe-pkgdata-util' handles common target package tasks</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.3 - Vérifier les machines supportées"><a class="Link9" href="#Opérations sur le module Yocto">4.3 - Vérifier les machines supportées</a></h2><br>    $\checkmark$ raspberrypi<br>    $\checkmark$ raspberrypi0<br>    $\checkmark$ raspberrypi0-wifi<br>    $\checkmark$ raspberrypi2<br>    $\checkmark$ raspberrypi3<br>    $\checkmark$ raspberrypi3-64 (64 bit kernel &amp; userspace)<br>    $\checkmark$ raspberrypi4<br>    $\checkmark$ raspberrypi4-64 (64 bit kernel &amp; userspace)<br>    $\checkmark$ raspberrypi-cm (dummy alias for raspberrypi)<br>    $\checkmark$ raspberrypi-cm3<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.4 - Configurer la machine"><a class="Link9" href="#Opérations sur le module Yocto">4.4 - Configurer la machine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">nano conf/local.conf</xmp></pre></div><br><h3 class="Title8 GTitle3">conf/local.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MACHINE ??= "raspberrypi4"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.5 - Configurer les couches"><a class="Link9" href="#Opérations sur le module Yocto">4.5 - Configurer les couches</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd poky/rpi-build/
bitbake-layers add-layer ../meta-raspberrypi/
bitbake-layers add-layer ../meta-openembedded/meta-oe/
bitbake-layers add-layer ../meta-openembedded/meta-python/
bitbake-layers add-layer ../meta-openembedded/meta-networking/
bitbake-layers add-layer ../meta-openembedded/meta-multimedia/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">NOTE: Starting bitbake server...</xmp></pre></div><br><h3 class="Title8 GTitle3">poky/rpi-build/conf/bblayers.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">POKY_BBLAYERS_CONF_VERSION = "2"

BBPATH = "${TOPDIR}"
BBFILES ?= ""

BBLAYERS ?= " \
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/meta \
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/meta-poky \
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/meta-yocto-bsp \
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/meta-raspberrypi \
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/meta-openembedded/meta-oe \
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/meta-openembedded/meta-python \
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/meta-openembedded/meta-networking \
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/meta-openembedded/meta-multimedia \
  "</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.6- Configurer les paramètres"><a class="Link9" href="#Opérations sur le module Yocto">4.6- Configurer les paramètres</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># Compressed deployed files
IMAGE_FSTYPES = "wic.bz2 ext4.xz"
SDIMG_ROOTFS_TYPE = "ext4.xz"

# Enable overscan
DISABLE_OVERSCAN = "0"

# Disable splash screen
DISABLE_SPLASH = "1"

# Boot delay
BOOT_DELAY = "0"
BOOT_DELAY_MS = "0" 

# Enable Video camera support with V4L2 drivers
VIDEO_CAMERA = "1"

# Enable offline compositing support
DISPMANX_OFFLINE = "1"

# Enable kgdb over console support
ENABLE_KGDB = "1"

# Disable rpi boot logo
DISABLE_RPI_BOOT_LOGO = "1"

# Enable Boot to U-Boot
RPI_USE_U_BOOT = "1"

# Enable SPI bus
ENABLE_SPI_BUS = "1"

# Enable I2C
ENABLE_I2C = "1"
KERNEL_MODULE_AUTOLOAD_rpi += "i2c-dev i2c-bcm2708"

# Enable PiTFT support
MACHINE_FEATURES += "pitft pitft35r"

# Enable Misc. display
WAVESHARE_1024X600_C_2_1 = "1"

# Enable UART
ENABLE_UART = "1"

# Enable USB Peripheral (Gadget) support
ENABLE_DWC2_PERIPHERAL = "1"

# Enable Openlabs 802.15.4 radio module
ENABLE_AT86RF = "1"

# Enable CAN
ENABLE_SPI_BUS = "1"
ENABLE_CAN = "1"
ENABLE_SPI_BUS = "1"
ENABLE_DUAL_CAN = "1"
CAN_OSCILLATOR="8000000"

# Enable infrared
ENABLE_IR = "1"

# Enable Raspberrypi Camera V2
RASPBERRYPI_CAMERA_V2 = "1"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-5 - Kas"><a class="Link9" href="#Opérations sur le module Yocto">5 - Kas</a></h2><br>Kas est un module simplifiant la configuration des projets basés sur bitbake.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-5.1 - Installer Kas"><a class="Link9" href="#Opérations sur le module Yocto">5.1 - Installer Kas</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo pip3 install kas</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">The directory '/home/osboxes/.cache/pip/http' or its parent directory is not owned by the current user and the cache has been disabled. Please check the permissions and owner of that directory. If executing pip with sudo, you may want sudo's -H flag.
The directory '/home/osboxes/.cache/pip' or its parent directory is not owned by the current user and caching wheels has been disabled. check the permissions and owner of that directory. If executing pip with sudo, you may want sudo's -H flag.
Requirement already satisfied (use --upgrade to upgrade): kas in /usr/local/lib/python3.5/dist-packages
Requirement already satisfied (use --upgrade to upgrade): PyYAML&lt;6,&gt;=3.0 in /usr/local/lib/python3.5/dist-packages (from kas)
Requirement already satisfied (use --upgrade to upgrade): distro&lt;2,&gt;=1.0.0 in /usr/local/lib/python3.5/dist-packages (from kas)
Requirement already satisfied (use --upgrade to upgrade): jsonschema&lt;4,&gt;=2.5.0 in /usr/local/lib/python3.5/dist-packages (from kas)
Requirement already satisfied (use --upgrade to upgrade): six&gt;=1.11.0 in /usr/local/lib/python3.5/dist-packages (from jsonschema&lt;4,&gt;=2.5.0-&gt;kas)
Requirement already satisfied (use --upgrade to upgrade): importlib-metadata; python_version &lt; "3.8" in /usr/local/lib/python3.5/dist-packages (from jsonschema&lt;4,&gt;=2.5.0-&gt;kas)
Requirement already satisfied (use --upgrade to upgrade): pyrsistent&gt;=0.14.0 in /usr/local/lib/python3.5/dist-packages (from jsonschema&lt;4,&gt;=2.5.0-&gt;kas)
Requirement already satisfied (use --upgrade to upgrade): setuptools in /usr/lib/python3/dist-packages (from jsonschema&lt;4,&gt;=2.5.0-&gt;kas)
Requirement already satisfied (use --upgrade to upgrade): attrs&gt;=17.4.0 in /usr/local/lib/python3.5/dist-packages (from jsonschema&lt;4,&gt;=2.5.0-&gt;kas)
Requirement already satisfied (use --upgrade to upgrade): zipp&gt;=0.5 in /usr/local/lib/python3.5/dist-packages (from importlib-metadata; python_version &lt; "3.8"-&gt;jsonschema&lt;4,&gt;=2.5.0-&gt;kas)
Requirement already satisfied (use --upgrade to upgrade): typing-extensions&gt;=3.6.4; python_version &lt; "3.8" in /usr/local/lib/python3.5/dist-packages (from importlib-metadata; python_version &lt; "3.8"-&gt;jsonschema&lt;4,&gt;=2.5.0-&gt;kas)
You are using pip version 8.1.1, however version 21.0.1 is available.
You should consider upgrading via the 'pip install --upgrade pip' command.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-Liens"><a class="Link9" href="#Opérations sur le module Yocto">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.yoctoproject.org/docs/current/mega-manual/mega-manual.html">https://www.yoctoproject.org/docs/current/mega-manual/mega-manual.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.yoctoproject.org/brief-yoctoprojectqs/index.html">https://docs.yoctoproject.org/brief-yoctoprojectqs/index.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://meta-raspberrypi.readthedocs.io/en/latest/">https://meta-raspberrypi.readthedocs.io/en/latest/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://kas.readthedocs.io/en/1.0/intro.html">https://kas.readthedocs.io/en/1.0/intro.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module Xenomai"><a class="Link3" href="#">Opérations sur le module Xenomai</a></h1><div class="Body3"><br>Xenomai est un module permettant d'apporter des fonctionnalités temps réel à un noyau Linux standard.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614775778507"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614775778507");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-Télécharger Xenomai"><a class="Link9" href="#Opérations sur le module Xenomai">Télécharger Xenomai</a></h2><br>On télécharge les sources de Xenomai.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">wget https://xenomai.org/downloads/xenomai/stable/xenomai-3.1.tar.bz2
tar xjfv xenomai-3.1.tar.bz2
rm -f xenomai-3.1.tar.bz2</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le noyau Linux"><a class="Link3" href="#">Opérations sur le noyau Linux</a></h1><div class="Body3"><br>Linux Kernel est le noyau Linux qui contient toutes les fonctionnalités d'une distribution Linux.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614782370020"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614782370020");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le noyau Linux-Télécharger le noyau Linux"><a class="Link9" href="#Opérations sur le noyau Linux">Télécharger le noyau Linux</a></h2><br>On télécharge les sources du noyau Linux.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">wget https://mirrors.edge.kernel.org/pub/linux/kernel/v5.x/linux-5.11.2.tar.gz
tar xzfv linux-5.11.2.tar.gz
rm -f linux-5.11.2.tar.gz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le noyau Linux-Télécharger le patch du noyau Linux"><a class="Link9" href="#Opérations sur le noyau Linux">Télécharger le patch du noyau Linux</a></h2><br>Le patch du noyau Linux contient l'ensemble des correctifs associé au noyau Linux.<br>On télécharge le patch associé au noyau Linux.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">wget https://mirrors.edge.kernel.org/pub/linux/kernel/v5.x/patch-5.11.2.xz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le noyau Linux-Appliquer le patch au noyau Linux"><a class="Link9" href="#Opérations sur le noyau Linux">Appliquer le patch au noyau Linux</a></h2><br>On applique le patch associé au noyau Linux.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br>cd linux-5.11.2/<br>xz -cd ../patch-5.x.xz | patch -p1<br><br><h3 class="Title8 GTitle3">Terminal (Output)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patching file Makefile
Reversed (or previously applied) patch detected!  Assume -R? [n]</xmp></pre></div><br>Cette trace indique que le patch a déjà été appliqué.<br>Dans ce cas, il est recommandé d'arrêter le processus (Ctrl + C).<br><br><h2 class="Title7 GTitle2" id="Opérations sur le noyau Linux-Nettoyer les répertoires de construction"><a class="Link9" href="#Opérations sur le noyau Linux">Nettoyer les répertoires de construction</a></h2><br>On supprime tous les fichiers objets obsolètes (*.o).<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make mrpoper</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le noyau Linux-Mettre à jour le système"><a class="Link9" href="#Opérations sur le noyau Linux">Mettre à jour le système</a></h2><br>On met à jour le système.<br><br><h3 class="Title8 GTitle3">Terminal (Ubuntu)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt update
sudo apt full-upgrade</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le noyau Linux-Installer les dépendances"><a class="Link9" href="#Opérations sur le noyau Linux">Installer les dépendances</a></h2><br>On installe les dépendances du noyau Linux.<br><br><h3 class="Title8 GTitle3">Terminal (Ubuntu)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install gcc clang make binutils flex bison util-linux kmod e2fsprogs jfsutils reiserfsprogs \
xfsprogs squashfs-tools btrfs-tools pcmciautils quota ppp nfs-common procps oprofile udev grub \
openssl mcelog iptables openssl libssl-dev sphinx-common</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le noyau Linux-Vérifier les version des dépendances"><a class="Link9" href="#Opérations sur le noyau Linux">Vérifier les version des dépendances</a></h2><br>On vérifie les versions des dépendances.<br><br><h3 class="Title8 GTitle3">gcc (&gt; 4.9)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc (Ubuntu 5.4.0-6ubuntu1~16.04.12) 5.4.0 20160609
Copyright (C) 2015 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.</xmp></pre></div><br><h3 class="Title8 GTitle3">clang (&gt; 10.0.1)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">clang --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">clang version 3.8.0-2ubuntu4 (tags/RELEASE_380/final)
Target: i686-pc-linux-gnu
Thread model: posix
InstalledDir: /usr/bin</xmp></pre></div><br><h3 class="Title8 GTitle3">make (&gt; 3.81)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GNU Make 4.1
Built for i686-pc-linux-gnu
Copyright (C) 1988-2014 Free Software Foundation, Inc.
License GPLv3+: GNU GPL version 3 or later &lt;http://gnu.org/licenses/gpl.html&gt;
This is free software: you are free to change and redistribute it.
There is NO WARRANTY, to the extent permitted by law.</xmp></pre></div><br><h3 class="Title8 GTitle3">binutils (&gt; 2.23)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ld -v</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GNU ld (GNU Binutils for Ubuntu) 2.26.1</xmp></pre></div><br><h3 class="Title8 GTitle3">flex (&gt; 2.5.35)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">flex --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">flex 2.6.0</xmp></pre></div><br><h3 class="Title8 GTitle3">bison (&gt; 2.0)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bison --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bison (GNU Bison) 3.0.4
Written by Robert Corbett and Richard Stallman.

Copyright (C) 2015 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.</xmp></pre></div><br><h3 class="Title8 GTitle3">util-linux (&gt; 2.10)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">fdformat --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">fdformat from util-linux 2.27.1</xmp></pre></div><br><h3 class="Title8 GTitle3">kmod (&gt; 13)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">depmod -V</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">kmod version 22
-XZ -ZLIB -EXPERIMENTAL</xmp></pre></div><br><h3 class="Title8 GTitle3">e2fsprogs (&gt; 1.41.4)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">e2fsck -V</xmp>
</pre></div><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">e2fsck 1.42.13 (17-May-2015)
        Using EXT2FS Library version 1.42.13, 17-May-2015</xmp></pre></div><br><h3 class="Title8 GTitle3">jfsutils (&gt; 1.1.3)</h3><br>	<br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">fsck.jfs -V</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">fsck.jfs version 1.1.15, 04-Mar-2011
processing started: 3/4/2021 14:42:13</xmp></pre></div><br><h3 class="Title8 GTitle3">reiserfsprogs (&gt; 3.6.3)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">reiserfsck -V</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">reiserfsck 3.6.24</xmp></pre></div><br><h3 class="Title8 GTitle3">xfsprogs (&gt; 2.6.0)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">xfs_db -V</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">xfs_db version 4.3.0</xmp></pre></div><br><h3 class="Title8 GTitle3">squashfs-tools (&gt; 4.0)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">mksquashfs -version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">mksquashfs version 4.3-git (2014/06/09)
copyright (C) 2014 Phillip Lougher &lt;phillip@squashfs.org.uk&gt;

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2,
or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.</xmp></pre></div><br><h3 class="Title8 GTitle3">btrfs-progs (&gt; 0.18)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">btrfs --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">btrfs-progs v4.4</xmp></pre></div><br><h3 class="Title8 GTitle3">pcmciautils (&gt; 004)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pccardctl -V</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pcmciautils 018
Copyright (C) 2004-2011 Dominik Brodowski, (C) 1999 David A. Hinds
Report errors and bugs to &lt;linux-pcmcia@lists.infradead.org&gt;,please.</xmp></pre></div><br><h3 class="Title8 GTitle3">quota-tools (&gt; 3.09)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">quota -V</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Quota utilities version 4.03.
Compiled with: USE_LDAP_MAIL_LOOKUP EXT2_DIRECT HOSTS_ACCESS RPC RPC_SETQUOTA BSD_BEHAVIOUR
Bugs to jack@suse.cz</xmp></pre></div><br><h3 class="Title8 GTitle3">PPP (&gt; 2.4.0) </h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pppd --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pppd version 2.4.7</xmp></pre></div><br><h3 class="Title8 GTitle3">nfs-utils (&gt; 1.0.5)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">showmount --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">showmount for 1.2.8</xmp></pre></div><br><h3 class="Title8 GTitle3">procps (&gt; 3.2.0)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ps --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">procps-ng version 3.3.10</xmp></pre></div><br><h3 class="Title8 GTitle3">oprofile (&gt; 0.9)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">opreport --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">opreport: oprofile 1.1.0 compiled on Aug 10 2016 19:51:51</xmp></pre></div><br><h3 class="Title8 GTitle3">udev (&gt; 081)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">udevadm --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">229</xmp></pre></div><br><h3 class="Title8 GTitle3">grub (&gt; 0.93)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">grub --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">grub (GNU GRUB 0.97)</xmp></pre></div><br><h3 class="Title8 GTitle3">mcelog (&gt; 0.6)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">mcelog --version</xmp></pre></div><br><h3 class="Title8 GTitle3">iptables (&gt; 1.4.2)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">iptables -V</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">iptables v1.6.0</xmp></pre></div><br><h3 class="Title8 GTitle3">openssl (&gt; 1.0.0)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">openssl version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">OpenSSL 1.0.2g 1 Mar 2016</xmp></pre></div><br><h3 class="Title8 GTitle3">bc (&gt; 1.06.95)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bc --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bc 1.06.95
Copyright 1991-1994, 1997, 1998, 2000, 2004, 2006 Free Software Foundation, Inc.</xmp></pre></div><br><h3 class="Title8 GTitle3">Sphinx (&gt; 1.3)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sphinx-build --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Sphinx (sphinx-build) 1.3.6</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le noyau Linux-Liens"><a class="Link9" href="#Opérations sur le noyau Linux">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.kernel.org/doc/html/latest/admin-guide/README.html">https://www.kernel.org/doc/html/latest/admin-guide/README.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.kernel.org/doc/html/latest/process/changes.html">https://www.kernel.org/doc/html/latest/process/changes.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur les patchs"><a class="Link3" href="#">Opérations sur les patchs</a></h1><div class="Body3"><br>Un patch est ensemble de correctifs associé à un module à une version donnée.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614788582368"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614788582368");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-Cas 1 : Patch à partir du répertoire courant"><a class="Link9" href="#Opérations sur les patchs">Cas 1 : Patch à partir du répertoire courant</a></h2><br>On décide de créer un patch à partir du répertoire courant.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.1 - Créer un module à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.1 - Créer un module à la version v1.0</a></h2><br>On crée un module à la version v1.0.<br><br><h3 class="Title8 GTitle3">module_setup_v1.0</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 50</xmp></pre></div><br>Après la révision du module à la version v1.0, on remarque une erreur à ligne (3).<br>On note l'erreur : <span class="GColor1" style="color:gray;">10 + 60 = 50</span><br>On définit le correctif : <span class="GColor1" style="color:teal;">10 + 60 = 70</span><br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.2 - Créer un correctif à la version v1.0.1"><a class="Link9" href="#Opérations sur les patchs">1.2 - Créer un correctif à la version v1.0.1</a></h2><br>On crée un correctif à la version v1.0.1.<br><br><h3 class="Title8 GTitle3">module_setup_v1.0.1</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.3 - Créer le path à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.3 - Créer le path à la version v1.0</a></h2><br>On crée un patch à la version v1.0 entre deux fichiers.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">diff -u module_setup_v1.0 module_setup_v1.0.1 &gt; module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">module_patch_v1.0.patch</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">--- module_setup_v1.0   2021-03-03 11:13:11.566919552 -0500
+++ module_setup_v1.0.1 2021-03-03 11:14:45.882919552 -0500
@@ -1,4 +1,4 @@
 10 + 10 = 20
 10 + 30 = 40
-10 + 60 = 50
+10 + 60 = 70</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.4 - Appliquer le patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.4 - Appliquer le patch à la version v1.0</a></h2><br>On applique le patch à la version v1.0 à partir du répertoire courant.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p0 &lt; module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (Output)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patching file module_setup_v1.0</xmp></pre></div><br><h3 class="Title8 GTitle3">module_setup_v1.0</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br>On remarque que le patch s'est appliqué avec succès.<br>Le correctif a bien été installé.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.5 - Réappliquer le patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.5 - Réappliquer le patch à la version v1.0</a></h2><br>On tente de réappliquer le patch à la version v1.0 pour observer le comportement du système.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p0 &lt; module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (Output)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reversed (or previously applied) patch detected!  Assume -R? [n] R</xmp></pre></div><br>Cette trace indique le patch a été déjà appliqué.<br>Dans ce cas, il est recommandé d'arrêter le processus (Ctrl + C)<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-1.6 - Annuler l'application d'un patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">1.6 - Annuler l'application d'un patch à la version v1.0</a></h2><br>On décide d'annuler un patch appliquer à la version v1.0 par inattention.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p0 -R &lt; module_setup_v1.0</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (Output)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patching file module_setup_v1.0</xmp></pre></div><br><h3 class="Title8 GTitle3">module_setup_v1.0</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 50</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-Cas 2 : Patch à partir d'un sous-répertoire"><a class="Link9" href="#Opérations sur les patchs">Cas 2 : Patch à partir d'un sous-répertoire</a></h2><br>On décide de créer un patch à partir d'un sous-répertoire.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.1 - Créer un module à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.1 - Créer un module à la version v1.0</a></h2><br>On crée un module à la version v1.0.<br><br><h3 class="Title8 GTitle3">module_repo_v1.0/module_setup</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 50</xmp></pre></div><br>Après la révision du module à la version v1.0, on remarque une erreur à ligne (3).<br>On note l'erreur : <span class="GColor1" style="color:gray;">10 + 60 = 50</span><br>On définit le correctif : <span class="GColor1" style="color:teal;">10 + 60 = 70</span><br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.2 - Créer un correctif à la version v1.0.1"><a class="Link9" href="#Opérations sur les patchs">2.2 - Créer un correctif à la version v1.0.1</a></h2><br>On crée un correctif à la version v1.0.1.<br><br><h3 class="Title8 GTitle3">module_repo_v1.0.1/module_setup</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.3 - Créer le path à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.3 - Créer le path à la version v1.0</a></h2><br>On crée un patch à la version v1.0 entre deux fichiers.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">diff -Naur module_repo_v1.0/ module_repo_v1.0.1/ &gt; module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">module_patch_v1.0.patch</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">diff -Naur module_repo_v1.0/module_setup module_repo_v1.0.1/module_setup
--- module_repo_v1.0/module_setup       2021-03-03 22:14:58.918006002 -0500
+++ module_repo_v1.0.1/module_setup     2021-03-03 21:10:36.386006002 -0500
@@ -1,3 +1,3 @@
 10 + 10 = 20
 10 + 30 = 40
-10 + 60 = 50
+10 + 60 = 70
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.4 - Appliquer le patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.4 - Appliquer le patch à la version v1.0</a></h2><br>On applique le patch à la version v1.0 à partir du sous-répertoire principal du module.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd module_repo_v1.0/
patch -p1 &lt; ../module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (Output)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patching file module_setup</xmp></pre></div><br><h3 class="Title8 GTitle3">module_repo_v1.0/module_setup</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">10 + 10 = 20
10 + 30 = 40
10 + 60 = 70</xmp></pre></div><br>On remarque que le patch s'est appliqué avec succès.<br>Le correctif a bien été installé.<br><br><h2 class="Title7 GTitle2" id="Opérations sur les patchs-2.5 - Réappliquer le patch à la version v1.0"><a class="Link9" href="#Opérations sur les patchs">2.5 - Réappliquer le patch à la version v1.0</a></h2><br>On tente de réappliquer le patch à la version v1.0 pour observer le comportement du système.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">patch -p1 &lt; ../module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (Output)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reversed (or previously applied) patch detected!  Assume -R? [n] R</xmp></pre></div><br>Cette trace indique le patch a été déjà appliqué.<br>Dans ce cas, il est recommandé d'arrêter le processus (Ctrl + C)<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur les formats de fichier xz"><a class="Link3" href="#">Opérations sur les formats de fichier xz</a></h1><div class="Body3"><br>xz est un format de fichier permettant de compresser des données.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614877234333"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614877234333");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur les formats de fichier xz-Compresser des données"><a class="Link9" href="#Opérations sur les formats de fichier xz">Compresser des données</a></h2><br>On compresse un fichier au format xz avec le niveau 9.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">xz -k9 module_patch_v1.0.patch</xmp></pre></div><br><h3 class="Title8 GTitle3">Archive xz</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">module_patch_v1.0.patch.xz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur les formats de fichier xz-Décompresser des données"><a class="Link9" href="#Opérations sur les formats de fichier xz">Décompresser des données</a></h2><br>On décompresse un fichier compressé au format xz avec un niveau quelconque entre 0 et 9.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">xz -d module_patch_v1.0.patch.xz</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur l'utilitaire tar"><a class="Link3" href="#">Opérations sur l'utilitaire tar</a></h1><div class="Body3"><br>tar est un utilitaire permettant de compresser et de décompresser des fichiers.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614879908480"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614879908480");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-Compresser un fichier au format tar.gz"><a class="Link9" href="#Opérations sur l'utilitaire tar">Compresser un fichier au format tar.gz</a></h2><br>On compresse un fichier au format tar.gz.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire tar-Décompresser un fichier au format tar.gz"><a class="Link9" href="#Opérations sur l'utilitaire tar">Décompresser un fichier au format tar.gz</a></h2><br>On décompresse un fichier au format tar.gz.<br><br><h3 class="Title8 GTitle3">Terminal</h3><br><br><br><br><br><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur l'utilitaire gcc"><a class="Link3" href="#">Opérations sur l'utilitaire gcc</a></h1><div class="Body3"><br>gcc est le compilateur C utilisé par les distributions Linux.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614939561286"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614939561286");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1 - Installer une nouvelle version"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1 - Installer une nouvelle version</a></h2><br>Dans certaine situation, il est nécessaire d'installer une version particulière de gcc.<br><br><h2 class="Title7 GTitle2" id="Opérations sur l'utilitaire gcc-1.1 - Déterminer la version en cours"><a class="Link9" href="#Opérations sur l'utilitaire gcc">1.1 - Déterminer la version en cours</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc (Ubuntu 5.4.0-6ubuntu1~16.04.12) 5.4.0 20160609
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
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Système Embarqué RaspberryPi</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1614775612367"><div class="Row26">List 1 &gt; Embedded_System &gt; rpi_conf</div></div><script>loadList1("Loader_1614775612367","Embedded_System","rpi_conf");</script></div><br></div></div></div></div><br>
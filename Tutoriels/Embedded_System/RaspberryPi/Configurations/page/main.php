<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Configurations avec le RaspberryPi</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre les configurations avec le <b>RaspberryPi</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Un <b>système embarqué</b> est un système électronique et informatique autonome, souvent temps réel, spécialisé dans une tâche précise et dont les ressources sont généralement limitées spatialement (encombrement réduit) et énergétiquement (consommation restreinte).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/b_raspberrypi_configurations.png" alt="/Tutoriels/Embedded_System/img/b_raspberrypi_configurations.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module Yocto"><a class="Link3" href="#">Opérations sur le module Yocto</a></h1><div class="Body3"><br>Yocto est un outil permettant de construire des systèmes d'exploitation Linux embarqué.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614900631373"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614900631373");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1 - Yocto"><a class="Link9" href="#Opérations sur le module Yocto">1 - Yocto</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-1.1 - Installer les dépendances"><a class="Link9" href="#Opérations sur le module Yocto">1.1 - Installer les dépendances</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install gawk wget git-core diffstat unzip texinfo gcc-multilib \
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
0 upgraded, 0 newly installed, 0 to remove and 0 not upgraded.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2 - Poky"><a class="Link9" href="#Opérations sur le module Yocto">2 - Poky</a></h2><br>Poky est la distribution Linux de référence du module Yocto.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2.1 - Télécharger Poky"><a class="Link9" href="#Opérations sur le module Yocto">2.1 - Télécharger Poky</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git clone git://git.yoctoproject.org/poky</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Cloning into 'poky'...
remote: Enumerating objects: 506093, done.
remote: Counting objects: 100% (506093/506093), done.
remote: Compressing objects: 100% (119137/119137), done.
remote: Total 506093 (delta 379034), reused 506093 (delta 379034)
Receiving objects: 100% (506093/506093), 172.38 MiB | 2.81 MiB/s, done.
Resolving deltas: 100% (379034/379034), done.
Checking connectivity... done.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-2.2 - Lister les machines"><a class="Link9" href="#Opérations sur le module Yocto">2.2 - Lister les machines</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ls -l poky/meta-yocto-bsp/conf/machine/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">total 20
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
  master</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-3 - Qemu"><a class="Link9" href="#Opérations sur le module Yocto">3 - Qemu</a></h2><br>Qemu est un émulateur d'architecture matérielle.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-3.1 - Configurer l'environnement"><a class="Link9" href="#Opérations sur le module Yocto">3.1 - Configurer l'environnement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">. oe-init-build-env</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">You had no conf/local.conf file. This configuration file has therefore been
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
git clone git://git.yoctoproject.org/meta-raspberrypi
git clone https://github.com/openembedded/meta-openembedded.git
git clone https://github.com/OSSystems/meta-gstreamer1.0.git</xmp></pre></div><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Cloning into 'meta-raspberrypi'...
remote: Enumerating objects: 8562, done.
remote: Counting objects: 100% (8562/8562), done.
remote: Compressing objects: 100% (4230/4230), done.
remote: Total 8562 (delta 4924), reused 6975 (delta 3925)
Receiving objects: 100% (8562/8562), 1.74 MiB | 677.00 KiB/s, done.
Resolving deltas: 100% (4924/4924), done.
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
 - 'oe-pkgdata-util' handles common target package tasks</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.3 - Vérifier les machines supportées"><a class="Link9" href="#Opérations sur le module Yocto">4.3 - Vérifier les machines supportées</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ls -l meta-raspberrypi/conf/machine/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">total 44
drwxrwxr-x 2 osboxes osboxes 4096 Mar  5 07:49 include
-rw-rw-r-- 1 osboxes osboxes  300 Mar  5 07:49 raspberrypi0.conf
-rw-rw-r-- 1 osboxes osboxes  585 Mar  5 07:49 raspberrypi0-wifi.conf
-rw-rw-r-- 1 osboxes osboxes  342 Mar  5 07:49 raspberrypi2.conf
-rw-rw-r-- 1 osboxes osboxes 1061 Mar  5 07:49 raspberrypi3-64.conf
-rw-rw-r-- 1 osboxes osboxes  633 Mar  5 07:49 raspberrypi3.conf
-rw-rw-r-- 1 osboxes osboxes 1005 Mar  5 07:49 raspberrypi4-64.conf
-rw-rw-r-- 1 osboxes osboxes  595 Mar  5 07:49 raspberrypi4.conf
-rw-rw-r-- 1 osboxes osboxes  402 Mar  5 07:49 raspberrypi-cm3.conf
-rw-rw-r-- 1 osboxes osboxes  244 Mar  5 07:49 raspberrypi-cm.conf
-rw-rw-r-- 1 osboxes osboxes  364 Mar  5 07:49 raspberrypi.conf</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.4 - Configurer la machine"><a class="Link9" href="#Opérations sur le module Yocto">4.4 - Configurer la machine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">nano conf/local.conf</xmp></pre></div><br><h3 class="Title8 GTitle3">conf/local.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MACHINE ??= "raspberrypi4-64"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.5 - Configurer les couches"><a class="Link9" href="#Opérations sur le module Yocto">4.5 - Configurer les couches</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd poky/rpi-build/
bitbake-layers add-layer ../meta-raspberrypi/
bitbake-layers add-layer ../meta-openembedded/meta-oe/
bitbake-layers add-layer ../meta-openembedded/meta-python/
bitbake-layers add-layer ../meta-openembedded/meta-networking/
bitbake-layers add-layer ../meta-openembedded/meta-multimedia/
bitbake-layers add-layer ../OSSystems/meta-gstreamer1.0/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">NOTE: Starting bitbake server...</xmp></pre></div><br><h3 class="Title8 GTitle3">conf/bblayers.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">POKY_BBLAYERS_CONF_VERSION = "2"

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
  /home/osboxes/Programs/ReadyOpt/kernel/linux/poky/OSSystems/meta-gstreamer1.0 \
  "</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.6 - Configurer les paramètres"><a class="Link9" href="#Opérations sur le module Yocto">4.6 - Configurer les paramètres</a></h2><br><h3 class="Title8 GTitle3">conf/local.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># Compressed deployed files
IMAGE_FSTYPES = "rpi-sdimg"
SDIMG_ROOTFS_TYPE = "ext4"

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
RASPBERRYPI_CAMERA_V2 = "1"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.7 - Construire une image"><a class="Link9" href="#Opérations sur le module Yocto">4.7 - Construire une image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">bitbake core-image-minimal</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Loading cache: 100% |                                               | ETA:  --:--:--
Loaded 0 entries from dependency cache.
Parsing recipes: 100% |##############################################| Time: 0:25:18
Parsing of 2361 .bb files complete (0 cached, 2361 parsed). 3579 targets, 142 skipped, 0 masked, 0 errors.
NOTE: Resolving any missing task queue dependencies

Build Configuration:
BB_VERSION           = "1.48.0"
BUILD_SYS            = "i686-linux"
NATIVELSBSTRING      = "universal"
TARGET_SYS           = "aarch64-poky-linux"
MACHINE              = "raspberrypi4-64"
DISTRO               = "poky"
DISTRO_VERSION       = "3.2.2"
TUNE_FEATURES        = "aarch64 armv8a crc crypto cortexa72"
TARGET_FPU           = ""
meta
meta-poky
meta-yocto-bsp       = "local-yocto-3.2.2:d5d6286a66f46f4523e35e0e3f20cd7396195fdc"
meta-raspberrypi     = "master:853ccd744073fcc03a732c99b817fe1bd5b23327"
meta-oe
meta-python
meta-networking
meta-multimedia      = "master:98175fd0cc6eefe4db9484131bb98f0516c0d1a5"
meta-gstreamer1.0    = "master:48b7aabbc7f0792263de09a30a0ce3b0b94bf6be"

Initialising tasks: 100% |###########################################| Time: 0:00:12
Sstate summary: Wanted 2 Found 0 Missed 2 Current 1041 (0% match, 99% complete)
NOTE: Executing Tasks
NOTE: Tasks Summary: Attempted 2875 tasks of which 2866 didn't need to be rerun and all succeeded</xmp></pre></div>.<br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.8 - Vérifier l'image"><a class="Link9" href="#Opérations sur le module Yocto">4.8 - Vérifier l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ls -l tmp/deploy/images/raspberrypi4-64/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[...]
# fichiers réels
core-image-minimal-raspberrypi4-64-20210309010915.rootfs.ext4
core-image-minimal-raspberrypi4-64-20210309010915.rootfs.manifest
core-image-minimal-raspberrypi4-64-20210309010915.rootfs.rpi-sdimg
core-image-minimal-raspberrypi4-64-20210309010915.testdata.json
core-image-minimal-raspberrypi4-64-20210309010915.vfat
# liens vers les fichiers réels
core-image-minimal-raspberrypi4-64.ext4 -&gt; core-image-minimal-raspberrypi4-64-20210309010915.rootfs.ext4
core-image-minimal-raspberrypi4-64.manifest -&gt; core-image-minimal-raspberrypi4-64-20210309010915.rootfs.manifest
core-image-minimal-raspberrypi4-64.rpi-sdimg -&gt; core-image-minimal-raspberrypi4-64-20210309010915.rootfs.rpi-sdimg
core-image-minimal-raspberrypi4-64.testdata.json -&gt; core-image-minimal-raspberrypi4-64-20210309010915.testdata.json
core-image-minimal-raspberrypi4-64.vfat -&gt; core-image-minimal-raspberrypi4-64-20210309010915.vfat
[...]</xmp></pre></div><br>On s'intéresse ici à l'image :<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">core-image-minimal-raspberrypi4-64.rpi-sdimg</xmp></pre></div><br>qui correspond à :<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">core-image-minimal-raspberrypi4-64-20210310095813.rootfs.rpi-sdimg</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.9 - Vérifier si le disque est monté"><a class="Link9" href="#Opérations sur le module Yocto">4.9 - Vérifier si le disque est monté</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">lsblk</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">NAME   MAJ:MIN RM   SIZE RO TYPE MOUNTPOINT
sr0     11:0    1  1024M  0 rom
sdc      8:32   1 119.1G  0 disk
├─sdc2   8:34   1   119G  0 part /media/rpidisk/ROOT
└─sdc1   8:33   1    94M  0 part /media/rpidisk/BOOT
sda      8:0    0   500G  0 disk
├─sda4   8:4    0 270.1G  0 part /home
├─sda2   8:2    0   954M  0 part /boot
├─sda3   8:3    0   8.4G  0 part [SWAP]
└─sda1   8:1    0 220.6G  0 part /</xmp></pre></div><br>Dans notre cas, le disque est monté :<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sdc      8:32   1 119.1G  0 disk
├─sdc2   8:34   1   119G  0 part /media/rpidisk/ROOT
└─sdc1   8:33   1    94M  0 part /media/rpidisk/BOOT</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.10 - Démonter le disque s'il est monté"><a class="Link9" href="#Opérations sur le module Yocto">4.10 - Démonter le disque s'il est monté</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo umount /dev/sdc1
sudo umount /dev/sdc2</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">lsblk</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">NAME   MAJ:MIN RM   SIZE RO TYPE MOUNTPOINT
sr0     11:0    1  1024M  0 rom
sdc      8:32   1 119.1G  0 disk
├─sdc2   8:34   1   119G  0 part
└─sdc1   8:33   1    94M  0 part
sda      8:0    0   500G  0 disk
├─sda4   8:4    0 270.1G  0 part /home
├─sda2   8:2    0   954M  0 part /boot
├─sda3   8:3    0   8.4G  0 part [SWAP]
└─sda1   8:1    0 220.6G  0 part /</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.11 - Copier l'image"><a class="Link9" href="#Opérations sur le module Yocto">4.11 - Copier l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">cd tmp/deploy/images/raspberrypi4-64/
sudo cp core-image-minimal-raspberrypi4-64.rpi-sdimg /dev/sdc</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">lsblk -o model,name,type,fstype,size,label,mountpoint</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MODEL            NAME   TYPE FSTYPE   SIZE LABEL   MOUNTPOINT
CD-ROM           sr0    rom          1024M
Storage Device   sdc    disk        119.1G
                 ├─sdc2 part ext4      12M
                 └─sdc1 part vfat      48M rpi4-64
VBOX HARDDISK    sda    disk          500G
                 ├─sda4 part ext4   270.1G         /home
                 ├─sda2 part ext4     954M         /boot
                 ├─sda3 part swap     8.4G         [SWAP]
                 └─sda1 part ext4   220.6G         /</xmp><br></pre></div><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.12 - Créer un point de montage s'il n'existe pas"><a class="Link9" href="#Opérations sur le module Yocto">4.12 - Créer un point de montage s'il n'existe pas</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mkdir -p /media/rpidisk/BOOT
sudo mkdir -p /media/rpidisk/ROOT</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.13 - Monter le disque"><a class="Link9" href="#Opérations sur le module Yocto">4.13 - Monter le disque</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo mount /dev/sdc1 /media/rpidisk/BOOT/
sudo mount /dev/sdc2 /media/rpidisk/ROOT/</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-4.14 - Vérifier le contenu du disque"><a class="Link9" href="#Opérations sur le module Yocto">4.14 - Vérifier le contenu du disque</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ls -l /media/rpidisk/BOOT/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">total 44654
-rwxr-xr-x 1 root root    35678 Nov 25  1961 bcm2711-rpi-400.dtb
-rwxr-xr-x 1 root root    35920 Nov 25  1961 bcm2711-rpi-4-b.dtb
-rwxr-xr-x 1 root root    36021 Nov 25  1961 bcm2711-rpi-cm4.dtb
-rwxr-xr-x 1 root root    52456 Nov 25  1961 bootcode.bin
-rwxr-xr-x 1 root root      262 Nov 25  1961 boot.scr
-rwxr-xr-x 1 root root      100 Nov 25  1961 cmdline.txt
-rwxr-xr-x 1 root root    36328 Nov 25  1961 config.txt
-rwxr-xr-x 1 root root     3179 Nov 25  1961 fixup4cd.dat
-rwxr-xr-x 1 root root     5430 Nov 25  1961 fixup4.dat
-rwxr-xr-x 1 root root     8447 Nov 25  1961 fixup4db.dat
-rwxr-xr-x 1 root root     8443 Nov 25  1961 fixup4x.dat
-rwxr-xr-x 1 root root     3179 Nov 25  1961 fixup_cd.dat
-rwxr-xr-x 1 root root     7302 Nov 25  1961 fixup.dat
-rwxr-xr-x 1 root root    10291 Nov 25  1961 fixup_db.dat
-rwxr-xr-x 1 root root    10289 Nov 25  1961 fixup_x.dat
-rwxr-xr-x 1 root root 22991360 Nov 25  1961 Image
-rwxr-xr-x 1 root root       50 Nov 25  1961 image-version-info
-rwxr-xr-x 1 root root   512264 Nov 25  1961 kernel8.img
drwxr-xr-x 2 root root     3072 Nov 25  1961 overlays
-rwxr-xr-x 1 root root        0 Nov 25  1961 rpi-bootfiles-20210205.stamp
-rwxr-xr-x 1 root root   791996 Nov 25  1961 start4cd.elf
-rwxr-xr-x 1 root root  3720904 Nov 25  1961 start4db.elf
-rwxr-xr-x 1 root root  2227200 Nov 25  1961 start4.elf
-rwxr-xr-x 1 root root  2979624 Nov 25  1961 start4x.elf
-rwxr-xr-x 1 root root   791996 Nov 25  1961 start_cd.elf
-rwxr-xr-x 1 root root  4792808 Nov 25  1961 start_db.elf
-rwxr-xr-x 1 root root  2951392 Nov 25  1961 start.elf
-rwxr-xr-x 1 root root  3703208 Nov 25  1961 start_x.elf</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ls -l /media/rpidisk/ROOT/</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">total 27
drwxr-xr-x  2 root root  1024 Mar  9  2018 bin
drwxr-xr-x  2 root root  1024 Mar  9  2018 boot
drwxr-xr-x  2 root root  1024 Mar  9  2018 dev
drwxr-xr-x 19 root root  1024 Mar  9  2018 etc
drwxr-xr-x  3 root root  1024 Mar  9  2018 home
drwxr-xr-x  4 root root  1024 Mar  9  2018 lib
drwx------  2 root root 12288 Mar 10 05:00 lost+found
drwxr-xr-x  2 root root  1024 Mar  9  2018 media
drwxr-xr-x  2 root root  1024 Mar  9  2018 mnt
dr-xr-xr-x  2 root root  1024 Mar  9  2018 proc
drwxr-xr-x  2 root root  1024 Mar  9  2018 run
drwxr-xr-x  2 root root  1024 Mar  9  2018 sbin
dr-xr-xr-x  2 root root  1024 Mar  9  2018 sys
drwxrwxrwt  2 root root  1024 Mar  9  2018 tmp
drwxr-xr-x 10 root root  1024 Mar  9  2018 usr
drwxr-xr-x  8 root root  1024 Mar  9  2018 var</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">more /media/rpidisk/BOOT/cmdline.txt</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">dwc_otg.lpm_enable=0 root=/dev/mmcblk0p2 rootfstype=ext4 rootwait kgdboc=serial0,115200 logo.nologo</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">more /media/rpidisk/BOOT/config.txt</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">
################################################################################
##  Raspberry Pi Configuration Settings
##
##  Revision 16, 2013/06/22
##
##  Details taken from the eLinux wiki
##  For up-to-date information please refer to wiki page.
##
##  Wiki Location : http://elinux.org/RPiconfig
##
##
##  Description:
##    Details of each setting are described with each section that begins with
##    a double hashed comment ('##')
##    It is up to the user to remove the single hashed comment ('#') from each
##    option they want to enable, and to set the specific value of that option.
##
##  Overclock settings will be disabled at runtime if the SoC reaches temp_limit
##
################################################################################

################################################################################
##  Standard Definition Video Settings
################################################################################

## sdtv_mode
##     defines the TV standard for composite output
##
##     Value    Description
##     -------------------------------------------------------------------------
##     0        Normal NTSC (Default)
##     1        Japanese version of NTSC - no pedestal
##     2        Normal PAL
##     3        Brazilian version of PAL - 525/60 rather than 625/50, different
##              subcarrier
##
#sdtv_mode=0
--More--(3%)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-5 - Kas"><a class="Link9" href="#Opérations sur le module Yocto">5 - Kas</a></h2><br>Kas est un module simplifiant la configuration des projets basés sur bitbake.<br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-5.1 - Installer Kas"><a class="Link9" href="#Opérations sur le module Yocto">5.1 - Installer Kas</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo pip3 install kas</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">The directory '/home/osboxes/.cache/pip/http' or its parent directory is not owned by the current user and the cache has been disabled. Please check the permissions and owner of that directory. If executing pip with sudo, you may want sudo's -H flag.
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
You should consider upgrading via the 'pip install --upgrade pip' command.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Yocto-Liens"><a class="Link9" href="#Opérations sur le module Yocto">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.yoctoproject.org/docs/current/mega-manual/mega-manual.html">https://www.yoctoproject.org/docs/current/mega-manual/mega-manual.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.yoctoproject.org/brief-yoctoprojectqs/index.html">https://docs.yoctoproject.org/brief-yoctoprojectqs/index.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://meta-raspberrypi.readthedocs.io/en/latest/">https://meta-raspberrypi.readthedocs.io/en/latest/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://kas.readthedocs.io/en/1.0/intro.html">https://kas.readthedocs.io/en/1.0/intro.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module Xenomai"><a class="Link3" href="#">Opérations sur le module Xenomai</a></h1><div class="Body3"><br>Xenomai est un module permettant d'apporter des fonctionnalités temps réel à un noyau Linux standard.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1614775778507"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1614775778507");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-1 - Xenomai"><a class="Link9" href="#Opérations sur le module Xenomai">1 - Xenomai</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module Xenomai-1.1 - Télécharger Xenomai"><a class="Link9" href="#Opérations sur le module Xenomai">1.1 - Télécharger Xenomai</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">wget https://xenomai.org/downloads/xenomai/stable/xenomai-3.1.tar.bz2
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
<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Ressources</div></a></div></div><div class="Body2 Orange"><b>ReadyDev</b> est une Plateforme de Développement Continu.<br>C'est un site web développé en PHP et maintenu par <b>Gérard KESSE</b>.<br>Vous trouverez sur ce site des <b>cours</b> et des <b>tutoriels</b> adaptés aux sciences de l'ingénieur. <br><br>Bienvenue dans l'espace des ressources.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1598599958873"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1598599958873");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module RaspberryPi"><a class="Link3" href="#">Opérations sur le module RaspberryPi</a></h1><div class="Body3"><br>Le RaspberryPi est un mini PC embarqué.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1615596147789"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1615596147789");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1 - Carte SD"><a class="Link9" href="#Opérations sur le module RaspberryPi">1 - Carte SD</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1 - Préparer une image Lite avec Raspberry Pi Imager sous Windows"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1 - Préparer une image Lite avec Raspberry Pi Imager sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.1 - Télécharger Raspberry Pi Imager"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.1 - Télécharger Raspberry Pi Imager</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/imager/imager_1.5.exe">https://downloads.raspberrypi.org/imager/imager_1.5.exe</a><br><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.2 - Installer Raspberry Pi Imager"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.2 - Installer Raspberry Pi Imager</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Raspberry Pi Imager
Install
Finish</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.3 - Configurer le système d'exploitation"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.3 - Configurer le système d'exploitation</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.3.1 - Cas d'une image prédéfinie"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.3.1 - Cas d'une image prédéfinie</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Raspberry Pi Imager
Système d'exploitation
Choisissez l'OS
Raspberry Pi OS (other)
Raspberry Pi OS Lite (32-bit)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.3.2 - Cas d'une image personnalisée"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.3.2 - Cas d'une image personnalisée</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.3.2.1 - Télécharger Raspberry Pi OS Lite"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.3.2.1 - Télécharger Raspberry Pi OS Lite</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-01-12/2021-01-11-raspios-buster-armhf-lite.zip">https://downloads.raspberrypi.org/raspios_lite_armhf/images/raspios_lite_armhf-2021-01-12/2021-01-11-raspios-buster-armhf-lite.zip</a><br><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.3.2.1 - Configurer l'image personnalisée"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.3.2.1 - Configurer l'image personnalisée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Raspberry Pi Imager
Système d'exploitation
Choisissez l'OS
Utiliser une image personnalisée
2021-01-11-raspios-buster-armhf-lite.img</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.4 - Configurer la carte SD"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.4 - Configurer la carte SD</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Raspberry Pi Imager
Carte SD
Choisissez la Carte SD
Mass Storage device USB Device - 127.9 GB</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-1.1.5 - Écrire l'image sur la carte SD"><a class="Link9" href="#Opérations sur le module RaspberryPi">1.1.5 - Écrire l'image sur la carte SD</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Raspberry Pi Imager
Écrire
Continuer ? -&gt; Oui
Retirer la carte -&gt; Continuer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-2 - Réseau"><a class="Link9" href="#Opérations sur le module RaspberryPi">2 - Réseau</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-2.1 - Configurer le réseau WiFi"><a class="Link9" href="#Opérations sur le module RaspberryPi">2.1 - Configurer le réseau WiFi</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-2..1.1 - Configurer les paramètres WiFi"><a class="Link9" href="#Opérations sur le module RaspberryPi">2..1.1 - Configurer les paramètres WiFi</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">sudo nano /etc/wpa_supplicant/wpa_supplicant.conf</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
update_config=1
country=FR

network={
        ssid="ReadyDev"
        psk="iConnect"
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-2.1.2 - Vérifier la connexion WiFi"><a class="Link9" href="#Opérations sur le module RaspberryPi">2.1.2 - Vérifier la connexion WiFi</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ip a s</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">1: lo: &lt;LOOPBACK,UP,LOWER_UP&gt; mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host
       valid_lft forever preferred_lft forever
2: eth0: &lt;NO-CARRIER,BROADCAST,MULTICAST,UP&gt; mtu 1500 qdisc mq state DOWN group default qlen 1000
    link/ether dc:a6:32:e1:9b:e4 brd ff:ff:ff:ff:ff:ff
3: wlan0: &lt;BROADCAST,MULTICAST,UP,LOWER_UP&gt; mtu 1500 qdisc pfifo_fast state UP group default qlen 1000
    link/ether dc:a6:32:e1:9b:e6 brd ff:ff:ff:ff:ff:ff
    inet 192.168.1.45/24 brd 192.168.1.255 scope global dynamic noprefixroute wlan0
       valid_lft 34081sec preferred_lft 28681sec
    inet6 2a01:e0a:5ee:d720:c1cb:6797:cc7b:a6a0/64 scope global dynamic mngtmpaddr noprefixroute
       valid_lft 86202sec preferred_lft 86202sec
    inet6 fe80::3934:d541:bac1:482d/64 scope link
       valid_lft forever preferred_lft forever
4: wlan1: &lt;BROADCAST,MULTICAST,UP,LOWER_UP&gt; mtu 1500 qdisc mq state UP group default qlen 1000
    link/ether e8:4e:06:34:ff:24 brd ff:ff:ff:ff:ff:ff
    inet 192.168.1.23/24 brd 192.168.1.255 scope global dynamic noprefixroute wlan1
       valid_lft 37141sec preferred_lft 31741sec
    inet6 2a01:e0a:5ee:d720:e7a0:cd9:e0db:87e2/64 scope global dynamic mngtmpaddr noprefixroute
       valid_lft 86202sec preferred_lft 86202sec
    inet6 fe80::2199:7cea:c474:d91/64 scope link
       valid_lft forever preferred_lft forever</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-3 - Système"><a class="Link9" href="#Opérations sur le module RaspberryPi">3 - Système</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-3.1 - Mettre à jour le système"><a class="Link9" href="#Opérations sur le module RaspberryPi">3.1 - Mettre à jour le système</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt update</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Get:1 http://raspbian.raspberrypi.org/raspbian buster InRelease [15.0 kB]
Hit:2 http://archive.raspberrypi.org/debian buster InRelease
Get:3 http://raspbian.raspberrypi.org/raspbian buster/main armhf Packages [13.0 MB]
Fetched 13.0 MB in 7s (1,741 kB/s)
Reading package lists... Done
Building dependency tree
Reading state information... Done
48 packages can be upgraded. Run 'apt list --upgradable' to see them.</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt upgrade</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reading package lists... Done
Building dependency tree
Reading state information... Done
Calculating upgrade... Done
0 upgraded, 0 newly installed, 0 to remove and 0 not upgraded.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-4 - SSH"><a class="Link9" href="#Opérations sur le module RaspberryPi">4 - SSH</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-4.1 - Installer le serveur SSH"><a class="Link9" href="#Opérations sur le module RaspberryPi">4.1 - Installer le serveur SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install openssh-server</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Reading package lists... Done
Building dependency tree
Reading state information... Done
openssh-server is already the newest version (1:7.9p1-10+deb10u2).
0 upgraded, 0 newly installed, 0 to remove and 0 not upgraded.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-4.2 - Démarrer le serveur SSH"><a class="Link9" href="#Opérations sur le module RaspberryPi">4.2 - Démarrer le serveur SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo systemctl start ssh</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-4.3 - Vérifier l'état du serveur SSH"><a class="Link9" href="#Opérations sur le module RaspberryPi">4.3 - Vérifier l'état du serveur SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo systemctl status ssh</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">● ssh.service - OpenBSD Secure Shell server
   Loaded: loaded (/lib/systemd/system/ssh.service; disabled; vendor preset: enabled)
   Active: active (running) since Sat 2021-03-13 05:42:12 GMT; 11h ago
     Docs: man:sshd(8)
           man:sshd_config(5)
 Main PID: 960 (sshd)
    Tasks: 1 (limit: 4915)
   CGroup: /system.slice/ssh.service
           └─960 /usr/sbin/sshd -D

Mar 13 05:42:12 raspberrypi sshd[960]: Server listening on :: port 22.
Mar 13 05:42:12 raspberrypi systemd[1]: Started OpenBSD Secure Shell server.
Mar 13 05:43:16 raspberrypi sshd[968]: Accepted password for pi from 192.168.1.39 port 52100 ssh2
Mar 13 05:43:16 raspberrypi sshd[968]: pam_unix(sshd:session): session opened for user pi by (uid=0)
Mar 13 05:43:17 raspberrypi sshd[975]: Accepted password for pi from 192.168.1.39 port 52101 ssh2
Mar 13 05:43:17 raspberrypi sshd[975]: pam_unix(sshd:session): session opened for user pi by (uid=0)
Mar 13 12:57:15 raspberrypi sshd[3564]: Accepted password for pi from 192.168.1.39 port 52286 ssh2
Mar 13 12:57:15 raspberrypi sshd[3564]: pam_unix(sshd:session): session opened for user pi by (uid=0)
Mar 13 12:57:15 raspberrypi sshd[3567]: Accepted password for pi from 192.168.1.39 port 52287 ssh2
Mar 13 12:57:15 raspberrypi sshd[3567]: pam_unix(sshd:session): session opened for user pi by (uid=0)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module RaspberryPi-4.4 - Démarrer la connexion SSH avec MobaXterm"><a class="Link9" href="#Opérations sur le module RaspberryPi">4.4 - Démarrer la connexion SSH avec MobaXterm</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">MobaXterm
Session
SSH

Basic SSH settings
Remote ssh -&gt; 192.168.1.45
Check -&gt; Specify username -&gt; pi

Bookmark settings
Session name -&gt; Ubuntu

OK</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le module Jenkins"><a class="Link3" href="#">Opérations sur le module Jenkins</a></h1><div class="Body3"><br>Jenkins est un outil d'intégration continue.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1615543323116"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1615543323116");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-1 - Installer Jenkins"><a class="Link9" href="#Opérations sur le module Jenkins">1 - Installer Jenkins</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-1.1 - Installer Jenkins sous Windows"><a class="Link9" href="#Opérations sur le module Jenkins">1.1 - Installer Jenkins sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-1.1.1 - Télécharger Jenkins"><a class="Link9" href="#Opérations sur le module Jenkins">1.1.1 - Télécharger Jenkins</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://ftp.halifax.rwth-aachen.de/jenkins/windows-stable/">http://ftp.halifax.rwth-aachen.de/jenkins/windows-stable/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://ftp.halifax.rwth-aachen.de/jenkins/windows-stable/jenkins-2.235.2.zip">http://ftp.halifax.rwth-aachen.de/jenkins/windows-stable/jenkins-2.235.2.zip</a><br><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-1.1.2 - Installer Jenkins"><a class="Link9" href="#Opérations sur le module Jenkins">1.1.2 - Installer Jenkins</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Destination Folder -&gt; C:\Program Files (x86)\Jenkins
Next -&gt; Install -&gt; Finish</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-1.1.3 - Démarrer Jenkins"><a class="Link9" href="#Opérations sur le module Jenkins">1.1.3 - Démarrer Jenkins</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8080/">http://localhost:8080/</a><br><br><b>Copier le mot de passe administrateur</b><br><br><h3 class="Title8 GTitle3">secrets\initialAdminPassword</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">102145093e0f477cb50c00322868d17f</xmp></pre></div><br><b>Saisir le mot de passe administrateur</b><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Mot de passe administrateur -&gt; 102145093e0f477cb50c00322868d17f
Continuer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-2 - Intégrer un projet C/C++ GitHub avec Jenkins"><a class="Link9" href="#Opérations sur le module Jenkins">2 - Intégrer un projet C/C++ GitHub avec Jenkins</a></h2><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-2.1 - Installer le plugin Blue Ocean"><a class="Link9" href="#Opérations sur le module Jenkins">2.1 - Installer le plugin Blue Ocean</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Jenkins
Administrer Jenkins
Gestion des Plugins
Disponibles
Check -&gt; Blue Ocean
Install without restart
Revenir en haut de la page</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-2.2 - Générer un token GitHub"><a class="Link9" href="#Opérations sur le module Jenkins">2.2 - Générer un token GitHub</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GitHub
Settings
Developer settings
Personal access tokens
Generate new token
Note -&gt; jenkins-example
Check -&gt; repo
Check -&gt; admin:repo_hook
User -&gt; Check -&gt; read:user
User -&gt; Check -&gt; read:email
Generate token
</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Token -&gt; daf252b46c7ae33a53426d808fb9c051e9a0f8c9</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-2.3 - Créer un pipeline"><a class="Link9" href="#Opérations sur le module Jenkins">2.3 - Créer un pipeline</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Jenkins
Open Blue Ocean
Create a new Pipeline -&gt; GitHub
Connect to GitHub -&gt; daf252b46c7ae33a53426d808fb9c051e9a0f8c9 -&gt; Connect
Which organization does the repository belong to? -&gt; gkesse
Choose a repository -&gt; ReadyJenkins
Create Pipeline</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-2.4 - Créer un stage"><a class="Link9" href="#Opérations sur le module Jenkins">2.4 - Créer un stage</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Jenkins
ReadyJenkins
Start -&gt; (+)
Name your stage -&gt; Build -&gt; Add step
Choose step type -&gt; Print Message
Message -&gt; Jenkins Minute Pipeline
Save
Description -&gt; Initial Commit with Jenkins
Check -&gt; Commit to master
Save & run</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-2.5 - Vérifier le pipeline avec GitHub"><a class="Link9" href="#Opérations sur le module Jenkins">2.5 - Vérifier le pipeline avec GitHub</a></h2><br><h3 class="Title8 GTitle3">GitHub/ReadyJenkins/Jenkinsfile</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Jenkins Minute Pipeline'
      }
    }

  }
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Opérations sur le module Jenkins-2.6 - Tester le pipeline"><a class="Link9" href="#Opérations sur le module Jenkins">2.6 - Tester le pipeline</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Jenkins
ReadyJenkins
Branch -&gt; master
Rerun</xmp></pre></div><br><h3 class="Title8 GTitle3">&gt; Check out from version control</h3><br><br><br><br><br><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Opérations sur le réseau Facebook"><a class="Link3" href="#">Opérations sur le réseau Facebook</a></h1><div class="Body3"><br>Facebook est un réseau social.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1615542838000"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1615542838000");</script></div><br><h2 class="Title7 GTitle2" id="Opérations sur le réseau Facebook-1 - Vider le cache de partage"><a class="Link9" href="#Opérations sur le réseau Facebook">1 - Vider le cache de partage</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://developers.facebook.com/tools/debug/?locale=fr_FR">https://developers.facebook.com/tools/debug/?locale=fr_FR</a><br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">URL -&gt; https://readydev.ovh/Accueil/ -&gt; Débuguer</xmp></pre></div><br></div></div></div></div><br>
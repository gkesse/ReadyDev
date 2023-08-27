<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#devops">DevOps</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/devops/cours">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre les technologie DevOps</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à les technologies <b>DevOps</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#recommandations-techniques">Recommandations techniques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#la-machine-virtuelle-virtualbox">La machine virtuelle VirtualBox</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-systeme-d-exploitation-ubuntu">Le système d'exploitation Ubuntu</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-systeme-d-exploitation-windows">Le système d'exploitation Windows</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-systeme-de-gestion-de-versions-gitlab">Le système de gestion de versions GitLab</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#a-suivre---">À suivre...</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>Un problème auquel de nombreux développeurs sont confrontés est que les logiciels sont complexes et ne deviennent que de plus en plus complexes avec le temps. Une seule modification du logiciel peut entraîner de nombreux bogues inattendus qui peuvent ne pas être découverts à temps. Grâce à l'intégration continue, nous pouvons tester automatiquement le logiciel avant sa sortie.
En utilisant d'autres outils, tels que SonarQube, nous pouvons nous assurer que notre code respecte les dernières normes. Mettre en place&nbsp;les tests et l'automatisation nécessite divers outils et des techniques d'intégration continue pour garantir une certaine qualité logicielle. Des outils tels que Git, Jasmine, Karma, Selenium, Protractor, Gulp, Jenkins, SonarQube et Postman peuvent être utilisés pour garantir que notre logiciel soit à la hauteur. Enfin, pour réduire davantage les risques d'erreur humaine, les technologies <b>DevOps </b>permettent de déployer automatiquement notre logiciel dans un autre environnement afin de pouvoir passer d'un commit Git à un déploiement en production entièrement automatisé tout en dormant tranquillement la nuit.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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IWAywAADDDDAAAPFDRR/QalVz4UBBhhggAEGxt2AgCW1M8AAAwwwwAADhQ0oaOGCjntit/16rQwwwAADDAgXAiYDDDDAAAMMMFDcQPEXlFr1XBhggAEGGGBg3A0IWFI7AwwwwAADDDBQ2ICCFi7ouCd226/XygADDDDAgHAhYDLAAAMMMMAAA8UNFH9BqVXPhQEGGGCAAQbG3YCAJbUzwAADDDDAAAOFDSho4YKOe2K3/XqtDDDAAAMMCBcCJgMMMMAAAwwwUNxA8ReUWvVcGGCAAQYYYGDcDQhYUjsDDDDAAAMMMFDYgIIWLui4J3bbr9fKAAMMMMCAcCFgMsDA4mxgySWXrNZbb71q8803rx71qEdVj3/846sddthh4mvbbbetHv3oR9f/v/7661d3uctd7Pgd/BlgYFEYcHBZnA8uPvsd6zcH5wMPPLB6zWte0/nroIMOql7ykpdUe++9d/313Oc+t3rGM55Rbb311lUO9EsttdSi+AXv7XusscYa1c4771y99rWvrc4666zqyiuvrK699trqF7/4RfWrX/1q4usnP/lJ9b3vfa/+/4997GN1O+60007V6quvXt3pTnfqbX3sG+7YfYP6qm8LA4rUokh2wmPa2zn22GOr3//+99Vf//rXzl9//vOfq1tvvbX67W9/W3/ddNNN1Y9//OPqqquuqi644ILqxBNPrF75ylfWB3oG2++Hll566erpT396deaZZ1bXX3999ac//an6xz/+Uf373/+u/vOf/1RTH/m3fOX///nPf1a33XZb9YMf/KD68Ic/XO24447VMsss4/d7TH+//d61/71Tq5FqNdIP2SHZIY2FgXe+8511sJp60J7r33PA//vf/14Hr8suu6w64IADqnve857Vne9857Go6yg764w2rbPOOtXb3/726oYbbqjrN5d2SP1/+MMfVkcccUS17rrrqr19mt89BkobELBG2dn7mfFwc0cFrMFg8K9//av65S9/WR133HHVxhtv7EA/zU4+wXPTTTetTj311HpUMKNRJR4JuhlhPOmkk+rXF3DH4/fa/ls7LyIDCr2ICl06GXu9aQ7EpdtyUQSsBIUc6HM6MacN11xzTW07pW0zZ+0DH/hAXaPUquSjqf173/veerJ8aUNezzGGgbE1MLYb7iA25SBmJ/C/vwuLKmA1geH222+vDj300GrllVfm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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="recommandations-techniques">Recommandations techniques</a>
</h1>
<div class="Section6"><br>Pour tester les extraits de code dans ce tutoriel, vous aurez besoin des éléments suivants:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une machine virtuelle (VirtualBox).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un système d'exploitation (Ubuntu Server).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un système de gestion de versions (Git).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un hébergeur Git (GitLab).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Créer un compte Ubuntu (si vous voulez la version Ubuntu Pro).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien vers VirtualBox:&nbsp;<a class="GLink3 Link4" href="https://www.virtualbox.org/wiki/Downloads" target="_blank" style="color: lime;">https://www.virtualbox.org/wiki/Downloads</a></div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien vers Ubuntu Server:&nbsp;<a class="GLink3 Link4" href="https://ubuntu.com/download/server" target="_blank" style="color: lime;">https://ubuntu.com/download/server</a></div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien vers Ubuntu Login:&nbsp;<a class="GLink3 Link4" href="https://login.ubuntu.com/" target="_blank" style="color: lime;">https://login.ubuntu.com/</a></div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien vers Git:&nbsp;<a class="GLink3 Link4" href="https://git-scm.com/downloads" target="_blank" style="color: lime;">https://git-scm.com/downloads</a></div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien vers GitLab:&nbsp;<a class="GLink3 Link4" href="https://about.gitlab.com/install/#ubuntu" target="_blank" style="color: lime;">https://about.gitlab.com/install/#ubuntu</a></div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="la-machine-virtuelle-virtualbox">La machine virtuelle VirtualBox</a>
</h1>
<div class="Section6"><br>VirtualBox est un logiciel de virtualisation matérielle. Il nous permet d'exécuter simultanément sur notre machine hôte (Windows), plusieurs systèmes d'exploitation invité (Linux) dans des environnements isolés.<br><br>Si jamais vous perdez le curseur de votre souris dans la VM et que vous ne pouvez pas désélectionner, minimiser ou fermer votre VM, utilisez la touche (Ctrl Droite) pour que votre VM perde le focus.<br><br>Considérons l'extrait de code suivant qui crée une nouvelle machine virtuelle:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
Machine
Nouvelle
Nom &gt; devopsvm
Folder &gt; C:\Users\tiaka\VirtualBox VMs
ISO Image &gt; ubuntu-22.04.3-live-server-amd64.iso
Type &gt; Linux
Version &gt; Ubuntu (64-bit)
Suivant
Mémoire vive &gt; 4096 MB
Processors &gt; 1
Suivant
Cocher &gt; Create a Virtual Hard Disk Now
Disk Size &gt; 25,00 Gio
Suivant
Finish
#================================================</pre><br>Considérons l'extrait de code suivant qui installe le système d'exploitation Ubuntu:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
Machine
Démarrer
Démarrage normal
Language &gt; Français
Configuration clavier
Disposition &gt; French
Variante &gt; French - French (Legacy)
Terminé
Type installation
Cocher &gt; Ubuntu Server
Terminé
Connexion réseau
Name &gt; enp0s3
Terminé
Configuration proxy
Adresse de proxy &gt; (si nécessaire sinon vide)
Terminé
Configuration archive Ubuntu
Adresse miroir &gt; http://fr.archive.ubuntu.com/ubuntu
Terminé
Configuration stockage
Cocher &gt; Utilisez un disque entier
Décocher &gt; Set up this disk as an LM group
Terminé
Terminé
Continuer
Configuration profil
Votre nom &gt; *******
Le nom de la machine &gt; devopsvm
Choisir un nom d'utilisateur &gt; *******
Choisir un mot de passe &gt; *******
Confirmer votre mot de passe &gt; *******
Terminé
Continue
Configuration SSH
Cocher &gt; Installer le serveur OpenSSH
Terminé
Termnié
(éjecter l'image ISO du lecteur de disque)
Redémarrer maintenant
#================================================</pre><br>Nous utiliserons cette machine virtuelle VM (Virtual Machine) pour simuler un serveur du monde réel.<br><br>Considérons l'extrait de code suivant qui retire un disque du lecteur virtuel de notre VM:&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
Machine
Configuration
Stockage
Contrôleur IDE
Lecteur disque
Attribus
Lecteur optique
(Cliquer sur le disque)
Retirer le disque du lecteur virtuel
OK
#================================================</pre><br>Nous aurons besoin d'accéder à notre serveur Ubuntu exécuté sur la machine virtuelle à partir de notre hôte.&nbsp;Pour ce faire, nous devons d'abord fermer notre VM, accéder aux paramètres de notre VM, accéder à l'onglet Réseau, configurer la carte réseau de notre VM, enregistrer les modifications et redémarrer notre VM.<br><br>Considérons l'extrait de code suivant qui arrête notre VM:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
sudo shutdown -h now
#================================================</pre><br>Considérons l'extrait de code suivant qui redémarre notre VM:<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
sudo shutdown -r now
#================================================</pre><br>Considérons l'extrait de code suivant qui configure la carte réseau de notre VM:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
Machine
Configuration
Réseau
Adapter 1
Cocher &gt; Activer l'interface réseau
Mode d'accès réseau &gt; Accès par pont
Name &gt; MediaTek WiFi-6 MT7921 Wireless Lan Card
Advanced
Type d'interface &gt; Intel PRO/1000 MT Desktop (82540EM)
Mode Promiscuité &gt; Allow All
Adresse MAC &gt; 0800274BF8B3
Cocher &gt; Cêble branché
OK
#================================================</pre><br>Considérons l'extrait de code suivant qui démarre notre VM:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
Machine
Démarrer
Démarrage normal
#================================================</pre><br>Considérons l'extrait de code suivant qui affiche l'adresse IP:<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
ip a s
#================================================
1: lo: <loopback,up,lower_up> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host
       valid_lft forever preferred_lft forever
2: enp0s3: <broadcast,multicast,up,lower_up> mtu 1500 qdisc fq_codel state UP group default qlen 1000
    link/ether 08:00:27:4b:f8:b3 brd ff:ff:ff:ff:ff:ff
    inet 192.168.1.36/24 metric 100 brd 192.168.1.255 scope global dynamic enp0s3
       valid_lft 39538sec preferred_lft 39538sec
    inet6 2a01:e0a:5ee:d720:a00:27ff:fe4b:f8b3/64 scope global dynamic mngtmpaddr noprefixroute
       valid_lft 86034sec preferred_lft 86034sec
    inet6 fe80::a00:27ff:fe4b:f8b3/64 scope link
       valid_lft forever preferred_lft forever</broadcast,multicast,up,lower_up></loopback,up,lower_up>
#================================================</pre><br>Considérons l'extrait de code suivant qui met à jour notre VM:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
sudo apt update
sudo apt upgrade
#================================================</pre><br>Considérons l'extrait de code suivant qui installe les additions invité dans notre VM:&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
Périphériques
Insérer l'image CD des Additions invité
#================================================
sudo apt update
sudo apt install build-essential dkms linux-headers-$(uname -r)
sudo mkdir -p /mnt/cdrom
sudo mount /dev/cdrom /mnt/cdrom
cd /mnt/cdrom
sudo sh ./VBoxLinuxAdditions.run
lsmod | grep vboxguest
#================================================
Retirer le CD des Additions invité du lecteur virtuel
#================================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-systeme-d-exploitation-ubuntu">Le système d'exploitation Ubuntu</a>
</h1>
<div class="Section6"><br>Techniquement parlant, Ubuntu Server n'existe pas. C'est
tout simplement Ubuntu. La seule différence entre Ubuntu et Ubuntu
Server est la procédure d'installation et les packages préinstallés
qui viennent avec.<br><br>Au démarrage, vous constaterez qu'Ubuntu Server ne vous donne rien de plus qu'une ligne de commande. C'est normal, c'est parce que nous venons d'installer un serveur, et les serveurs n'ont pas vraiment besoin d'interfaces utilisateur sophistiquées.<br><br>Si vous n'êtes pas habitués à travailler en ligne de commande, vous pouvez toujours installer une interface utilisateur Ubuntu.<br><br>Considérons l'extrait de code suivant qui installe une interface utilisateur:<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
sudo apt update
sudo apt upgrade
sudo apt install ubuntu-desktop
#================================================
sudo shutdown -r now
#================================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-systeme-d-exploitation-windows">Le système d'exploitation Windows</a>
</h1>
<div class="Section6"><br>Se souvenir de votre adresse IP chaque fois que vous devez accéder à votre serveur (pour des applications telles que Git, Jenkins et autres) est plutôt fastidieux. Une petite solution de contournement sous Windows consiste à configurer un dns local.<br><br>Considérons l'extrait de code suivant qui configure un dns local sous Windows:
<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::================================================
C:\Windows\System32\drivers\etc\hosts
#================================================
192.168.1.36 devopsvm
::================================================
ping devopsvm
::================================================
Envoi d'une requête 'ping' sur devopsvm [192.168.1.36] avec 32 octets de données&nbsp;:
Réponse de 192.168.1.36&nbsp;: octets=32 temps&lt;1ms TTL=64
Réponse de 192.168.1.36&nbsp;: octets=32 temps&lt;1ms TTL=64
Réponse de 192.168.1.36&nbsp;: octets=32 temps&lt;1ms TTL=64
Réponse de 192.168.1.36&nbsp;: octets=32 temps&lt;1ms TTL=64
#================================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-systeme-de-gestion-de-versions-gitlab">Le système de gestion de versions GitLab</a>
</h1>
<div class="Section6"><br>Git est un outil de gestion de versions immensément populaire du créateur de Linux.&nbsp;Il est conçu pour être utiliser en ligne de commande. Cela rend son utilisation peu ennuyeuse. C'est pourquoi nous utiliserons GitLab pour fournit un portail de type GitHub afin de communiquer avec Git via une interface Web.<br><br>Considérons l'extrait de code suivant qui installe les dépendances de GitLab:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
sudo apt update
sudo apt install curl openssh-server ca-certificates postfix
#================================================
Postfix configuration
General mail configuration type &gt; Site Internet
OK
System mail name &gt; devopsvm
OK
#================================================</pre><br>Considérons l'extrait de code suivant qui installe GitLab:<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
curl -sS https://packages.gitlab.com/install/repositories/gitlab/gitlab-ce/script.deb.sh | sudo bash
sudo apt install gitlab-ce
#================================================</pre><br>De nombreux programmes s'exécutent sur le port 8080. C'est le cas de GitLab qui utilise par défaut le port 8080, ce qui nous pose problème, car Jenkins s'exécute aussi sur le port 8080 par défaut. Nous devons donc choisir de changer le port Jenkins ou de changer le port GitLab.<br><br>Considérons l'extrait de code suivant qui modifie le port de GitLab:<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
sudo nano /etc/gitlab/gitlab.rb
#================================================
unicorn['port'] = '8081'
#================================================</pre><br>Maintenant, nous devons reconfigurer GitLab. C'est une opération à réaliser à chaque fois après avoir modifié le fichier de configuration de GitLab (gitlab.rb).<br><br>Considérons l'extrait de code suivant qui reconfigure GitLab:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
sudo gitlab-ctl reconfigure
#================================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="a-suivre---">À suivre...</a>
</h1>
<div class="Section6">À suivre...</div>
</div>
</div>
</div><br>
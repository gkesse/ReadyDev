<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Configurer la connexion SSH sous Debian</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre la programmation <b>système embarqué</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Un <b>système embarqué</b> est un système électronique et informatique autonome, souvent temps réel, spécialisé dans une tâche précise et dont les ressources sont généralement limitées spatialement (encombrement réduit) et énergétiquement (consommation restreinte).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/b_debian_ssh.png" alt="/Tutoriels/Embedded_System/img/b_debian_ssh.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Configurer la connexion SSH sous Debian"><a class="Link3" href="#">Configurer la connexion SSH sous Debian</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Configurer la connexion SSH sous Debian-Introduction"><a class="Link9" href="#Configurer la connexion SSH sous Debian">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de configurer la connexion SSH sous Debian.<br><br><h2 class="Title7 GTitle2" id="Configurer la connexion SSH sous Debian-Configurer la connexion SSH"><a class="Link9" href="#Configurer la connexion SSH sous Debian">Configurer la connexion SSH</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># passer en mode sudo
su

# adapter les sources 
nano /etc/apt/sources.list

deb http://deb.debian.org/debian buster main contrib non-free
deb-src http://deb.debian.org/debian buster main contrib non-free

deb http://security.debian.org/debian-security/ buster/updates main contrib non-free
deb-src http://security.debian.org/debian-security/ buster/updates main contrib non-free

deb http://deb.debian.org/debian buster-updates main contrib non-free
deb-src http://deb.debian.org/debian buster-updates main contrib non-free

# mettre a jour les packages  
apt-get update

# installer les mises a jour des packages
apt-get upgrade

# installer le serveur ssh
apt-get install openssh-server

# recuperer l'adresse ip
ip a s

# demarrer la connexion ssh
ssh osboxes@192.168.1.18

# verifier le service ssh
systemctl status ssh</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Configurer la connexion SSH sous Debian-Résultat"><a class="Link9" href="#Configurer la connexion SSH sous Debian">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/img/i_debian_ssh.png" alt="/Tutoriels/Embedded_System/img/i_debian_ssh.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Distribution Linux Debian</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1613788370056"><div class="Row26">List 1 &gt; Embedded_System &gt; debian</div></div><script>loadList1("Loader_1613788370056","Embedded_System","debian");</script></div><br></div></div></div></div><br>
<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#application-php">Application PHP</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/php/application/systeme_covoiturage">Système de covoiturage</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Système de covoiturage</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>PHP</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#creation-du-projet">Création du projet</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#demarrage-du-serveur">Démarrage du serveur</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#variables-d-environnement">Variables d'environnement</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>Bienvenue dans ce tutoriel consacré à la présentation du processus de conception d'un <b>système de covoiturage</b> en <b>PHP 8</b> avec <b>Symfony 7</b> sous <b>Windows</b>. Nous créerons la structure de notre projet Symfony avec la commande (composer). Nous lancerons notre serveur web avec la commande (php). Nous utiliserons VSCode comme éditeur de code avec les extensions (PHP Intelephense) pour la gestion de l'auto-complétions, (PHP Namespace Resolver) pour la résolution des espaces de noms et (Bracket Pair Colorization Toggler) pour la colorisation des pairs d'accolades. Nous familiarisons avec l'architecture MVC (Modèle-Vue-Contrôleur) qui est le modèle autour duquel s'articule un projet Symfony. Tout le long du développement, nous nous efforcerons à respecter les bonnes pratiques en ingénierie logiciel. Nous veillerons à respecter les principes SOLID pour faciliter la compréhension du code ainsi que sa maintenance et son évolution, les principes DRY pour éviter la duplication de base de code et nous nous interdirons de créer des objets incomplets.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="creation-du-projet">Création du projet</a>
</h1>
<div class="Section6"><br>La structure d'un projet Symfony s'articule autour de l'architecture MVC (Modèle-Vue-Contrôleur). Nous simplifions la création de la structure de notre projet Symfony en utilisant la ligne de commande.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-du-projet_structure-du-projet">Structure du projet</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-du-projet_fonctionnalites-web">Fonctionnalités web</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-du-projet_structure-du-projet" href="#creation-du-projet">Structure du projet</a>
</h2><br>Nous créons la structure de notre projet Symfony avec la commande (composer):<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">composer create-project symfony/skeleton:"7.1.*" rdv_systeme_covoiturage</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-du-projet_fonctionnalites-web" href="#creation-du-projet">Fonctionnalités web</a>
</h2><br>Les fonctionnalités web apportent à notre projet Symfony l'ensemble des modules nécessaires au développement d'une application web.<br><br>Nous initialisons les fonctionnalités web dans projet Symfony avec la commande (composer). Nous acceptons le fichier de configuration docker pour l'avenir:<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">composer require webapp</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="demarrage-du-serveur">Démarrage du serveur</a>
</h1>
<div class="Section6"><br>Le démarrage du serveur web permet de mettre notre projet Symfony en ligne et de rendre notre système de covoiturage disponible pour tous.<br><br>Nous démarrons le serveur avec la commande (php) en indiquant l'adresse du serveur (localhost), le numéro de port du serveur (8000) et le répertoire racine du serveur (public):<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">php -S localhost:8000 -t public</pre><br>Nous affichons notre système de covoiturage dans un navigateur web:<br><br><a class="GLink3 Link4" style=" color: lime;" href="http://localhost:8000/" target="_blank">http://localhost:8000/</a><br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="variables-d-environnement">Variables d'environnement</a>
</h1>
<div class="Section6"><br>Les variables d'environnement permettent de modifier dynamiquement les fonctionnalités de notre projet Symfony sans avoir à reconstruire et à redéployer notre projet web.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#variables-d-environnement_variables-d-environnement-par-defaut-de-symfony">Variables d'environnement par défaut de Symfony</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#variables-d-environnement_variables-d-environnement-personnalises">Variables d'environnement personnalisés</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#variables-d-environnement_exception-generique">Exception générique</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#variables-d-environnement_exception-d-execution">Exception d'exécution</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="variables-d-environnement_variables-d-environnement-par-defaut-de-symfony" href="#variables-d-environnement">Variables d'environnement par défaut de Symfony</a>
</h2><br>Nous créons un chargeur de variables de variables d'environnement avec la classe Symfony (DotEnv). Nous vérifions l'existence de la classe (DotEnv) avec la fonction (class_exists). Si la classe (DotEnv) existe, nous chargeons le fichier de définition des variables d'environnement par défaut de Symfony (.env) avec la méthode (loadEnv) de la classe (DotEnv). Si la classe (DotEnv) n'existe pas nous levons une exception avec la classe (RuntimeException).<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="variables-d-environnement_variables-d-environnement-personnalises" href="#variables-d-environnement">Variables d'environnement personnalisés</a>
</h2><br>Nous fournissons la possibilité de créer notre propre fichier personnalisé de définition des variables d'environnement (.rdv_env.local.php). Dans ce contexte, nous chargeons le contenu du fichier avec l'opérateur d'inclusion de fichier (include) suivi de l'opérateur de contrôle des erreurs (@) afin d'ignorer les messages d'erreur en cas de non présence du fichier personnalisé (.rdv_env.local.php). Nous définissons le fichier personnalisé (.rdv_env.local.php) de telle manière à ce qu'il retourne un tableau (array) contenant toutes nos variables d'environnement. Nous vérifions par la suite que le retour du fichier personnalisé (.rdv_env.local.php) est un tableau avec la méthode (is_array).<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="variables-d-environnement_exception-generique" href="#variables-d-environnement">Exception générique</a>
</h2><br>Une exception permet gérer les conditions exceptionnelles lors de l'exécution de notre projet. Lorsqu'une exception se produit, l'exécution normale de notre projet est interrompue et l'exception est traitée. La classe (Exception) est la classe de base de toutes les exceptions.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="variables-d-environnement_exception-d-execution" href="#variables-d-environnement">Exception d'exécution</a>
</h2><br>Une exception d'exécution (RuntimeException) est une exception que nous levons dans le cadre de notre projet pour des opérations qui devraient normalement fonctionner, mais qui finalement, se passent mal. Les exceptions d'exécution (RuntimeException) sont à privilégier que les exceptions génériques (Exception).&nbsp;&nbsp;<br><br></div>
</div>
</div></div><br>
<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/references-qml">Références QML</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/references-qml/dashboard-smart-home">Dashboard Smart Home</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/references-qml/dashboard-smart-home/main-cpp">main.cpp</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Tableau de bord pour maison intelligente</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Vous souhaitez réaliser des applications graphiques hautes performances en <b>C++</b> avec la bibliothèque graphique <b>Qt</b> fournissant le langage <b>QML</b> capable d'exploiter la puissance des processeurs graphiques <b>GPU</b> afin de bénéficier de l'accélération matérielle pour créer des interfaces graphiques fluides multiplateformes orientées bureau (<b>Windows, Linux, Mac OS</b>) ou mobile (<b>Android, iOS</b>).<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#initialisation-du-gestionnaire-d-application">Initialisation du gestionnaire d'application</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-du-theme-de-l-application">Gestion du thème de l'application</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-de-l-icone-de-l-application">Gestion de l'icône de l'application</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-de-la-police-personnalisee--codec-pro-">Gestion de la police personnalisée (Codec Pro)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-du-chargement-du-composant-qml--main-qml-">Gestion du chargement du composant QML (Main.qml)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#suite">Suite</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="initialisation-du-gestionnaire-d-application">Initialisation du gestionnaire d'application</a>
</h1>
<div class="Section6"><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;QGuiApplication&gt;
#include &lt;QQmlApplicationEngine&gt;
#include &lt;QQuickStyle&gt;
#include &lt;QFontDatabase&gt;
#include &lt;QIcon&gt;

int main(int argc, char *argv[])
{
    QGuiApplication app(argc, argv);
    ...
    return app.exec();
}</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On démarre la création du programme principal (main).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On crée le gestionnaire d'application (app).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On entre dans la boucle de gestion des évènements à partir du gestionnaire (app).&nbsp;</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-du-theme-de-l-application">Gestion du thème de l'application</a>
</h1>
<div class="Section6"><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">int main(int argc, char *argv[])
{
    ...
    qDebug() &lt;&lt; "The current style is:" &lt;&lt; QQuickStyle::name();
    QQuickStyle::setStyle("Basic");
    ...
}</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On affiche le style courant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On initialise le style (Basic).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-de-l-icone-de-l-application">Gestion de l'icône de l'application</a>
</h1>
<div class="Section6"><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">int main(int argc, char *argv[])
{
    ... 
    app.setWindowIcon(QIcon(":/ReadyQML/res/img/logo.png"));
    ...
}</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On initialise l'icône de l'application à partir d'un fichier ressource.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-de-la-police-personnalisee--codec-pro-">Gestion de la police personnalisée (Codec Pro)</a>
</h1>
<div class="Section6"><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">int main(int argc, char *argv[])
{
    ... 
    QFontDatabase::addApplicationFont(":/ReadyQML/res/font/CodecPro-Regular.ttf");
    QFont font("Codec Pro");
    QGuiApplication::setFont(font);

    QStringList fontList = QFontDatabase::families();
    if (fontList.contains("Codec Pro"))
    {
        qDebug() &lt;&lt; "Codec Pro font is loaded.";
    }
    else
    {
        qDebug() &lt;&lt; "Codec Pro font is not loaded.";
    }
    ...
}</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On ajoute la police personnalisée dans la base de données des polices à partir d'un fichier ressource.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On crée une police personnalisée (font) à partir du nom (Codec Pro).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On initialise la police du gestionnaire d'application.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On récupère la liste des polices à partir de la base de données des polices.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On vérifie que la liste des polices contient la police personnalisée (Codec Pro).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On affiche message de succès si oui.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On affiche un message d'échec si non.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-du-chargement-du-composant-qml--main-qml-">Gestion du chargement du composant QML (Main.qml)</a>
</h1>
<div class="Section6"><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">int main(int argc, char *argv[])
{
    ...
    QQmlApplicationEngine engine;
    const QUrl url("qrc:/ReadyQML/qml/Main.qml");
    QObject::connect(
        &amp;engine,
        &amp;QQmlApplicationEngine::objectCreationFailed,
        &amp;app,
        []()
        { QCoreApplication::exit(-1); },
        Qt::QueuedConnection);
    engine.load(url);
    ...
}</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On crée un chargeur de composant QML (engine).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On crée l'URL du composant QML principal à partir d'un fichier ressource (url).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On démarre une connexion signal-slot à partir du chargeur QML (engine) et du gestionnaire d'application (app). On connecte le signal émis lors d'une erreur de chargement de composant QML à une fonction anonyme lambda. On ferme l'application en cas d'erreur de chargement du composant QML. On indique d'ajouter la connexion signal-slot à une liste d'attente afin d'éviter les bugs liés à des connexions immédiates dans un environnement multithreading.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On démarre le chargement du composant QML.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="suite">Suite</a>
</h1>
<div class="Section6"><br><div class="GLink1 Link1">
<i class="Link2 fa fa-arrow-circle-right"></i>
<a class="Link3" href="/home/tutoriels/cpp/references-qml/dashboard-smart-home/main-qml">Gestion du composant QML (Main.qml)</a>
</div><div class="GLink1 Link1">
<i class="Link2 fa fa-arrow-circle-left"></i>
<a class="Link3" href="/home/tutoriels/cpp/references-qml/dashboard-smart-home">Tableau de bord pour maison intelligente</a>
</div><div class="GLink1 Link1">
<i class="Link2 fa fa-home"></i>
<a class="Link3" href="/home/tutoriels/cpp/references-qml/dashboard-smart-home">Tableau de bord pour maison intelligente</a>
</div><br></div>
</div>
</div>
</div><br>
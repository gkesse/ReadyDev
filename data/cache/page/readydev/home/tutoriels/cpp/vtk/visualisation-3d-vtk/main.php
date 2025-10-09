<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/vtk">VTK</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/vtk/visualisation-3d-vtk">Visualisation 3D</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Visualisation 3D en C++ avec VTK</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Ce document est un recueil de recettes pratiques pour la mise en oeuvre d'un environnement de rendu 3D avec VTK en C++. Ce document présente la conception d'un système de visualisation 3D en C++, Qt, CMake avec VTK.<br><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/cpp/vtk/visualisation-3d-vtk/data/17599686170335033-image.png"></div><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notes-sur-la-demo">Notes sur la démo</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notes-techniques">Notes techniques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notes-sur-le-developpement">Notes sur le développement</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notes-sur-le-code-source">Notes sur le code source</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notes-sur-la-demo">Notes sur la démo</a>
</h1>
<div class="Section6"><br>Notre système permettra de visualiser des données 3D au format&nbsp;« VTK ».<br><br><div class="GVideo1 Video1">&nbsp;<video width="500" height="auto" controls="" data-src="/data/cache/page/readydev/home/tutoriels/cpp/vtk/visualisation-3d-vtk/data/17599770070374357-rdvvtk-demo-01.mp4"><source preload="none"></video></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notes-techniques">Notes techniques</a>
</h1>
<div class="Section6"><br>Notre système de visualisation 3D sera basé sur les modules VTK, Qt et OpenGL. Le module VTK fournira des classes qui prendront en charge de manière transparente les couches Qt et OpenGL afin de faciliter la mise en oeuvre du processus de rendu 3D.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-techniques_vtk">VTK</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-techniques_qsurfaceformat">QSurfaceFormat</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-techniques_qvtkopenglnativewidget">QVTKOpenGLNativeWidget</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-techniques_vtkcamera">vtkCamera</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-techniques_vtkrenderer">vtkRenderer</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-techniques_vtkactor">vtkActor</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-techniques_vtk" href="#notes-techniques">VTK</a>
</h2><br><b>VTK (Visualization Tool Kit)</b> est une librairie C++ sophistiquée pour l'infographie 3D, le traitement d'images, la modélisation, le rendu volumique et la visualisation scientifique. VTK est une extension des fonctionnalités OpenGL pour faciliter le rendu de scène 3D.<br><br>VTK = OpenGL + Fonctionnalités<br><br>Le module VTK s'appuie sur la couche OpenGL pour exploiter la puissance des processeurs graphiques GPU afin de bénéficier de l'accélération matérielle lors du rendu 3D.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-techniques_qsurfaceformat" href="#notes-techniques">QSurfaceFormat</a>
</h2><br>QSurfaceFormat (Format de surface Qt pour OpenGL) est un ensemble de paramètres prédéfinis pour le rendu OpenGL. Il définit un certain nombre de paramètres OpenGL par défaut tels que, le profil, la version, la taille des tampons des couleurs RGBA, la taille des tampons de profondeur, le nombre d'échantillons par pixel.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-techniques_qvtkopenglnativewidget" href="#notes-techniques">QVTKOpenGLNativeWidget</a>
</h2><br><b>QVTKOpenGLNativeWidget (Qt VTK OpenGL Native Widget)</b> est un widget Qt pour le rendu OpenGL de données au format « VTK ». Il étend les fonctionnalités du widget Qt OpenGL « QOpenGLWidget » pour le rendu de données au format « VTK ».<br><br>QVTKOpenGLNativeWidget = QOpenGLWidget + Fonctionnalités<br>QOpenGLWidget = Qt + OpenGL&nbsp; + Fonctionnalités<br><br><b>QVTKOpenGLNativeWidget::defaultFormat (QSurfaceFormat pour VTK) </b>est un ensemble de paramètres OpenGL prédéfinis pour le rendu de données au format « VTK ».<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-techniques_vtkcamera" href="#notes-techniques">vtkCamera</a>
</h2><br><b>vtkCamera </b>est une caméra virtuelle pour le rendu 3D de données « VTK ». vtkCamera permet de positionner et d'orienter le point de vue et le point focal de la caméra. vtkCamera permet de paramétrer la caméra selon 3 critères :<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">(1) La direction de la vue vers le haut de la caméra, par défaut, (0, 1, 0).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">(2) La position de la caméra dans le repère du monde réel, par exemple, (0, 0, 10).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">(3) Le point focal de la caméra dans le repère du monde réel, par exemple, (0, 0, 0).</div>
</div><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/cpp/vtk/visualisation-3d-vtk/data/17599687630314260-image.png"></div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-techniques_vtkrenderer" href="#notes-techniques">vtkRenderer</a>
</h2><br><b>vtkRenderer </b>est un moteur de rendu 3D de données « VTK ». vtkRenderer contrôle le processus de rendu des objets dans le but de convertir la géométrie, l'éclairage et la vue de la caméra en une image. vtkRenderer effectue aussi la transformation des coordonnées entre les coordonnées du monde réel, les coordonnées de la vue (le système de coordonnées de rendu graphique) et les coordonnées d'affichage (les coordonnées réelles de l'écran). vtkRenderer peut également contrôler certaines fonctionnalités de rendu avancées, tel que l'éclairage bilatéral.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-techniques_vtkactor" href="#notes-techniques">vtkActor</a>
</h2><br><b>vtkActor </b>représente une entité dans une scène de rendu de données « VTK ». vtkActor représente un objet qu'on veut visualiser dans la fenêtre de rendu de données « VTK ».&nbsp;&nbsp;<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notes-sur-le-developpement">Notes sur le développement</a>
</h1>
<div class="Section6"><br>Notre système de visualisation 3D, sera développé en langage C++ sous l'éditeur VSCode, utilisera l'outil CMake pour construire le projet, utilisera un fichier ressource QRC pour alimenter les icônes de l'application, utilisera l'outil Qt Widgets Designer pour concevoir l'interface utilisateur de la fenêtre principale de l'application, utilisera les feuilles de style QSS pour mettre en forme les widgets de l'application.<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_configuration-de-l-editeur-vscode">Configuration de l'éditeur VSCode</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_configuration-de-la-construction-du-projet">Configuration de la construction du projet</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_configuration-des-ressources-du-projet">Configuration des ressources du projet</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_chargement-de-la-fenetre-principale">Chargement de la fenêtre principale</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_conception-de-la-fenetre-principale">Conception de la fenêtre principale</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_ouverture-d-un-fichier-au-format-vtk">Ouverture d'un fichier au format VTK</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_chargement-d-un-fichier-au-format-vtk">Chargement d'un fichier au format VTK</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_visualisation-3d-des-donnees-au-format-vtk">Visualisation 3D des données au format VTK</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_reinitialisation-automatique-du-rendu-3d-vtk">Réinitialisation automatique du rendu 3D VTK</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_suppression-du-dernier-acteur-vtk">Suppression du dernier acteur VTK</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#notes-sur-le-developpement_initialisation-de-la-camera-vtk">Initialisation de la caméra VTK</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_configuration-de-l-editeur-vscode" href="#notes-sur-le-developpement">Configuration de l'éditeur VSCode</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// .vscode/settings.json</span><br><pre class="GCode1 Code1 AceCode" data-mode="json" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
{
    "cmake.environment": {
        "PATH": "C:/tools/Qt/6.9.0/msvc2022_64/bin;C:/Program Files (x86)/VTK/bin",
    },
}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_configuration-de-la-construction-du-projet" href="#notes-sur-le-developpement">Configuration de la construction du projet</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
cmake_minimum_required(VERSION 3.10.0)
project(rdvvtk VERSION 0.1.0 LANGUAGES C CXX)

set(CMAKE_AUTOMOC ON)
set(CMAKE_AUTOUIC ON)
set(CMAKE_AUTORCC ON)
set(CMAKE_CONFIGURATION_TYPES "Debug;Release")
set(CMAKE_INCLUDE_CURRENT_DIR ON)

find_package(Qt6 REQUIRED COMPONENTS
    Core
    Gui
    Widgets
    OpenGLWidgets
)

find_package(VTK 9.5 REQUIRED COMPONENTS
    GUISupportQt
    IOLegacy
)

include_directories(${CMAKE_HOME_DIRECTORY})

set(SRC_FILES
    main.cpp
    MainWindow.hpp
    MainWindow.cpp
    SceneWidget.hpp
    SceneWidget.cpp
)

qt_wrap_ui(UI_FILES
    MainWindow.ui
)

set(RCC_FILES
    resources.qrc
)

qt_add_executable(${PROJECT_NAME} WIN32
    ${SRC_FILES}
    ${UI_FILES}
    ${RCC_FILES}
)

target_link_libraries(${PROJECT_NAME} PRIVATE
    Qt6::Core
    Qt6::Gui
    Qt6::Widgets
    Qt6::OpenGLWidgets
    VTK::GUISupportQt
    VTK::IOLegacy
)
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_configuration-des-ressources-du-projet" href="#notes-sur-le-developpement">Configuration des ressources du projet</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// resources.qrc</span><br><pre class="GCode1 Code1 AceCode" data-mode="xml" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
&lt;RCC&gt;
    &lt;qresource prefix="/img"&gt;
        &lt;file alias="app-logo.png"&gt;res/img/app-logo.png&lt;/file&gt;
        &lt;file alias="open_file.png"&gt;res/img/open_file.png&lt;/file&gt;
        &lt;file alias="zoom_to.png"&gt;res/img/zoom_to.png&lt;/file&gt;
        &lt;file alias="quit.png"&gt;res/img/quit.png&lt;/file&gt;
        &lt;file alias="about.png"&gt;res/img/about.png&lt;/file&gt;
    &lt;/qresource&gt;
&lt;/RCC&gt;
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_chargement-de-la-fenetre-principale" href="#notes-sur-le-developpement">Chargement de la fenêtre principale</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// main.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">int main(int argc, char *argv[])
{
    qDebug() &lt;&lt; "(rdvvtk) Demarrage de l'application";
    QSurfaceFormat::setDefaultFormat(
    QVTKOpenGLNativeWidget::defaultFormat());

    QApplication a(argc, argv);
    MainWindow w;
    w.show();

    return a.exec();
}</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_conception-de-la-fenetre-principale" href="#notes-sur-le-developpement">Conception de la fenêtre principale</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// MainWindow.ui</span><br><div class="GImg1 Img1"><img loading="lazy" alt="image.png" src="/data/cache/page/readydev/home/tutoriels/cpp/vtk/visualisation-3d-vtk/data/17599688473765591-image.png"></div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_ouverture-d-un-fichier-au-format-vtk" href="#notes-sur-le-developpement">Ouverture d'un fichier au format VTK</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// MainWindow.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
void MainWindow::showOpenFileDialog()
{
    QString fileName = QFileDialog::getOpenFileName(
        this, tr("Open file"), "",
        "VTK Files (*.vtk)");

    // Open file
    QFile file(fileName);
    file.open(QIODevice::ReadOnly);

    // Return on Cancel
    if (!file.exists())
        return;

    openFile(fileName);
}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_chargement-d-un-fichier-au-format-vtk" href="#notes-sur-le-developpement">Chargement d'un fichier au format VTK</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// MainWindow.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
void MainWindow::openFile(const QString &amp;fileName)
{
    ui-&gt;sceneWidget-&gt;removeDataSet();

    // Create reader
    vtkSmartPointer&lt;vtkDataSetReader&gt; reader = 
    vtkSmartPointer&lt;vtkDataSetReader&gt;::New();
    reader-&gt;SetFileName(fileName.toStdString().c_str());

    // Read the file
    reader-&gt;Update();

    // Add data set to 3D view
    vtkSmartPointer&lt;vtkDataSet&gt; dataSet = reader-&gt;GetOutput();
    if (dataSet != nullptr)
    {
        ui-&gt;sceneWidget-&gt;addDataSet(reader-&gt;GetOutput());
    }
}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_visualisation-3d-des-donnees-au-format-vtk" href="#notes-sur-le-developpement">Visualisation 3D des données au format VTK</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// SceneWidget.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
void SceneWidget::addDataSet(vtkSmartPointer&lt;vtkDataSet&gt; dataSet)
{
    // Actor
    vtkSmartPointer&lt;vtkActor&gt; actor = vtkSmartPointer&lt;vtkActor&gt;::New();

    // Mapper
    vtkSmartPointer&lt;vtkDataSetMapper&gt; mapper = vtkSmartPointer&lt;vtkDataSetMapper&gt;::New();
    mapper-&gt;SetInputData(dataSet);
    actor-&gt;SetMapper(mapper);

    m_renderer-&gt;AddActor(actor);
    m_renderer-&gt;ResetCamera(dataSet-&gt;GetBounds());

    renderWindow()-&gt;Render();
}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_reinitialisation-automatique-du-rendu-3d-vtk" href="#notes-sur-le-developpement">Réinitialisation automatique du rendu 3D VTK</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// SceneWidget.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
void SceneWidget::zoomToExtent()
{
    vtkSmartPointer&lt;vtkActor&gt; actor = m_renderer-&gt;GetActors()-&gt;GetLastActor();
    if (actor != nullptr)
    {
        m_renderer-&gt;ResetCamera(actor-&gt;GetBounds());
    }

    renderWindow()-&gt;Render();
}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_suppression-du-dernier-acteur-vtk" href="#notes-sur-le-developpement">Suppression du dernier acteur VTK</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// SceneWidget.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
void SceneWidget::removeDataSet()
{
    vtkActor *actor = m_renderer-&gt;GetActors()-&gt;GetLastActor();
    if (actor != nullptr)
    {
        m_renderer-&gt;RemoveActor(actor);
    }

    renderWindow()-&gt;Render();
}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="notes-sur-le-developpement_initialisation-de-la-camera-vtk" href="#notes-sur-le-developpement">Initialisation de la caméra VTK</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// SceneWidget.cpp</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
SceneWidget::SceneWidget(QWidget *parent)
    : QVTKOpenGLNativeWidget(parent)
{
    vtkSmartPointer&lt;vtkGenericOpenGLRenderWindow&gt; window =
        vtkSmartPointer&lt;vtkGenericOpenGLRenderWindow&gt;::New();
    setRenderWindow(window.Get());

    // Camera
    vtkSmartPointer&lt;vtkCamera&gt; camera = vtkSmartPointer&lt;vtkCamera&gt;::New();
    camera-&gt;SetViewUp(0, 1, 0);
    camera-&gt;SetPosition(0, 0, 10);
    camera-&gt;SetFocalPoint(0, 0, 0);

    // Renderer
    m_renderer = vtkSmartPointer&lt;vtkRenderer&gt;::New();
    m_renderer-&gt;SetActiveCamera(camera);
    m_renderer-&gt;SetBackground(0.1, 0.1, 0.1);
    renderWindow()-&gt;AddRenderer(m_renderer);
}
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notes-sur-le-code-source">Notes sur le code source</a>
</h1>
<div class="Section6"><br>Nous publions le code source sur GitHub:<br><br><a class="GLink3 Link4" style=" color: lime;" href="https://github.com/gkesse/rdvqtqml/tree/main/rdvvtk" target="_blank">https://github.com/gkesse/rdvqtqml/tree/main/rdvvtk</a><br><br></div>
</div>
</div>
</div><br>
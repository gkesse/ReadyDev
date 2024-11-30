<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#csharp">C#</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/csharp/application/oscilloscope-numerique">Oscilloscope numérique</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Conception d'un oscilloscope numérique</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Bienvenue dans ce tutoriel consacré à la conception d'un <b>oscilloscope numérique</b> en <b>C#</b> avec la bibliothèque <b>Windows Forms</b> sous l'éditeur <b>Visual Studio</b>&nbsp;en liaison avec le pilote <b>NI-VISA</b> (National Instruments -&nbsp;Virtual Instrument Software Architecture).<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configuration-d-un-projet-c--windows-forms-sous-visual-studio">Configuration d'un projet C# Windows Forms sous Visual Studio</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#renommage-du-fichier--form1-cs--sous-visual-studio">Renommage du fichier (Form1.cs) sous Visual Studio</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configuration-du-package-c--sous-vscode">Configuration du package C# sous VSCode</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>NI-VISA</b> est un pilote d'instrument NI (National Instruments) qui est une implémentation de la norme d'E/S VISA (Virtual Instrument Software Architecture). VISA est une norme de configuration, de programmation et de dépannage des systèmes d'instrumentation comprenant des interfaces GPIB, VXI, PXI, série (RS232/RS485), Ethernet/LXI et/ou USB.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configuration-d-un-projet-c--windows-forms-sous-visual-studio">Configuration d'un projet C# Windows Forms sous Visual Studio</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous utilisons l'éditeur (Visual Studio) pour créer un projet C# avec la bibliothèque Windows Forms du Framework .NET.</div>
</div><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c--windows-forms-sous-visual-studio_installer-le-framework--net">Installer le framework .NET</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c--windows-forms-sous-visual-studio_creer-le-projet-c--windows-forms">Créer le projet C# Windows Forms</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c--windows-forms-sous-visual-studio_visualiser-les-sources-c-">Visualiser les sources C#</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-projet-c--windows-forms-sous-visual-studio_executer-le-projet">Exécuter le projet</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c--windows-forms-sous-visual-studio_installer-le-framework--net" href="#configuration-d-un-projet-c--windows-forms-sous-visual-studio">Installer le framework .NET</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// Visual Studio (Installation .NET)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Outils &gt; Obtenir les outils et fonctionnalités
Cocher &gt; Développement .NET Desktop
Modifier &gt; Oui</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c--windows-forms-sous-visual-studio_creer-le-projet-c--windows-forms" href="#configuration-d-un-projet-c--windows-forms-sous-visual-studio">Créer le projet C# Windows Forms</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// Visual Studio (Création Projet)&nbsp;</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Fichier &gt; Nouveau &gt; Projet
Tous les langages &gt; C#
Toutes les plateformes &gt; Windows
Tous les types de projet &gt; Bureau
Modèle de projet &gt; Application Windows Forms
Suivant
...
Nom de projet &gt; OscilloscopeGUI
Emplacement &gt; v01
Nom de la solution &gt; OscilloscopeGUI
Suivant
...
Infrasctructure &gt; .NET 8.0 (Prise en charge à long terme)
Créer</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c--windows-forms-sous-visual-studio_visualiser-les-sources-c-" href="#configuration-d-un-projet-c--windows-forms-sous-visual-studio">Visualiser les sources C#</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// OscilloscopeGUI\Program.cs</span><br><pre class="GCode1 Code1 AceCode" data-mode="csharp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">namespace OscilloscopeGUI
{
    internal static class Program
    {
        [STAThread]
        static void Main()
        {
            ApplicationConfiguration.Initialize();
            Application.Run(new Form1());
        }
    }
}</pre><br><span class="GText2" style="
color: #00ff00;
">// OscilloscopeGUI\Form1.cs</span><br><pre class="GCode1 Code1 AceCode" data-mode="csharp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">namespace OscilloscopeGUI
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
    }
}</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-projet-c--windows-forms-sous-visual-studio_executer-le-projet" href="#configuration-d-un-projet-c--windows-forms-sous-visual-studio">Exécuter le projet</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// Visual Studio (Exécution Projet)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Déboguer &gt; Démarrer le débogage</pre><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="renommage-du-fichier--form1-cs--sous-visual-studio">Renommage du fichier (Form1.cs) sous Visual Studio</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous utilisons l'éditeur (Visual Studio) pour renommer le fichier (Form1.cs) en (FrmMain.cs).</div>
</div><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#renommage-du-fichier--form1-cs--sous-visual-studio_renommer-le-fichier">Renommer le fichier</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#renommage-du-fichier--form1-cs--sous-visual-studio_visualiser-le-renommage">Visualiser le renommage</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#renommage-du-fichier--form1-cs--sous-visual-studio_executer-le-projet">Exécuter le projet</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="renommage-du-fichier--form1-cs--sous-visual-studio_renommer-le-fichier" href="#renommage-du-fichier--form1-cs--sous-visual-studio">Renommer le fichier</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// Visual Studio (Renommage)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Form1 &gt; Clic droit &gt; Renommer &gt; FrmMain.cs &gt; Oui</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="renommage-du-fichier--form1-cs--sous-visual-studio_visualiser-le-renommage" href="#renommage-du-fichier--form1-cs--sous-visual-studio">Visualiser le renommage</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// OscilloscopeGUI\Program.cs</span><br><pre class="GCode1 Code1 AceCode" data-mode="csharp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">namespace OscilloscopeGUI
{
    internal static class Program
    {
        [STAThread]
        static void Main()
        {
            ApplicationConfiguration.Initialize();
            Application.Run(new FrmMain());
        }
    }
}</pre><br><span class="GText2" style="
color: #00ff00;
">// OscilloscopeGUI\FrmMain.cs</span><br><pre class="GCode1 Code1 AceCode" data-mode="csharp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">namespace OscilloscopeGUI
{
    public partial class FrmMain : Form
    {
        public FrmMain()
        {
            InitializeComponent();
        }
    }
}</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="renommage-du-fichier--form1-cs--sous-visual-studio_executer-le-projet" href="#renommage-du-fichier--form1-cs--sous-visual-studio">Exécuter le projet</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// Visual Studio (Exécution Projet)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Déboguer &gt; Démarrer le débogage</pre><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configuration-du-package-c--sous-vscode">Configuration du package C# sous VSCode</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous utilisons l'éditeur (VSCode) pour installer l'extension (C# Dev Kit) afin d'éditer et formatter des fichiers C#.</div>
</div><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#configuration-du-package-c--sous-vscode_installer-l-extension-dev-kit">Installer l'extension Dev Kit</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#configuration-du-package-c--sous-vscode_se-connecter-au-compte-microsoft">Se connecter au compte Microsoft</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="configuration-du-package-c--sous-vscode_installer-l-extension-dev-kit" href="#configuration-du-package-c--sous-vscode">Installer l'extension Dev Kit</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (Extension)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">VSCode &gt; Extensions &gt; C# Dev Kit &gt; Install</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="configuration-du-package-c--sous-vscode_se-connecter-au-compte-microsoft" href="#configuration-du-package-c--sous-vscode">Se connecter au compte Microsoft</a>
</h2><br><span class="GText2" style="
color: #00ff00;
">// VSCode (Sign In)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">VSCode &gt; C# &gt; Sign In
Allow</pre><br><span class="GText2" style="
color: #00ff00;
">// Chrome (Sign In)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Email &gt; youremail@domain.com &gt; Suivant
Mot de passe &gt; your.account.password &gt; Suivant</pre><br><span class="GText2" style="
color: #00ff00;
">// VSCode (Sign In)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">VSCode &gt; C#</pre><br></div>
</div>
</div>
</div><br>
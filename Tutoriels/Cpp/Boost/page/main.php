<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la collection de bibliothèques Boost en C++</div></a></div></div><div class="Body2 Orange"><b>Boost</b> est une collection de bibliothèques <b>C++</b>.<br>Le but de ce tutoriel est de vous apprendre la collection de bibliothèques <b>Boost</b> en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la collection de bibliothèques Boost en C++, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- MinGW, comme compilateur.<br>- Qt, comme environnement de développement intégré.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger Qt</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer les options de configuration longues"><a class="Link3" href="#">Gérer les options de configuration longues</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">gérer les options de configuration longues</span> avec Boost.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Gérer les options de configuration longues</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessConfigurationOptionsLong::run(int argc, char **argv) {
    cout << "\n### Options de configuration longues\n\n";
    boost::program_options::options_description lDescription("Toutes les options");
    lDescription.add_options()
            ("apples", boost::program_options::value<int>(), "combien de pommes avez-vous")
            ("oranges", boost::program_options::value<int>(), "combien d'oranges avez-vous")
            ("help", "produire un message d'aide");
    boost::program_options::variables_map lVariableMap;
    boost::program_options::store(boost::program_options::parse_command_line(argc, argv, lDescription), lVariableMap);
    boost::program_options::notify(lVariableMap);

    if(lVariableMap.count("help")) {
        cout << lDescription << "\n";
        return;
    }

    int lApples = lVariableMap["apples"].as<int>();
    int lOranges = lVariableMap["oranges"].as<int>();
    int lFruits = lApples + lOranges;

    cout << "Nombre de pommes: " << lApples << "\n";
    cout << "Nombre d'oranges: " << lOranges << "\n";
    cout << "Fruits total: " << lFruits << "\n";
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécution du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\x86_64-8.1.0-release-win32-sjlj-rt_v6-rev0\mingw64\bin

echo.
bin\GProject --help
bin\GProject --apples=10 --oranges=20
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Configuration_Options_Long.png" alt="img/Configuration_Options_Long.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer les options de configuration courtes"><a class="Link3" href="#">Gérer les options de configuration courtes</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">gérer les options de configuration courtes</span> avec Boost.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Gérer les options de configuration courtes</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessConfigurationOptionsShort::run(int argc, char **argv) {
    cout << "\n### Options de configuration courtes\n\n";
    boost::program_options::options_description lDescription("Toutes les options");
    int lOrangesVar = 0;
    lDescription.add_options()
            ("apples,a", boost::program_options::value<int>()->default_value(10), "combien de pommes avez-vous")
            ("oranges,o", boost::program_options::value<int>(&lOrangesVar)->required(), "combien d'oranges avez-vous")
            ("name", boost::program_options::value<string>(), "quel est votre nom")
            ("help", "produire un message d'aide");

    boost::program_options::variables_map lVariableMap;
    boost::program_options::store(boost::program_options::parse_command_line(argc, argv, lDescription), lVariableMap);

    if(lVariableMap.count("help")) {
        cout << lDescription << "\n";
        return;
    }

    boost::program_options::store(boost::program_options::parse_config_file<char>("res/cfg/config.cfg", lDescription), lVariableMap);
    boost::program_options::notify(lVariableMap);

    if(lVariableMap.count("name")) {
        string lName = lVariableMap["name"].as<string>();
        cout << "Bonjour " << lName << "\n";
    }

    int lApples = lVariableMap["apples"].as<int>();
    int lOranges = lVariableMap["oranges"].as<int>();
    int lFruits = lApples + lOranges;

    cout << "Nombre de pommes: " << lApples << "\n";
    cout << "Nombre d'oranges: " << lOranges << "\n";
    cout << "Fruits total: " << lFruits << "\n";
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier de configuration (config.cfg)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">oranges=80</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécution du projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Users\sabine\Downloads\Gerard\x86_64-8.1.0-release-win32-sjlj-rt_v6-rev0\mingw64\bin

echo.
bin\GProject --help
bin\GProject --apples=10 --oranges=20
bin\GProject -a 30 -o 40 --name="Gerard KESSE"
bin\GProject
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Configuration_Options_Short.png" alt="img/Configuration_Options_Short.png"></div></div></div></div></div><br>
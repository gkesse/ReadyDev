<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec l'Arduino</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec l'<b>Arduino</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Arduino </b>est une carte électronique de prototypage permettant de créer des objets électroniques interactifs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/b_8051.png" alt="/Tutoriels/Embedded_System/8051/img/b_8051.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Arduino.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618332884452"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618332884452");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous ArduinoIDE"><a class="Link9" href="#Installation">1.1 - Installation sous ArduinoIDE</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger ArduinoIDE"><a class="Link9" href="#Installation">1.1.1 - Télécharger ArduinoIDE</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.arduino.cc/en/software">https://www.arduino.cc/en/software</a><br><br><b>Windows Win 7 and newer</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer ArduinoIDE"><a class="Link9" href="#Installation">1.1.2 - Installer ArduinoIDE</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">arduino-1.8.13-windows.exe
I Agree
Cocher -> Install Arduino Software
Cocher -> Install USB Driver
Cocher -> Create Start Menu Shortcut
Cocher -> Create Desktop Shortcut
Cocher -> Associate .INO Files
Next
Destination Folder -> C:\Program Files (x86)\Arduino
Install
Installer -> Installer -> Installer
Close</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.3 - Démarrer ArduinoIDE"><a class="Link9" href="#Installation">1.1.3 - Démarrer ArduinoIDE</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
Arduino
Autoriser l'accès</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Arduino.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618363410062"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618363410062");</script></div><br><h2 class="Title7 GTitle2" id="Arduino-1 - Test sous Windows"><a class="Link9" href="#Arduino">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Arduino-1.1 - Test sous ArduinoIDE"><a class="Link9" href="#Arduino">1.1 - Test sous ArduinoIDE</a></h2><br><h2 class="Title7 GTitle2" id="Arduino-1.1.1 - Créer un nouveau projet"><a class="Link9" href="#Arduino">1.1.1 - Créer un nouveau projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Fichier -&gt; Enregistrer sous
Enregistrer dans -&gt; ReadyTest\arduino
Nom du fichier -&gt; rdarduino
Enregistrer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Arduino-1.1.2 - Éditer le programme Arduino"><a class="Link9" href="#Arduino">1.1.2 - Éditer le programme Arduino</a></h2><br><h3 class="Title8 GTitle3">rdarduino.ino</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">// on definit le broche de la LED
const int LED_PIN = 13;

// on deinit le programme d'initialisation
void setup() {
  // on configure la broche en sortie
  pinMode(LED_PIN, OUTPUT);
}

// on definit la boucle principale 
void loop() {
  // on applique la valeur (1) sur la broche
  digitalWrite(LED_PIN, HIGH);
  // on marque une attente de (1s)
  delay(1000);                       
  // on applique la valeur (0) sur la broche
  digitalWrite(LED_PIN, LOW);    
  // on marque une attente de (1s)
  delay(1000);                      
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Arduino-1.1.3 - Compiler le projet"><a class="Link9" href="#Arduino">1.1.3 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Croquis -&gt; Vérifier/Compiler</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Arduino-1.1.4 - Chargement du projet"><a class="Link9" href="#Arduino">1.1.4 - Chargement du projet</a></h2><br><h2 class="Title7 GTitle2" id="Arduino-1.1.4.1 - Charger le projet"><a class="Link9" href="#Arduino">1.1.4.1 - Charger le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Croquis -&gt; Téléverser</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Arduino-1.1.5 - Simulation du projet"><a class="Link9" href="#Arduino">1.1.5 - Simulation du projet</a></h2><br><h2 class="Title7 GTitle2" id="Arduino-1.1.5.1 - Configurer l'affichage détaillé"><a class="Link9" href="#Arduino">1.1.5.1 - Configurer l'affichage détaillé</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Fichier -&gt; Préférences
Afficher les résultats détaillés pendant
Cocher -&gt; Compilation
Ok</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Arduino-1.1.5.2 - Compiler le projet"><a class="Link9" href="#Arduino">1.1.5.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Croquis -&gt; Vérifier/Compiler</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">Linking everything together...
"C:\\Program Files (x86)\\Arduino\\hardware\\tools\\avr/bin/avr-gcc" -w -Os -g -flto -fuse-linker-plugin -Wl,--gc-sections -mmcu=atmega328p -o "C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938/rdarduino.ino.elf" "C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938\\sketch\\rdarduino.ino.cpp.o" "C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938/..\\arduino_cache_579469\\core\\core_arduino_avr_uno_0c812875ac70eb4a9b385d8fb077f54c.a" "-LC:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938" -lm
"C:\\Program Files (x86)\\Arduino\\hardware\\tools\\avr/bin/avr-objcopy" -O ihex -j .eeprom --set-section-flags=.eeprom=alloc,load --no-change-warnings --change-section-lma .eeprom=0 "C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938/rdarduino.ino.elf" "C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938/rdarduino.ino.eep"
"C:\\Program Files (x86)\\Arduino\\hardware\\tools\\avr/bin/avr-objcopy" -O ihex -R .eeprom "C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938/rdarduino.ino.elf" "C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938/rdarduino.ino.hex"
"C:\\Program Files (x86)\\Arduino\\hardware\\tools\\avr/bin/avr-size" -A "C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938/rdarduino.ino.elf"
Le croquis utilise 924 octets (2%) de l'espace de stockage de programmes. Le maximum est de 32256 octets.
Les variables globales utilisent 9 octets (0%) de mémoire dynamique, ce qui laisse 2039 octets pour les variables locales. Le maximum est de 2048 octets.</xmp></pre></div><br>On s'intéresse ici au chemin du fichier exécutable :<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># rdarduino.ino.hex
"C:\\Users\\Admin\\AppData\\Local\\Temp\\arduino_build_356938/rdarduino.ino.hex"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Arduino-1.1.5.3 - Configurer Arduino dans Proteus"><a class="Link9" href="#Arduino">1.1.5.3 - Configurer Arduino dans Proteus</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Aller dans -&gt; C:\ProgramData\Labcenter Electronics\Proteus 8 Professional\LIBRARY
Copier -&gt; ArduinoTEP.IDX
Copier -&gt; ArduinoTEP.LIB</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Arduino-1.1.5.4 - Simuler le projet sous Proteus"><a class="Link9" href="#Arduino">1.1.5.4 - Simuler le projet sous Proteus</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/Arduino/img/i_arduino_test.png" alt="/Tutoriels/Embedded_System/Arduino/img/i_arduino_test.png"></div><br><h2 class="Title7 GTitle2" id="Arduino-1.1.5.5 - Problèmes de simulation sous Proteus"><a class="Link9" href="#Arduino">1.1.5.5 - Problèmes de simulation sous Proteus</a></h2><br><h2 class="Title7 GTitle2" id="Arduino-1.1.5.5.1 - Gérer les problèmes de compatibilité"><a class="Link9" href="#Arduino">1.1.5.5.1 - Gérer les problèmes de compatibilité</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bureau -&gt; Raccourci -&gt; Proteus 8 Professional
Clic droit -&gt; Propriétés
Compatibilité
Lancer la résolution des problèmes de compatibilités
Dépanner le programme
Cocher -&gt; Mon problème n'est pas répertorié -&gt; Suivant
Je ne sais pas -&gt; Suivant
Cocher -&gt; Mon problème n'est pas répertorié -&gt; Suivant
Mode de compatibilité
Cocher -&gt; Exécuter ce programme en mode de compatibilité
Sélectionner -&gt; Windows XP (Service Park 3)
Cocher -&gt; Exécuter ce programme en tant que admnistrateur
Appliquer -&gt; Ok
Tester le programme
Annuler</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Liens"><a class="Link3" href="#">Liens</a></h1><div class="Body3"><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://people.csail.mit.edu/albert/bluez-intro/index.html">http://people.csail.mit.edu/albert/bluez-intro/index.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.theengineeringprojects.com/2016/08/new-proteus-libraries-engineering-students.html">https://www.theengineeringprojects.com/2016/08/new-proteus-libraries-engineering-students.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.theengineeringprojects.com/2015/12/arduino-library-proteus-simulation.html">https://www.theengineeringprojects.com/2015/12/arduino-library-proteus-simulation.html</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.theengineeringprojects.com/2020/07/proteus-libraries-of-embedded-sensors.html">https://www.theengineeringprojects.com/2020/07/proteus-libraries-of-embedded-sensors.html</a><br><br></div></div></div></div><br>
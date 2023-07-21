<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#embedsys">Système embarqué</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/embedsys/pic">PIC</a>
</div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en C avec le PIC</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>C</b> avec le&nbsp;<b>PIC</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programme-principal">Programme principal</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configuration-des-parametres">Configuration des paramètres</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#ports">Ports</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#delais">Délais</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#mplab-x-ide">MPLab X IDE</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>Les microcontrôleurs <b>PICs </b>sont des composants dits RISC (Reduced Instructions
Set Computer), ou encore composants à jeu d’instructions réduit. La famille PIC18
présente des améliorations assez notables par rapport à la famille précédente (PIC16).
Les changements majeurs sont apportés au cœur du microcontrôleur. Le jeu
d’instructions est passé à 75 instructions, dont la plupart sont codées sur un seul mot
de 16 bits. La mémoire de programme a subi une extension énorme avec un accès
linéaire. La capacité de la mémoire de données est multipliée par huit par rapport à la
famille PIC16. Le jeu d’instructions est augmenté de huit nouvelles instructions; ces
instructions activables dans l’option de configuration, sont spécialement conçues
pour optimiser sa programmation en langages évolués (Basic, C, Pascal). <br><br>Les
principales caractéristiques de cette famille sont :<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Technologie Nanowatt, garantit une consommation d’énergie très réduite</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">CPU 8 bits à architecture RISC avec une fréquence maximale de 40MHz</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">75 instructions, extensibles à 83 (16 bits de large)</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Jusqu’à 2 Mo d’espace programme adressable</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Mémoire RAM de 4 Ko maximum, y compris la zone des SFR (Special Function Registers). La zone SFR comporte les registres de la CPU et des périphériques</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Pile matérielle de 31 niveaux</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">EEPROM pour le stockage des données non-volatiles</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Intègre un multiplieur 8 x 8 bits câblés</div>
</div><br>La série PIC18 fait partie de la gamme haute performance (High-End) des
architectures 8 bits de la société Microchip. Outre les périphériques standards, cette
famille intègre des modules avancés tels que les modules CAN, USB, Ethernet,
LCD.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programme-principal">Programme principal</a>
</h1>
<div class="Section6"><br>La fonction (main) est le point d'entrée de tout programme C embarqué.<br><br>Programme principal.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void main() {
    GPort_configPort(1, 0x00);
    GPort_writePort(1, 0xFF);
    
    while(1) {
        GPort_writePin(1, 1, 1);
        GDelay_ms(500);
        GPort_writePin(1, 1, 0);
        GDelay_ms(500);
    }
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un programme embarqué doit tourner toujours dans une boucle infinie.<br>d'où la présence de la boucle (while).</div>
</div><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configuration-des-parametres">Configuration des paramètres</a>
</h1>
<div class="Section6"><br>L'opérateur (pragma) permet de définir une configuration.<br><br>Configuration des paramètres.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// Oscillator Selection
#pragma config OSC = HS
// Oscillator Switch Enable
#pragma config OSCS = ON
// Power Up Timer
#pragma config PWRT = OFF
// Brown Out Reset
#pragma config BOR = ON
// Brown Out Voltage
#pragma config BORV = 25
// Watchdog Timer
#pragma config WDT = OFF
// Watchdog Postscaler
#pragma config WDTPS = 128
// Stack Overflow Reset
#pragma config STVR = ON
// Low Voltage ICSP
#pragma config LVP = ON
// Code Protection Block 0
#pragma config CP0 = OFF
// Code Protection Block 1
#pragma config CP1 = OFF
// Code Protection Block 2
#pragma config CP2 = OFF
// Code Protection Block 3
#pragma config CP3 = OFF
// Boot Block Code Protection
#pragma config CPB = OFF
// Data EEPROM Code Protection
#pragma config CPD = OFF 
// Write Protection Block 0
#pragma config WRT0 = OFF
// Write Protection Block 1
#pragma config WRT1 = OFF
// Write Protection Block 2
#pragma config WRT2 = OFF
// Write Protection Block 3
#pragma config WRT3 = OFF
// Boot Block Write Protection
#pragma config WRTB = OFF
// Configuration Register Write Protection
#pragma config WRTC = OFF
// Data EEPROM Write Protection
#pragma config WRTD = OFF
// Table Read Protection Block 0
#pragma config EBTR0 = OFF
// Table Read Protection Block 1
#pragma config EBTR1 = OFF
// Table Read Protection Block 2
#pragma config EBTR2 = OFF
// Table Read Protection Block 3
#pragma config EBTR3 = OFF
// Boot Block Table Read Protection
#pragma config EBTRB = OFF
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="ports">Ports</a>
</h1>
<div class="Section6"><br>Le registre (TRISA) permet de configurer le port A (PORTA).<br>Le registre (TRISB) permet de configurer le port B (PORTB).<br>Le registre (TRISC) permet de configurer le port C (PORTC).
<br>Le registre (TRISD) permet de configurer le port D (PORTD).
<br>Le registre (TRISE) permet de configurer le port E (PORTE).<br><br>Configuration du port A.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GPort_configPortA(uchar _data) {
    TRISA = _data;
}
//===============================================</pre><br>Configuration d'une broche du port A.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GPort_configPinA(uchar _pin, GBit _data) {
    if(_pin == 0) TRISAbits.TRISA0 = _data;
    else if(_pin == 1) TRISAbits.TRISA1 = _data;
    else if(_pin == 2) TRISAbits.TRISA2 = _data;
    else if(_pin == 3) TRISAbits.TRISA3 = _data;
    else if(_pin == 4) TRISAbits.TRISA4 = _data;
    else if(_pin == 5) TRISAbits.TRISA5 = _data;
    else if(_pin == 6) TRISAbits.TRISA6 = _data;}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une valeur à (1) sur un bit de configuration correspond à une broche configuré en (entrée) sur le port associé.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une valeur à (0) sur un bit de configuration correspond à une broche configuré en (sortie) sur le port associé.</div>
</div><br>Ecriture sur le port A configuré en sortie.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GPort_writePortA(uchar _data) {
    PORTA = _data;
}
//===============================================</pre><br>Ecriture sur une broche du port A configuré en sortie.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GPort_writePinA(uchar _pin, GBit _data) {
    if(_pin == 0) PORTAbits.RA0 = _data;
    else if(_pin == 1) PORTAbits.RA1 = _data;
    else if(_pin == 2) PORTAbits.RA2 = _data;
    else if(_pin == 3) PORTAbits.RA3 = _data;
    else if(_pin == 4) PORTAbits.RA4 = _data;
    else if(_pin == 5) PORTAbits.RA5 = _data;
    else if(_pin == 6) PORTAbits.RA6 = _data;
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="delais">Délais</a>
</h1>
<div class="Section6"><br>La macro (__delay_ms) permet de réaliser des délais d'attente en (ms).<br>La macro (__delay_us) permet de réaliser des délais d'attente en (µs).&nbsp;<br><br>Réalisation d'un délais en ms.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void main() {
    GPort_configPort(1, 0x00);
    GPort_writePort(1, 0xFF);
    
    while(1) {
        GPort_writePin(1, 1, 1);
        __delay_ms(500);
        GPort_writePin(1, 1, 0);
        __delay_ms(500);
    }
}
//===============================================</pre><br>Réalisation d'un délais en µs.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void main() {
    GPort_configPort(1, 0x00);
    GPort_writePort(1, 0xFF);
    
    while(1) {
        GPort_writePin(1, 1, 1);
        __delay_us(500);
        GPort_writePin(1, 1, 0);
        __delay_us(500);
    }
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="mplab-x-ide">MPLab X IDE</a>
</h1>
<div class="Section6"><br>MPLab est un environnement de développement intégré pour PIC.<br>XC8 fournit un compilateur C 8-bit pour MPLab.<br><br>Téléchargement de MPLab.<br><br><a class="GLink3 Link4" style=" color: lime;" href="https://www.microchip.com/en-us/tools-resources/develop/mplab-x-ide#tabs" target="_blank">https://www.microchip.com/en-us/tools-resources/develop/mplab-x-ide#tabs</a><br><br>Téléchargement de XC8.<br><br><a class="GLink3 Link4" style=" color: lime;" href="https://www.microchip.com/en-us/tools-resources/develop/mplab-xc-compilers/downloads-documentation#XC8" target="_blank">https://www.microchip.com/en-us/tools-resources/develop/mplab-xc-compilers/downloads-documentation#XC8</a><br><br>Création d'un nouveau projet.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">File
New Project
Microchip Embedded
Standalone Project
Next
Family &gt; Advanced 8-bit MCUs (POIC18)
Device &gt; PIC18F448
Tool &gt; No Tool
Next
Compiler Toolchains
XC8 &gt; XC8 (v2.41) [C:\Program Files\Microchip\xc8\v2.41\bin]
Next
Project Name &gt; blink
Project Location &gt; C:\dev\pic\blink
Project Folder &gt; C:\dev\pic\blink\blink.X
Encoding &gt; UTF-8
Finish</pre><br></div>
</div>
</div></div><br>
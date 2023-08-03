<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#embedsys">Système embarqué</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/embedsys/8051">8051</a>
</div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en C avec le 8051</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>C</b> avec le&nbsp;<b>8051</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programme-principal">Programme principal</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#definition-de-nouveaux-types">Définition de nouveaux types</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#manipulation-des-ports">Manipulation des ports</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#delai-logiciel">Délai logiciel</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#structure-boucle-infinie-simple">Structure boucle infinie simple</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#structure-boucle-infinie-amelioree">Structure boucle infinie améliorée</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#systeme-d-exploitation-embarque-simple--seos-">Système d'exploitation embarqué simple (sEOS)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#ordonnanceur-multitache-temps-reel--scheduler-">Ordonnanceur multitâche temps réel (Scheduler)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#clignotement-d-une-led">Clignotement d'une LED</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#keil--vision">Keil µVision</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>8051 </b>est l'un des microcontrôleurs à usage général les plus populaires actuellement utilisés. Le succès du 8051 a engendré un certain nombre de clones, qui sont collectivement appelés la famille de microcontrôleurs MCS-51, qui comprend des puces de fournisseurs tels qu'Atmel, Philips, Infineon et Texas Instruments.&nbsp;Le 8051 est un microcontrôleur 8 bits, ce qui signifie que la plupart des opérations disponibles sont limitées à 8 bits. Il existe 3 tailles de base du 8051 : Court, Standard et Etendu. Les puces Short et Standard sont souvent disponibles sous forme DIP (boîtier double en ligne), mais les modèles Extended 8051 ont souvent un facteur de forme différent et ne sont pas compatibles drop-in. Toutes ces puces sont appelées 8051 car elles peuvent toutes être programmées en utilisant le langage d'assemblage 8051, et elles partagent toutes certaines caractéristiques (bien que les différents modèles aient tous leurs propres caractéristiques spéciales).&nbsp;Les variantes du 8051 peuvent également avoir un certain nombre de fonctionnalités spéciales spécifiques au modèle, telles que UART, ADC, AOP, I2C, CAN, SPI, ce qui en fait un microcontrôleur encore plus puissant.&nbsp;Les puces 8051 sont utilisées dans une grande variété de systèmes de contrôle, d'applications de télécommunications, de robotique ainsi que dans l'industrie automobile. Selon certaines estimations, les puces de la famille 8051 représentent plus de 50% du marché des puces embarquées.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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ZVvs6oB2UbbV9zWt/eSapm3quq18Q88Ys6M5+f4/AABI4iZ3AIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZP8HhfhURYXPVgYAAAAASUVORK5CYII="></div><br></div>
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
    GTest_init();
    
    while(1) {
        GTest_run();
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
<a class="Section5" href="#" id="definition-de-nouveaux-types">Définition de nouveaux types</a>
</h1>
<div class="Section6"><br>L'opérateur (typedef) permet de définir un nouveau type.<br><br>Définition d'un nouveau type.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef unsigned char uchar;
typedef unsigned int uint;
typedef unsigned long ulong;
typedef bit ubit;
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="manipulation-des-ports">Manipulation des ports</a>
</h1>
<div class="Section6"><br>L'opérateur (P0) permet de manipuler le port (0).<br>L'opérateur (P1) permet de manipuler le port (1).<br>L'opérateur (P2) permet de manipuler le port (2).
<br>L'opérateur (P3) permet de manipuler le port (3).
&nbsp;<br><br>Ecriture sur le port (0).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GPort_writePort0(uchar _data) {
    P0 = _data;
}
//===============================================</pre><br>L'opérateur (sbit) permet de déclarer une broche.<br><br>Déclaration des broches du port (0).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
sbit P0_0 = P0^0;
sbit P0_1 = P0^1;
sbit P0_2 = P0^2;
sbit P0_3 = P0^3;
sbit P0_4 = P0^4;
sbit P0_5 = P0^5;
sbit P0_6 = P0^6;
sbit P0_7 = P0^7;
//===============================================</pre><br>Ecriture sur une broche du port (0).&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GPort_writePinP0(uchar _pin, ubit _data) {
    if(_pin == 0) P0_0 = _data;
    else if(_pin == 1) P0_1 = _data;
    else if(_pin == 2) P0_2 = _data;
    else if(_pin == 3) P0_3 = _data;
    else if(_pin == 4) P0_4 = _data;
    else if(_pin == 5) P0_5 = _data;
    else if(_pin == 6) P0_6 = _data;
    else if(_pin == 7) P0_7 = _data;
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="delai-logiciel">Délai logiciel</a>
</h1>
<div class="Section6"><br>L'opérateur (for) permet de réaliser des délais logiciel.<br><br>Réalisation d'un délai logiciel en ms.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GDelay_ms(uint _ms) {
    uint i, j;
    for(i = 0;i &lt; _ms; i++) {
        for(j = 0; j &lt; 125; j++);
    }
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="structure-boucle-infinie-simple">Structure boucle infinie simple</a>
</h1>
<div class="Section6"><br>La structure boucle infinie simple est la structure de base de tout programme embarqué.<br><br>Elle comporte:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation (GProcess_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise à jour (GProcess_run).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void main() {
    GProcess_init();
    
    while(1) {
        GProcess_run();
    }
}
//===============================================</pre><br>Dans le cas du clignotement d'une diode LED,<br><br>La phase d'initialisation se traduira par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'extinction de toutes les LEDs du port (P1) avec la combinaison (P1, 0xFF).&nbsp;</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_init() {
    GPort_writePort(1, 0xFF); 
}
//===============================================</pre><br>La phase de mise à jour se traduira par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'allumage de la LED (L0) du port (P1) avec la combinaison (P1, L0, 0).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'extinction de la LED (L0) du port (P1) avec la combinaison (P1, L0, 1).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_run() {
    GPort_writePin(1, 0, 0);
    GDelay_ms(500);
    GPort_writePin(1, 0, 1);
    GDelay_ms(500);
}
//===============================================</pre><br>L'avantage de la structure boucle infinie:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Simple à mettre en oeuvre.</div>
</div><br>L'inconvénient de la structure boucle infinie:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">N'est pas multitâche.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Trop gourmand en énergie.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="structure-boucle-infinie-amelioree">Structure boucle infinie améliorée</a>
</h1>
<div class="Section6"><br>La structure boucle infinie améliorée est basée sur la structure boucle infinie simple.<br><br>Elle comporte:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation (GProcess_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise à jour des tâches (GProcess_update).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'attente pour la synchronisation des tâches (GDelay_ms).</div>
</div><br>Le programme principal est basique.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void main() {
    GProcess_init();
    
    while(1) {
        GProcess_run();
    }
}
//===============================================</pre><br>Le processus d'initialisation comprend:<br>&nbsp;<br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La phase de mise à jour des tâches (GProcess_update).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La phase d'attente pour la synchronisation des tâches (GDelay_ms).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_run() {
    GProcess_update();
    GDelay_ms(10);
}
//===============================================</pre><br>Dans le cas du clignotement d'une diode LED,<br><br>La phase d'initialisation se traduira par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'extinction de toutes les LEDs du port (P1) avec la combinaison (P1, 0xFF).&nbsp;</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_init() {
    GPort_writePort(1, 0xFF);
}
//===============================================</pre><br>La phase de mise à jour se traduira par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'allumage de la LED (L0) du port (P1) avec la combinaison (P1, L0, 0).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'extinction de la LED (L0) du port (P1) avec la combinaison (P1, L0, 1).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GProcess_update() {
    if(++gTime &gt;= 50) {
        gFlash = !gFlash;
        GPort_writePin(1, 0, gFlash);
        gTime = 0;
    }
}
//===============================================</pre><br>L'avantage de la structure boucle infinie:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Multitâche.</div>
</div><br>L'inconvénient de la structure boucle infinie:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Trop gourmand en temps CPU.</div>
</div><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="systeme-d-exploitation-embarque-simple--seos-">Système d'exploitation embarqué simple (sEOS)</a>
</h1>
<div class="Section6"><br>Le système d'exploitation embarqué simple (sEOS) est basé sur l'utilisation d'un timer.<br><br>Il comporte:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation du timer (GSeos_init).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation des tâches (GSeosTask_init).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de démarrage du système (GSeos_start).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise à jour des tâches (GSeos_update)</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise en sommeil du système (GSeos_goToSleep).</div>
</div><br>Le programme principal est basique.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void main() {
    GProcess_init();
    
    while(1) {
        GProcess_run();
    }
}
//===============================================</pre><br>Le processus d'initialisation comprend:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La phase d'initialisation du timer (GSeos_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La phase d'initialisation des tâches (GSeosTask_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La phase de démarrage du système (GSeos_start).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_init() {
    GSeos_init(10);
    GSeosTask_init();
    GSeos_start();
}
//===============================================
</pre><br>La boucle principale consiste à mettre le système en sommeil (mode IDLE).<br><br>Le système dort tout le temps. Il se réveille à chaque interruption timer pour mettre à jour les tâches dans un laps de temps. Puis, il repasse en mode sommeil. Cela conduit à un gain considérable d'énergie. Le mode (IDLE) est le mode économie d'énergie.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_run() {
    GSeos_goToSleep();
}
//===============================================</pre><br>La mise à jour des tâches est réalisée dans le gestionnaire d'interruption du timer.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSeos_update() interrupt INTERRUPT_TIMER_T0 {
    GSeos_reload(10);
    GSeosTask_update();
}
//===============================================</pre><br>La phase d'initialisation du timer est en ms.<br><div class="GBullet1 Bullet1">
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSeos_init(uchar _ms) {
    TMOD &amp;= 0xF0;
    TMOD |= 0x01;
    TL0 = PRELOAD_L(_ms);
    TH0 = PRELOAD_H(_ms);
    TF0 = 0;
    ET0 = 1;
    TR0 = 1;
}
//===============================================</pre><br>La phase de rechargement du timer est en ms.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSeos_reload(uchar _ms) {
    TF0 = 0;
    TR0 = 0;
    TL0 = PRELOAD_L(_ms);
    TH0 = PRELOAD_H(_ms);
    TR0 = 1;
}
//===============================================</pre><br>La phase de démarrage du système se traduit par l'activation de toutes les interruptions.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSeos_start() {
    EA = 1;
}
//===============================================</pre><br>La phase de mise en sommeil se traduit par le passage en mode IDLE.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSeos_goToSleep() {
    PCON |= 0x01;
}
//===============================================</pre><br>Dans le cas du clignotement d'une diode LED,<br><br>La phase d'initialisation des tâches se traduira par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'extinction de toutes les LEDs du port (P1) avec la combinaison (P1, 0xFF).</div>
</div>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSeosTask_init() {
    GPort2_writePort(1, 0xFF);
}
//===============================================</pre><br>La phase de mise à jour des tâches se traduira par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'allumage de la LED (L0) du port (P1) avec la combinaison (P1, L0, 0).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'extinction de la LED (L0) du port (P1) avec la combinaison (P1, L0, 1).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSeosTask_update() {
    if(++gTime &gt;= 50) {
        gFlash = !gFlash;
        GPort2_writePin(1, 0, gFlash);
        gTime = 0;
    }
}
//===============================================</pre><br>L'avantage du système d'exploitation embarqué simple:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Multitâche.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Faible consommation d'énergie.</div>
</div><br>L'inconvénient du système d'exploitation embarqué simple:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Encombrement du gestionnaire d'interruption du timer.</div>
</div><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="ordonnanceur-multitache-temps-reel--scheduler-">Ordonnanceur multitâche temps réel (Scheduler)</a>
</h1>
<div class="Section6"><br>L'ordonnanceur multitâche temps réel (Scheduler) est basé sur la structure logicielle d'un système Time-Triggered Architecture (TTA) et est réalisé en utilisant un timer et une liste de tâches.<br><br>Time-Triggered Architecture (TTA), également connue sous le nom de système déclenché par le temps, est un système informatique qui exécute un ou plusieurs ensembles de tâches selon un calendrier de tâches prédéterminé et défini. La mise en oeuvre d'un système TTA impliquera généralement l'utilisation d'une seule interruption liée au débordement périodique d'un temporisateur (timer). Cette interruption peut piloter un planificateur de tâches, une forme restreinte de système d'exploitation en temps réel (RTOS). Le planificateur à son tour libérera les tâches système à des moments prédéfinis (<a class="GLink3 Link4" style=" color: lime;" href="https://en.wikipedia.org/wiki/Time-triggered_architecture" target="_blank">Wikipedia</a>).<br><br>La structure de la tâche comporte:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un pointeur de tâche (m_pTask).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une date de démarrage de la tâche (m_delay).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une période d'exécution de la tâche (m_period).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un drapeau d'exécution de la tâche (m_runMe).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
struct _sGTask {
    void (*m_pTask)();
    uint m_delay;
    uint m_period;
    uchar m_runMe;
};
//===============================================</pre><br>L'ordonnanceur comporte:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation du timer (GSch_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation des tâches (GSchTask_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de démarrage du système (GSch_start).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise à jour des tâches (GSch_update).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'exécution des tâches (GSch_dispatchTasks).&nbsp;</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise en sommeil du système (GSch_goToSleep).</div>
</div><br>Le programme principal se traduit par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un processus d'initialisation (GProcess_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une boucle principale (GProcess_run).&nbsp;</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void main() {
    GProcess_init();
    
    while(1) {
        GProcess_run();
    }
}
//===============================================</pre><br>Le processus d'initialisation comprend:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation du timer (GSch_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation des tâches (GSchTask_init).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de démarrage du système (GSch_start).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_init() {
    GSch_init(1);
    GSchTask_init();
    GSch_start();
}
//===============================================</pre><br>La boucle principale se traduit par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'appel du répartiteur de tâches (GSch_dispatchTasks).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_run() {
    GSch_dispatchTasks();
}
//===============================================</pre><br>La phase de mise à jour des tâches se traduit par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise à jour du délai de démarrage par tâche (m_delay) s'il est différent de (0).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise à jour du drapeau d'exécution par tâche (m_runMe) si le délai de démarrage (m_delay) est égal (0).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise à jour du délai de démarrage par tâche (m_delay) si la période d'exécution (m_period) est différente de (0).&nbsp;</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSch_update() interrupt INTERRUPT_TIMER_T2 {
    uchar lIndex;
    TF2 = 0;
    for(lIndex = 0; lIndex &lt; SCH_MAX_TASKS; lIndex++) {
        if(gTaskMap[lIndex].m_pTask != 0) {
            if(gTaskMap[lIndex].m_delay == 0) {
                gTaskMap[lIndex].m_runMe += 1;
                if(gTaskMap[lIndex].m_period != 0) {
                    gTaskMap[lIndex].m_delay = gTaskMap[lIndex].m_period;
                }
            }
            else {
                gTaskMap[lIndex].m_delay -= 1;
            }
        }
    }
}
//===============================================</pre><br>Le répartiteur de tâches (dispatcher) comprend:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'exécution de la tâche (m_pTask) si le drapeau d'exécution par tâche est strictement supérieur à (0).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise à jour du drapeau d'exécution (m_runMe) par tâche après chaque exécution de tâche (m_pTask).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase suppression de la tâche après chaque exécution de tâche (m_pTask) si sa période d'exécution est égale à (0).&nbsp;</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de mise en sommeil (GSch_goToSleep) après l'exécution de toutes les tâches.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSch_dispatchTasks() {
    uchar lIndex;
    for(lIndex = 0; lIndex &lt; SCH_MAX_TASKS; lIndex++) {
        if(gTaskMap[lIndex].m_runMe &gt; 0) {
            (*gTaskMap[lIndex].m_pTask)();
            gTaskMap[lIndex].m_runMe -= 1;
            if(gTaskMap[lIndex].m_period == 0) {
                GSch_deleteTask(lIndex);
            }
        }
    }
    GSch_goToSleep();
}
//===============================================</pre><br>La phase de suppression d'une tâche consiste à réinitialiser à (0) toutes ses propriétés.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSch_deleteTask(uchar _index) {
    gTaskMap[_index].m_pTask = 0x0000;
    gTaskMap[_index].m_delay = 0;
    gTaskMap[_index].m_period = 0;
    gTaskMap[_index].m_runMe = 0;
}
//===============================================</pre><br>La phase d'initialisation du système comporte:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La suppression de toutes les tâches (GSch_deleteTask).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'initialisation du timer en ms.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSch_init(uchar _ms) {
    uchar lIndex;
    for(lIndex = 0; lIndex &lt; SCH_MAX_TASKS; lIndex++) {
        GSch_deleteTask(lIndex);
    }
    T2CON = 0x00; 
    TH2 = PRELOAD_H(_ms); 
    TL2 = PRELOAD_L(_ms); 
    RCAP2H = PRELOAD_H(_ms); 
    RCAP2L = PRELOAD_L(_ms);
    TF2 = 0;
    ET2 = 1;
    TR2 = 1;
}
//===============================================</pre><br>La phase d'initialisation des tâches se traduit par:<br><br>Une phase d'initialisation spécifique à la tâche (GLedFlash_init).<br>Une phase d'ajout de la tâche dans l'ordonnanceur (GLedFlash_update).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSchTask_init() {
    GLedFlash_init();
    GSch_addTask(GLedFlash_update, 0, 500);
}
//===============================================</pre><br>L'ajout d'une tâche dans l'ordonnanceur comporte:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase de recherche d'une place disponible dans la liste des tâches.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une phase d'initialisation des propriétés de la tâche.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSch_addTask(void (*_pTask)(), const uint _delay, const uint _period) {
    uchar lIndex = 0;
    while((gTaskMap[lIndex].m_pTask != 0) &amp;&amp; (lIndex &lt; SCH_MAX_TASKS)) lIndex++;
    if(lIndex == SCH_MAX_TASKS) return;
    gTaskMap[lIndex].m_pTask = _pTask;
    gTaskMap[lIndex].m_delay = _delay;
    gTaskMap[lIndex].m_period = _period;
    gTaskMap[lIndex].m_runMe = 0;
}
//===============================================</pre><br>La phase de démarrage du système se traduit par l'activation de toutes les interruptions.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GSeos_start() {
    EA = 1;
}
//===============================================</pre><br>La phase de mise en sommeil se traduit par le passage en mode IDLE.&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSch_goToSleep() {
    PCON |= 0x01;
}
//===============================================</pre><br>Dans le cas du clignotement d'une diode LED,<br><br>La phase d'initialisation des tâches se traduira par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'extinction de toutes les LEDs du port (P1) avec la combinaison (P1, 0xFF).</div>
</div>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GLedFlash_init() {
    GPort2_writePort(1, 0xFF);
}
//===============================================</pre><br>La phase de mise à jour des tâches se traduira par:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'allumage de la LED (L0) du port (P1) avec la combinaison (P1, L0, 0).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'extinction de la LED (L0) du port (P1) avec la combinaison (P1, L0, 1).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GLedFlash_update() {
    gFlash = !gFlash;
    GPort_writePin(1, 0, gFlash);
}
//===============================================</pre><br>L'avantage du système d'exploitation embarqué simple:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Multitâche.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Faible consommation d'énergie.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Faible encombrement du gestionnaire d'interruption du timer.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Temps réel (précis et déterministe).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Portable sur toutes les architectures dotées d'un Timer.</div>
</div><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="clignotement-d-une-led">Clignotement d'une LED</a>
</h1>
<div class="Section6"><br>Initialisation de l'ordonnanceur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSchTask_initLedFlash() {
    GLedFlash_init();
    GSch_addTask(GLedFlash_update, 0, 500);
}
//===============================================</pre><br>Initialisation des LEDs.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GLedFlash_init() {
    GPort_writePort(gPort, 0x0F);
}
//===============================================</pre><br>Clignotement de la LED.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GLedFlash_update() {
    gFlash = !gFlash;
    GPort_writePin(gPort, gPin, gFlash);
}
//===============================================</pre><br>Schéma électrique.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/gif;base64,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"></div><br>Tracé électrique.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="keil--vision">Keil µVision</a>
</h1>
<div class="Section6"><br>Keil µVision est un environnement de développement intégré pour le 8051.<br><br>Création d'un nouveau projet.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Project
New µVision Project
Nom du projet &gt; client
Search &gt; at89c51
Microchip
AT89C51
OK
Non</pre><br>Génération d'un fichier exécutable.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Project: client
Target 1
Clic droit &gt; Options for Target 'Target 1'
Output
Name of Executable &gt; client
Cocher &gt; Create Executable &gt; .\Objects\client
Cocher &gt; Debug Information
Cocher &gt; Browse Information
Cocher &gt; Create HEX File
OK</pre><br>Ajout d'un fichier source.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Project: client
Target 1
Source Group 1
Clic droit &gt; Add New Item to Group 'Source Group 1'
Output
Name of Executable &gt; client
Cocher &gt; Create Executable &gt; .\Objects\client
Cocher &gt; Debug Information
Cocher &gt; Browse Information
Cocher &gt; Create HEX File
OK</pre><br><br></div>
</div>
</div></div><br>
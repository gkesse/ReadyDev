<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec le STM32</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec le <b>STM32</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>STM32 </b>est une famille de microcontrôleurs 32-bits basée sur les processeurs d'architecture ARM 32-bits, tels que le Cortex-M7F, le Cortex-M4F, le Cortex-M3, Cortex-M0+, ou le Cortex-M0, dont chaque microcontrôleur est constitué d'un cœur de calcul, de mémoire vive (RAM) statique, de mémoire flash (pour le stockage), d'une interface de débogage et de différents périphériques.<br>Par exemple, le <span class="GColor1" style="color:lime;">STM32 F4</span> comporte un Cortex-M4F, un DSP et un FPU. Il peut être complètement géré par le système d'exploitation temps-réel <span class="GColor1" style="color:lime;">ChibiOS/RT</span>.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Embedded_System/8051/img/b_8051.png" alt="/Tutoriels/Embedded_System/8051/img/b_8051.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement STM32.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617735857427"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617735857427");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous STM32CubeIDE"><a class="Link9" href="#Installation">1.1 - Installation sous STM32CubeIDE</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger STM32CubeIDE"><a class="Link9" href="#Installation">1.1.1 - Télécharger STM32CubeIDE</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.st.com/en/development-tools/stm32cubeide.html">https://www.st.com/en/development-tools/stm32cubeide.html</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.st.com/en/development-tools/stm32cubeide.html#get-software">https://www.st.com/en/development-tools/stm32cubeide.html#get-software</a><br><br><b>en.st-stm32cubeide_1.6.1_9958_20210326_1446_x86_64.exe.zip</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer STM32CubeIDE"><a class="Link9" href="#Installation">1.1.2 - Installer STM32CubeIDE</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Extraire -&gt; en.st-stm32cubeide_1.6.1_9958_20210326_1446_x86_64.exe.zip
Ouvrir -&gt; en.st-stm32cubeide_1.6.1_9958_20210326_1446_x86_64.exe
Next
I Agree
Choose Install Location -&gt; C:\ST\STM32CubeIDE_1.6.1
Next
Cocher -&gt; SEGGER J-Link Drivers
Cocher -&gt; ST-LINK Drivers
Install
Next
Cocher -&gt; Create Desktop Shortcut
Finish</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet STM32 en C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619228541747"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619228541747");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous STM32CubeIDE"><a class="Link9" href="#Tests">1.1 - Test sous STM32CubeIDE</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Démarrer STM32CubeIDE"><a class="Link9" href="#Tests">1.1.1 - Démarrer STM32CubeIDE</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
STM32CubeIDE
Workspace -&gt; ReadyTest\stm32
Launch</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Créer un projet"><a class="Link9" href="#Tests">1.1.2 - Créer un projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">STM32CubeIDE
File -&gt; New -&gt; STM32 Project
Part Number -&gt; STM32F103C6
Next
Project Name -&gt; ReadyApp
Targeted Language -&gt; C
Targeted Binary Executable -&gt; Executable
Targeted Project Type -&gt; STM32Cube
Finish
Yes
Pinout & Configuration -&gt; System Core -&gt; RCC
High Speed Clock (HSE) -&gt; Crystal/Ceramic Resonator
Clock Configuration
System Clock Mux -&gt; Cocher -&gt; HSE
Pinout & Configuration -&gt; Pinout View
PB0 -&gt; GPIO_Output
PB1 -&gt; GPIO_Output
Project -&gt; Generate Code
Yes</xmp></pre></div><br></div></div></div></div><br>
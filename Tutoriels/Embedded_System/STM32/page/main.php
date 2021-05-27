<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation système embarqué avec le STM32</div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation système embarqué avec le <b>STM32</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>STM32 </b>est une famille de microcontrôleurs 32-bits basée sur les processeurs d'architecture ARM 32-bits, tels que le Cortex-M7F, le Cortex-M4F, le Cortex-M3, Cortex-M0+, ou le Cortex-M0, dont chaque microcontrôleur est constitué d'un cœur de calcul, de mémoire vive (RAM) statique, de mémoire flash (pour le stockage), d'une interface de débogage et de différents périphériques.<br>Par exemple, le <span class="GColor1" style="color:lime;">STM32 F4</span> comporte un Cortex-M4F, un DSP et un FPU. Il peut être complètement géré par le système d'exploitation temps-réel <span class="GColor1" style="color:lime;">ChibiOS/RT</span>.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/STM32/img/b_stm32.png" class="lazy" data-src="/Tutoriels/Embedded_System/STM32/img/b_stm32.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement STM32.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617735857427"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617735857427");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1---Installation-sous-Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1-1---Installation-sous-STM32CubeIDE"><a class="Link9" href="#Installation">1.1 - Installation sous STM32CubeIDE</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1-1-1---Telecharger-STM32CubeIDE"><a class="Link9" href="#Installation">1.1.1 - Télécharger STM32CubeIDE</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.st.com/en/development-tools/stm32cubeide.html">https://www.st.com/en/development-tools/stm32cubeide.html</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.st.com/en/development-tools/stm32cubeide.html#get-software">https://www.st.com/en/development-tools/stm32cubeide.html#get-software</a><br><br><b>en.st-stm32cubeide_1.6.1_9958_20210326_1446_x86_64.exe.zip</b><br><br><h2 class="Title7 GTitle2" id="Installation-1-1-2---Installer-STM32CubeIDE"><a class="Link9" href="#Installation">1.1.2 - Installer STM32CubeIDE</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Extraire -&gt; en.st-stm32cubeide_1.6.1_9958_20210326_1446_x86_64.exe.zip
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
Finish</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet STM32 en C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619228541747"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619228541747");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1---Test-sous-Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1---Test-sous-STM32CubeIDE"><a class="Link9" href="#Tests">1.1 - Test sous STM32CubeIDE</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1-1---Demarrer-STM32CubeIDE"><a class="Link9" href="#Tests">1.1.1 - Démarrer STM32CubeIDE</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Windows
STM32CubeIDE
Workspace -&gt; ReadyTest\stm32
Launch</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-2---Creer-un-projet"><a class="Link9" href="#Tests">1.1.2 - Créer un projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">STM32CubeIDE
File -&gt; New -&gt; STM32 Project
Part Number -&gt; STM32F103C6
Next
Project Name -&gt; ReadyApp
Targeted Language -&gt; C
Targeted Binary Executable -&gt; Executable
Targeted Project Type -&gt; STM32Cube
Finish
Yes
Pinout &amp; Configuration -&gt; System Core -&gt; RCC
High Speed Clock (HSE) -&gt; Crystal/Ceramic Resonator
Clock Configuration
System Clock Mux -&gt; Cocher -&gt; HSE
Pinout &amp; Configuration -&gt; Pinout View
PB0 -&gt; GPIO_Output
PB1 -&gt; GPIO_Output
Project -&gt; Generate Code
Yes</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-3---Editer-le-programme-C"><a class="Link9" href="#Tests">1.1.3 - Éditer le programme C</a></h2><br><h3 class="Title8 GTitle3">Core/Src/main.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "main.h"
//===============================================
void SystemClock_Config(void);
static void MX_GPIO_Init(void);
//===============================================
int main(void) {
    // on initialise la couche d'abstraction materielle
    HAL_Init();
    SystemClock_Config();
    MX_GPIO_Init();

    while (1) {
        // on initialise la broche PB0 a (1)
        HAL_GPIO_WritePin(GPIOB, GPIO_PIN_0, GPIO_PIN_SET);
        // on initialise la broche PB1 a (0)
        HAL_GPIO_WritePin(GPIOB, GPIO_PIN_1, GPIO_PIN_RESET);
        // on attend pendant un delai de (500ms)
        HAL_Delay(500);
        // on initialise la broche PB0 a (0)
        HAL_GPIO_WritePin(GPIOB, GPIO_PIN_0, GPIO_PIN_RESET);
        // on initialise la broche PB1 a (1)
        HAL_GPIO_WritePin(GPIOB, GPIO_PIN_1, GPIO_PIN_SET);
        HAL_Delay(500);
        // on attend pendant un delai de (500ms)
    }
}
//===============================================
void SystemClock_Config(void) {
    // on cree la structure de configuration de l'oscillateur
    // interne/externe RCC (HSE, HSI, LSE et LSI).
    RCC_OscInitTypeDef RCC_OscInitStruct = {0};
    // on cree la structure de configuration de l'horloge 
    // des bus systeme RCC, AHB et APB.
    RCC_ClkInitTypeDef RCC_ClkInitStruct = {0};

    // on definit le type de l'oscillateur
    RCC_OscInitStruct.OscillatorType = RCC_OSCILLATORTYPE_HSE;
    // on definit l'etat du HSE
    RCC_OscInitStruct.HSEState = RCC_HSE_ON;
    // on definit l'etat de la PLL
    RCC_OscInitStruct.PLL.PLLState = RCC_PLL_NONE;
    
    // on initialise la configuration de l'oscillateur RCC
    if (HAL_RCC_OscConfig(&amp;RCC_OscInitStruct) != HAL_OK) {
        Error_Handler();
    }

    // on definit le type de l'horloge a configurer
    RCC_ClkInitStruct.ClockType = RCC_CLOCKTYPE_HCLK|RCC_CLOCKTYPE_SYSCLK|RCC_CLOCKTYPE_PCLK1|RCC_CLOCKTYPE_PCLK2;
    // on definit la source de l'horloge systeme
    RCC_ClkInitStruct.SYSCLKSource = RCC_SYSCLKSOURCE_HSE;
    // on definit le diviseur de l'horloge systeme (AHB)
    RCC_ClkInitStruct.AHBCLKDivider = RCC_SYSCLK_DIV1;
    // on definit le diviseur de l'horloge systeme (APB1)
    RCC_ClkInitStruct.APB1CLKDivider = RCC_HCLK_DIV1;
    // on definit le diviseur de l'horloge systeme (APB2)
    RCC_ClkInitStruct.APB2CLKDivider = RCC_HCLK_DIV1;

    // on initialise la configuration de l'horloge des bus systeme
    if (HAL_RCC_ClockConfig(&amp;RCC_ClkInitStruct, FLASH_LATENCY_0) != HAL_OK) {
        Error_Handler();
    }
}
//===============================================
static void MX_GPIO_Init(void) {
    GPIO_InitTypeDef GPIO_InitStruct = {0};

    // on active l'horloge des ports GPIO
    __HAL_RCC_GPIOD_CLK_ENABLE();
    __HAL_RCC_GPIOB_CLK_ENABLE();

    // on configure en sortie les broches PB0 et PB1
    HAL_GPIO_WritePin(GPIOB, GPIO_PIN_0|GPIO_PIN_1, GPIO_PIN_RESET);

    // on configure en sortie les broches PB0 et PB1
    // on definit les broches a configurer
    GPIO_InitStruct.Pin = GPIO_PIN_0|GPIO_PIN_1;
    // on definit le mode de fonctionnement des broches (inupt/output)
    GPIO_InitStruct.Mode = GPIO_MODE_OUTPUT_PP;
    // on definit le mode pull (pull_up/pull_down)
    GPIO_InitStruct.Pull = GPIO_NOPULL;
    // on definit la vitesse des broches (low/medium/high)
    GPIO_InitStruct.Speed = GPIO_SPEED_FREQ_LOW;
    // on initialise la configuration du GPIOB
    HAL_GPIO_Init(GPIOB, &amp;GPIO_InitStruct);
}
//===============================================
void Error_Handler(void) {
    // on desactive les interruptions IRQ
    __disable_irq();
    // on rentre dans une boucle infinie
    while (1) {}
}
//===============================================
#ifdef  USE_FULL_ASSERT
void assert_failed(uint8_t *file, uint32_t line) {

}
#endif
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-4---Configurer-le-fichier-executable"><a class="Link9" href="#Tests">1.1.4 - Configurer le fichier exécutable</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">STM32CubeIDE
ReadyApp -&gt; Clic droit -&gt; Properties
C/C++ Build -&gt; Settings -&gt; Tool Settings -&gt; MCU Post Build Outputs
Cocher -&gt; Convert to Intel HEX File (-O ihex)
Apply and Close</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-5---Compiler-le-projet"><a class="Link9" href="#Tests">1.1.5 - Compiler le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">STM32CubeIDE
Project -&gt; Build</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-6---Simulation-du-projet"><a class="Link9" href="#Tests">1.1.6 - Simulation du projet</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1-6-1---Simulation-sous-Proteus"><a class="Link9" href="#Tests">1.1.6.1 - Simulation sous Proteus</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Embedded_System/STM32/img/i_stm32_test.gif" class="lazy" data-src="/Tutoriels/Embedded_System/STM32/img/i_stm32_test.gif"></div><br></div></div></div></div><br>
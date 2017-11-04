<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/CMake_05.json");
    
    GHeader::Instance()->setTitle("CMake");
    GHeader::Instance()->setMenu("Tutoriels");
    GHeader::Instance()->setView("CMake_05");
    GHeader::Instance()->setLink($m_data["links"]);

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd pgCr10">
        <!-- ============================================ -->
        <?php GFileSystem::Instance()->setDirectory(__FILE__); ?>
        <?php require $_SERVER["DOCUMENT_ROOT"]."/php/file_system.php"; ?>  
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20">CMake</h1>
                <div class="tal pgCt10">
                    <?php $m_ds = $m_data["definition"]; ?>
                    <div class=""><?php echo join(" ", $m_ds) ?></div>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20">Programmation</h1>
                <div class="tal pgCt10">
                    <h3 class="clra">Programme Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
#ifndef _GMath_
#define _GMath_
//===============================================
#include <cmath>
//===============================================
#ifdef DLL_APP  
#define DLL_API __declspec(dllexport)   
#else  
#define DLL_API __declspec(dllimport)   
#endif 
//===============================================
class DLL_API GMath {
...
};
//===============================================
#endif
//===============================================
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Programme Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
//===============================================
#ifndef _GShow_
#define _GShow_
//===============================================
#include <iostream>
#include <iomanip>
#include <string>
//===============================================
#ifdef DLL_APP  
#define DLL_API __declspec(dllexport)   
#else  
#define DLL_API __declspec(dllimport)   
#endif 
//===============================================
using namespace std;
//===============================================
class DLL_API GShow {
...
};
//===============================================
#endif
//===============================================
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
add_library(${GTARGET} SHARED ${GSOURCES} ${GHEADERS})
set_target_properties(${GTARGET} PROPERTIES DEFINE_SYMBOL DLL_APP)
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles Création Librairie Dynamique:</h3>
                    <pre><xmp class="ova prettyprint linenums">
set(GTARGET Hello)
set(GSOURCES GShow.cpp GMath.cpp)
set(GHEADERS GShow.h GMath.h)
add_library(${GTARGET} SHARED ${GSOURCES} ${GHEADERS})
set_target_properties(${GTARGET} PROPERTIES DEFINE_SYMBOL DLL_APP)
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Règles CMake:</h3>
                    <pre><xmp class="ova prettyprint linenums">
cmake_minimum_required(VERSION 3.0)
project(GProject)
add_subdirectory(manager)
                    </xmp></pre>
                </div>
                <div class="tal pgCt10">
                    <h3 class="clra">Commande de Génération:</h3>
                    <pre><xmp class="ova prettyprint linenums">
cmake %GSRC% ^
-G "NMake Makefiles" ^
-DCMAKE_BUILD_TYPE=RELEASE ^
-DCMAKE_C_COMPILER=cl ^
-DCMAKE_CXX_COMPILER=cl ^
-DCMAKE_INSTALL_PREFIX=bin
                    </xmp></pre>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20">Résultats</h1>
                <div class="tal ova pgCt10">
                    <?php $m_ds = $m_data["img"]["results"]; ?>
                    <img src="<?php echo $m_ds; ?>" alt="Resultats" />
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bga">
                <h1 class="bga clrb pgCt20">Voir Aussi</h1>
                <div class="tal pgCt10">
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["see_also"];
                            foreach($m_ds as $m_di) {
                            ?>
                            <li class="mrgb"><i class="fa-li fa fa-paper-plane-o"></i>
                                <a class="hvra" href="<?php echo $m_di["link"]; ?>">
                                    <?php echo $m_di["name"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
            </div>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->

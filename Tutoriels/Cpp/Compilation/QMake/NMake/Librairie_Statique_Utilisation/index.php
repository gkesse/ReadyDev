<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/QMake_04.json");
    
    GConfig::Instance()->setData("title", "QMake");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "QMake_04");
    GConfig::Instance()->setData("link", $m_data["links"]);
    GConfig::Instance()->setData("dir", __FILE__);

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <?php require $_SERVER["DOCUMENT_ROOT"]."/php/file_system.php"; ?>  
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra clrb pgCt20">QMake</h1>
                <div class="txal pgCt10">
                    <?php $m_ds = $m_data["definition"]; ?>
                    <div class=""><?php echo join(" ", $m_ds) ?></div>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra clrb pgCt20">Programmation</h1>
                <div class="txal pgCt10">
                    <h3 class="clra">Programme Principal:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "GShow.h"
#include "GMath.h"
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    double m_data;
    
    GShow::Instance()->show("Static Library Using..."); 
    
    m_data = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(m_data, "add(22, 7)");  
    
    m_data = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(m_data, "subtract(22, 7)");  
    
    m_data = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(m_data, "multiply(22, 7)"); 
    
    m_data = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(m_data, "divide(22, 7)"); 
    
    m_data = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(m_data, "quotient(22, 7)"); 
    
    m_data = GMath::Instance()->modulus(22, 7);
    GShow::Instance()->show(m_data, "modulus(22, 7)");    
    return 0;
}
//===============================================
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles Utilisation Librairie Statique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
INCLUDEPATH += \
    $$PWD/include
 
LIBS += \
    -L$$PWD/lib -lHello

HEADERS += \
    $$PWD/include/GMath.h \
    $$PWD/include/GShow.h
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles QMake:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
SOURCES += \
    $$PWD/main.cpp
                    </xmp></pre>
                </div>
                <div class="txal pgCt10">
                    <h3 class="clra">Règles QMake:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(lib/hello/GHello.pri)
include(../src/GMain.pri)
                    </xmp></pre>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra clrb pgCt20">Résultats</h1>
                <div class="txal ovfa pgCt10">
                    <?php 
                        $m_ds = dirname($_SERVER['PHP_SELF'])."/".
                        $m_data["img"]["results"];
                    ?>
                    <img src="<?php echo $m_ds; ?>" alt="Resultats" />
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra clrb pgCt20">Voir Aussi</h1>
                <div class="txal pgCt10">
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

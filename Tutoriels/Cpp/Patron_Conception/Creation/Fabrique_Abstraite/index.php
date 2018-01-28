<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Fabrique_Abstraite.json");
    
    GConfig::Instance()->setData("title", "Fabrique Abstraite");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Fabrique_Abstraite");
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
                <h1 class="bgra clrb pgCt20">Patron Fabrique Abstraite</h1>
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
                    <h3 class="clra pgCr10">Programme Principal:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include "GAbstractFactory.h"
#include "GButton.h"
//===============================================
int main(int argc, char** argv) {
    GAbstractFactory* m_absFactory = 0;
    GButton* m_button = 0;

    m_absFactory = GAbstractFactory::Create("Win");
    m_button = m_absFactory->createButton();
    m_button->paint();

    m_absFactory = GAbstractFactory::Create("OSX");
    m_button = m_absFactory->createButton();
    m_button->paint();

    return 0;
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Fabrique Abstraite:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GAbstractFactory {
public:
    static GAbstractFactory* Create(const string& factory);

public:
    virtual GButton* createButton() = 0;
};
//===============================================
GAbstractFactory* GAbstractFactory::Create(const string& factory) {
    if(factory == "Win") {return new GWinFactory;}
    else if(factory == "OSX") {return new GOSXFactory;}
    return 0;
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Fabrique Concrète Windows:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GWinFactory : public GAbstractFactory {
public:
    GWinFactory();
    ~GWinFactory();

public:
    GButton* createButton();
};
//===============================================
void GWinButton::paint() {
    cout << "Button : Windows\n";
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Fabrique Concrète OSX:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GOSXFactory : public GAbstractFactory {
public:
    GOSXFactory();
    ~GOSXFactory();

public:
    GButton* createButton();
};
//===============================================
GButton* GOSXFactory::createButton() {
    return new GOSXButton;
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Interface Bouton:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GButton {
public:
    virtual void paint() = 0;
};
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Bouton Concret Windows:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GWinButton : public GButton {
public:
    GWinButton();
    ~GWinButton();

public:
    void paint();
};
//===============================================
void GWinButton::paint() {
    cout << "Button : Windows\n";
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Bouton Concret OSX:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GOSXButton : public GButton {
public:
    GOSXButton();
    ~GOSXButton();

public:
    void paint();
};
//===============================================
void GOSXButton::paint() {
    cout << "Button : OSX\n";
}
//===============================================
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

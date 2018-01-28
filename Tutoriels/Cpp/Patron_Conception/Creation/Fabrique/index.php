<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Fabrique.json");
    
    GConfig::Instance()->setData("title", "Fabrique");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Fabrique");
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
                <h1 class="bgra clrb pgCt20">Patron Fabrique</h1>
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
#include "GFactory.h"
#include "GAnimal.h"
//===============================================
int main(int argc, char** argv) {
    GAnimal* m_animal = 0;

    m_animal = GFactory::Create("Cat");
    m_animal->showName();

    m_animal = GFactory::Create("Dog");
    m_animal->showName();

    return 0;
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra">Programme Interface:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GAnimal {
public:
    virtual void showName() = 0;
};
//===============================================
                    </xmp></pre>
                    <h3 class="clra">Programme Objet Concret:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GCat : public GAnimal {
public:
    GCat();
    ~GCat();

public:
    void showName();
};
//===============================================
void GCat::showName() {
    cout << "Animal : Cat\n";
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra">Programme Objet Concret:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GDog : public GAnimal {
public:
    GDog();
    ~GDog();

public:
    void showName();
};
//===============================================
void GDog::showName() {
    cout << "Animal : Dog\n";
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra">Programme Fabrique:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GFactory {
public:
    static GAnimal* Create(const string& animal);
};
//===============================================
GAnimal* GFactory::Create(const string& animal) {
    if(animal == "Cat") {return new GCat;}
    else if(animal == "Dog") {return new GDog;}
    return 0;
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

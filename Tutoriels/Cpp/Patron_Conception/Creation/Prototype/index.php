<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Prototype.json");
    
    GConfig::Instance()->setData("title", "Prototype");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Prototype");
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
                <h1 class="bgra clrb pgCt20">Patron Prototype</h1>
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
#include "GAnimal.h"
#include "GCar.h"
//===============================================
int main(int argc, char** argv) {
    GAnimal* m_animal = 0;
    GAnimal* m_animal2 = 0;
    GAnimal* m_animal3 = 0;

    GCar* m_car = 0;
    GCar* m_car2 = 0;
    GCar* m_car3 = 0;

    m_animal = new GAnimal;
    m_animal->print();
    cout << "\n";

    m_animal2 = (GAnimal*)m_animal->clone();
    m_animal2->setFamily("Chien");
    m_animal2->setName("Berger Allemand");
    m_animal2->print();
    cout << "\n";

    m_animal3 = (GAnimal*)m_animal2->clone();
    m_animal3->setFamily("Chat");
    m_animal3->setName("British Shorthair");
    m_animal3->print();
    cout << "\n";

    m_car = new GCar;
    m_car->print();
    cout << "\n";

    m_car2 = (GCar*)m_car->clone();
    m_car2->setMaker("Peugeot");
    m_car2->setName("Peugeot 308");
    m_car2->setPrice("20.550 Euro");
    m_car2->print();
    cout << "\n";

    m_car3 = (GCar*)m_car2->clone();
    m_car3->setMaker("Renault");
    m_car3->setName("Renault Clio");
    m_car3->setPrice("14.100 Euro");
    m_car3->print();
    cout << "\n";

    return 0;
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Interface Prototype:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GPrototype {
public:
    virtual GPrototype* clone() = 0;
    virtual void print() = 0;
};
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Prototype Concret Animal:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GAnimal : public GPrototype {
public:
    GAnimal();
    GAnimal(const GAnimal& animal);
    ~GAnimal();

public:
    GPrototype* clone();
    void print();
    void setFamily(const string& family);
    void setName(const string& name);

private:
    string m_family;
    string m_name;
};
//===============================================
GPrototype* GAnimal::clone() {
    return new GAnimal(*this);
}
//===============================================
void GAnimal::print() {
    cout << "Prototype : Animal" << "\n";
    cout << "Family : " << m_family << "\n";
    cout << "Name : " << m_name << "\n";
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Prototype Concret Voiture:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GCar : public GPrototype {
public:
    GCar();
    GCar(const GCar& car);
    ~GCar();

public:
    GPrototype* clone();
    void print();
    void setMaker(const string& maker);
    void setName(const string& name);
    void setPrice(const string &price);

private:
    string m_maker;
    string m_name;
    string m_price;
};
//===============================================
GPrototype* GCar::clone() {
    return new GCar(*this);
}
//===============================================
void GCar::print() {
    cout << "Prototype : Car" << "\n";
    cout << "Maker : " << m_maker << "\n";
    cout << "Name : " << m_name << "\n";
    cout << "Price : " << m_price << "\n";
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
      
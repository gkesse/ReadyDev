<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Monteur.json");
    
    GConfig::Instance()->setData("title", "Monteur");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Monteur");
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
                <h1 class="bgra clrb pgCt20">Patron Monteur</h1>
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
#include "GBuilder.h"
//===============================================
int main(int argc, char** argv) {
    GBuilder* m_builder = 0;

    m_builder = GBuilder::Create("Royal");
    m_builder->build();
    m_builder->getPizza()->print();

    m_builder = GBuilder::Create("Hawaii");
    m_builder->build();
    m_builder->getPizza()->print();
    return 0;
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Interface Monteur:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GBuilder {
public:
    void createPizza();
    GPizza* getPizza() const;
    void build();
    static GBuilder* Create(const string& pizza);

public:
    virtual void buildDough() = 0;
    virtual void buildSauce() = 0;
    virtual void buildGarnish() = 0;

protected:
    GPizza* m_pizza;
};
//===============================================
void GBuilder::build() {
    createPizza();
    buildDough();
    buildSauce();
    buildGarnish();
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Objet Concret Pizza:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GPizza {
public:
    GPizza();
    ~GPizza();

public:
    void setDough(const string& dough);
    void setSauce(const string& sauce);
    void setGarnish(const string& garnish);
    void print() const;

private:
    string m_dough;
    string m_sauce;
    string m_garnish;
};
//===============================================
void GPizza::print() const {
    cout << "Pizza : ";
    cout << m_dough << " | ";
    cout << m_sauce << " | ";
    cout << m_garnish << "\n";
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Monteur Concret Pizza Royal:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GPizzaRoyal : public GBuilder {
public:
    GPizzaRoyal();
    ~GPizzaRoyal();

public:
    void buildDough();
    void buildSauce();
    void buildGarnish();
};
//===============================================
void GPizzaRoyal::buildDough() {
    m_pizza->setDough("Royal Dough");
}
//===============================================
void GPizzaRoyal::buildSauce() {
    m_pizza->setSauce("Royal Sauce");
}
//===============================================
void GPizzaRoyal::buildGarnish() {
    m_pizza->setGarnish("Royal Garnish");
}
//===============================================
                    </xmp></pre>
                    <h3 class="clra pgCr10">Programme Monteur Concret Pizza Hawaii:</h3>
                    <pre><xmp class="ovfa prettyprint linenums">
//===============================================
class GPizzaHawaii : public GBuilder {
public:
    GPizzaHawaii();
    ~GPizzaHawaii();

public:
    void buildDough();
    void buildSauce();
    void buildGarnish();
};
//===============================================
void GPizzaHawaii::buildDough() {
    m_pizza->setDough("Hawaii Dough");
}
//===============================================
void GPizzaHawaii::buildSauce() {
    m_pizza->setSauce("Hawaii Sauce");
}
//===============================================
void GPizzaHawaii::buildGarnish() {
    m_pizza->setGarnish("Hawaii Garnish");
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
      
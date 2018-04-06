<!-- ============================================ -->
<div class="pgCt10">
    <div class="bgra">
        <h1 class="bgra pgCt20" id="Communiquer_avec_le_clavier">
            <a class="clrb" href="#Sommaire">
                Communiquer avec le clavier
            </a>
        </h1>
        <!-- ============================================ -->
        <div class="txal pgCt10">
            <div class="txal pgCr10">
                <ul class="fa-ul">
                    <?php 
                        $m_ds = $m_data["Clavier"];
                        foreach($m_ds as $m_di) {
                        ?>
                    <li>
                        <i class="fa-li fa fa-book clrg"></i>
                        <a class="hvra clrg" href="<?php echo $m_di["link"]; ?>">
                            <?php echo $m_di["name"]; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>            
            </div>
            <!-- ============================================ -->
            <!-- ============================================ -->
            <div class="pgCr10" id="Lire_des_donnees_a_partir_du_clavier">
                <a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer_avec_le_clavier">
                    Lire des données à partir du clavier
                </a>    
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Objectif</b></div>
                <div class="">
                    Récupérer des données saisies à partir du clavier.
                </div>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Implémentation</b></div>
                <div class="">
                    Récupérer les identifiants d’une personne saisis à partir du clavier.<br/>
                    Récupérer le nom (m_name) et le code d’entrée (m_code) de la personne.
                </div>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Résultat</b></div>
                <div class="txal ovfa">
                    <img src="img/Image_02.png" alt="Image.png" />
                </div>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Dossier projet</b></div>
<pre class="ovfa">
src/main.cpp
</pre>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">src/main.cpp</b></div>
                <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    string m_name;
    int m_code;
    
    cout << "\n### Saisir vos identifiants:\n";
    cout << "Nom: "; cin >> m_name;
    cout << "Code: "; cin >> m_code;
    
    cout << "\n### Vous avez saisi:\n";
    cout << "Nom: " << m_name << "\n";
    cout << "Code: " << m_code << "\n";
    return 0;
}
//===============================================
                </xmp></pre>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Problème</b></div>
<pre class="ovfa ftf0">
Problème de gestion d’espace lors de la saisie
Nom : Gerard KESSE
Code : la saisie du code est ignorée
</pre>
                <div class="txal ovfa">
                    <img src="img/Image_03.png" alt="Image.png" />
                </div>
            </div>
            <!-- ============================================ -->
            <!-- ============================================ -->
            <div class="pgCr10" id="Gerer_le_probleme_d_espace_lors_de_la_saisie_de_donnees">
                <a class="bgra dibm ftfb ftsg clra pgCt10" href="#Communiquer_avec_le_clavier">
                    Gérer le problème d’espace lors de la saisie de données
                </a>    
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Objectif</b></div>
                <div class="">
                    Gérer le problème d’espace lors de la saisie de données à partir du clavier.
                </div>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Implémentation</b></div>
                <div class="">
                    Récupérer les identifiants d’une personne saisis à partir du clavier.<br/>
                    Récupérer le nom (m_name) et le code d’entrée (m_code) de la personne.
                </div>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Résultat</b></div>
                <div class="txal ovfa">
                    <img src="img/Image_04.png" alt="Image.png" />
                </div>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">Dossier projet</b></div>
<pre class="ovfa">
src/main.cpp
</pre>
            </div>
            <!-- ============================================ -->
            <div class="pgCr10">
                <div><b class="ftsg">src/main.cpp</b></div>
                <pre><xmp class="ovfa prettyprint linenums">
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
int main(int argc, char** argv) {
    string m_cin;
    string m_name;
    int m_code;
    
    cout << "\n### Saisir vos identifiants:\n";
    cout << "Nom: "; getline(cin, m_cin); m_name = m_cin;
    cout << "Code: "; getline(cin, m_cin); m_code = stoi(m_cin);
    
    cout << "\n### Vous avez saisi:\n";
    cout << "Nom: " << m_name << "\n";
    cout << "Code: " << m_code << "\n";
    return 0;
}
//===============================================
                </xmp></pre>
            </div>
            <!-- ============================================ -->
            <!-- ============================================ -->
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->

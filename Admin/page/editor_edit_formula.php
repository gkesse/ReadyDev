<!-- ============================================ -->
<div class="Modal" id="ModalFormula">
    <div class="Content10" id="FormulaBody">
        <div class="Button3 Close" onclick="closeFormulaEditor(this)"><i class="fa fa-close"></i></div>
        <div class="Title5">Formule Mathématique</div>
        <div class="Body4">
            <div class="Row11">Formule :</div>
            <!-- ============================================ -->
            <div class="Row16">
                <div class="ComboBox" onchange="alert('echo');">
                    <select onchange="getFormula(this.value); this.selectedIndex = 0">
                        <!-- ============================================ -->
                        <option value="">ReadyFormula</option>
                        <option value="Formule">Formule</option>
                        <option value="SystemeEquations">Système d'Equations</option>
                        <option value="Alpha">Alpha</option>
                        <option value="Beta">Beta</option>
                        <option value="Gama">Gama</option>
                        <option value="Lambda">Lambda</option>
                        <option value="Nabla">Nabla</option>
                        <option value="DeriveePartielle">Derivée Partielle</option>
                        <option value="Appartient">Appartient</option>
                        <option value="NAppartientPas">N'Appartient Pas</option>
                        <option value="PourTout">Pour Tout</option>
                        <option value="ValeurMoyenne">Valeur Moyenne</option>
                        <option value="Integrale">Intégrale</option>
                        <option value="Fraction">Fraction</option>
                        <option value="AlignementGauche">Alignement Gauche</option>
                        <!-- ============================================ -->
                    </select>
                </div>
                <button class="Button5" type="button" title="Espace" onclick="getFormula('Espace')"><i class="fa fa-code"></i></button>		
                <button class="Button5" type="button" title="Alpha" onclick="getFormula('Alpha')">&alpha;</button>		
                <button class="Button5" type="button" title="Beta" onclick="getFormula('Beta')">&beta;</button>		
                <button class="Button5" type="button" title="Gama" onclick="getFormula('Gama')">&gamma;</button>		
                <button class="Button5" type="button" title="Omega" onclick="getFormula('Omega')">&omega;</button>		
                <button class="Button5" type="button" title="Lambda" onclick="getFormula('Lambda')">&lambda;</button>		
            </div>
            <div class="Row12">
                <textarea class="Field2" id="FormulaText" rows="10"
                placeholder="Entrez votre formule mathématique..."
                oninput="viewFormula(this)"></textarea>
            </div>
            <div class="Row12">
                <div class="Show" id="FormulaShow">Aperçu</div>
            </div>
            <!-- ============================================ -->
        </div>
        <div class="Row14" id="FormulaMsg"></div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GFormula.js"></script>
<script src="/js/class/GComboBox.js"></script>
<script src="/js/formula.js"></script>
<!-- ============================================ -->

<!-- ============================================ -->
<div class="Modal" id="ModalFormula">
    <div class="Content10" id="FormulaBody">
        <div class="Button3 Close" onclick="closeFormula(this)"><i class="fa fa-close"></i></div>
        <div class="Title5">Formule Mathématique</div>
        <form class="Body4" id="FormulaForm" method="post">
            <div class="Row11">Entrez votre formule mathématique.</div>
            <div class="Row12">
                <textarea class="Field2" rows="1"
                placeholder="Entrez votre formule mathématique..."></textarea>
            </div>
            <div class="Row13">
                <div class="Button4" onclick="validate(this)"><i class="fa fa-paper-plane-o"></i> Valider</div>
            </div>
        </form>
        <div class="Row14" id="FormulaMsg"></div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GFormula.js"></script>
<script src="/js/formula.js"></script>
<!-- ============================================ -->

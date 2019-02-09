<!-- ============================================ --
<div class="Modal HtmlEditor" id="ModalHtmlEditor">
    <div class="Body">
        <div class="Button Close" onclick="closeHtmlEditor(this)"><i class="fa fa-close"></i></div>
        <div class="Title">Modification du texte de l'accueil</div>
        <div class="Text" id="HtmlEditorForm" method="post" action="">
            <div class="Desc">Saisissez les nouvelles données.</div>
            <div class="Col">
                <div class="Label">Texte :</div>
                <div class="Field"><div class="Data" id="HtmlEditorData" contenteditable="true"></div></div>
            </div>
            <div class="ButtonMap">
                <div class="Item" onclick="saveHtmlEditor(this)"><i class="fa fa-floppy-o"></i> Enregistrer</div>
            </div>
        </div>
    </div>
    <div class="Msg" id="HtmlEditorMsg"></div>
</div>
<!-- ============================================ -->
<div class="Modal HtmlEditor" id="ModalHtmlEditor" onkeypress="keyPressHtmlEditor(event)">
    <div class="Content10">
        <div class="Button3 Close" onclick="closeHtmlEditor()"><i class="fa fa-close"></i></div>
        <div class="Title5">Editeur de code HTML</div>
        <div class="Body4">
            <div class="Row11">Saisissez votre code HTML.</div>
            <div class="Col6">
                <div class="Label6">Texte :</div>
                <div class="Field7"><textarea wrap="off" class="Data2" id="HtmlEditorData"></textarea></div>
            </div>
            <div class="Row13">
                <div class="Button4" onclick="saveHtmlEditor()"><i class="fa fa-paper-plane-o"></i> Enregistrer</div>
            </div>
        </div>
        <div class="Row14" id="HtmlEditorMsg"></div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GHtmlEditor.js"></script>
<script src="/js/html_editor.js"></script>
<!-- ============================================ -->

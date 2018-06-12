<!-- ============================================ -->
<div class="MainBlock">
	<div class="Content">
		<h1 class="Title2" id="Edition_Page_HTML">
			<a class="Link3" href="#">
				Édition Page HTML
			</a>
		</h1>
		<!-- ============================================ -->
		<div class="Body">
            <div class="Row10">
                <div class="Col">
                    <button class="Button2 EditorTab" title="Page d'accueil" 
                    onclick="openEditorTab(this, 'EditorTab0')"><i class="fa fa-home"></i></button>
                </div>
                <div class="Col">
                    <button class="Button2 EditorTab" title="Page de configuration" 
                    onclick="openEditorTab(this, 'EditorTab1')">Page</button>
                </div>
                <div class="Col">
                    <button class="Button2 EditorTab" title="Page d'édition" 
                    onclick="openEditorTab(this, 'EditorTab2')">Édition</button>
                </div>
                <div class="Col">
                    <button class="Button2 EditorTab" title="Aperçu de la page web" 
                    onclick="openEditorTab(this, 'EditorTab3')">Vue</button>
                </div>
                <div class="Col">
                    <button class="Button2 EditorTab" title="Aperçu du code HTML" 
                    onclick="openEditorTab(this, 'EditorTab4')">HTML</button>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row4 Left EditorTabCtn" id="EditorTab0">
                <h2 class="Title4">
                    ReadyHTMLEditor
                </h2>
                <div class="Body6">
                    <div class="Content9">
                        L'interface <b>ReadyHTMLEditor</b> vous permet d'éditer rapidement
                        et éfficacement vos différentes pages web. C'est une interface développée
                        en <b>PHP</b> et maintenue par <b>Gérard KESSE</b>, concepteur du site <b>ReadyDev</b>,
                        la Plateforme de Développement Continu.
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row4 Left EditorTabCtn" id="EditorTab1">
                <h2 class="Title4">
                    Page
                </h2>
                <div class="Body9 Left">
                    <div class="Row17"><i class="Icon8 fa fa-file-text-o"> :</i></div>
                    <div class="Row18"><div class="Field4" id="FileEdit"></div></div>
                </div>
                <div class="Body10 Left" id="EditorMenu"></div>
                <div class="Body11">
                    <div id="EditorFile"></div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row4 Left EditorTabCtn" id="EditorTab2"
                onkeypress="saveFileKey(event);">
                <h2 class="Title4">
                    Édition
                </h2>
                <?php require "page/editor_edit.php" ?>
            </div>
            <!-- ============================================ -->
            <div class="Row4 Left EditorTabCtn" id="EditorTab3">
                <h2 class="Title4">
                    Vue
                </h2>
                <div class="Body7 Center">
                    <button class="Button5" type="button" title="Afficher la page web" 
                    onclick="viewPage();">Vue</button>
                </div>
                <div class="Body8">
                    <div class="Content9" id="EditorView"></div> 
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row4 Left EditorTabCtn" id="EditorTab4"
                onkeypress="saveFileTextKey(event);">
                <h2 class="Title4">
                    HTML
                </h2>
                <div class="Body7 Center">
                    <button class="Button5" type="button" title="Afficher le code HTML" 
                    onclick="viewCode();">HTML</button>
                    <button class="Button5" type="button" title="Enregistrer le code HTML" 
                    onclick="saveFileText();"><i class="fa fa-save"></i></button>
                </div>
                <div class="Body8">
                    <textarea class="TextArea" rows="20" id="EditorHTML"></textarea>
                </div>
            </div>
            <!-- ============================================ -->
		</div>
	</div>
</div>
<!-- ============================================ -->
<script src="/js/class/GConfig.js"></script>
<script src="/js/class/GEditor.js"></script>
<script src="/js/editor.js"></script>
<!-- ============================================ -->


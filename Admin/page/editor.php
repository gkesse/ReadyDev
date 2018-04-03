<!-- ============================================ -->
<div class="pgCt10">
	<div class="bgra">
		<h1 class="bgra pgCt20" id="Edition-Page-HTML">
			<a class="clrb" href="#Sommaire-Admin">
				Édition Page HTML
			</a>
		</h1>
		<!-- ============================================ -->
		<div class="pgCc05 fts0 txal">
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Page d'accueil" 
				onclick="openEditorTab(this, 'EditorTab0')"><i class="fa fa-home"></i></button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Page de configuration" 
				onclick="openEditorTab(this, 'EditorTab1')">Page</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Page d'édition" 
				onclick="openEditorTab(this, 'EditorTab2')">Édition</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Aperçu de la page web" 
				onclick="openEditorTab(this, 'EditorTab3')">Vue</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Aperçu du code HTML" 
				onclick="openEditorTab(this, 'EditorTab4')">HTML</button>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab0">
			<h2 class="pdbb clra bdbb">
				ReadyHTMLEditor
			</h2>
			<div class="pgCr10 ovfa">
				<div class="hghd">
					L'interface <b>ReadyHTMLEditor</b> vous permet d'éditer rapidement
					et éfficacement vos différentes pages web. C'est une interface développée
					en <b>PHP</b> et maintenue par <b>Gérard KESSE</b>, concepteur du site <b>ReadyDev</b>,
					la Plateforme de Développement Continu.
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab1">
			<h2 class="pdbb clra bdbb">
				Page
			</h2>
			<div class="txal bdbb psra">
				<div class="pgCr05 dibm psac"><i class="clrb fa fa-file-text-o"> :</i></div>
				<div class="ovfa mglb pgCr05"><div class="dibm clrb" id="FileEdit"></div></div>
			</div>
			<div class="txal bdbb ovfa" id="EditorMenu"></div>
			<div class="pgCr10 mnhf ovfa">
				<div id="EditorFile"></div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab2"
			onkeypress="saveFileKey(event);">
			<h2 class="pdbb clra bdbb">
				Édition
			</h2>
			<?php require "page/editor_edit.php" ?>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab3">
			<h2 class="pdbb clra bdbb">
				Vue
			</h2>
			<div class="bdbb txac">
				<button class="evta pddc dibm" type="button" title="Afficher la page web" 
				onclick="viewPage();">Vue</button>
			</div>
			<div class="ovfa bgrc bdbb">
				<div class="hghd" id="EditorView"></div> 
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab4">
			<h2 class="pdbb clra bdbb">
				HTML
			</h2>
			<div class="bdbb txac">
				<button class="evta pddc dibm" type="button" title="Afficher le code HTML" 
				onclick="viewCode();">HTML</button>
				<button class="evta pddc dibm" type="button" title="Enregistrer le code HTML" 
				onclick="saveFileText();"><i class="fa fa-save"></i></button>
			</div>
			<div class="ovfa bgrc bdbb">
				<textarea class="hghd pgCt10" rows="20" id="EditorHTML"></textarea>
			</div>
		</div>
		<!-- ============================================ -->
	</div>
</div>
<!-- ============================================ -->
<script src="/js/class/GConfig.js"></script>
<script src="/js/editor.js"></script>
<script src="/js/class/GEditor.js"></script>
<!-- ============================================ -->


<?php 
    $m_data = GJson::Instance()->getData("/data/json/sitemap.json");
?>
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
				<button class="bgra pgCt05 hvra EditorTab" title="Page d'accueil" onclick="openEditorTab(this, 'EditorTabHome')">Accueil</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Page de configuration" onclick="openEditorTab(this, 'EditorTabPage')">Page</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Interface d'édition" onclick="openEditorTab(this, 'EditorTabEdit')">Édition</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Aperçu de la page web" onclick="openEditorTab(this, 'EditorTabView')">Vue</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" title="Aperçu du code HTML" onclick="openEditorTab(this, 'EditorTabHTML')">HTML</button>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTabHome">
			<h2 class="pdbb clra bdbb">
				ReadyHTMLEditor
			</h2>
			<div class="pgCr10">
				L'interface <b>ReadyHTMLEditor</b> vous permet d'éditer rapidement
				et éfficacement vos différentes pages web. C'est une interface développée
				en <b>PHP</b> et maintenue par <b>Gérard KESSE</b>, concepteur du site <b>ReadyDev</b>,
				la Plateforme de Développement Continu.
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTabEdit"
			onkeypress="saveFileKey(event);">
			<h2 class="pdbb clra bdbb">
				Édition
			</h2>
			<?php require "page/editor_edit.php" ?>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTabPage">
			<h2 class="pdbb clra bdbb">
				Page
			</h2>
			<div class="pgCr10">
				L'interface ReadyHTMLEditor vous permet d'éditer vos différentes pages web.
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTabView">
			<h2 class="pdbb clra bdbb">
				Vue
			</h2>
			<div class="bdbb txac">
				<button class="evta pddc dibm" type="button" title="Aperçu de la page web" onclick="viewPage();">Vue</button>
			</div>
			<div class="ovfa bgrc bdbb">
				<div class="hghd" id="EditorViewId"></div> 
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTabHTML">
			<h2 class="pdbb clra bdbb">
				HTML
			</h2>
			<div class="pgCr10">
				L'interface ReadyHTMLEditor vous permet d'éditer vos différentes pages web.
			</div>
		</div>
		<!-- ============================================ -->
	</div>
</div>
<!-- ============================================ -->
<script src="/js/editor.js"></script>
<script src="/js/class/GEditor.js"></script>
<!-- ============================================ -->


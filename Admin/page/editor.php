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
				<button class="bgra pgCt05 hvra EditorTab" onclick="openEditorTab(this, 'EditorTab0')">Accueil</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" onclick="openEditorTab(this, 'EditorTab1')">Interface Edition</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" onclick="openEditorTab(this, 'EditorTab2')">Interface Vue</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra EditorTab" onclick="openEditorTab(this, 'EditorTab3')">Interface HTML</button>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab0">
			<h2 class="pdbb clra bdbb">
				Accueil
			</h2>
			<div class="pgCr10">
				L'interface ReadyHTMLEditor vous permet d'éditer vos différentes pages web.
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab1">
			<h2 class="pdbb clra bdbb">
				Interface Edition
			</h2>
			<div class="pgCr10">
				L'interface ReadyHTMLEditor vous permet d'éditer vos différentes pages web.
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab2">
			<h2 class="pdbb clra bdbb">
				Interface Vue
			</h2>
			<div class="pgCr10">
				L'interface ReadyHTMLEditor vous permet d'éditer vos différentes pages web.
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal EditorTabCtn" id="EditorTab3">
			<h2 class="pdbb clra bdbb">
				Interface HTML
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


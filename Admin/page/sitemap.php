<?php 
    $m_data = GJson::Instance()->getData("/data/json/sitemap.json");
?>
<!-- ============================================ -->
<div class="pgCt10">
	<div class="bgra">
		<h1 class="bgra pgCt20" id="Gestion-Sitemap">
			<a class="clrb" href="#Sommaire-Admin">
				Gestion Sitemap
			</a>
		</h1>
		<!-- ============================================ -->
		<div class="pgCc05 fts0 txal">
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra SitemapTab" title="Page d'accueil" 
				onclick="openSitemapTab(this, 'SitemapTab0');"><i class="fa fa-home"></i></button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra SitemapTab" title="Page d'énumération" 
				onclick="openSitemapTab(this, 'SitemapTab1');">Énumération</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra SitemapTab" title="Page de listing" 
				onclick="openSitemapTab(this, 'SitemapTab2');">Liste</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra SitemapTab" title="Page de génération" 
				onclick="openSitemapTab(this, 'SitemapTab3');">Génération</button>
			</div>
			<div class="pddc dibm ftsb">
				<button class="bgra pgCt05 hvra SitemapTab" title="Page de visualisation" 
				onclick="openSitemapTab(this, 'SitemapTab4');">Visualisation</button>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal SitemapTabCtn" id="SitemapTab0">
			<h2 class="pdbb clra bdbb">
				ReadySitemap
			</h2>
			<div class="pgCr10 ovfa">
				<div class="hghd">
					L'interface <b>ReadySitemap</b> vous permet de générer automatiquement
					le sitemap de votre site web. C'est une interface développée en <b>PHP</b>
					et maintenue par <b>Gérard KESSE</b>, concepteur du site <b>ReadyDev</b>,
					la Plateforme de Développement Continu.
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal SitemapTabCtn" id="SitemapTab1"
			onkeypress="saveFileKey(event);">
			<h2 class="pdbb clra bdbb">
				Énumération
			</h2>
			<div class="txac">
				<button class="evta pddc dibm" type="button" title="Démarrer l'énumération d'URLs" 
				onclick="enumerateUrl();"><i class="fa fa-list"></i> En</button>
				<button class="evta pddc dibm" type="button" title="Supprimer l'énumération d'URLs" 
				onclick="enumerateClear();"><i class="fa fa-trash"></i> Sp</button>
			</div>
			<div class="pgCt10 bgrc ovfa">
				<div class="hghd">
					<div class="pgCr05">
						<span class="dibm mnwb pgCt05 bgra hghe">URLs du site:</span>
						<span class="dibm mnwa pgCt05 bgra hghe" id="UrlSite"></span>
					</div>
					<div class="pgCr05">
						<span class="dibm mnwb pgCt05 bgra hghe">URLs maximal:</span>
						<span class="dibm mnwa pgCt05 bgra hghe" id="UrlMax"></span>
					</div>
					<div class="pgCr05">
						<span class="dibm mnwb pgCt05 bgra hghe">Sitemap total:</span>
						<span class="dibm mnwa pgCt05 bgra hghe" id="SitemapTotal"></span>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal SitemapTabCtn" id="SitemapTab2">
			<h2 class="pdbb clra bdbb">
				Liste
			</h2>
			<div class="txac">
				<button class="evta pddc dibm" type="button" title="Démarrer le listing d'URLs" 
				onclick="listUrl();"><i class="fa fa-list"></i> Ls</button>
				<button class="evta pddc dibm" type="button" title="Supprimer le listing d'URLs" 
				onclick="listClear();"><i class="fa fa-trash"></i> Sp</button>
			</div>
			<div class="pgCt10 bgrc">
				<div class="pgCr05 ovfa">
					<div class="hghd" id="ListUrl"></div> 
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal SitemapTabCtn" id="SitemapTab3">
			<h2 class="pdbb clra bdbb">
				Génération
			</h2>
			<div class="txac">
				<button class="evta pddc dibm" type="button" title="Démarrer la génération du sitemap" 
				onclick="generateUrl();"><i class="fa fa-list"></i> Gn</button>
				<button class="evta pddc dibm" type="button" title="Supprimer la génération du sitemap" 
				onclick="generateClear();"><i class="fa fa-trash"></i> Sp</button>
			</div>
			<div class="pgCt10 bgrc">
				<div class="pgCr05 ovfa">
					<div class="hghd" id="GenerateUrl"></div> 
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10 txal SitemapTabCtn" id="SitemapTab4">
			<h2 class="pdbb clra bdbb">
				Visualisation
			</h2>
			<div class="txac bdbb">
				<button class="evta pddc dibm" type="button" title="Démarrer la visualisation du sitemap" 
				onclick="visualizeUrl();"><i class="fa fa-list"></i> Vs</button>
				<button class="evta pddc dibm" type="button" title="Supprimer la visualisation du sitemap" 
				onclick="visualizeClear();"><i class="fa fa-trash"></i> Sp</button>
			</div>
			<div class="txac">
				<button class="hvra pddc dibm SitemapFileTab" type="button" title="Afficher le fichier sitemaps.xml" 
				onclick="openSitemapFileTab(this, 'SitemapFileTab0');">sitemaps.xml</button>
				<button class="hvra pddc dibm SitemapFileTab" type="button" title="Afficher le fichier sitemap.xml" 
				onclick="openSitemapFileTab(this, 'SitemapFileTab1');">sitemap.xml</button>
			</div>
			<div class="pgCt10 bgrc">
				<div class="pgCr05 SitemapFileTabCtn" id="SitemapFileTab0">
					<h3 class="clrg">sitemaps.xml:</h3>
					<div class="hghd" id="VisualizeSite"></div> 
				</div>
				<div class="pgCr05 SitemapFileTabCtn" id="SitemapFileTab1">
					<h3 class="clrg">sitemap.xml:</h3>
					<div class="hghd" id="VisualizeUrl"></div> 
				</div>
			</div>
		</div>
		<!-- ============================================ -->
	</div>
</div>
<!-- ============================================ -->
<script src="/js/class/GSitemap.js"></script>
<script src="/js/sitemap.js"></script>
<!-- ============================================ -->


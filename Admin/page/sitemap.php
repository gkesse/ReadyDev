<?php 
    $lData = GJson::Instance()->getData("/data/json/sitemap.json");
?>
<!-- ============================================ -->
<div class="MainBlock">
	<div class="Content">
		<h1 class="Title2" id="Gestion_Sitemap">
			<a class="Link3" href="#">
				Gestion Sitemap
			</a>
		</h1>
		<!-- ============================================ -->
        <div class="Body">
            <div class="Row10">
                <div class="Col">
                    <button class="Button2 SitemapTab" title="Page d'accueil" 
                    onclick="openSitemapTab(this, 'SitemapTab0');"><i class="fa fa-home"></i></button>
                </div>
                <div class="Col">
                    <button class="Button2 SitemapTab" title="Page d'énumération" 
                    onclick="openSitemapTab(this, 'SitemapTab1');">Énumération</button>
                </div>
                <div class="Col">
                    <button class="Button2 SitemapTab" title="Page de listing" 
                    onclick="openSitemapTab(this, 'SitemapTab2');">Liste</button>
                </div>
                <div class="Col">
                    <button class="Button2 SitemapTab" title="Page de génération" 
                    onclick="openSitemapTab(this, 'SitemapTab3');">Génération</button>
                </div>
                <div class="Col">
                    <button class="Button2 SitemapTab" title="Page de visualisation" 
                    onclick="openSitemapTab(this, 'SitemapTab4');">Visualisation</button>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row Left SitemapTabCtn" id="SitemapTab0">
                <h2 class="Title4">
                    ReadySitemap
                </h2>
                <div class="Body6">
                    <div class="Content9">
                        L'interface <b>ReadySitemap</b> vous permet de générer automatiquement
                        le sitemap de votre site web. C'est une interface développée en <b>PHP</b>
                        et maintenue par <b>Gérard KESSE</b>, concepteur du site <b>ReadyDev</b>,
                        la Plateforme de Développement Continu.
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row Left SitemapTabCtn" id="SitemapTab1"
                onkeypress="saveFileKey(event);">
                <h2 class="Title4">
                    Énumération
                </h2>
                <div class="Row Line Center">
                    <button class="TabBtn" type="button" title="Démarrer l'énumération d'URLs" 
                    onclick="enumerateUrl();"><i class="fa fa-list"></i> En</button>
                    <button class="TabBtn" type="button" title="Supprimer l'énumération d'URLs" 
                    onclick="enumerateClear();"><i class="fa fa-trash"></i> Sp</button>
                </div>
                <div class="TabRow Bgr Pdd">
                    <div class="Content9"> 
                        <div class="TabForm">
                            <span class="TabLabel">URLs du site:</span>
                            <span class="TabField" id="SitemapUrlSite"></span>
                        </div>
                        <div class="TabForm">
                            <span class="TabLabel">URLs maximal:</span>
                            <span class="TabField" id="SitemapUrlMax"></span>
                        </div>
                        <div class="TabForm">
                            <span class="TabLabel">Sitemap total:</span>
                            <span class="TabField" id="SitemapTotal"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row Left SitemapTabCtn" id="SitemapTab2">
                <h2 class="Title4">
                    Liste
                </h2>
                <div class="Row Line Center">
                    <button class="TabBtn" type="button" title="Démarrer le listing d'URLs" 
                    onclick="listUrl();"><i class="fa fa-list"></i> Ls</button>
                    <button class="TabBtn" type="button" title="Supprimer le listing d'URLs" 
                    onclick="listClear();"><i class="fa fa-trash"></i> Sp</button>
                </div>
                <div class="Row Bgr Pdd">
                    <div class="TabRow">
                        <div class="Content9" id="SitemapListUrl"></div> 
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row Left SitemapTabCtn" id="SitemapTab3">
                <h2 class="Title4">
                    Génération
                </h2>
                <div class="Row Line Center">
                    <button class="TabBtn" type="button" title="Démarrer la génération du sitemap" 
                    onclick="generateUrl();"><i class="fa fa-list"></i> Gn</button>
                    <button class="TabBtn" type="button" title="Supprimer la génération du sitemap" 
                    onclick="generateClear();"><i class="fa fa-trash"></i> Sp</button>
                </div>
                <div class="Row Bgr Pdd">
                    <div class="TabRow">
                        <div class="Content9" id="SitemapGenerateUrl"></div> 
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row Left SitemapTabCtn" id="SitemapTab4">
                <h2 class="Title4">
                    Visualisation
                </h2>
                <div class="Row Line Center Brd">
                    <button class="TabBtn" type="button" title="Démarrer la visualisation du sitemap" 
                    onclick="visualizeUrl();"><i class="fa fa-list"></i> Vs</button>
                    <button class="TabBtn" type="button" title="Supprimer la visualisation du sitemap" 
                    onclick="visualizeClear();"><i class="fa fa-trash"></i> Sp</button>
                </div>
                <div class="Row Line Center">
                    <button class="TabBgr SitemapFileTab" type="button" title="Afficher le fichier sitemaps.xml" 
                    onclick="openSitemapFileTab(this, 'SitemapFileTab0');">sitemaps.xml</button>
                    <button class="TabBgr SitemapFileTab" type="button" title="Afficher le fichier sitemap.xml" 
                    onclick="openSitemapFileTab(this, 'SitemapFileTab1');">sitemap.xml</button>
                </div>
                <div class="TabRow Bgr Pdd">
                    <div class="SitemapFileTabCtn" id="SitemapFileTab0">
                        <h3 class="TabSub">sitemaps.xml:</h3>
                        <div class="Content9" id="SitemapVisualizeSite"></div> 
                    </div>
                    <div class="SitemapFileTabCtn" id="SitemapFileTab1">
                        <h3 class="TabSub">sitemap.xml:</h3>
                        <div class="Content9" id="SitemapVisualizeUrl"></div> 
                    </div>
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



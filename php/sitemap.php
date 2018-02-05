<?php 
    $m_data = GJson::Instance()->getData("/data/json/sitemap.json");
?>
<!-- ============================================ -->
<div class="txal">
    <div class="pddc fts0">
        <div class="pddc dibm">
            <a class="bgra dibm pgCt05 ftsb hvra 
            <?php if(empty($_GET)) echo "bgrc"; ?>" 
            href="/Admin/"><i class="fa fa-home"></i></a>
        </div>
        <div class="pddc dibm">
            <a class="bgra dibm pgCt05 ftsb hvra 
            <?php if(isset($_GET["action"]) && $_GET["action"] == "nombre") echo "bgrc"; ?>" 
            href="/Admin/Sitemaps/Urls/nombre">Nombre URLs</a>
        </div>
        <div class="pddc dibm">
            <a class="bgra dibm pgCt05 ftsb hvra 
            <?php if(isset($_GET["action"]) && $_GET["action"] == "list") echo "bgrc"; ?>" 
            href="/Admin/Sitemaps/Urls/list">Liste URLs</a>
        </div>
        <div class="pddc dibm">
            <a class="bgra dibm pgCt05 ftsb hvra 
            <?php if(isset($_GET["action"]) && $_GET["action"] == "generer") echo "bgrc"; ?>" 
            href="/Admin/Sitemaps/Urls/generer">Générer URLs</a>
        </div>
        <div class="pddc dibm">
            <a class="bgra dibm pgCt05 ftsb hvra 
            <?php if(isset($_GET["action"]) && $_GET["action"] == "visualiser") echo "bgrc"; ?>" 
            href="/Admin/Sitemaps/Urls/visualiser">Visualiser URLs</a>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="pgCt10">
        <?php if(empty($_GET)) { ?>
            <div class="pdba"><?php echo join(" ", $m_data["description"]); ?></div>
            <ul class="fa-ul">
                <li>
                    <i class="fa-li fa fa-hand-o-right clrg"></i>
                    <a class="hvra clrg" href="/Admin/Sitemaps/Urls/nombre">Déterminer le nombre d'Urls</a>
                </li>
                <li>
                    <i class="fa-li fa fa-hand-o-right clrg"></i>
                    <a class="hvra clrg" href="/Admin/Sitemaps/Urls/liste">Lister tous les Urls</a>
                </li>
                <li>
                    <i class="fa-li fa fa-hand-o-right clrg"></i>
                    <a class="hvra clrg" href="/Admin/Sitemaps/Urls/generer">Générer le sitemap</a>
                </li>
                <li>
                    <i class="fa-li fa fa-hand-o-right clrg"></i>
                    <a class="hvra clrg" href="/Admin/Sitemaps/Urls/visualiser">Visualiser le sitemap</a>
                </li>
            </ul>
            <!-- ============================================ -->
            <?php } else if(isset($_GET["action"]) && $_GET["action"] == "nombre") { ?>
            <?php $m_infos = GSiteMap::Instance()->getInfos(); ?>
            <div>Nombre d'URLs: <span class="clrg"><?php echo $m_infos["url_number"]; ?></span></div>
            <div>Nombre Maximal d'URLs: <span class="clrg">50.000</span></div>
            <div>Nombre de Sitemap: <span class="clrg"><?php echo $m_infos["sitemap_number"]; ?></span></div>
            <!-- ============================================ -->
            <?php } else if(isset($_GET["action"]) && $_GET["action"] == "list") { ?>
            <?php $m_infos = GSiteMap::Instance()->getInfos(); ?>
            <div class="ovfa mxha">
                <?php foreach($m_infos["url_list"] as $m_url) { ?>
                    <div ><?php echo $m_url["link"]; ?></div>
                <?php } ?>
            </div>
            <!-- ============================================ -->
            <?php } else if(isset($_GET["action"]) && $_GET["action"] == "generer") { ?>
            <?php GSiteMap::Instance()->generate(); ?>
            <div>La Génération du Sitemap s'est déroulée avec succès...</div>
            <!-- ============================================ -->
            <?php } else if(isset($_GET["action"]) && $_GET["action"] == "visualiser") { ?>
            <div class="pgCt10">
                <h3 class="clra">sitemaps.xml:</h3>
                <?php $m_code = GFile::Instance()->getData("/data/sitemaps/sitemaps.xml"); ?>
                <pre><xmp class="ovfa mxha prettyprint linenums"><?php echo $m_code; ?></xmp></pre>
            </div>
            <div class="pgCt10">
                <h3 class="clra">sitemap.xml:</h3>
                <?php $m_code = GFile::Instance()->getData("/data/sitemaps/sitemap.xml"); ?>
                <pre><xmp class="ovfa mxha prettyprint linenums"><?php echo $m_code; ?></xmp></pre>
            </div>
        <?php } ?>
    </div>
</div>
<!-- ============================================ -->

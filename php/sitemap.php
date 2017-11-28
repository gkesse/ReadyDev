<?php 
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    GConfig::Instance()->setData("title", "Sitemap");
    
    $m_data = GJson::Instance()->getData("/data/json/sitemap.json");
    $m_infos = GSiteMap::Instance()->getInfos();
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra txal">
                <div class="pddc fts0">
                    <div class="pddc dibm">
                        <a class="bgra dibm pgCt05 ftsb hvra 
                        <?php if(empty($_GET)) echo "bgrc"; ?>" 
                        href="/php/sitemap.php"><i class="fa fa-home"></i></a>
                    </div>
                    <div class="pddc dibm">
                        <a class="bgra dibm pgCt05 ftsb hvra 
                        <?php if(isset($_GET["action"]) && $_GET["action"] == "nombre") echo "bgrc"; ?>" 
                        href="/php/sitemap/urls/nombre">Nombre URLs</a>
                    </div>
                    <div class="pddc dibm">
                        <a class="bgra dibm pgCt05 ftsb hvra 
                        <?php if(isset($_GET["action"]) && $_GET["action"] == "liste") echo "bgrc"; ?>" 
                        href="/php/sitemap/urls/liste">Liste URLs</a>
                    </div>
                    <div class="pddc dibm">
                        <a class="bgra dibm pgCt05 ftsb hvra 
                        <?php if(isset($_GET["action"]) && $_GET["action"] == "generer") echo "bgrc"; ?>" 
                        href="/php/sitemap/urls/generer">Générer URLs</a>
                    </div>
                </div>
                <div class="pgCt10 ovfa">
                    <?php if(empty($_GET)) { ?>
                        <div class="pdba"><?php echo join(" ", $m_data["description"]); ?></div>
                        <ul class="fa-ul">
                            <li>
                                <i class="fa-li fa fa-check"></i>
                                Déterminer le nombre d'Urls
                            </li>
                            <li>
                                <i class="fa-li fa fa-check"></i>
                                Lister tous les Urls
                            </li>
                            <li>
                                <i class="fa-li fa fa-check"></i>
                                Générer le sitemap
                            </li>
                        </ul>
                        <?php } else if(isset($_GET["action"]) && $_GET["action"] == "nombre") { ?>
                        <div>Nombre d'URLs: <span class="clrg"><?php echo $m_infos["url_number"]; ?></span></div>
                        <div>Nombre Maximal d'URLs: <span class="clrg">50.000</span></div>
                        <div>Nombre de Sitemap: <span class="clrg"><?php echo $m_infos["sitemap_number"]; ?></span></div>
                        <?php } else if(isset($_GET["action"]) && $_GET["action"] == "liste") { ?>
                        <?php foreach($m_infos["url_list"] as $m_url) { ?>
                            <div><?php echo $m_url["link"]; ?></div>
                        <?php } ?>
                        <?php } else if(isset($_GET["action"]) && $_GET["action"] == "generer") { ?>
                        <?php GSiteMap::Instance()->generate(); ?>
                        <div>La Génération du Sitemap s'est déroulée avec succès...</div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->

<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Cpp_02.json");
    
    GConfig::Instance()->setData("title", "Apprendre à Programmer en C++");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Cpp_02");
    GConfig::Instance()->setData("link", $m_data["links"]);

    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20" id="Sommaire">
                    <a class="clrb" href="#">
                        Sommaire
                    </a>
                </h1>
                <div class="txal pgCt10">
                    <ul class="fa-ul">
                        <?php 
                            $m_ds = $m_data["summary"];
                            foreach($m_ds as $m_di) {
                            ?>
                        <li>
                            <i class="fa-li fa fa-book clrg"></i>
                            <a class="hvra clrg" href="<?php echo $m_di["link"]; ?>">
                                <?php echo $m_di["name"]; ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>            
                </div>
            </div>
        </div>
        <!-- ============================================ -->
		<?php require "page/Introduction.php"; ?>
		<?php require "page/Auteur.php"; ?>
		<?php require "page/Installation.php"; ?>
		<?php require "page/Compilation.php"; ?>
		<?php require "page/Makefile.php"; ?>
		<?php require "page/Console.php"; ?>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->

<!-- ============================================ -->
<?php
    $lData = GJson::Instance()->getData("data/json/footer.json"); 
?>
<!-- ============================================ -->
<footer class="Footer">
    <div class="Body">
        <!-- ============================================ -->
        <div class="Row">
            <div>Réseaux Sociaux - Réjoignez-nous</div>
            <?php 
                $lNetworks = $lData["networks"];
                foreach($lNetworks as $lNetwork) {
                ?>
            <a href="<?php echo $lNetwork["link"]; ?>">
                <i class="ftad <?php echo $lNetwork["icon"]; ?>"></i>
            </a>
            <?php } ?>
        </div>
        <!-- ============================================ -->
        <div class="Row">
            <?php $lCopiright = $lData["copyright"]; ?>
            <div>
                <i class='fa fa-copyright'></i>
                <?php echo $lCopiright["date"]; ?> - <?php echo $lCopiright["site"]["name"]; ?>
            </div>
            <div><?php echo join(" ",$lCopiright["description"]); ?></div>
        </div>
        <!-- ============================================ -->
    </div>
</footer>
<!-- ============================================ -->

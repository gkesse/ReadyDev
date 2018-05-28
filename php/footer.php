<!-- ============================================ -->
<?php
    $lData = GJson::Instance()->getData("data/json/footer.json"); 
?>
<!-- ============================================ -->
<footer>
    <hr/>
    <div class="pgCt20">
        <!-- ============================================ -->
        <div class="pgCr10">
            <div>Réseaux Sociaux - Réjoignez-nous</div>
            <?php 
                $lDs = $lData["networks"];
                foreach($lDs as $lDi) {
                ?>
            <a href="<?php echo $lDi["link"]; ?>">
                <i class="ftad <?php echo $lDi["icon"]; ?>"></i>
            </a>
            <?php } ?>
        </div>
        <!-- ============================================ -->
        <div class="pgCr10">
            <?php $lDs = $lData["copyright"]; ?>
            <div>
                <i class='fa fa-copyright'></i>
                <?php echo $lDs["date"]; ?> - <?php echo $lDs["site"]["name"]; ?>
            </div>
            <div><?php echo join(" ",$lDs["description"]); ?></div>
        </div>
        <!-- ============================================ -->
    </div>
</footer>
<!-- ============================================ -->
</div>
</div>
</div>
<!-- ============================================ -->
</body>
</html>
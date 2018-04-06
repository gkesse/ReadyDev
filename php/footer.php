<!-- ============================================ -->
<?php
    $m_data = GJson::Instance()->getData("data/json/footer.json"); 
?>
<!-- ============================================ -->
<footer>
    <hr/>
    <div class="pgCt20">
        <!-- ============================================ -->
        <div class="pgCr10">
            <div>Réseaux Sociaux - Réjoignez-nous</div>
            <?php 
                $m_ds = $m_data["networks"];
                foreach($m_ds as $m_di) {
                ?>
                <a href="<?php echo $m_di["link"]; ?>">
                    <i class="ftad <?php echo $m_di["icon"]; ?>"></i>
                </a>
            <?php } ?>
        </div>
        <!-- ============================================ -->
        <div class="pgCr10">
            <?php $m_ds = $m_data["copyright"]; ?>
            <div>
                <i class='fa fa-copyright'></i>
                <?php echo $m_ds["date"]; ?> - <?php echo $m_ds["site"]["name"]; ?>
            </div>
            <div><?php echo join(" ",$m_ds["description"]); ?></div>
        </div>
        <!-- ============================================ -->
    </div>
</footer>
<!-- ============================================ -->
</body>
</html>
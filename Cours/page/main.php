<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Cours</div></a>
        </div>
    </div>
    <div class="Body2 Orange">
        <div class="Row8">
            <?php echo join(" ", $lData["intro"]) ?>
        </div>
        <div class="Row0">
            <ul class="fa-ul">
                <?php 
                    $lDataMap = $lData["summary"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <li>
                        <i class="Icon2 fa-li fa fa-book"></i>
                        <a class="Link4" href="<?php echo $lItem["link"]; ?>">
                            <?php echo $lItem["name"]; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>            
        </div>
    </div>
</div>
<!-- ============================================ -->
<div class="Content2">
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Mathematiques">
                <a class="Link3" href="#">
                    Mathématiques
                </a>
            </h1>
            <div class="Body3">
                <ul class="fa-ul">
                    <?php 
                        $lDataMap = GSort::Instance()->sortData($lData["maths"]);
                        foreach($lDataMap as $lItem) {
                        ?>
                        <li class="Item3">
                            <i class="fa-li fa fa-chevron-right"></i>
                            <a class="Link7" href="<?php echo $lItem["link"]; ?>">
                                <?php echo $lItem["name"]; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>            
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Physique">
                <a class="Link3" href="#">
                    Physique
                </a>
            </h1>
            <div class="Body3">
                <ul class="fa-ul">
                    <?php 
                        $lDataMap = GSort::Instance()->sortData($lData["physics"]);
                        foreach($lDataMap as $lItem) {
                        ?>
                        <li class="Item3">
                            <i class="fa-li fa fa-chevron-right"></i>
                            <a class="Link7" href="<?php echo $lItem["link"]; ?>">
                                <?php echo $lItem["name"]; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>            
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Chimie">
                <a class="Link3" href="#">
                    Chimie
                </a>
            </h1>
            <div class="Body3">
                <ul class="fa-ul">
                    <?php 
                        $lDataMap = GSort::Instance()->sortData($lData["chemistry"]);
                        foreach($lDataMap as $lItem) {
                        ?>
                        <li class="Item3">
                            <i class="fa-li fa fa-chevron-right"></i>
                            <a class="Link7" href="<?php echo $lItem["link"]; ?>">
                                <?php echo $lItem["name"]; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>            
            </div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->

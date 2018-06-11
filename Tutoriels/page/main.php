<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Tutoriels</div></a>
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
            <h1 class="Title2" id="Developpement_Logiciel">
                <a class="Link3" href="#">
                    Développement Logiciel
                </a>
            </h1>
            <div class="Row5">
                <?php 
                    $lDataMap = $lData["software"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="RWD2 RwdC06">
                        <a class="Link6" href="<?php echo $lItem["link"]; ?>">
                            <div class="Content5">
                                <div class="Row6">
                                    <div class="Content6">
                                        <i class="Icon6 fa <?php echo $lItem["icon"]; ?>"></i>
                                    </div>
                                </div>
                                <div class="Row7">
                                    <div class="Content6">
                                        <div class="Text7"><?php echo $lItem["theme"]; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="Text8"><?php echo $lItem["description"]; ?></div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Developpement_Web">
                <a class="Link3" href="#">
                    Développement Web
                </a>
            </h1>
            <div class="Row5">
                <?php 
                    $lDataMap = $lData["web"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="RWD2 RwdC06">
                        <a class="Link6" href="<?php echo $lItem["link"]; ?>">
                            <div class="Content5">
                                <div class="Row6">
                                    <div class="Content6">
                                        <i class="Icon6 fa <?php echo $lItem["icon"]; ?>"></i>
                                    </div>
                                </div>
                                <div class="Row7">
                                    <div class="Content6">
                                        <div class="Text7"><?php echo $lItem["theme"]; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="Text8"><?php echo $lItem["description"]; ?></div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Systeme_Gestion_Version">
                <a class="Link3" href="#">
                    Système de Gestion de Version
                </a>
            </h1>
            <div class="Row5">
                <?php 
                    $lDataMap = $lData["version"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="RWD2 RwdC06">
                        <a class="Link6" href="<?php echo $lItem["link"]; ?>">
                            <div class="Content5">
                                <div class="Row6">
                                    <div class="Content6">
                                        <i class="Icon6 fa <?php echo $lItem["icon"]; ?>"></i>
                                    </div>
                                </div>
                                <div class="Row7">
                                    <div class="Content6">
                                        <div class="Text7"><?php echo $lItem["theme"]; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="Text8"><?php echo $lItem["description"]; ?></div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Systeme_Embarque">
                <a class="Link3" href="#">
                    Système Embarqué
                </a>
            </h1>
            <div class="Row5">
                <?php 
                    $lDataMap = $lData["embedded"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="RWD2 RwdC06">
                        <a class="Link6" href="<?php echo $lItem["link"]; ?>">
                            <div class="Content5">
                                <div class="Row6">
                                    <div class="Content6">
                                        <i class="Icon6 fa <?php echo $lItem["icon"]; ?>"></i>
                                    </div>
                                </div>
                                <div class="Row7">
                                    <div class="Content6">
                                        <div class="Text7"><?php echo $lItem["theme"]; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="Text8"><?php echo $lItem["description"]; ?></div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->

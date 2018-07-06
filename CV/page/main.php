<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Ingénieur Développeur Logiciel C/C++/Qt</div></a>
        </div>
    </div>
    <div class="Body2 Orange">
        <div class="Row8">
            <?php $lDataMap = $lData["intro"]; ?>
            <div><?php echo join(" ", $lDataMap); ?></div>
        </div>
        <div class="Row8">
            <ul class="fa-ul">
                <?php 
                    $lDataMap = $lData["summary"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <li class=""><i class="Icon2 fa-li fa fa-book"></i>
                        <a class="Link4" href="<?php echo $lItem["link"]; ?>">
                            <?php echo $lItem["name"]; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>            
        </div>
        <div class="Center">
            <a class="Link5" href="/CV/Simplifie/">
                <div class="Text2">CV<br/>Simplifié</div>
                <i class="Icon3 fa fa-file-pdf-o"></i>
            </a> 
            &nbsp;
            <a class="Link5" href="/CV/Detaille/">
                <div class="Text2">CV<br/>Détaillé</div>
                <i class="Icon3 fa fa-file-pdf-o"></i>
            </a>                        
        </div>
    </div>
</div>
<!-- ============================================ -->
<div class="Content2">
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Diplomes">
                <a class="Link3" href="#">
                    Diplômes
                </a>
            </h1>
            <div class="Body3">
                <?php 
                    $lDataMap = $lData["graduation"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="Row3">
                        <div class="Content3">
                            <i class="Icon4 <?php echo $lItem["icon"]; ?>"></i>
                        </div>
                        <div class='Text3'><?php echo join(" ", $lItem["description"]); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Certificats">
                <a class="Link3" href="#">
                    Certificats
                </a>
            </h1>
            <div class="Body3">
                <?php 
                    $lDataMap = $lData["certificate"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="Row3">
                        <div class="Content3">
                            <i class="Icon4 <?php echo $lItem["icon"]; ?>"></i>
                        </div>
                        <div class='Text3'><?php echo join(" ", $lItem["description"]); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Parcours">
                <a class="Link3" href="#">
                    Parcours Professionnels
                </a>
            </h1>
            <div class="Body3">
                <?php 
                    $lDataMap = $lData["career"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="Row3">
                        <div class="Content3">
                            <i class="Icon4 <?php echo $lItem["icon"]; ?>"></i>
                        </div>
                        <div class='Text3'><?php echo join(" ", $lItem["description"]); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Competences">
                <a class="Link3" href="#">
                    Compétences Informatiques
                </a>
            </h1>
            <div class="Body3">
                <?php 
                    $lDataMap = $lData["skill"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="Row3">
                        <div class="Content3">
                            <i class="Icon4 <?php echo $lItem["icon"]; ?>"></i>
                        </div>
                        <div class='Text3'><?php echo join(" ", $lItem["description"]); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Competences">
                <a class="Link3" href="#">
                    Langues
                </a>
            </h1>
            <div class="Body3">
                <?php 
                    $lDataMap = $lData["language"];
                    foreach($lDataMap as $lItem) {
                    ?>
                    <div class="Row3">
                        <div class="Content3">
                            <i class="Icon4 <?php echo $lItem["icon"]; ?>"></i>
                        </div>
                        <div class='Text3'><?php echo join(" ", $lItem["description"]); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Experiences">
                <a class="Link3" href="#">
                    Expériences Professionnelles
                </a>
            </h1>
            <div class="Body3">
                <?php 
                    $lDataMap = $lData["experience"];
                    $lCount = count($lDataMap);
                    $i = 0;
                    foreach($lDataMap as $lItem) {
                        if($i != 0) {echo "<hr/><br/>";} $i++;
                    ?>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <div class="Content3">
                            <i class="Icon4 <?php echo $lItem["icon"]; ?>"></i><br/>
                            <span class="Text5">
                                <?php echo ($lCount - $i + 1)."/".$lCount; ?>
                            </span>
                        </div>
                        <div class='Text3'><?php echo join(" ", $lItem["intro"]); ?></div>
                    </div>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <a class="Title3" href="#Experiences">
                            Contexte
                        </a>    
                    </div>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <?php echo join(" ", $lItem["context"]); ?>
                    </div>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <a class="Title3" href="#Experiences">
                            Responsabilités
                        </a>    
                    </div>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <ul class="fa-ul">
                            <?php 
                                $lDataMapi = $lItem["task"];
                                foreach($lDataMapi as $lDj) {
                                ?>
                                <li>
                                    <i class="fa-li fa fa-check"></i>
                                    <?php echo $lDj; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <a class="Title3" href="#Experiences">
                            Résultats 
                        </a>    
                    </div>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <ul class="fa-ul">
                            <?php 
                                $lDataMapi = $lItem["result"];
                                foreach($lDataMapi as $lDj) {
                                ?>
                                <li>
                                    <i class="fa-li fa fa-check"></i>
                                    <?php echo $lDj; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <a class="Title3" href="#Experiences">
                            Environnements
                        </a>    
                    </div>
                    <!-- ============================================ -->
                    <div class="Row3">
                        <ul class="fa-ul">
                            <?php 
                                $lDataMapi = $lItem["tool"];
                                foreach($lDataMapi as $lDj) {
                                ?>
                                <li>
                                    <i class="fa-li fa fa-check"></i>
                                    <?php echo $lDj; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- ============================================ -->
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->

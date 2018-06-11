<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Je me présente </div></a>
        </div>
    </div>
    <div class="Body2 Orange">
        <div class="">
            <?php $lDataMap = $lData["avatar"]; ?>
            <img class="Img2" src="<?php echo $lDataMap["src"]; ?>" 
            alt="<?php echo $lDataMap["alt"]; ?>"
            width="<?php echo $lDataMap["width"]; ?>"/>
            <?php $lDataMap = $lData["intro"]; ?>
            <div class="Text3"><?php echo join(" ", $lDataMap); ?></div>
        </div>
        <div><br/></div>
        <div class="">
            <?php 
                $lDataMap = $lData["summary"];
                echo $lDataMap["msg"]; 
                ?>
            <div class="Row3">
                <ul class="fa-ul">
                    <?php 
                        $lDataList = $lDataMap["list"];
                        foreach($lDataList as $lItem) {
                        ?>
                        <li class=""><i class="Icon2 fa-li fa fa-book"></i>
                            <a class="Link4" href="<?php echo $lItem["link"]; ?>">
                                <?php echo $lItem["name"]; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>            
            </div>
        </div>
    </div>
</div>
<!-- ============================================ -->
<div class="Content2">
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Parcours">
                <a class="Link3" href="#">
                    Mon parcours scolaire 
                </a>
            </h1>
            <div class="Body3">
                <?php $lDataMap = $lData["cursus"]; ?>
                <div class="Row3">
                    <div><?php echo join(" ", $lDataMap["msg"]); ?></div>
                </div>
                <!-- ============================================ -->
                <div class="Row3">
                    <div><?php echo join(" ", $lDataMap["msg2"]); ?></div>
                </div>
                <!-- ============================================ -->
                <div class="Row3">
                    <ul class="fa-ul">
                        <?php 
                            $lDataList = $lDataMap["list"];
                            foreach($lDataList as $lValue) {
                            ?>
                            <li class="">
                                <i class="fa-li fa fa-check"></i>
                                <?php echo join(" ", $lValue); ?>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
                <div class="Row3">
                    <div><?php echo join(" ", $lDataMap["msg3"]); ?></div>
                </div>
                <!-- ============================================ -->
                <div class="Row3">
                    <ul class="fa-ul">
                        <?php 
                            $lDataList = $lDataMap["list2"];
                            foreach($lDataList as $lValue) {
                            ?>
                            <li class="">
                                <i class="fa-li fa fa-check"></i>
                                <?php echo join(" ", $lValue); ?>
                            </li>
                        <?php } ?>
                    </ul>            
                </div>
                <!-- ============================================ -->
                <div class="Row3">
                    <div><?php echo join(" ", $lDataMap["msg4"]); ?></div>
                </div>
                <!-- ============================================ -->
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Experiences">
                <a class="Link3" href="#">
                    Mes expériences professionnelles 
                </a>
            </h1>
            <div class="Body5">
                <?php $lDataMap = $lData["experience"]; ?>
                <!-- ============================================ -->
                <div class="Row4">
                    <?php echo join(" ", $lDataMap["msg"]); ?>
                </div>
                <!-- ============================================ -->
                <ul class="List2 fa-ul">
                    <?php 
                        $lDataList = $lDataMap["array"];
                        $m_count = count($lDataList);
                        $i = 0;
                        foreach($lDataList as $lValue) {
                            if($i != 0) {echo "<hr/><br/>";} $i++;
                        ?>
                        <!-- ============================================ -->
                        <li class="Item2">
                            <i class="Icon4 fa-li fa fa-building-o"></i>
                            <div class="Content4">
                                <?php echo $lValue["company"]; ?><br/>
                                <!-- ============================================ -->
                                <?php echo join(" ", $lValue["description"]); ?>
                                <!-- ============================================ -->
                                <span class="Text6">
                                    <?php echo $i . "/" . $m_count; ?>
                                </span>
                                <!-- ============================================ -->
                                <?php if(isset($lValue["info"])) { ?>
                                    <div class="Row3">
                                        <?php echo $lValue["info"]; ?>
                                    </div>
                                <?php } ?>
                                <!-- ============================================ -->
                                <?php if(isset($lValue["list"])) { ?>
                                    <ul class="fa-ul">
                                        <?php 
                                            $lDataMapj = $lValue["list"];
                                            foreach($lDataMapj as $lDk) {
                                            ?>
                                            <li class="">
                                                <i class="fa-li fa fa-check"></i>
                                                <?php echo join(" ", $lDk); ?>
                                            </li>
                                        <?php } ?>
                                    </ul>            
                                <?php } ?>
                                <!-- ============================================ -->
                                <?php if(isset($lValue["info2"])) { ?>
                                    <div class="Row3">
                                        <?php echo $lValue["info2"]; ?>
                                    </div>
                                <?php } ?>
                                <!-- ============================================ -->
                                <?php if(isset($lValue["list2"])) { ?>
                                    <ul class="fa-ul">
                                        <?php 
                                            $lDataMapj = $lValue["list2"];
                                            foreach($lDataMapj as $lDk) {
                                            ?>
                                            <li class="">
                                                <i class="fa-li fa fa-check"></i>
                                                <?php echo join(" ", $lDk); ?>
                                            </li>
                                        <?php } ?>
                                    </ul>            
                                <?php } ?>
                                <!-- ============================================ -->
                            </div>
                            <!-- ============================================ -->
                        </li>
                        <!-- ============================================ -->
                    <?php } ?>
                </ul>
                <!-- ============================================ -->
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Competences">
                <a class="Link3" href="#Sommaire">
                    Mes compétences 
                </a>
            </h1>
            <?php $lDataMap = $lData["skill"]; ?>
            <div class="Body3">
                <?php echo join(" ", $lDataMap["description"]); ?>
            </div>
            <div class="Body3">
                <ul class="fa-ul">
                    <?php 
                        $lDataList = $lDataMap["list"];
                        foreach($lDataList as $lItem) {
                        ?>
                        <li class="">
                            <i class="fa-li fa fa-check"></i>
                            <?php echo join(" ", $lItem); ?>
                        </li>
                    <?php } ?>
                </ul>            
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="MainBlock">
        <div class="Content">
            <h1 class="Title2" id="Atouts">
                <a class="Link3" href="#Sommaire">
                    Mes atouts 
                </a>
            </h1>
            <?php $lDataMap = $lData["asset"]; ?>
            <div class="Body3">
                <?php echo join(" ", $lDataMap["description"]); ?>
            </div>
            <div class="Body3">
                <ul class="fa-ul">
                    <?php 
                        $lDataList = $lDataMap["list"];
                        foreach($lDataList as $lItem) {
                        ?>
                        <li class="">
                            <i class="fa-li fa fa-check"></i>
                            <?php echo join(" ", $lItem); ?>
                        </li>
                    <?php } ?>
                </ul>            
            </div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->

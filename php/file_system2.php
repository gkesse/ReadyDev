<?php
    GFileSystem::Instance()->run();
    $m_directoryMap = GFileSystem::Instance()->getDirectoryMap();
    $m_linkMap = GFileSystem::Instance()->getLinks();
    $m_status = GFileSystem::Instance()->getStatus();
    $m_filename = GFileSystem::Instance()->getFileName();
?>
<!-- ============================================ -->
<div class="pgCt10">
    <div class="bgra">
        <div class="bgra pddd">
            <i class="clrg fa fa-folder"></i> 
            <?php 
                for($i = 0; $i < count($m_linkMap); $i++) { 
                    $m_di = $m_linkMap[$i];
                ?>
                <?php if($i != 0) { ?> <i class="clrg fa fa-chevron-right"></i> <?php } ?>
                <a class="hvra clrg" href="<?php echo $m_di[1]; ?>"><?php echo $m_di[0]; ?></a>
            <?php } ?>
        </div>
        <!-- ============================================ -->
        <div class="clrf">
            <?php 
                if($m_status == "ERROR") { 
                ?>
                <!-- ============================================ -->
                <div class="pddd">ERROR</div>
                <!-- ============================================ -->
                <?php } elseif($m_status == "FILE") { ?>
                <div class="txal pddd mxha ovfa bdba">
                    <?php $m_code = GFile::Instance()->getData2($m_filename); ?>
                    <pre><xmp class="prettyprint linenums"><?php echo $m_code; ?></xmp></pre>
                </div>
                <!-- ============================================ -->
                <?php } elseif($m_status == "IMAGE") { ?>
                <div class="pdde mxha ovfa bdba">
                    <img src="<?php echo dirname($_SERVER['PHP_SELF'])."/".$m_filename; ?>" alt="Image"/>
                </div>
                <!-- ============================================ -->
                <?php } else { ?>
                <div class="mxha ovfa">
                    <?php
                        foreach($m_directoryMap as $m_di) { 
                        ?>
                        <div class="txal pddd bdba">
                            <?php if($m_di[0] == true) { ?>
                                <i class="fa fa-<?php echo $m_di[3]; ?>"></i>
                                <?php } else { ?>
                                <i class="fa fa-<?php echo $m_di[3]; ?>"></i>
                            <?php } ?>
                            <a class="hvra" href="<?php echo $m_di[2]; ?>"><?php echo $m_di[1]; ?></a>
                        </div>
                    <?php } ?>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- ============================================ -->

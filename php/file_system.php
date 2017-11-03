<!-- ============================================ -->
<?php
    GFileSystem::Instance()->run();
    $m_directoryMap = GFileSystem::Instance()->getDirectoryMap();
    $m_linkMap = GFileSystem::Instance()->getLinks();
    $m_status = GFileSystem::Instance()->getStatus();
    $m_filename = GFileSystem::Instance()->getFileName();
    $m_imageName = GFileSystem::Instance()->getImageName();
?>
<!-- ============================================ -->
<div class="pgCt10">
    <div class="bga">
        <div class="bga pdd clrg">
            <i class="fa fa-folder"></i> 
            <?php 
                for($i = 0; $i < count($m_linkMap); $i++) { 
                    $m_di = $m_linkMap[$i];
                ?>
                <?php if($i != 0) { ?> <i class="fa fa-chevron-right"></i> <?php } ?>
                <a class="hvra clrg" href="?doc=<?php echo $m_di[1]; ?>"><?php echo $m_di[0]; ?></a>
            <?php } ?>
        </div>
        <!-- ============================================ -->
        <div class="clrf">
            <?php 
                if($m_status == "ERROR") { 
                ?>
                <!-- ============================================ -->
                <div class="pdd">ERROR</div>
                <!-- ============================================ -->
                <?php } elseif($m_status == "FILE") { ?>
                <div class="tal pdd mxha ova bba">
                    <?php $m_code = GFile::Instance()->getData2($m_filename); ?>
                    <pre><xmp class="prettyprint linenums"><?php echo $m_code; ?></xmp></pre>
                </div>
                <!-- ============================================ -->
                <?php } elseif($m_status == "IMAGE") { ?>
                <div class="pde mxha ova bba">
                    <img src="<?php echo $m_imageName; ?>" alt="Image"/>
                </div>
                <!-- ============================================ -->
                <?php } else { ?>
                <div class="mxha ova">
                    <?php
                        foreach($m_directoryMap as $m_di) { 
                        ?>
                        <div class="tal pdd bba">
                            <?php if($m_di[0] == true) { ?>
                                <i class="fa fa-folder"></i>
                                <?php } else { ?>
                                <i class="fa fa-file-o"></i>
                            <?php } ?>
                            <a class="hvra" href="?doc=<?php echo $m_di[2]; ?>"><?php echo $m_di[1]; ?></a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- ============================================ -->

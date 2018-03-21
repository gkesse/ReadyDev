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
		<div class="pgCt10">
			<div class="bgra">
				<h1 class="bgra pgCt20" id="Introduction">
					<a class="clrb" href="#Sommaire">
						Introduction
					</a>
				</h1>
				<div class="txal pgCt10">
					<?php $m_ds = $m_data["intro"]; ?>
					<div class=""><?php echo join(" ", $m_ds) ?></div>
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10">
			<div class="bgra">
				<h1 class="bgra pgCt20" id="Auteur">
					<a class="clrb" href="#Sommaire">
						Auteur
					</a>
				</h1>
				<div class="txal pgCt10">
					<?php $m_ds = $m_data["author"]; ?>
					<div class=""><?php echo join(" ", $m_ds) ?></div>
				</div>
				<div class="txac ovfa pgCt10">
					<img src="/img/readydev.png" alt="ReadyDev.png" />
				</div>
			</div>
		</div>
		<!-- ============================================ -->
		<div class="pgCt10">
			<div class="bgra">
				<h1 class="bgra pgCt20" id="Installation_sous_Windows_avec_MinGW">
					<a class="clrb" href="#Sommaire">
						Installation sous Windows avec MinGW
					</a>
				</h1>
				<!-- ============================================ -->
				<div class="txal pgCt10">
					<div class="pgCr10" id="Telechargements">
						<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation_sous_Windows_avec_MinGW">
							Téléchargements
						</a>    
					</div>
					<!-- ============================================ -->
					<div class="pgCr10">
						<b class="ftsg">Notepad++</b><br/>
						<a class="clrb hvra" href="https://notepad-plus-plus.org/fr/">
							https://notepad-plus-plus.org/fr/
						</a>
					</div>
					<!-- ============================================ -->
					<div class="pgCr10">
						<b class="ftsg">MinGW</b><br/>
						<a class="clrb hvra" href="http://www.mingw.org/">
							http://www.mingw.org/
						</a>
					</div>
				</div>
				<!-- ============================================ -->
				<div class="txal pgCt10">
					<div class="pgCr10" id="Installation_de_MinGW">
						<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation_sous_Windows_avec_MinGW">
							Installation de MinGW
						</a>    
					</div>
					<!-- ============================================ -->
					<div class="pgCr10">
						<b class="ftsg">Packages MinGW</b><br/>
						<div class="">
							mingw33-base<br/>
							mingw32-gcc-g++<br/>
						</div>
					</div>
				</div>
				<!-- ============================================ -->
				<div class="txal pgCt10">
					<div class="pgCr10" id="Installation_de_Notepad++">
						<a class="bgra dibm ftfb ftsg clra pgCt10" href="#Installation_sous_Windows_avec_MinGW">
							Installation de Notepad++
						</a>    
					</div>
					<!-- ============================================ -->
					<div class="pgCr10">
						<b class="ftsg">Plugins Notepad++</b><br/>
						<div class="">
							TextFX<br/>
							NppExport<br/>
						</div>
					</div>
				</div>
				<!-- ============================================ -->
			</div>
		</div>
		<!-- ============================================ -->
	</div>
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->

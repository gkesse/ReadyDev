<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    GConfig::Instance()->setData("title", "Contacts");
    GConfig::Instance()->setData("menu", "Contacts");
    GConfig::Instance()->setData("view", "Contacts");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="pgBg contacts">
    <div class="mrga pgBd">
        <!-- ============================================ -->
        <div class="pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20" id="Formulaire">
                    <a class="clrb" href="#">
                        Formulaire  
                    </a>
                </h1>
                <div class="txal pgCt10">
                    <!-- ============================================ -->
					<div class="pgCr05" id="MessageSendRes"></div>
                    <!-- ============================================ -->
					<div class="pgCr05">
						<label class="pgCr05 dibm" for="name">
							Nom <span class="erra">(*)</span>
							<span class="erra" id="MessageNameMsg"></span>
						</label>
						<div class="bgra brda brra" id="MessageNameBrd">
							<i class="fltl ftac fa fa-user"></i>
							<div class="mglb">
								<input type="text" name="name" id="MessageName"
								placeholder="Entrez votre nom"/>
							</div>
						</div>
					</div>
                    <!-- ============================================ -->
					<div class="pgCr05">
						<label class="pgCr05 dibm" for="email">
							Email <span class="erra">(*)</span>
							<span class="erra" id="MessageEmailMsg"></span>
						</label>
						<div class="bgra brda brra" id="MessageEmailBrd">
							<i class="fltl ftac fa fa-envelope"></i>
							<div class="mglb">
								<input type="text" name="email" id="MessageEmail"
								placeholder="Entrez votre email"/>
							</div>
						</div>
					</div>
                    <!-- ============================================ -->
					<div class="pgCr05">
						<label class="pgCr05 dibm" for="subject">
							Objet <span class="erra">(*)</span>
							<span class="erra" id="MessageSubjectMsg"></span>
						</label>
						<div class="bgra brda brra" id="MessageSubjectBrd">
							<i class="fltl ftac fa fa-pencil"></i>
							<div class="mglb">
								<input type="text" name="subject" id="MessageSubject"
								placeholder="Entrez votre objet"/>
							</div>
						</div>
					</div>
					<!-- ============================================ -->
					<div class="pgCr05">
						<label class="pgCr05 dibm" for="message">
							Message <span class="erra">(*)</span>
							<span class="erra" id="MessageEditMsg"></span>
						</label>
						<div class="bgra brda brra" id="MessageEditBrd">
							<i class="fltl ftac fa fa-comments"></i>
							<div class="mglb">
								<textarea class="message" rows="11" cols="100"
								name="message" id="MessageEdit"
								placeholder="Entrez votre message"
								oninput="messageChange();"></textarea>
							</div>
							<div class="pddc">
								<label id="MessageCount"></label>
							</div>
						</div>
					</div>
					<!-- ============================================ -->
					<div class="txar pgCr05">
						<button class="bgra brra evta"
						type="submit" name="submit" 
						value="Envoyer" onclick="messageSend();">
							<i class="fa fa-paper-plane"></i> Envoyer
						</button>
					</div>
					<!-- ============================================ -->
                </div>
            </div>
        </div>
        <!-- ============================================ -->
        <div class="mxwa mrga pgCt10">
            <div class="bgra">
                <h1 class="bgra pgCt20">
                    <a class="clrb" href="#Formulaire">
                        Carte Profesionnelle  
                    </a>
                </h1>
                <div class="">
                    <img src="/img/img_avatar.png" 
                    alt="Avatar" 
                    width="100%"/>
                </div>
                <div class="pgCt05">
					<b>Gerard KESSE</b><br/>
					Ingénieur Développeur Logiciel<br/>
					C/C++/Qt<br/>
					-<br/>
					Strasbourg<br/>
					-
                </div>
                <div class="pgCt10">
                    <a href="mailto:tiakagerard@hotmail.com?
					subject=Prise de contact
					&body=Bonjour M. KESSE,">
                        <i class="evta ftaa fa fa-envelope"></i>
                    </a>                        
                </div>
            </div>
        </div>
        <!-- ============================================ -->
    </div>
</div>
<!-- ============================================ -->
<script src="/js/contact.js"></script>
<script src="/js/class/GContact.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->

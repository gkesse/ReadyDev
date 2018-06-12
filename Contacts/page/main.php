<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Formulaire</div></a>
        </div>
    </div>
    <div class="Body2 Blue">
        <div class="Content7">
            <!-- ============================================ -->
            <div class="Row9" id="MessageSendRes"></div>
            <!-- ============================================ -->
            <div class="Row9">
                <label class="Label2" for="name">
                    Nom <span class="Error">(*)</span>
                    <span class="Error" id="MessageNameMsg"></span>
                </label>
                <div class="Field2" id="MessageNameBrd">
                    <i class="Icon7 fa fa-user"></i>
                    <div class="Input">
                        <input type="text" name="name" id="MessageName"
                        placeholder="Entrez votre nom"/>
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row9">
                <label class="Label2" for="email">
                    Email <span class="Error">(*)</span>
                    <span class="Error" id="MessageEmailMsg"></span>
                </label>
                <div class="Field2" id="MessageEmailBrd">
                    <i class="Icon7 fa fa-envelope"></i>
                    <div class="Input">
                        <input type="text" name="email" id="MessageEmail"
                        placeholder="Entrez votre email"/>
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row9">
                <label class="Label2" for="subject">
                    Objet <span class="Error">(*)</span>
                    <span class="Error" id="MessageSubjectMsg"></span>
                </label>
                <div class="Field2" id="MessageSubjectBrd">
                    <i class="Icon7 fa fa-pencil"></i>
                    <div class="Input">
                        <input type="text" name="subject" id="MessageSubject"
                        placeholder="Entrez votre objet"/>
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row9">
                <label class="Label2" for="message">
                    Message <span class="Error">(*)</span>
                    <span class="Error" id="MessageEditMsg"></span>
                </label>
                <div class="Field2" id="MessageEditBrd">
                    <i class="Icon7 fa fa-comments"></i>
                    <div class="Input">
                        <textarea class="message" rows="11" cols="100"
                        name="message" id="MessageEdit"
                        placeholder="Entrez votre message"
                        oninput="messageChange();"></textarea>
                    </div>
                    <div class="Row">
                        <label id="MessageCount"></label>
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="Row9 Right">
                <button class="Button"
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
<div class="Parallax">
    <div class="Img Contact">
        <div class="Caption">
            <a href="#"><div class="Text">Carte Profesionnelle</div></a>
        </div>
    </div>
    <div class="Body2 Blue">
        <div class="Content8 Center">
            <!-- ============================================ -->
            <div class="Row0">
                <img src="/img/img_avatar.png" alt="Avatar" width="100%"/>
            </div>
            <div class="Row">
                <b>Gérard KESSE</b><br/>
                Ingénieur Développeur Logiciel<br/>
                C/C++/Qt<br/>
                -<br/>
                Strasbourg<br/>
                -
            </div>
            <div class="Row4">
                <a href="mailto:tiakagerard@hotmail.com?
                subject=Prise de contact
                &body=Bonjour M. KESSE,">
                    <i class="Icon3 fa fa-envelope"></i>
                </a>                        
            </div>
            <!-- ============================================ -->
        </div>
    </div>
</div>
<!-- ============================================ -->

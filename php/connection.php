<!-- ============================================ -->
<div class="Modal Connection" id="ModalConnection" onkeypress="keyConnection(this, event)">
    <div class="Body">
        <div class="Button Close" onclick="closeConnection(this)"><i class="fa fa-close"></i></div>
        <div class="Title">Connexion</div>
        <form class="Text" id="ConnectionForm" method="post">
            <div class="Desc">Entrez vos identifiants de connexion.</div>
            <div class="Row">
                <div class="Label">Email :</div>
                <div class="Field"><input class="Data" type="text" name="Email"/></div>
            </div>
            <div class="Row">
                <div class="Label">Mot de passe :</div>
                <div class="Field"><input class="Data" type="password" name="Password"/></div>
            </div>
            <div class="ButtonMap">
                <div class="Item" onclick="connect(this)"><i class="fa fa-paper-plane-o"></i> Se Connecter</div>
            </div>
        </form>
    </div>
    <div class="Msg" id="ConnectionMsg"></div>
</div>
<!-- ============================================ -->
<div class="Modal Disconnection" id="ModalDisconnection">
    <div class="Body">
        <div class="Button Close" onclick="closeDisconnection(this)"><i class="fa fa-close"></i></div>
        <div class="Title">Déconnexion</div>
        <div class="Text" id="ConnectionForm" method="post" action="">
            <div class="Desc">Êtes-vous sûr de vous déconnecter ?</div>
            <div class="ButtonMap">
                <div class="Item" onclick="disconnect(this)"><i class="fa fa-power-off"></i> Se Déconnecter</div>
            </div>
        </div>
    </div>
    <div class="Msg" id="DisconnectionMsg"></div>
</div>
<!-- ============================================ -->
<script src="/js/class/GConnection.js"></script>
<script src="/js/connection.js"></script>
<!-- ============================================ -->

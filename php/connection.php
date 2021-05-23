<!-- ============================================ -->
<div class="Modal Connection" id="ModalConnection" onkeypress="keyConnection(this, event)">
    <div class="Content10" id="ConnectionBody">
        <div class="Button3 Close" onclick="closeConnection(this)"><i class="fa fa-close"></i></div>
        <div class="Title5">Connexion</div>
        <form class="Body4" id="ConnectionForm" method="post">
            <div class="Row11">Entrez vos identifiants de connexion.</div>
            <div class="Row12">
                <div class="Label3">Email :</div>
                <div class="Field3"><input class="Input2" type="text" name="Email"/></div>
            </div>
            <div class="Row12">
                <div class="Label3">Mot de passe :</div>
                <div class="Field3"><input class="Input2" type="password" name="Password"/></div>
            </div>
            <div class="Row13">
                <div class="Button4" onclick="connect(this)"><i class="fa fa-paper-plane-o"></i> Se Connecter</div>
            </div>
        </form>
        <div class="Row14" id="ConnectionMsg"></div>
    </div>
</div>
<!-- ============================================ -->
<div class="Modal Disconnection" id="ModalDisconnection">
    <div class="Content10" id="DisconnectionBody">
        <div class="Button3 Close" onclick="closeDisconnection(this)"><i class="fa fa-close"></i></div>
        <div class="Title5">Déconnexion</div>
        <div class="Body4" id="DisconnectionForm">
            <div class="Row11">Êtes-vous sûr de vous déconnecter ?</div>
            <div class="Row13">
                <div class="Button4" onclick="disconnect(this)"><i class="fa fa-power-off"></i> Se Déconnecter</div>
            </div>
        </div>
        <div class="Row14" id="DisconnectionMsg"></div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GConnection.js"></script>
<script src="/js/connection.js"></script>
<!-- ============================================ -->

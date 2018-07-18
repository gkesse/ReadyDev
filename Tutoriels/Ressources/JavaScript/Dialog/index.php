<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Dialog.json");

    GConfig::Instance()->setData("title", "Boîte de Dialogue");
    GConfig::Instance()->setData("menu", "Tutoriels");
    GConfig::Instance()->setData("view", "Dialog");
    GConfig::Instance()->setData("link", $lData["links"]);
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="Parallax">
    <div class="Img Binary">
        <div class="Caption">
            <a href="#"><div class="Text">Utiliser une boîte de dialogue</div></a>
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
                    Utiliser une boîte de dialogue
                </a>
            </h1>
            <div class="Body3">
                <!-- ============================================ -->
                <div class="Row0">
                    Le <b>JavaScript</b> est un langage de programmation web dynamique côté client.<br/>
                    Le but de ce tutoriel est de vous apprendre
                    <b>l'utilisation de boîte de dialogue</b> avec le <b>JavaScript</b>.<br/>
                    Produit par <b>Gérard KESSE</b>.
                </div>
                <!-- ============================================ -->
                <div class="Row28">
                    <a class="Title3" href="#">
                        Méthode Dialogue
                    </a>    
                </div>
                <!-- ============================================ -->
                <div class="Row27">
                    <!-- Simple boîte de dialogue, contenant un formulaire -->
<dialog id="favDialog">
  <form method="dialog">
    <section>
      <p><label for="favAnimal">Animal favori :</label>
      <select id="favAnimal" name="favAnimal">
        <option></option>
        <option>Crevette de saumure</option>
        <option>Panda roux</option>
        <option>Singe-araignée</option>
      </select></p>
    </section>
    <menu>
      <button id="cancel" type="reset">Annuler</button>
      <button type="submit">Confirmer</button>
    </menu>
  </form>
</dialog>

<menu>
  <button id="updateDetails">Envoyer détails</button>
</menu>

<script>
  (function() {
    var updateButton = document.getElementById('updateDetails');
    var cancelButton = document.getElementById('cancel');

    // Update button opens a modal dialog
    updateButton.addEventListener('click', function() {
      document.getElementById('favDialog').showModal();
    });

    // Bouton pour fermer la boîte de dialogue
    cancelButton.addEventListener('click', function() {
      document.getElementById('favDialog').close();
    });

  })();
</script>                   
                </div>
                <!-- ============================================ -->
            </div>
        </div>
    </div>
</div>
<!-- ============================================ -->
<script src="/js/class/GSyntax.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->

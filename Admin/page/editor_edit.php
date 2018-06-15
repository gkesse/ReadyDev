<!-- ============================================ -->
<div class="Body0">
	<div class="Row16">
		<button class="Button5 Bold" type="button" title="Texte en Gras" onclick="getCommand('bold')">G</button>
		<button class="Button5 Italic" type="button" title="Texte en Italic" onclick="getCommand('italic')">I</button>
		<button class="Button5 Underline" type="button" title="Souligner Texte" onclick="getCommand('underline')">S</button> 
		<button class="Button5 LineThrough" type="button" title="Barrer Texte" onclick="getCommand('strikeThrough')">abc</button>
		<button class="Button5" type="button" title="Insérer Lien" onclick="getCommand('createLink')"><i class="fa fa-link"></i></button>		
		<button class="Button5" type="button" title="Supprimer Lien" onclick="getCommand('unlink')"><i class="fa fa-unlink"></i></button>		
		<button class="Button5" type="button" title="Insérer Image" onclick="getCommand('insertImage')"><i class="fa fa-image"></i></button>		
		<button class="Button5" type="button" title="Enregistrer Fichier" onclick="saveFile()"><i class="fa fa-save"></i></button>		
		<button class="Button5" type="button" title="Texte à Gauche" onclick="getCommand('justifyleft')"><i class="fa fa-align-left"></i></button>		
		<button class="Button5" type="button" title="Text au Centre" onclick="getCommand('justifycenter')"><i class="fa fa-align-center"></i></button>		
		<button class="Button5" type="button" title="Texte à Droite" onclick="getCommand('justifyright')"><i class="fa fa-align-right"></i></button>		
		<button class="Button5" type="button" title="Texte Justifié" onclick="getCommand('justifyfull')"><i class="fa fa-align-justify"></i></button>		
		<button class="Button5" type="button" title="Ajouter un Code" onclick="getCommand('code')"><i class="fa fa-code"></i></button>		
		<!-- ============================================ -->
		<select class="ComboBox" onchange="getCommand('readystyle', this.value); this.selectedIndex = 0">
			<option value="">ReadyStyle</option>
			<option value="Title1">Titre 1</option>
			<option value="Title2">Titre 2</option>
			<option value="Title3">Titre 3</option>
			<option value="Summary1">Sommaire 1</option>
			<option value="Summary2">Sommaire 2</option>
			<option value="List1">Liste 1</option>
			<option value="List2">Liste 2</option>
			<option value="Data1">Donnée 1</option>
			<option value="LineBreak1">Saut Haut</option>
			<option value="LineBreak2">Saut Bas</option>
			<option value="LineBreak3">Saut Supprimer</option>
			<option value="Shift1">Décalage Ajouter</option>
			<option value="Shift2">Décalage Supprimer</option>
			<option value="Code1">Code 1</option>
			<option value="Code2">Code 2</option>
			<option value="Parallax1">Parallax 1</option>
			<option value="Color1">Couleur 1</option>
		</select>
	</div>
	<!-- ============================================ -->
	<div class="Row15 GEndEditor">
		<div class="Content9 GEndEditor" id="EditorEdit" 
		onpaste="pasteText(event)" 
		contentEditable="true"></div> 
	</div>
</div>
<!-- ============================================ -->

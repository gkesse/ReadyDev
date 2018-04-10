<!-- ============================================ -->
<div class="">
	<div class="fts0 txac bdbb">
		<button class="evta pddc ftsb ftwb" type="button" title="Texte en Gras" onclick="getCommand('bold');">G</button>
		<button class="evta pddc ftsb ftti" type="button" title="Texte en Italic" onclick="getCommand('italic');">I</button>
		<button class="evta pddc ftsb txdu" type="button" title="Souligner Texte" onclick="getCommand('underline');">S</button> 
		<button class="evta pddc ftsb txdl" type="button" title="Barrer Texte" onclick="getCommand('strikeThrough');">abc</button>
		<button class="evta pddc ftsb" type="button" title="Insérer Lien" onclick="getCommand('createLink');"><i class="fa fa-link"></i></button>		
		<button class="evta pddc ftsb" type="button" title="Supprimer Lien" onclick="getCommand('unlink');"><i class="fa fa-unlink"></i></button>		
		<button class="evta pddc ftsb" type="button" title="Insérer Image" onclick="getCommand('insertImage');"><i class="fa fa-image"></i></button>		
		<button class="evta pddc ftsb" type="button" title="Enregistrer Fichier" onclick="saveFile();"><i class="fa fa-save"></i></button>		
		<button class="evta pddc ftsb" type="button" title="Texte à Gauche" onclick="getCommand('justifyleft');"><i class="fa fa-align-left"></i></button>		
		<button class="evta pddc ftsb" type="button" title="Text au Centre" onclick="getCommand('justifycenter');"><i class="fa fa-align-center"></i></button>		
		<button class="evta pddc ftsb" type="button" title="Texte à Droite" onclick="getCommand('justifyright');"><i class="fa fa-align-right"></i></button>		
		<button class="evta pddc ftsb" type="button" title="Texte Justifié" onclick="getCommand('justifyfull');"><i class="fa fa-align-justify"></i></button>		
		<button class="evta pddc ftsb" type="button" title="Ajouter un Code" onclick="getCommand('code');"><i class="fa fa-code"></i></button>		
		<!-- ============================================ -->
		<select class="brda mnwa mrgd" onchange="getCommand('readystyle', this.value); this.selectedIndex = 0;">
			<option value="">ReadyStyle</option>
			<option value="Title1">Titre 1</option>
			<option value="Title2">Titre 2</option>
			<option value="Title3">Titre 3</option>
			<option value="Summary1">Sommaire 1</option>
			<option value="Summary2">Sommaire 2</option>
			<option value="Summary3">Sommaire 3</option>
			<option value="LineBreak1">Saut de Ligne 1</option>
			<option value="LineBreak2">Saut de Ligne 2</option>
			<option value="LineBreak3">Saut de Ligne 3</option>
			<option value="LineBreak4">Saut de Ligne 4</option>
			<option value="Shift1">Décalage 1</option>
			<option value="Shift2">Décalage 2</option>
			<option value="Code1">Code 1</option>
		</select>
	</div>
	<!-- ============================================ -->
	<div class="pgCr10 ovfa txal bgrc bdbb">
		<div class="hghd" id="EditorEdit" 
		onpaste="pasteText(event);" 
		contentEditable="true"></div> 
	</div>
</div>
<!-- ============================================ -->

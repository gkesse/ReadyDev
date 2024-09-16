<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#application-excel">Application Excel</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/excel/references-vba">Références VBA</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Références VBA</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous présenter des&nbsp;<b>Réféences VBA</b>&nbsp;pouvant être exploitées dans le cadre du développement d'un logiciel applicatif avec l'utilisation des <b>macros</b> et des <b>UserForm</b> sous <b>Excel</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-une-application-excel--application-">Gestion d'une application Excel (Application)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-une-fenetre--window-">Gestion d'une fenêtre (Window)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-un-classeur--workbook-">Gestion d'un classeur (Workbook)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-une-feuille-de-calcul--worksheet-">Gestion d'une feuille de calcul (Worksheet)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-une-plage-de-cellules--range-">Gestion d'une plage de cellules (Range)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-un-libelle--label-">Gestion d'un libellé (Label)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-une-zone-de-texte--textbox-">Gestion d'une zone de texte (TextBox)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-une-panneau--frame-">Gestion d'une panneau (Frame)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-une-pile-de-pages--multipage-">Gestion d'une pile de pages (MultiPage)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-fenetres--userform-">Gestion des fenêtres (UserForm)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-d-une-zone-de-liste--listbox-">Gestion d'une zone de liste (ListBox)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-conditions">Gestion des conditions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-evenements">Gestion des événements</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-operateurs-de-comparaison">Gestion des opérateurs de comparaison</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-boucles">Gestion des boucles</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-chaines-de-caracteres">Gestion des chaînes de caractères</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-appels-de-fonctions">Gestion des appels de fonctions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-variables">Gestion des variables</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-tableaux">Gestion des tableaux</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-messages-dans-une-boite-de-dialogue">Gestion des messages dans une boîte de dialogue</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>Bienvenue dans ce tutoriel consacré à la présentation des <b>références VBA</b> pouvant être exploitées dans le cadre d'un développement de logiciel applicatif en <b>VBA</b> avec l'utilisation des <b>macros</b> et des <b>UserForm</b> sous Excel.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-une-application-excel--application-">Gestion d'une application Excel (Application)</a>
</h1>
<div class="Section6"><br>L'objet Application représente l'application Excel.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la mise à jour de l'écran avec la propriété (ScreenUpdating).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons le mode de calcul avec la propriété (Calculation).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous exécutons une macro Excel 4.0 avec la méthode (ExecuteExcel4Macro).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'état de la fenêtre avec la propriété (WindowState).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons une barre de commande avec la méthode (CommandBars).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'affichage de la barre d'état avec la propriété (DisplayStatusBar).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'affichage de la barre de formule avec la propriété (DisplayFormulaBar).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous modifions l'affichage de la barre de défilement avec la propriété (DisplayScrollBars).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la largeur de l'application Excel avec la propriété (Width).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la hauteur de l'application Excel avec la propriété (Height).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la visibilité de l'application Excel avec la propriété (Visible).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons le classeur courant avec la propriété (ActiveWorkbook).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'affichage des alertes dans l'application Excel avec la propriété (DisplayAlerts).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons la fenêtre courante avec la propriété (ActiveWindow).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous démarrons les calculs dans tous les classeurs ouverts avec la méthode (Calculate).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous fermons l'application Excel avec la méthode (Quit).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-une-fenetre--window-">Gestion d'une fenêtre (Window)</a>
</h1>
<div class="Section6"><br>L'objet Window représente une fenêtre.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'affichage des onglets du classeur avec la propriété (DisplayWorkbookTabs).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'affichage de la règle avec la propriété (DisplayRuler).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'affichage des en-têtes de lignes et de colonnes avec la propriété (DisplayHeadings).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'affichage de la barre de défilement horizontale avec la propriété (DisplayHorizontalScrollBar).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'affichage de la barre de défilement verticale avec la propriété (DisplayVerticalScrollBar).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-un-classeur--workbook-">Gestion d'un classeur (Workbook)</a>
</h1>
<div class="Section6"><br>L'objet Workbook représente un classeur Excel.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous enregistrons les modifications dans un classeur avec la méthode (Save).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous fermons un classeur avec la méthode (Close).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons l'enregistrement d'un classeur avec la propriété (Saved).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous activons la connexion des données dans un classeur avec la méthode (EnableConnections).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous actualisons toutes les plages de données et les tableaux croisées d'un classeur avec la méthode (RefreshAll).</div>
</div><br>Gestion des évènements:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous gérons l'évènement avant la fermeture d'un classeur avec l'évènement (BeforeClose).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-une-feuille-de-calcul--worksheet-">Gestion d'une feuille de calcul (Worksheet)</a>
</h1>
<div class="Section6"><br>L'objet Worksheet représente une feuille de calcul.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons une plage de cellules avec la méthode (Range).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons une forme avec la propriété (Shapes).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons une cellule avec la propriété (Cells).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons une ligne d'une feuille de calcul avec la propriété (Rows).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous protégeons une feuille de calcul contre les modifications avec la méthode (Protect).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons la plage de cellules utilisées avec la méthode (UsedRange).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-une-plage-de-cellules--range-">Gestion d'une plage de cellules (Range)</a>
</h1>
<div class="Section6"><br>L'objet Range représente une feuille de cellules.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous recherchons une valeur dans une plage de cellules avec la méthode (Find).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous décalons une plage de cellules avec la méthode (Offset).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons la valeur d'une cellule avec la propriété (Value).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la valeur d'une cellule avec la propriété (Value).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons les cellules non vide à fin d'une plage de cellules avec la méthode (End).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons le nombre de lignes d'une plage de cellules avec la propriété (Row).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous filtrons une plage de cellules avec la méthode (AutoFilter).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous supprimons une plage de cellules avec la méthode (Delete).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous supprimons le contenu d'une plage de cellules avec la méthode (ClearContents).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous comptons le nombre de cellule non vide dans une plage de cellules avec la fonction (CountA).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-un-libelle--label-">Gestion d'un libellé (Label)</a>
</h1>
<div class="Section6"><br>L'objet Label représente un libellé.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la visibilité d'un libellé avec la propriété (Visible).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-une-zone-de-texte--textbox-">Gestion d'une zone de texte (TextBox)</a>
</h1>
<div class="Section6"><br>L'objet TextBox représente une zone de texte.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous donnons le focus à une zone de texte avec la méthode (SetFocus).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la valeur d'une zone de texte avec la méthode (Value).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons la valeur d'une zone de texte avec la méthode (Value).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-une-panneau--frame-">Gestion d'une panneau (Frame)</a>
</h1>
<div class="Section6"><br>L'objet Frame représente un panneau.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la visibilité d'un panneau avec la propriété (Visible).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-une-pile-de-pages--multipage-">Gestion d'une pile de pages (MultiPage)</a>
</h1>
<div class="Section6"><br>L'objet MultiPage représente une pile de pages.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la page courante d'une pile de pages avec la propriété (Value).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons la largeur d'une pile de pages avec la propriété (Width).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons la hauteur d'une pile de pages avec la propriété (Height).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-fenetres--userform-">Gestion des fenêtres (UserForm)</a>
</h1>
<div class="Section6"><br>L'objet UserForm représente une fenêtre.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous affichons une fenêtre avec la méthode (Show).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons la visibilité d'une fenêtre avec la propriété (Visible).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-d-une-zone-de-liste--listbox-">Gestion d'une zone de liste (ListBox)</a>
</h1>
<div class="Section6"><br>L'objet ListBox représente une zone de liste.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons le nombre de lignes d'une zone de liste avec la propriété (ListCount).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons un élément sélectionné d'une zone de liste avec la propriété (Selected).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la source d'une zone de liste avec la propriété (RowSource). - Nous définissons la liste d'une zone de liste avec la propriété (List).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons le nombre de colonnes d'une zone de liste avec la propriété (ColumnCount).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons la visibilité des entêtes de colonnes d'une zone de liste avec la propriété (ColumnHeads).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous définissons les largeurs des colonnes d'une zone de liste avec la propriété (ColumnWidths).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous déterminons l'élément sélectionné dans une zone de liste avec la propriété (ListIndex).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-conditions">Gestion des conditions</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous réalisons la condition Si avec l'instruction (If).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous réalisons la condition Sinon avec l'instruction (Else).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous réalisons la condition Sinon Si avec l'instruction (ElseIf).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-evenements">Gestion des événements</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous suspendons l'exécution pour que le système d'exploitation puisse traiter d'autres événements avec la fonction (DoEvents).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-operateurs-de-comparaison">Gestion des opérateurs de comparaison</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous réalisons une comparaison d'égalité avec l'opérateur (=).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous réalisons une comparaison de différence avec l'opérateur (&lt;&gt;).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-boucles">Gestion des boucles</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous réalisons une boucle for avec l'instruction (For Next).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-chaines-de-caracteres">Gestion des chaînes de caractères</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous convertissons une chaîne de caractères en minuscule avec la fonction (LCase).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous concaténons des chaînes de caractères avec l'opérateur (&amp;).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous comparons une chaînes de caractères à un masque avec l'instruction (Like).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-appels-de-fonctions">Gestion des appels de fonctions</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous créons une fonction avec l'instruction (Function). Dans ce cas, la fonction peut être utilisée pour retourner une valeur.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous créons une fonction avec l'instruction (Sub). Dans ce cas, la fonction ne peut pas être utilisée pour retourner une valeur.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous appelons une fonction avec l'instruction (Call). Dans ce cas, la fonction est utilisée avec des parenthèses et la valeur de retour de la fonction est ignorée.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous pouvons appeler une fonction sans l'instruction (Call). Dans ce cas, la fonction est utilisée sans les parenthèses et la valeur de retour de la fonction est utilisable.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-variables">Gestion des variables</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous déclarons une variable avec l'instruction (Dim).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous forçons la déclaration explicite des variables avec l'instruction (Option Explicit).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-tableaux">Gestion des tableaux</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous créons des tableaux avec l'instruction (Dim To).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous récupérons la taille d'un tableau avec la fonction (UBound).</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-messages-dans-une-boite-de-dialogue">Gestion des messages dans une boîte de dialogue</a>
</h1>
<div class="Section6"><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous affichons un message dans une boîte de dialogue avec la fonction (MsgBox).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous affichons un message d'information avec l'instruction (vbInformation).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous affichons un message de questionnaire avec l'instruction (vbQuestion).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous affichons un message d'erreur avec l'instruction (vbCritical).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous affichons le bouton OK uniquement avec l'instruction (vbOKOnly).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous affichons les boutons Oui et Non avec l'instruction (vbYesNo).</div>
</div><br></div>
</div>
</div>
</div><br>
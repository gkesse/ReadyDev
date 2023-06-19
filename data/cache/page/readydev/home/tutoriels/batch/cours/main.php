<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#batch">Batch</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/batch/cours">Cours</a>
</div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en Batch</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programme en <b>Batch</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#arborescence">Arborescence</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>Batch </b>est un fichier de script sous DOS, OS/2 et Microsoft Windows. Il se compose d'une série de commandes à exécuter par l' interpréteur de ligne de commande, stockées dans un fichier texte brut. Batch peut contenir n'importe quelle commande que l'interpréteur accepte de manière interactive et utiliser des constructions qui permettent la création de branchements et de boucles conditionnelles dans le fichier de commandes, telles que IF, FOR et les labels GOTO. Le terme "batch" provient du traitement par lots , ce qui signifie "exécution non interactive".<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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ZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGT/BzJHyFMi8J2eAAAAAElFTkSuQmCC"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="arborescence">Arborescence</a>
</h1>
<div class="Section6"><br>La commande (tree) permet d'afficher l'arborescence des dossiers.<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">tree</pre><br><pre class="GCode1 Code1 AceCode" data-mode="txt" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Structure du dossier pour le volume Acer
Le numéro de série du volume est 7EC0-A1E6
C:.
|---bin
|---build
|---lib</pre><br>La commande (tree) permet d'afficher l'arborescence des fichiers.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">tree /f</pre><br><pre class="GCode1 Code1 AceCode" data-mode="txt" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">Structure du dossier pour le volume Acer
Le numéro de série du volume est 7EC0-A1E6
C:.
|   compile.bat
|   GHello.c
|   GHello.h
|   main.c
|
|---bin
|       rdv_c.exe
|
|---build
|       GHello.o
|       main.o
|
|---lib
        libhello.dll.a</pre><br></div>
</div>
</div></div><br>
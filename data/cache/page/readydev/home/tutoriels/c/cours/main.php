<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#c">C</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/c/cours">Cours</a>
</div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en C</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programmation-par-module">Programmation par module</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programmation-par-objet">Programmation par objet</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#compilation-d-un-projet-c">Compilation d'un projet C</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#utilisation-d-un-makefile">Utilisation d'un Makefile</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#utilisation-des-standards-c">Utilisation des standards c</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#utilisation-du-debogueur-gdb-">Utilisation du débogueur GDB </a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#identification-logicielle">Identification logicielle</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#fonctions">Fonctions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#fonctions-a-nombre-variable-d-arguments">Fonctions à nombre variable d'arguments</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#conditions">Conditions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#boucle-for">Boucle For</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#boucle-while">Boucle While</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#arguments-en-ligne-de-commande">Arguments en ligne de commande</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#allocation-dynamique-de-memoire">Allocation dynamique de mémoire</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#multithreading">Multithreading</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#definition-d-un-type">Définition d'un type</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#structure">Structure</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notion-de-classe">Notion de classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notion-d-heritage-de-classe">Notion d'héritage de classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#notion-de-polymorphisme">Notion de polymorphisme</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>C</b> est un langage procédural impératif, prenant en charge la programmation structurée, la portée des variables lexicales et la récursivité, avec un système de type statique. Il a été conçu pour être compilé afin de fournir un accès de bas niveau à la mémoire et aux constructions de langage qui correspondent efficacement aux instructions machine, le tout avec une prise en charge minimale de l'exécution. Malgré ses capacités de bas niveau, le langage a été conçu pour encourager la programmation multiplateforme. Un programme C conforme aux standards écrit avec portabilité à l'esprit peut être compilé pour une grande variété de plates-formes informatiques et de systèmes d'exploitation avec peu de changements à son code source.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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sAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAj7Cxnlexu7XboOAAAAAElFTkSuQmCC"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="affichage-d-un-message">Affichage d'un message</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#affichage-d-un-message_affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#affichage-d-un-message_creation-d-une-fonction">Création d'une fonction</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="affichage-d-un-message_affichage-d-un-message" href="#affichage-d-un-message">Affichage d'un message</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Affichage d'un message:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="affichage-d-un-message_creation-d-une-fonction" href="#affichage-d-un-message">Création d'une fonction</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Création d'une fonction:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================
int main(int _argc, char** _argv) {
    sayHello();
    return 0;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programmation-par-module">Programmation par module</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#affichage-d-un-message_affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-module_creation-d-un-module-de-fichiers-headers">Création d'un module de fichiers headers</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-module_creation-d-un-module-de-salutation">Création d'un module de salutation</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="affichage-d-un-message_affichage-d-un-message" href="#programmation-par-module">Affichage d'un message</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Affichage d'un message:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================
int main(int _argc, char** _argv) {
    sayHello();
    return 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-module_creation-d-un-module-de-fichiers-headers" href="#programmation-par-module">Création d'un module de fichiers headers</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Création d'un module de fichiers headers:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include "GInclude.h"
//===============================================
void sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================
int main(int _argc, char** _argv) {
    sayHello();
    return 0;
}
//===============================================
// GInclude.h
//===============================================
#ifndef _GInclude_
#define _GInclude_
//===============================================
#include &lt;stdio.h&gt;
//===============================================
#endif
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-module_creation-d-un-module-de-salutation" href="#programmation-par-module">Création d'un module de salutation</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Création d'un module de salutation:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include "GHello.h"
//===============================================
int main(int _argc, char** _argv) {
    GHello_sayHello();
    return 0;
}
//===============================================
// GHello.h
//===============================================
#ifndef _GHello_
#define _GHello_
//===============================================
#include "GInclude.h"
//===============================================
void GHello_sayHello();
//===============================================
#endif
//===============================================
// GHello.c
//===============================================
#include "GHello.h"
//===============================================
void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1"><div class="Section2"><div class="Section3"><h1 class="Section4"><a class="Section5" href="#" id="programmation-par-objet">Programmation par objet</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#affichage-d-un-message_affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-objet_utilisation-de-la-notion-d-objet">Utilisation de la notion d'objet</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-objet_utilisation-d-une-macro-local">Utilisation d'une macro local</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-objet_utilisation-d-une-macro-globale">Utilisation d'une macro globale</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-objet_utilisation-de-la-memoire-dynamique">Utilisation de la mémoire dynamique</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-objet_integration-de-la-destruction-d-un-objet-dynamique">Intégration de la destruction d'un objet dynamique</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-objet_creation-d-un-objet-dynamique-via-une-macro-local">Création d'un objet dynamique via une macro local</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="affichage-d-un-message_affichage-d-un-message" href="#programmation-par-objet">Affichage d'un message</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Affichage d'un message:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include "GHello.h"
//===============================================
int main(int _argc, char** _argv) {
    GHello_sayHello();
    return 0;
}
//===============================================
// GHello.h
//===============================================
#ifndef _GHello_
#define _GHello_
//===============================================
#include "GInclude.h"
//===============================================
void GHello_sayHello();
//===============================================
#endif
//===============================================
// GHello.c
//===============================================
#include "GHello.h"
//===============================================
void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_utilisation-de-la-notion-d-objet" href="#programmation-par-objet">Utilisation de la notion d'objet</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Utilisation de la notion d'objet:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include "GHello.h"
//===============================================
int main(int _argc, char** _argv) {
    GHello lHello;
    GHello_init(&amp;lHello);
    lHello.sayHello();
    return 0;
}
//===============================================
// GHello.h
//===============================================
#ifndef _GHello_
#define _GHello_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _obj);
//===============================================
#endif
//===============================================
// GHello.c
//===============================================
#include "GHello.h"
//===============================================
static void GHello_sayHello();
//===============================================
void GHello_init(GHello* _obj) {
    _obj-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_utilisation-d-une-macro-local" href="#programmation-par-objet">Utilisation d'une macro local</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Utilisation d'une macro local:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GHELLO_OBJ(lHello)
    lHello.sayHello();
    return 0;
}
//===============================================
// GHello.h
//===============================================
#define GHELLO_OBJ(_obj) \
    GHello _obj; \
    GHello_init(&amp;_obj);
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _obj);
//===============================================
static void GHello_sayHello();
//===============================================
// GHello.c
//===============================================
void GHello_init(GHello* _obj) {
    _obj-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_utilisation-d-une-macro-globale" href="#programmation-par-objet">Utilisation d'une macro globale</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Utilisation d'une macro globale:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GDEFINE_OBJ(GHello, lHello)
    lHello.sayHello();
    return 0;
}
//===============================================
// GInclude.h
//===============================================
#define GDEFINE_OBJ(_type, _obj) \
    _type _obj; \
    _type##_init(&amp;_obj);
//===============================================
// GHello.h
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _obj);
//===============================================
static void GHello_sayHello();
//===============================================
// GHello.c
//===============================================
void GHello_init(GHello* _obj) {
    _obj-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_utilisation-de-la-memoire-dynamique" href="#programmation-par-objet">Utilisation de la mémoire dynamique</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Utilisation de la mémoire dynamique:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GHello* lHello = GHello_new();
    lHello-&gt;sayHello();
    free(lHello);
    return 0;
}
//===============================================
// GHello.h
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _obj);
GHello* GHello_new();
//===============================================
// GHello.h
//===============================================
GHello* GHello_new() {
    GHello* lObj = (GHello*)malloc(sizeof(GHello));
    GHello_init(lObj);
    return lObj;
}
//===============================================
void GHello_init(GHello* _obj) {
    _obj-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_integration-de-la-destruction-d-un-objet-dynamique" href="#programmation-par-objet">Intégration de la destruction d'un objet dynamique</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Intégration de la destruction d'un objet dynamique:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GHello* lHello = GHello_new();
    lHello-&gt;sayHello();
    lHello-&gt;delete(&amp;lHello);
    return 0;
}
//===============================================
// GHello.h
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*delete)(GHello** _obj);
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _obj);
GHello* GHello_new();
//===============================================
// GHello.h
//===============================================
GHello* GHello_new() {
    GHello* lObj = (GHello*)malloc(sizeof(GHello));
    GHello_init(lObj);
    return lObj;
}
//===============================================
static void GHello_delete(GHello** _obj) {
    free(*_obj);
    (*_obj) = 0;
}
//===============================================
void GHello_init(GHello* _obj) {
    _obj-&gt;delete = GHello_delete;
    _obj-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_creation-d-un-objet-dynamique-via-une-macro-local" href="#programmation-par-objet">Création d'un objet dynamique via une macro local</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Création d'un objet dynamique via une macro local:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GHELLO_OBJ(lHello)
    lHello-&gt;sayHello();
    lHello-&gt;delete(&amp;lHello);
    return 0;
}
//===============================================
// GHello.h
//===============================================
#define GHELLO_OBJ(_obj) \
    GHello* _obj = GHello_new();
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*delete)(GHello** _obj);
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _obj);
GHello* GHello_new();
//===============================================
// GHello.h
//===============================================
GHello* GHello_new() {
    GHello* lObj = (GHello*)malloc(sizeof(GHello));
    GHello_init(lObj);
    return lObj;
}
//===============================================
static void GHello_delete(GHello** _obj) {
    free(*_obj);
    (*_obj) = 0;
}
//===============================================
void GHello_init(GHello* _obj) {
    _obj-&gt;delete = GHello_delete;
    _obj-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="compilation-d-un-projet-c">Compilation d'un projet C</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#compilation-d-un-projet-c_affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#compilation-d-un-projet-c_generation-des-fichiers-objet-dans-un-repertoire-build">Génération des fichiers objet dans un répertoire build</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#compilation-d-un-projet-c_generation-du-fichier-executable-dans-un-repertoire-bin">Génération du fichier exécutable dans un répertoire bin</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" href="#compilation-d-un-projet-c" id="compilation-d-un-projet-c_affichage-d-un-message">Affichage d'un message</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAYAAACe9hi1AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAAEnQAABJ0Ad5mH3gAAAadSURBVHhe7ZxPSBVdFMDv920KK0SsRQZBoOROqSjcZO2qlRuxleWq0Fa1qKCIKLA2ClHkJrQWIehCXFibsNpEYIsWQVESuDDon7kxWn3f9zvOeY3TG52Z9+7743d+cLnz5t1355wzd84999zRvzZv3vyPMwzD8MTfQW0YhuEFczKGYXjFnIxhGF4xJ2MYhlfMyRiG4ZWq3F3q6elxBw4ccBMTE+7x48fBWaMaefr0aXD0m0OHDgVHxmqo7SrdXn84mfPnz7ujR48Gn37z9u1b9+TJEzc2NhacKR9qXGQ6ffq0HK832traXG1trXv16pX78uVLcLZ8+JJnaGgoOHKuublZanMyyagWJxO7XGIg8RBTOGYA9PX1SRRRbubm5qReWFiQej1y4sQJd+HCBbd3797gTHnxJQ+ThBZjfRLrZGZmZnI3v7Oz042Pj8v5Y8eOSV1Ozp07527cuOEuXrwYnDEMo1JJnPi9ffu21Nu2bZO6nBBZWS7GMKqD2JzMo0eP3M2bN4Ozy6y2BuR3+/btyzmhuBzOkSNHJOym/8+fP0tkxG+Wlpbcy5cv3dWrV4OWv1ktTxQXZieVJ05flTN6DXIImjtg2dbd3e2uXLkiieiamho5d/fuXffixQtpkwa95loUYv80+hYiTxbS5Bii+mL36elpNzw8LJ+zojLcv39fIni4du2aO378uGtpaZEJ7tKlS+7du3fynZLU/lnGP/kwvT68fv3aXb9+Pdd3kvFQLPtkIXEkc+bMGanzPTz9/f0ycFEI46LQWjmcXbt2yTr/58+f8hse0MOHD8sDG4WbQRstayUes8iTlE+fPkmfsHPnTukPubkGcnHu7Nmz8n1aFhcXczoy6IB+9ZyWKL70zSqPb6L6UrA744mHqxi0trbKQ8+45H5+//5ddOeaHR0dQatlfI5/HMzly5fFwXAPaNvQ0CCOLo5S2CcNsU4GL8isTXnw4IF4XDzhwMBA0GIZjEABciTMgszumsPR2SAKN+HOnTvSlt+QYwEigih4X9poIV8UR1Z5ksJMQ58Kg1Gv09vbK+e4ubt375bjNODAVUcGKjx8+DB3TksYn/pmkcc36IO+OPRTp07lZEB3HsL29naxf6EQaWhU8e3bNzl+8+aNfOYhV7LaP+n4J4LBARG94CRoS5/q9KOUyj5piHUyCIIhKFu3bpVBtnHjxj92Fw4ePCg1RghHOeRwUAoDESJGob9wKKk5FtoXQlZ5svL+/fvcdbixzBrATFUKSq1vudmzZ4/UU1NTK5Ys6I4N0Nf3jtyGDRuCI//jv6mpSerR0dEVEfzIyEhwtJJKsE+UWCeDJ2etRyGKYY26Y8cOWU+GQ0B9mObn56UOo7Pf9u3bpQ7DDfBBVnmy8uHDh+BoGWYNbFaqxHSp9S03dXV1UjOrkz8JF40oSonv8a9OJ+zAIJoTUirNPpA4J4OSbB1DISG4YRQDxiMTYb7y8ePHoNX/l0qyT2InAxquhUM6FTi8TlVINgHJ0lJRLHkqZfZvbGwMjvJTan3XkqcYrJYz0Bcwf/z4Ibtj+UrcLO+DUo3/aI4vLudXafaBVE5GM9PhUO/58+dSk/0Oh2PsRuGMaFvKd1qyyhPOoTDIyfSXEx2Y+/fvX/WhK5W+SeUpBJ3Eurq6pM7Hs2fPpCaBWehOYTHwPf7Jo4BuKignT54MjlZSiH2Qn1wOGz3FvMex78lww8mqK/X19bkLE3LhERW2zNTAuh2nXpxcTnhvXt8ToB35izCsG2Gt9yRUxnx9QBp5mBEGBweljepMW26u9sF53VVjrQskxIF1NwOJhzDfOw5ZCctF/7q+5z7cu3dvxcD1pW84D5BGnqzofQW1K7IhfzhJyjavOsWwLMg2Oztb0H3QMchuDzrxWcdZ3LjzOf7pl/5BdcXm5IBwbBB9XrLaJ2x/1b8YJNpdovAZYTFa2MEA22M4Hr6nLQbGiAgaNnCx+fXrV3C0kjTyEDreunVL2qIjbXk/YnJyMmixbAv+OJCi9lBoz+diL6+Qi5fAdCbT627atMlt2bJFzim+9A2TRp6sMK54TUKdC/1//frV/TcRBi2W4SFBt6gs/KYc+Bz/OHr6oT+cBP0zMbDbxPXykdU+RGXqlPhD2GJRlf/qQWeOaERlGEblkSonU26YYVnramjK/5MxDKOyqfhIBodCHoRQj3BRia51DcOoTCo+ktE8CLAuZc3O69LmYAyjOqjKnIxhGNVDVeVkDMOoPszJGIbhFXMyhmF4xLl/Adx6SE89ZyIpAAAAAElFTkSuQmCC"></div><br>Structure du dossier avant compilation:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- compile.bat</pre><br>Affichage d'un message:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br>Compilation du projet:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: compile.bat
::===============================================
@echo off
::===============================================
set "PATH="
set "PATH=winlibs\mingw64\bin"
::===============================================
gcc -c main.c -o main.o
gcc -o readyapp.exe main.o
readyapp.exe
::===============================================</pre><br>Lancement de la compilation du projet:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
compile.bat
::===============================================</pre><br>Structure du dossier après compilation:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- compile.bat
|--- main.o
|--- readyapp.exe</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="compilation-d-un-projet-c_generation-des-fichiers-objet-dans-un-repertoire-build" href="#compilation-d-un-projet-c">Génération des fichiers objet dans un répertoire build</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Structure du dossier avant compilation:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- compile.bat
|--- build/</pre><br>Affichage d'un message:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br>Compilation du projet:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: compile.bat
::===============================================
@echo off
::===============================================
set "PATH="
set "PATH=winlibs\mingw64\bin"
::===============================================
gcc -c main.c -o build/main.o
gcc -o readyapp.exe build/main.o
readyapp.exe
::===============================================</pre><br>Structure du dossier après compilation:&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- compile.bat
|--- readyapp.exe
|--- build/
     |--- main.o</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="compilation-d-un-projet-c_generation-du-fichier-executable-dans-un-repertoire-bin" href="#compilation-d-un-projet-c">Génération du fichier exécutable dans un répertoire bin</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Structure du dossier avant compilation:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- compile.bat
|--- build/
|--- bin/</pre><br>Affichage d'un message:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br>Compilation du projet:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: compile.bat
::===============================================
@echo off
::===============================================
set "PATH="
set "PATH=winlibs\mingw64\bin"
::===============================================
gcc -c main.c -o build/main.o
gcc -o bin/readyapp.exe build/main.o
bin\readyapp.exe
::===============================================
</pre><br>Compilation du projet:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- compile.bat
|--- build/
     |--- main.o
|--- bin/
     |--- readyapp.exe</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="utilisation-d-un-makefile">Utilisation d'un Makefile</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_definition-d-une-regle-par-defaut--all-">Définition d'une règle par défaut (all)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_definition-d-une-regle-de-compilation--compile-">Définition d'une règle de compilation (compile)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_definition-d-une-regle-de-compilation--main-o-">Définition d'une règle de compilation (main.o)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_definition-d-une-regle-d-execution--run-">Définition d'une règle d'exécution (run)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_definition-d-une-regle-de-nettoyage--clean-">Définition d'une règle de nettoyage (clean)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_generation-des-fichiers-objet-dans-des-repertoires">Génération des fichiers objet dans des répertoires</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_utilisation-d-une-variable-dans-un-fichier-makefile">Utilisation d'une variable dans un fichier Makefile</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_utilisation-d-une-extension-dans-un-makefile">Utilisation d'une extension dans un Makefile</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_generation-automatique-des-fichiers-objet-dans-un-makefile">Génération automatique des fichiers objet dans un Makefile</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" href="#utilisation-d-un-makefile" id="utilisation-d-un-makefile_definition-d-une-regle-par-defaut--all-">Définition d'une règle par défaut (all)</a>
</h2><br>Structure du dossier avant compilation:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- Makefile
|--- envs.bat</pre><br>Définition d'une règle par défaut (all):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
all: compile run
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_definition-d-une-regle-de-compilation--compile-" href="#utilisation-d-un-makefile">Définition d'une règle de compilation (compile)</a>
</h2><br>Définition d'une règle de compilation (compile):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
all: compile run

compile: main.o
	gcc -o readyapp.exe main.o
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_definition-d-une-regle-de-compilation--main-o-" href="#utilisation-d-un-makefile">Définition d'une règle de compilation (main.o)</a>
</h2><br>Définition d'une règle de compilation (main.o):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
all: compile run

compile: main.o
	gcc -o readyapp.exe main.o
main.o: main.c
	gcc -c main.c -o main.o
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_definition-d-une-regle-d-execution--run-" href="#utilisation-d-un-makefile">Définition d'une règle d'exécution (run)</a>
</h2><br>Définition d'une règle d'exécution (run):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
all: compile run

compile: main.o
	gcc -o readyapp.exe main.o
main.o: main.c
	gcc -c main.c -o main.o
run:
	readyapp.exe
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_definition-d-une-regle-de-nettoyage--clean-" href="#utilisation-d-un-makefile">Définition d'une règle de nettoyage (clean)</a>
</h2><br>Définition d'une règle de nettoyage (clean):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
all: compile run

compile: main.o
	gcc -o readyapp.exe main.o
main.o: main.c
	gcc -c main.c -o main.o
run:
	readyapp.exe
clean:
	del /q /s readyapp.exe main.o
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_affichage-d-un-message" href="#utilisation-d-un-makefile">Affichage d'un message</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Affichage d'un message:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br>Fichier Makefile:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
all: compile run

compile: main.o
	gcc -o readyapp.exe main.o
main.o: main.c
	gcc -c main.c -o main.o
run:
	readyapp.exe
clean:
	del /q /s readyapp.exe main.o
#================================================</pre><br>Initialisation des variables d'environnement:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: envs.bat
::===============================================
@echo off
::===============================================
set "PATH="
set "PATH=winlibs\mingw64\bin"
::===============================================</pre><br>Lancement de l'initialisation des variables d'environnement:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
envs.bat
::===============================================</pre><br>Lancement du nettoyage du projet:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
mingw32-make clean
::===============================================</pre><br>Lancement de la compilation du projet:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
mingw32-make
::===============================================</pre><br>Structure du dossier après compilation:&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- Makefile
|--- envs.bat
|--- main.o
|--- readyapp.exe</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_generation-des-fichiers-objet-dans-des-repertoires" href="#utilisation-d-un-makefile">Génération des fichiers objet dans des répertoires</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Structure du dossier avant compilation:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- Makefile
|--- envs.bat
|--- build/
|--- bin/
</pre>Génération des fichiers objet dans des répertoires:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
all: compile run
#================================================
compile: build/main.o
	gcc -o bin\readyapp.exe build/main.o
build/main.o: main.c
	gcc -c main.c -o build/main.o
run:
	bin\readyapp.exe
clean:
	del /q /s bin\readyapp.exe build\main.o
#================================================</pre><br>Structure du dossier après compilation:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
|--- main.c
|--- Makefile
|--- envs.bat
|--- build/
     |--- main.o
|--- bin/
     |--- readyapp.exe</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_utilisation-d-une-variable-dans-un-fichier-makefile" href="#utilisation-d-un-makefile">Utilisation d'une variable dans un fichier Makefile</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Utilisation de variables dans un fichier Makefile:<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
GSRC = .
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\readyapp.exe
#================================================
GOBJS =\
	$(GBUILD)/main.o
#================================================
all: compile run
#================================================
compile: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o
run:
	$(GTARGET)
clean:
	del /q /s $(GTARGET) $(GBUILD)\main.o
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_utilisation-d-une-extension-dans-un-makefile" href="#utilisation-d-un-makefile">Utilisation d'une extension dans un Makefile</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Utilisation d'une extension dans un Makefile:<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
GSRC = .
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\readyapp.exe
#================================================
GOBJS =\
	$(GBUILD)/main.o
#================================================
all: compile run
#================================================
compile: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc -c $&lt; -o $@
run:
	$(GTARGET)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_generation-automatique-des-fichiers-objet-dans-un-makefile" href="#utilisation-d-un-makefile">Génération automatique des fichiers objet dans un Makefile</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Génération automatique des fichiers objet dans un Makefile:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
GSRC = .
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\readyapp.exe
#================================================
GOBJS =\
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
#================================================
all: compile run
#================================================
compile: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc -c $&lt; -o $@
run:
	$(GTARGET)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================
</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="utilisation-des-standards-c">Utilisation des standards c</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-des-standards-c_affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-des-standards-c_utilisation-du-standard-c11">Utilisation du standard c11</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-des-standards-c_affichage-d-un-message" href="#utilisation-des-standards-c">Affichage d'un message</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Affichage d'un message:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br>Fichier Makefile:<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
GSRC = .
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\readyapp.exe
#================================================
GOBJS =\
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
#================================================
all: compile run
#================================================
compile: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc -c $&lt; -o $@
run:
	$(GTARGET)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-des-standards-c_utilisation-du-standard-c11" href="#utilisation-des-standards-c">Utilisation du standard c11</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Fichier Makefile:<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
GSRC = .
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\readyapp.exe
#================================================
GOBJS =\
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
#================================================
GCFLAGS =\
    --std=gnu11 \
#================================================
all: compile run
#================================================
compile: $(GOBJS)
	gcc $(GCFLAGS) -o $(GTARGET) $(GOBJS)
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc $(GCFLAGS) -c $&lt; -o $@
run:
	$(GTARGET)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="utilisation-du-debogueur-gdb-">Utilisation du débogueur GDB </a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-du-debogueur-gdb-_affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-du-debogueur-gdb-_utilisation-du-debogueur-gdb">Utilisation du débogueur GDB</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-du-debogueur-gdb-_affichage-d-un-message" href="#utilisation-du-debogueur-gdb-">Affichage d'un message</a>
</h2><br>Résultat:<br><br>Affichage d'un message:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br>Fichier Makefile:<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
GSRC = .
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\readyapp.exe
#================================================
GOBJS =\
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
#================================================
GCFLAGS =\
    --std=gnu11 \
#================================================
all: compile run
#================================================
compile: $(GOBJS)
	gcc $(GCFLAGS) -o $(GTARGET) $(GOBJS)
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc $(GCFLAGS) -c $&lt; -o $@
run:
	$(GTARGET)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================<br></pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-du-debogueur-gdb-_utilisation-du-debogueur-gdb" href="#utilisation-du-debogueur-gdb-">Utilisation du débogueur GDB</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhQAAADcCAYAAAAoXjgVAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAAEnQAABJ0Ad5mH3gAAFoFSURBVHhe7b0PsFXVned7Ln9EglQ/xJiI+dMQ0VSeM9LggO2zIE6C020wj+qiI2Xe0Oiriq3QY4nzSh1xGAd8JjWjFGn+pOsVikya0qeVMEphUpZjQ3XscR6m6HmQSgqQSbqDrwkItEXTV4X79med/T2su+/e++y1zz7nnnvu7wOr9rl7r732b/3Za/3Wb629Vt9ll102UDMMwzAMw2iBMfHRMAzDMAyjNKZQGIZhGIbRMqZQGIZhGIbRMqZQGIZhGIbRMj05KfP3fu/3ao888kjt5z//ee2P//iP47PV8Rd/8Rfxr4t8+ctfjn8ZIx0rP4ZhGOGkWiioUKn0mrnRCg2N3Ejmd3/3d11ef/KTn4zP9C5+mU77u5N0ovx0U3wNwxgd5A55/MM//MOgyi/pRiv0WuVGMn/0R3/keuJz5syJzxidoFfKj2EYhk+uQvGrX/1qUOWXdIYxUjh69Gj8a3Qw2uJrGMbwY5MyjVHBL37xi/jXYLDC9SKjLb6GYQw/lSoUDz/8cO2ll15qjNV+73vfq/3hH/5hfPUinJef7du3u3Nr1qyp7d69u3GO8f0quPvuuxsyET7PySIpP3Jwf6to/JrwSQ9fnqeeeqqjcxj8sfQvfvGL7hzDHjonJ+QfmdNYuXKlu75hw4b4TPn4tiv90zhz5ow7YoXLo1fKT9H4GoZhlKUyhYKK7fd///dd5cb8CiouGqwVK1YMqVTfe++9xhyMz33uc+76rbfe6u75zW9+486tWrXKXW8VKuBz5865533iE59wz0lrFJLy45CDeQZU5FUwffp0lx6+PChOTz/9dOyj/dCwKH7qrZLuOicnfvSjH7k8IV3SlMOZM2e64/79+93RJyS+nUh/UJz/6q/+yh2bMdLLT2h8DcMwylKJQkGlJovCo48+6uZXLFu2rPbyyy+7c8mG6Iknnhg0B2PWrFmN++6//353jor5uuuuc7/LgkJDbw5ZCPvb3/62Oz9v3jx3FMiH/DSc9957r/OLQyYq5AULFjh5WgV5nn/++YY8PIvwpVR1AhoWxU+91R07djTOyfns2bPHHW+55RZ3FKTJDTfc4H7v2rXLHX2KxrdT6U/+r127Nv6r/jfyZTHSy09ofA3DMFohV6GgomJ4IumkPIj58+e741//9V8P6glt3LjRVXj0pDDbZnHo0KHGfVTK9L6AHlkr0GA+99xz8V/13jYgj8/s2bPdEROyP/aMTMQJ/1V8CUHcfHl4Fs8ElKpu5cUXX3T5iPLgK3mLFi1yR9KIuCUpGt9OpT/575fP5N9JRnr5CY2vYRhGK+QqFFSE9IqS7rd+67diH3XU8B87dswdfdQLvuqqq9wxjcOHD8e/6tD7YqEfVeBloREswpQpU9wR87TGv+WSylMrnDx5Mv51EcV9woQJ7tiN0JDRMMLChQvdEa699lp3TBvugKLx7VT6h2LlxzAMozi5CgWWAhr2pGu1oe9W6L299tprqW60f4b3yiuvuCPme5E33FGGkZ7+Vn4MwxjNVDKHQpXltGnT3NGHYRNgIma3curUKXc8ffp07Tvf+U6q803ZaRQZI586dWr86yLXXHONO/b397vjcCAZ8qCxxNpEPBm+Yt4AFqys4Q4oGt8q0n84Ge3lxzAMAypRKPbu3euO9Fh9Ey+fFNLoYDruZquGJh3S+w6dHKnG9M4773THPGg0/PCZj6AeP/NIOo2UvLlz5xZq0N588013RGbNG8ga7oCi8W0l/buBXio/vL/My+CT1yJlwjAMQ6RuDkYPNHRzJD6bkzKhT9pknWBmuSaT4YexZvjiF+vrINDzRemggeMLkFbJk59xbWDoxodPAfkkEJBFcz+Ix5EjRzLl4pNAPhcExYN4E1++EABfHq6dOHHC+VP8aVT4uiWtp697ISlzq9AgrV+/vqH0Kc70hLdu3ZqqBNLY4B9ZJ02a5PIyKXeZ+JZN/3bQS+UnFF8evgrp1eFNwzCqpxILBfCJHGPFVIpUdFR8VIBUSlImgAmdXFdlCPjl77yJm+2GCh9ZNflQMiJbHpiz6bmrIeAeKvxIUYt9DIa0mDhxovPHPQwl5DUGShM1UFWCGZ7PCpNxRlGYPHmyO5fk7bffdkd6r3nDHaJofMumf7fQreUnFKyNhEt5e+edd+KzhmEYzenJ7cu7jbwebzPUY6ThQGkbblAkWEiJxi+rB9tKfI2hWHoahjESqMxCYbSHSy+91B2Z8Dfc0LBJmaBXbeZwwzAMQ5hC0eVoyEOm9E7DnBcm6DF3gF4yygQ95c2bN8c+DMMwDMMUihHDcK1jwJwXKREMu2zatMmZ3asaszcMwzB6A5tD0eWw1DnY2LlhGIbRzZhCYRiGYRhGy9iQh2EYhmEYLWMKhWEYhmEYLWMKhWEYhmEYLWNzKAyjjWQt1W30Lp1eiIzF5latWuU2itP+K3yFxQZ+Rm/R7fXJEAsFLwNCF3G9hB/vtL8No0o6Ud5YQ4RwbZOv3kUr15LXLJmPEoM7cOBA7MMwOscQheLMmTONQonz95Dwz+MMw+he2LiNnvKcOXPiM0avwT4urBNDPU1+YxHBdXIzPcMQQxQKFi9SocTt2LEjvlJfC8F3vcRwLRxljE6svBlVcP3117vjq6++aovNGcOOTcqMYefNNNh50TCqxsqbUQUaztJW94YxnDSdlMkYLGZTSJsIoutZk4BWrlxZW7JkiduL4oEHHnDndA/bnb/77ru1b3zjG+7FoDLF3zPPPJOqbbPz5o033th4iTDzsUmVvz16K2j8mngyJvnUU0+5oZ00a8yGDRtqN9xwg/ut7Z7Z2jtNltD4sjom21MD4S5btqy2Zs2a2rx582qf+MQn3LktW7Y4a5JPMn2Q/Y033hhS2VSV/lnhA37uueee2vTp0xtxEVlpWgTJrjCSf4Ofjz5F5S+T/pSXpUuXNsoE6bhu3bpG2GnvTkh5K4rSoxlp8oTkbyhlykPI+x7yPpZ9v0hbdv6dOXOm8wfkM++Rv1GeXyaR4fbbb3dxQC7+rnI4Iqusp9HO8l+GoukpisqvNHn++ecbbdLatWsb7yd12+rVqxtKfah/KFv/Hz9+vFB5CK1PCK8d9S2ElIexl1xyyb9zPjNg5vAtt9zifm/bts0dfQ4fPlz72te+5iJ09uzZ2s9+9rP4Sp1vfvObtU9/+tO1H//4x7X9+/e7cwrz/PnzLnFPnjxZe++999xGWJ/97GdrN910U+2HP/yh8yuobG+99dbGxKMTJ07UvvCFL9RmzZpV+9SnPlX7yU9+Evssz/Lly10m//mf/3ntb//2b93fPGfXrl2xj4uQmP39/e76uHHjap///OedLMie9B8aX8a8CfuKK65we2n09fXVFi9eXDty5EhtYGCgNm3aNFfQ/BcpmT7Eg/SZO3euu19pD1Wkf174QCHk5ScOFDjCJ61w/N6zZ0/sM4yxY8fW7rjjjka+8LJ+6UtfcgWbfONv4oaMfj6EyB+a/rz8jz/+uEs7wsUfZfJ3fud3XNmHtHcnpLwVhffwM5/5jAuHNBk/fvyQ9E97Rmj+hhJaHkLf95D3scz7RcfoW9/6lstPdv79m7/5G+d3xowZrrz5aaT3C1luvvnm2t///d+7OPJ+UeEjW9nyn4QyA2nly6ed5b8MIekJIfIrTThP+3Tttdc6eX/5y1+6+gP5KSMqQ6H+oWz9/9WvfnVQfZtWHsrUJ+2qbyGoPGChyHNLliwZ2Ldvn3Np13GR9uWub926ddD5KLEa9/Jb5/0w/+RP/qRxPhJ8YO/evUPO33333e5cpOE5Pzq/cOFC5x/nh1/WIRdhZv2d55DrBz/4gZMTef1rofGV0z2kq+Tw01RpwTWd8+VVvvAMncOFylM2/KryJekIm7LA76gn0Uh3/taz/bIYKr+c7mmW/lyXPz++f/qnf9rwq3O+S5av5N+tuu9///vu2YSbdl2ubPoUdaHloYr3nfuy3kc5ruGa5S9HnUu+p6QRz/HTTfFN+vfTQedCHc8hX+X0HP8czpeH3/Lnn6+q/Ie60PQMlV9+Ve75TZrwm/qCv4lTWf9pLq+8+eXBv5ZVHniWnlmkPvHDKfJ+lXV6dl55qGQOxYsvvug0KbSU6667Lj5bqy1atMgdMdekmdA555uIMCnt3r3b/UbbE7Nnz3ZHrvlmJ0wshE1PLIpMfLY8mNl8M17y7zyQ6+DBg+43WnYaReOb5NChQw05CAMNHaLMdMf58+e7I2nhy7tx40aXL6QPPfckReUpGz5gmpOJsip4psIkDZTuyIDWD8eOHXNHaEV+aJb+mGzhhRdecNdFs15jK+WtSlpNnxCKlIcq3vci76Nolr/0xgA/SZM2afTQQw+l5hs9Rd+/zPjIXxZ6iJif5YR/Doc/0e7yH0poerajfE6YMCH+VYxm/ouUN8qDb9XJKg9l6xNoR32bJK88VKJQECiZDZHm4o6A6QiyzKWYfpJgcgI/A6dMmeKOfBbFeJfvMA8NB5Gm6cxMviwLFiyIr6ZTNL5J5EcwHkbBUYHUi+03ooJCDGpofYrKExq+GkZelBUrVriXaPv27c5sWUXDpGcCz2AeCOcmT55cu/LKK915xipF2fQRzdJfFYJf2YHfGHYzraZPM0LLQ5n3vcz7KJrlLyZdwDSfhl/p+9DYVQ0yIZuc8M/hJDu0u/yHEpqe7S6fZShT3oqWh9D6JPT9apW88lDZVx6vvPKKO/qJisUCWhkT9iHRmNiS5jr5GR4TUqjs6AlQoNHQcMwhMeo8+uijzpE3pA3fytMYPPLII66gtwLjeUB4hPvBBx/UTp06NahnwLih0T2UKQ9F33d7H41O0o3lrZ31bQiVKRS8/CQu5ha0ImbLojFhucjS4KdOnRr/uggTWECNBtBYABrtd77znVTXyd4gk4OADGTGKxoabt++fe58FkXjG4oqV2n+PhQsSGtgi8pTNnzKBHkjDfbb3/62O09Bx5VFPRVeaEAz5hzyqTfzzjvvuCOUlT8Uf7gPkn8PF8rTLDqVPkXLQ+j7XvZ9LIrKm8rWSKNT+VuU0PTsNvnbXd5EaH3Srvo2hErXoeCTLsBKoXHQrOEOQPnAdCRIMFk4GKcRmqHKNd//cOObfsgwZtnmUTS+oezdu9cdsQj5BYeZ1Ch1mNrSzJNF5SkbfhJWYa0ShjekrDLE4Q/T+EpsVfJnoeE+Vi300ezx4UKVLDPh88ZV250+WWSVh7Lve+j7WJSdO3e6Iwosny6ONIYrf7MITc9uk1+0q7xVVZ9UXd8WoeV1KJIwkYpMpkLnEx9MQ0kLhcKUaYZPWygUFDDAP4np34eZSZohfjV2xrP4fKWTS80ydoaskgMZiAfmJr6rBmRnPQe0xpD4UjBJM9B1noF/GoiseGLW0svGcyQT8H31c97kpzLpXyZ8yQ2+f86j2ZdF4Sv90cjTzvkUlb9M+nOPzIp6PtYfemJUglDk3akaFMT169e7uEouQLatW7cOqoRD8jeUMuUh5H0PeR+hzPuFYqP7fHmAcPz89d+vZDlkrB2qKg9Fw2tn+S9DSHpCSPlUmtBDp4zzt/ICBYYy4edNqP9W6v8i5SG0PinzfhUltDxUaqEAFuoAekR5wx2CgjBx4sRGBpEBycYMEJwMl/aGf5wSrZPwjTByAjIgP4UJc5Mg/v5Ma9Esvv4sbkEc+Ttv4pHGz8hs/HIPBZg0y2sMiqZ/SPjIyf2S2/dPGMzirgJeGgo1qHHkXNrwUVH5y6Q/aUY4hMfz8cuEV2Zp87zhgmEBFuhJvjMo+kxg9SlbfopQpjyEvO8h72PZ94s0SJMHR5o1M0cPN+0s/2UITc92ls9QWqn/ixBan7Szvg0tD5VvX05CsvsdDyVR0kxReRpbL9Jt8R1t6W8YhmG0n0otFDRUUiaYT5GmTBiGYRiG0Xu0rFAwxsI3r4wF0euVqWXz5s2xD8MwDMMwep2WFQrGWKREMPazadMmZ0ZPjsEbhmEYhtG7VD6HwjAMwzCM0UflX3kYhmEYhjH6MIXCMAzDMIyWMYXCMAzDMIyWMYXCMIyuoW96rXbJ/zGmNv5f9cVnDMMYKYz4SZlpS5cmYaOyr3zlK7U33nhj0H70RjHSlp+tEuWhT7OlhDsJi7WtWrXKbbLFb+ArJspVLzDuG321sQv6agP/o1b78D9ciM8Wh3vHzu2rnf9vA7Xze1qvTlAo+n67Vvv4/64mvG5iwqZ6H65/RXg6G0a3k2qhSO7zLkdjTOOiSnWkwLrxLBUastGQ0TlQVOS6Da38ynorLFktOQ8cOBD7MMb9r31OAeBYBSgmgJJiGMbIIXfIg16YX9lTudJTpYIdSWj987R10I3hB6uHXLfBviass0LZYZMcyVnVJkm9wEC8c7SOrYJVYuBMzSkpY66PTxqG0fXkKhTs7+5X9mzQwgZSVLAjqbeP7OwrwtEwQrj++nqL9uqrr9pibRkwTPLx8wOlhkuy0FDH2JttmpdhjBSC3lZWwtRuoldeeaU7jhRsXxGjDBres7k3+WiYoirO/z9ReP1RBXVDfaKmYRjdT+qkTO33ntySFfIm6HHtxhtvbFTCmInZJCxte9kNGzY09nbH6oFflJWsrWgZw166dGnjHra9XbduXaOiT07iUxx80uID2n2T68ePH6/dfvvtLg7IhUxp5u2kPKQH+/JjFue5rU4q5Pn33HNPbfr06UPi4ae9ZM+aJLhy5crakiVLXHo98MAD7hzzYQB5dQ/bXCs+hLV69Wq3/TX4eU56cA/b6pI+hMu+/2m992R54P5mE2MlW7P0K5o+rVJEHr+sUY6XLVtWW7NmTW3evHkunTi3ZcuWxpbHomj6hOZXKP6kzPP/faA27l/01WoTogtRg37h57XaRy9fqNXer/sVmjjpg1WBiZRJmAsx7o/6GkMZPKuPnZ2j8M/vj+7Znq6MSK6scIUvy8Df1Wof/vsLtXHLontn1ePBuY9/cKF2ITHthfDHRH6cLBH4O//2QO38j4c+i69OxlwXz+mI5GZ4h7RK8wsM1Yz95xfvufCLgdpH3x+oTVhb78NpUqbShnT58N8MtfCMWxzFY2Ff/f7vXnxWiDyD0j+K49gof5X+afkb6r8sRdN//LfGOMVyyKThy6PsXR2lZ5THaRN4Q/LXqIZge+Kll17qjkePHnVH8dRTT7lGh8qRihHH0AgNLBVnkvfff7/h7+zZs65Cxi+VcxIab/agp/KkEeOeadOmuUo0i/fee68RflFTNY0TMpw7d87dR2Nw6623usbBJ02eqVOn1u67774hjVtZmKdCehIeDZLigiNuAssL8SPd0xSKmTNnuuP+/fvd0WfWrFlOQSCefMVAnvAswlq8eHHs6yL4I31OnDjh5ADSAlnVKIpkeSBc4rJixYpKhsuKpk8nUFkDDQdSbpCLvOEc6etTJn1C8yuYiVEl/PWocTtdr7yBivySlVE1EVXePhf+LmpsIj/ORY1hEcZ8PmqoovBr/xiHHzUEY+dF56LGPw1npYgYe1N0PfF8H8kCfZ+qN4CESyPr5mJE58bdNbiqo5GSYqN4OH+RfDRESZQmzkXyu0mokV+UmSQoE+PviRpBGnwae8L+dF9t/P82NFwsO07GSA7kSdL3ufrxQkJXDJFHuPQnbl76N/I3hVD/IYSkPwoMyoCLY6RgiUv+90iOSCanJCSUidD8NaohqGRcd911rtcF9EwFDRkNC5Xnvffe63qHOM25WLBgwZAGh16//HE/96lSTTaM9MSoRHkmDZruIews/PCZC1IEns3mZvQwuY95F6A4iyx5fv3rX8c+WgOrA40Q8SNcySOXtJjs2bPHHW+55RZ3FKS5LCi7du1yRx8sMgrr5MmT7vfBgwfd3yhsSZDJTx/irgbzzjvvjH3VlQwcUAbwyz0vv/yyO5fM31BC0ycE5EaplRP+OZziByprgoZf8WZSJ5AXvD9QNn1C8ysUKlx6evTw6Qn2r4sqcjXI8wdXwlgV8IO7sL9Yj48GwQ+feRfgLAkpDER9lgtUM1GjkXy+j2QRY6Jk/mhL/Rkf/sf6eRoWDZ3Q0LgeL1aB6LriwT0oAGkKjB9fLAncp0YuqQhgmUBmrAqkoe6p/WN6HC7Ew0XINIhIBlkhpFyJEHmES/9XLqa/S5sovuQvSliSUP9FCU7/9yM5fhBfWxjdGylsKBbIR5yTFq4y+WtUQ65CgTnWr0T/7M/+zDWk9Kj8OQmzZ892x927dw8yu2LipdHlnjlz5sRn0+E+VY4zZsxwR6Fe9gsvvDDI2rBt27b4VzWg0PjmZsUR+X06JQ9gak8qY0lefPFF17iiPKjRgkWLFrkjeeDLWYQJE6IaMQH57qcPYUqZUZrA/Pnz3ZHn+mb+jRs3OjlJT5SCKiiSPiGwey6KpZzwz+Hwl8WhQ4ca8SaNZL3AAgbtSJ+0/AqFXtygnl5UkauxU0+5FZzJ2Qu/Me8iR/SPX48agYgxAZ+QDvwqklvDG1EciBeM+WQ9jEYjjUnfM7RyDyZ95Bl7Tf7znLLz8zhtogbWZ8xvx+H/l+i6NzSguCT5eG/kL2rokMufLzL2n9XDQTFpNsSQJ4+ggfXN/dxznmdHoIQlCfVflDLpz7WPY1nG/cEYp1iQZh/9p6FpWkX+GuXIVSioqP1KFKgA/d4YTJkyxR3psTLe6zu/J+eDWRclxfeLJSMNNeh+5Qtlx4yzoDIvQrvlQZEhbJ6DCZxGfPv27c5MntbQ0GjROMHChQvdEa699lp3TBvuqIrDhw+7o9+gqeE8duyYO/qgtMFVV13ljmUITZ8QCBslRU7453C+Qp1EaSJ4X/x72p0+VTIQi9g3oYIK+Fx8DIAGwZmrGRIo2CuWzILeKXMWpMAQFmD+ZqEp3w2xEsTwbIYTfL+up5tG/Co0lJoYv3EbBIpbXeesjb3hYpgMOUByuAOC5BGn4qNHbv6G+i9ImfQHlBuUKylMH//nwQqDKBu+0Tq5CgUmVlWg/AYpD2lQyeMvzflzLpiTgPKBkkIFSg8Ox1wKow6mcBxpR9pg4kc5YwImDWeSV155xR19pSxvuKMqWD0S+vuj7kIHCU0foxx98UjKQP/FnmqnkVVj7D8t34ilwXAKYae5C7+5GF/meNA4ycSuMXnmLlTF+beGWmLGxAay5HBHJ+TpBEXTfxAZw0ZplArfaInCcyieffZZ14NHCUj2Ak+dqquyp0+fdl9RpDm/986ENaBB8Me/m8118M35kPy707RbHhQ00k49XM3p8MfgBX5RzrAqkT+Mw9ODLzPcEYLWafCtIFIes+ZhQLOJk0WGMULSp5uoIn06xZiZ9Qo8rZfcKRoTF6MGtIrVMwnLHU/Xvx5Jc37Plwme4OZlaD5B5JrNHUl+7pr3+SvWDDcHAktMFEc3D2IC6R49IzHcUVaeWkpfMFdhDPVfkND0F1hl3NyIKJ3ArdCakqZlwzdap7BC4Y+X33XXXe4odJ7eccgMft80TAPAnI00ZM7XBDexfPny+FdnGS55zpyJ35QM+EQXyAfNa2nXcAcNPpYAFEzKhm8F2bt3rztiIfEbdj5hRclBMc0aMpDy40/yLEqz9OkWWkmfjnF5faa86wVHyZrsJXcaepUw5iZ3aAk1vAwRhEwuvOANpTAxkE8S03BKQMS4OwZfH7cwv7rlawUgXM0DyFPkisojksNGNMayiDDvJEmof0COCc+MqV3yb6O4Zkx8LJP+biImfvtrboKmKw+RwjX+Xw5N07L5C7yPzAVkCLVIp6bd/kcahRUKkJWCXpSvOFD50ZhRGTKUQYJpIicJl/zsUpPU+K5efmicZKHgczrGxVXZMvkRqIAVNtd5XhqanyEnRcWfZJqUKYRQeULBwsCcEtJF8iqNAEsEvfMkrOFB/pBuDEXwu8rhDvJd8ih/UACS61Agm+RDZsnPehjAvVmoDOBX8SeN/S8fyqZPOyANJINA4ebvrDLWSvq0k76r6ms6uLH5tfG3/5Ey8fGOC4N6yVTS8odTQ8ZR57I+BS2LmxyYMnGRhkbPFGN/ry5H5ueo/22g3nhHDZIbZ6cBjMOgIUzex3ACsOaB/Iy/b8zFhmtB9Lz/M0qHSBZwkzEjkLURdnS9dmn9fBaNOEbpjiLH7zRFLlQewX00yvh39/3rSGGMlAaXx/FkS59Q/zDmS1HaRenqvgTJmPgYmv4oJkzExD+TQt0ETawMkXw8J+k/OHwPJkxTj1PXNfuQANrtf6QRpFD4VgoWf/LhEzZMzuq903PFkXBJWMNBFSp+Jk6c6MbCMV8LtDfNpMcvYaOIkBncw2dzNOyaxObDKp56Pk6aIEeda2XSW548VYBspDVpJ3n5zfNIp4ceeij2ORTWKQDiWtVwB4t9oZworjhk4TNHrDTKSx/NbyB/fPlJt6zFy4AygHIqxZV7Wffisssui320lj5V438VIiRXXhkrmz7twJmImQJDQxA1ZM4qEVXW518fcJ/dJScX0qjIn3P113TQ+TGfyq60y3L+v9YbMb+n3/eJ+lwCnKCRaSYDnxry2aqsCQoj7QuJD7dGaVCv1urPuTSSJeoh06gJF/dIFnANXhS2a/jjNGWCI4qGzPVZsNAXEJ6bqJnydUeoPD5MZMS/uy/Kc8Jxn4NmfEUS6v/CzyL/kT/ief7wRXmShKT/+CWRIhOdJz0/3nkxTNKBZzEE5IaIPELC98F6SN3De/nOO+/EZ7Npt/+RxojfvryboBfNVwcUmKTC1SlQJFj0iQaKxmnYTeeGURVRT9WtjBjB+g5ZjdqIJoojC0fR8NEg6suUVmisxhk1yMy1aEaof8MQQRYKIx0mYzLMomEgWWk6DUMBUibo5ZsyYfQUkQKBlYIVMMf+k+otIMMNDbmUCbf6YwXKhGF0ErNQlICGm88T08CUhcm9iqGGIjCGz5LfKBEC0znDSp2SwTCMcrjJhn9QVyKEswxgzq/IAmMWCqNTmIWiAmi4Naegk8oEMIav8XfmMrA0Np9RmjJhGN2PmwMSzw9gfgLzIFwj3ovDOUbPYxYKwzAMwzBaxiwUhmEYhmG0jCkUhmEYhmG0jCkUhmEYhmG0jCkUhjHKYeVJVhEc/69671NMwzA6hykUKbBAFcsh+8s9G0aVjPtGfWtlGvIyuOWVo3uTKwSWQRslsVR0FeF1G9q62jCM9pL5lrHi4sMPP+z2FWDfBO2dwDktZZ2ENRFYoyHreqcpKw8LVLEcsr9fiWF0E26nxd+uH6tAiyixBoFhGEYZMhWKtWvXuk26aIxZ44AFm1jvgHObN29O3aqbjcFY8KlbNj0pKw9x9Y+G0W2wWqR/bBX2gmBPD5SU5KZShmEYRUhVKOjZ00NnT4p7773XLZS0bNky95tlpdl2/Be/yNlXd4RDfNkHg6NhdCMsfsReD1WuZKgtwsfebMMDhmGEk1pzaJdPeui+4sDvBx54wO2U2OvYPhhGt1P1Xg9uq+z+qFJg+2xvi3DDMIwipK6Uqb0qWL6Z7anzlnHO29fC58tf/nL8q86GDRtqN9wQ1VwR2s6VrbfTtm5mgqS2h8Yf1pI1a9bU5s2b57bU5tyWLVvc0tNl5fGfIZJbqgs9g+ts7c3OogwNEQ/iwFbuSbD6LF26tBFnhpGef/55NyzDc5PyhODL8+6779a+8Y1vNOTBovTMM88MysOQ9PRh/syNN97YmJNCHN544w03zyZJSHzLyBNSfpj/AzxfE20Z0pN8pM3q1atTrW7Eg31R2EK9ymXVmZTJBEiWXD7/3wdq4/5Fn9vq2m0R/fNa7aOXhy6/zCRMhiR8kttWC+3HoKEMnuW2GY/CZ4tstndOQ3JlhSt8Wdiq+sN/f6E2bll076x6PDj38Q+Gbn1O+GMiP06WCLfNNRth/Xjos/jqhImiDrbEfq+eVml+gaGasf/84j1sXf3R9wdqE9bW+039K+rWnMZeFVG6fPhvhlp4xi2O4rGwr37/dy8+K0SeQekfxXFslL9K/7T8DfVflqLpP/5bY5xiOWQ/D+34GuUx5QN5fULy1+g9xl5yySX/Lv7dgCGNr33ta67huPXWW2uR0lHbv39/fHUw+PnMZz7jKlwq//Hjx7vK/b333nPn5Hbt2hXfUYfGor+/310bN25c7fOf/3xt1qxZtZtuummIX+ZA4PeKK65w1pO+vr7a4sWLa0eOHKkNDAzUpk2b5hoGGray8ugZXCPMSZMmuXT4yU9+Evu4yDXXXFO75ZZbaufPn6999atfrZ08edKFf9VVV9WmT5/u4rJnz57Y98VG6bOf/axr/JB76tSpLr5f+MIXnJ9t27a5Yxl8eVBufHl4Jmn6wx/+MPYdlp7iqaeecmWBdEE5IB7IPnfuXHe/Xz5C41tGnpDys3z5cnckXPL02muvdeH98pe/rI0dO9aFTxhpef3Nb36z9qUvfcnJhbLG/VUw5n+OKt7fjhqnqMEYOydq3E5GJ09EMk6O3NXRuej6+f83qoTP1f1D3zWR+zi65zR/RP8vjSrsX0YNzsH6dZ8xV8cVe/Rv7LzIc9R4uvCviK59JjobHdk7IsnAP0TPvjm696ro+VgsvOf7SJa+/yk6XhadOB81Jl+J4vG3XIz+T42ec20UxhsXG5LxUSOFLE7uqKEiHn2fifxFjTRhJOPhziu+4yO/n66fc2nz1uAGCmVi/D1sshX5p7GP5Oj7ZBSPGdHxiuhcxPnd9XsGfh3F8ZYobBq9s/U09Bl7W3Qtuuf8W9G1I/HJiCB5/PT/X6J7vPTnPneP1xiH+i9DSPpfODrgnsn1vkuivyOlBtxuqJFMTkl4ZbA8oflr9B6Ze3nQKKxatarRG6VnRiO5ceNG93ca6mky/yB0yIBJno899pib+MkGV2m9XvU06XW/8MILrseKfPLLHA+/l1lWHnriTD5tZqEAX1adpxGlYRfqTSP3unXrGr1cGmnSGaqwUAC9cPXSSdP169c7xco/L4qmJzIiKzDcJUvBypUra0uWLKksvqH565NXfhSuygF/oxQxR0Z5zTMZzksi5QjFpR0WChjU04t6gJf866jSjhq7868P1D7emd6INLMkqMcLfviN81Gj279qaO8caBjoneY9X+hzTHrz5//LQN0iQS82tgp8+B8vuM9SkRWZsQp89H/Vz4EUAehfl98LZxhm/L9EaRjaO5b1QFYJhaO4gCwUkGWF8GXvf7y8PIPSP2p41UN3a378SdzD986H+g+lTPo3rkXP/mjLhdqYa+pphtUBi5RPFflrjHzqOZ0ClTnDHeygSSVKxU7jwaejahSqhIbi4MG6CjtjRtStyOHQoUONRg3ZaBwA60AnwfLhN1xSWmjAfWbOnOmONJJ+g9SKVSINwvaVBtJ09+7d7je99yyapef8+fPdkUZX/gDlEmWC+KLUiFbjWyZ/Q8pPGhMmRLVmCsiBssQwjB+XqnBDHl5DRIV7IZ4b0XdxR/rSOJOzF35j3kV6dB0fv15vLMZEjVxRBn4Vya3hjSgOrocaMeaT9TBo7AFZ1NgA97jebyTP2KjByoP7Lvw8Thtvu29w1p4IlBq/0VJckny8N/IXKVWu9+wVq7H/rB4Oikazxi9PHkED6ysB3HOeZ0eMGfqhXLD/opRJf659HMvCFusoE6TZR/9paJpWkb/GyCdToQAqUBoNxp3p4dKA0gPEctEqrPGABYHeotyCBQviq/kkzc70NOnxdnoiJY1pEaRg+I0xZPW2y8JQRxKlVVaDCc3SUw35sWPH3NGHMgEMr4hW41skf1spP93OQJzMfRMqqIAzhizyoEFAIcBKwlh+ESSzYNwdi4AUGI2pj/t6fUEv38mCkIRnM1fD9zv2pgx54uLdUGpi/MZtEChudT21NvaGi2GO+Xz994WUohokjzgVHz1y8zfUf0HKpD+g3KBcSWH6+D8PVhhE2fCN3iJXofCh54vJl0YUa4XfIw2FCXeanEeDRA8Ud/bs2diHYWTT6+Wnb1r9ONB/safaaWTVGPtPyzdiaTBvg7DT3IXfXIwvEzxpnJj4iZUFBce5f4w9VMD5t4ZaYsbE87Ld/BGPTsjTCYqm/yD+sXgZKBW+0TMUVigAi4V6pHkwSTAPJvcB4/GYkumB4vbt2+fOV00zeTpFcjGwtMXBWoGJj0kUdyYwluXo0XqXhMmLSbBYAZNAk7Qrvp0uP51mzMx6BZ7WS+4UWBYwv9OAMr7fKoTljqfrcz7SnN/zdRNJIxi7Z7weiwfuwv78RskfvoDk3z5YM1AOnCUmiqOb0zKBdI+ekRjuKCtPbUp89MhVGEP9FyQ0/QVWGSwMpBO4FVpT0rRs+EZvkapQMMSRto8Fcyf0ed+ZM3EJ8lCjwsx/rBjN8E3bhM0niVUSKk+7YO4BMCfFR18fVAVx9JcLpwHXMADzEsqyd+9ed2SipT9/hkmZDG9gtfKHIzoV33aXHyBc5qEwd6jtZejy+iRC1wuOXq9kL7nT0KuEMTe5Q0uo4WWIoOgwClzwhlKY4MeXEGk4JSBi3B2Dr49bmN9n4msFIFzNA8hT5IrKI5LDRjTGsogw7yRJqH9AjgnPjKld8m+juEZlKI0y6U+47nPmqC/CJ8CuPEQKFxNRk5TNX6O3SP3Kw5+Nj0VCE+/UG2VsPG1xKxowfVXAPbJm0HPeunVro9HR1xfyo7D5qoIZ94A1hPUTAPM2SJmRTCgMaWs+iKLy0AjzGaLgOo0HMmhegv8sfVWBmZ2esQ9j+eB/xUBa6isJycEzmJNAIw1pXz0UxZeHdOSLBJ6j9CIeWk8EWcqkp18meI5fHpJfkITEt4w8IeWHsqo8yfvKIy0vQdehzNdLWTS+8ogqay2f3VjXIVImPt4xeA0HKulBww9RT5bGx/UM43H3C38X9QTj9SX01QBmeXrSPoxrg//VQxY0VDQi+loDXEPz+/UwGjLTgz03WIYkbp2KuKfvx7s2Mbrvfwy+r7HOhfxFfhjHp1Fz6RbhpxMyjb8vbuh0T5RGA//fQENRyIqv4kh4fPKY9jVCqDx++vddFV3jU9Moffw8Jk31nFD/Po2yFMHqqVkLnoWkv/vaiE9EiaP3tY/SAUUsmc9B4Rs9SfwGDuanP/2p62VSKVNRU3lzpNKl8chaKZNJdywYpB4q9+FYu2Dy5MnuHPAZnibscX3ixIlDPtGkQefbf5zCEZLJnwiYRlF5rrzyysY1nHqiHHWu2bPyIK40RmqICQ9Fha8gqoaGnfTkGTS4PNtfnKxsepLn5BENOH5VHoiXr0xASHzLyBNSfloF64wUl3feeSc+2zo0EFS6NGRU0DgaEypvGo7k5EKUB/lzLo6af34MazBUzPn/Wm8E/J5+3yfqcwlwgoanmQw0KDR4siYoDE348/lwa5QG9de2/pyooafxxnQuXNwjWYD0ImzSUGmKosVXHzLXZ8FCX0B4bqJmSqMdKo8PExnx7+6L8pxwspQDCPV/4WeRfxrwKJ7nD1+UJ0lI+o9fUlcmSE//02HSgWehOEiJESHhG71J5joURvthWGnFihWuwfLXcQglz2LSTVQVX6ODsC4DKyNG9Ow6Al5vPK+HH0KehSiNUP+G0Y2kWiiM9sJQDMMsmu8gC0qvMtri21NECgRWCszXY/9J9RaQ4YaGvGHaZ/XHCpQJwxitmIWiA8iCkAam9FZXYOw2C0W742sYreDmgPxBXYkQzjKAOb8iC4xZKIzRiFkohgEaUxp/ViEdDY3raIuv0d24OSDx/ADmJzAPwjXivTicYxgdxCwUhmEYhmG0jFkoDMMwDMNoGVMoDMMwDMNoGVMoDMMwDMNomdw5FFmz9bt9vQPDMEY2Wt00SSsryhqG0V4KWShYiAglQk57ZIxWULSo8FgCutcgXlmVudGbsLx4t5Vnv77BGYbR/RSyUPBC51kk8vY70L4LVe6DUCV5ayYkUe+oaLqMRKRMtNoTZOnrRYsWuZ1BWUobmpUBVtK84447Gv5ZAIvlurXMtiiq8Nx7771u+XVAnlWrVrndV7W0OmtiHDx4cNCS3SLUfxmKxrcMyDxnzhy3iZ/Cy9q3pNl+JmkQ/j333OM2ZCuankXlSaOqcmkYRvuofA6FdrccKVDBUaHJUSkK/zzOKAYbfr300ktu0y81ls2gcWFZbvyT1qxVwUZi/qZkScirZB5pjQuu+crE008/7cLhN/64zrNo0LSRmQj1X4Yy8Q2Bxh6l9+tf/3p8pjqUPqRF0fRppzyGYXQHlSsUVIpUMiMFekv0juR27NgRX6kNOo8zisGmXNqYjE3FaHDyYGluGiLYtGmTS2t67+rJajfSJORVMo/OnTvnrr355pvuCFhKaOxotAkXf8uWLXPPAhpwZBCh/kMpG98Qpk2b5o6nT7NtZbXceeedLn1QIvz0wQIFpE9SKWqnPIZhdAeVKhRUMOwuSYVsjF7YlZPNv1Am1EjmsXDhQnfE5I9lQ7D9OIoJQ2ZFeu001DR0sGvXLncEdpOFAwcONCwYwLP09/Tp090RQv2HUlV885gyZYo7tmPflOuvv94dUdr89GE4S/k9f/58dxTtlMcwjO6gUoWC8VMqmHnz5sVn8sHsS4XK+Chu+/btjQ2kRHICZNqESN0/HCCv4rB79+7amjVr4isXQVbJSBwBf/jXubQGpEj6iA0bNjT8ES7PzPILPM+/h99VWZb8RqYIM2fOdMdDhw65oyAclFRg/F1g8cAxXOWzePFid6TR8mVQI5bcDp344mjE/a3JQ/2HEhpfhhDII7/MA7KoDGEp8JFiFSonZUZhcuTZPCeNtMnZWRaIsvIYhjFyqHzIg14dPaxmJmEqKn8MFkelg7mXhlQcPXo0/lWHSXKgCgoFA5qZ1dsFFTlmdp6PdYZJiEmlgopX8iE3lTb+aDxoRDjHBECfoukj3n///Ya/s2fPujzAb7IRApSJxx9/3A1P0ThyDybp1atXxz46y4QJE9zx8OHDLr4rV65sNJDK/0mTJrkjYGLHJa0fTBCE/fv3u6Og50xvmjQhPUg/3ObNm138fcsDhPoPJTS+WC4oK8iDX7F27VpX5pAVmYTeCWQMkZOwKDMnTpxwZQIoK8yXSFMqJk+eHP+6iIY2fMrKYxjGyKJyhYJZ6qDeYhpUnlRUVC7MxFcDgYmcCpuJnarANLFu6tSp7khFq6EVn/7+/vhX56CCpyJn/Bj5NYactNA88cQT7rqYNWuWiyvn7r//fneO+EoJC0kfoWfguJ/71AipsRJLly516UdPnAZE9xD2cMP4/JIlS9yERdKgKPhVmvjDHYL0IX8oRyhquJMnT9YefPDB2nPPPRf7ukio/7IUiS/lYMuWLS5/8Is/FAvyljxGVh8p3ceOHXPHoqCwMqdD5ZmywbM5j5zi1KlT7sgXKn45RFGW9cWnrDyGYYwsKlcoUACo5NRbTGP27NnuiElVCgPQ46SRo7HzTb5UpKq4GLtmaAXo+cgsPRyVFfH0Gxd9EplUdpJg6lbvmgpbvUGNy4emTxrcp3SaMWOGOwpV+ih/PF9s27Yt/jV8+D3zEG677TZ3JH38OAmsRnxlgDXptddec716lIX169enDg2F+i9L0fiS97JC3HfffU6x4L148skn3Tmfq6++2h1D3wnKoW/pIB337NnjfvuKAuWEZ6No4J+hOMoqVjcNF/mUlccwjJFF5QoFUPmiAMjUmUQTtOgBaQxfLq2XRsMtaEzfffdddw6TqybQHT9+3B07SdkePaZuH3qDfF8vhSQ0fYBGDvO87zfrE14pPMkhA195GS6effZZt835888/P0S+PDRRMDncAQxXqLGj9806CfTqsQ4xPEQ6+2U11H8rhMQX5RWZaMj1d1qeqQFPa9xDUVnVMA3wTIZbCJ93YOLEie43W9OnPbtKeQzD6F7aolDI5NxsTQoqUHp/ac6fO6HhDBpTKtMPPvjAmV39nncvrt5ZNH3oTdPIyQROTxNH4zcSUP5iGqdXvHHjxoblR1abvLhQLvKGOxQG6ebDs/bt2+d+M59EhPoPpZX4FlFipXDcddddTsmUk9WQ6/xdBA1XJIcUKZsPPPCA+5qH4TKG47CaETYySjmGKuUxDKN7aYtCQSVJhUOlm2b+1xgsM8Lp/aU5v+clUykNJlBZcY4JYKqAe2n2eGj60JsGKnWNf+PU+GWRnDjbbCJtu9DXDmnj72qM8vK32XBHt1E2vlihUJ5ksePvZJ75FizC4p2Rk9LFO6l3qRl5lh8fwkZhAA2TQNXyGIbRvbRFoYCf/vSnrqJQBemjCgcLRsh4NMMbajAY4vDNsCOhISlK2fTxh1KoyLPmscj0rAmhYvny5fGvzvL666+7IwqoP4EUywtlSApqFs0aPSlo+mpGkEayovlDZqH+ffDDfALmFfj3+pSJL+Fq4iwTNLGe4Pexxx6LfdThPobP0pwsLliv+DsPZOdLIxp65Emz/AD+KKMM2fCuo+yg8Iqq5DEMo/tpm0LBZK2sRl6f5VEhYqqnApYZlIqYitVHDSCVOTPtgSEOKjsqMSqkboWGQHETMv0m4ylC00fxp1KXHxoDWShoGMkPZAF9iUODprC5zvOqwI8zTkqlb/KWLIC1RY0LXztwHXlkedm6das7pkE4arizGj1NIiS+SiMcaUScaQQ15ACh/n3mz5/v/BDnrImzofElfkzEJFzyi0aaRpt85zlZ5SgUwlJcVV54h/lsNfku80z84CijyEaZZR6FYRijk7YpFMCaFFnoszwpCygHUhCyoNLSXAmN0XJuOD4ZLQrLUCtugjjyd3LhJJ+Q9GFNCfVo8cMkORosv6dIo4QsgF/CpkEi/bgHRQ1FQ+b0VvDjjOMZoHjjJItAVhpvns915CXuyOmPxycpMtxBA87nnsSbuQmSgWeRTslGMNS/z969e50ygt+8YZqQ+LJGCWlHfjHfQpDvPAtFxLd0hIK1hXBUFnA8i8miWLFUtnwuv/xy94UK/kgTPlOmzGblgWEYvU+h3UZVQQoadSoPwzCMdoCVxAclB2xoxDC6l0IWCr/ngsvrWRuGYbSKX9/gDMPofnItFIZhGIZhGEVo6xwKwzAMwzBGB6ZQGIZhGIbRMqZQGIZhGIbRMqZQGIZhGIbRMqZQGIZhGIbRMqZQGIZhGIbRMiP2s1H2D5g3b15t586duSspGt0PW60nsQWMiqG0s/QyDGO4SVUoHn74Ybf/QxKW2X3jjTfc+v3DjSpSZGJnzV6EvRRYopolnLthSeN2yeOviqhFjKyBLIYpFIZhdAu5Qx40GjTYOH5T2bOZUcgOmO1CS4FrZ8hehE2XWPo8a5OpTtMuebTdeq8qhoZhGKOBXIWC3SpV0bP5EJsFwe233+6OwwkbNLGR0qOPPhqfMQzDMAxjuAialKmdDrVd9HCCxcTmThiGYRhGd5A7hyK5BTbkjdly34033thQOLLmXGgXU8Jn62QsHtzDrqZvv/126k6mefM6skzlReXJiq/kTD6DMX+N9TP0smzZstqaNWvcJFE2UuPcli1bUrd9boae2YxW0j8kvq3IU4aQOQHJ+JLub775Zu25555zf5dFMrC9uLYFX7t2bW3p0qW1G264wSmzq1evdtuc+xRN/zLln/krej6w1fm6desaYRcpD1Wlj2EYRhpBFoqVK1e6Y1pD+dRTT7lGisqLipTKq9mci+nTp7tx+XPnzrl7aIxvvfVW1zgnoeLFj1yzSYFl5CkK27cTJnzuc59z4SE3z0Auzq1atcpdD+XMmTONONLAAOHqnFySdsW3rDztJhlfHOlOeaIhrYJZs2a5Bp5ySX6+//77Lu48c/HixbGvOu0s/ygTjz/+uFMmyAP8Tps2zSk1WXQifQzDMHxyFQp6N/TGcdu3b3c9KXo4zzzzTOyjDhUeDpjTQO+WXrvmXKiXl4QKd9OmTc4v9zAnAujpJ6FXhR855ndkUVaeotCDJExBw6Pn3H///e4cFfl1113nfoeAsqY40ijBjh07GufkfNoZ3zLytBviQ3xR3u69996GDMSdBnfBggUu/VsFC4KsBSdPnnS/Dx486P6mQRdl079o+ccygbKBVQKFAL+EKQUvSafSxzAMwydXoaDSodLDXXHFFa5BufTSS4fM8p8/f747UuH51gvmXFCBURli5k1CeL45WHMi8N8KZeUpy6FDhxrPoRKnNwj0QDtBp+M73MyePdsdd+/ePWjYgbiTBsS33V/GTJgwIf7V/vI/c+ZMd3zhhRcGWea2bdsW/xpMN6SPYRijj1yFgh4aY7M4rBOMKV999dVu/Nc346rhPHbsmDv6qFd71VVXuaMPlW07KCtPWQ4fPhz/qkNvkDTr1KTRTsd3uJkyZYo70ltnvoPvZCnoJO0u/1IwfGUFknM4RLelj2EYo4OgORRUaHyuCa2Y0Q2jCiiPKL1p7ujRo7Gv0Yulj2EYnSRIoQCZXH2zrConf1xZMBEMmMjYKaqSp1t69ddcc038K51Ox7eZPFWQN8avxcxOnz7tvlJJc1m993bQqfKfnJOTNUen29LHMIzRQbBCoRnivrl279697sgsdN+kylchKB747eSaEWXl8ec80KAx4344USM0d+7c3Aa2U/EtKk8rSGG988473TGNPXv2uCOTC1v9YqcK2l3+mfcAmvArli9fHv8aTCvpg/zMvWASdrvy2DCM3iR3HQoqd2a3i6lTpzYqGcym9HQEn6mpMtUncOqdMffC//Zd3+Hjj/kGPozzQrN1CCRjWhgQIg89vfXr1zs/ijN+qcgVBuf1dQtj08BkVWCcnEaDBjdtDYGy+HIRvsbjyYetW7cOaqTaFV9/3D5EnrIoX0HpimzI709g5NNKKUC+LMh25MiRlvJBZZCvLogTf6ucZZW7dpZ/wiV8UFxJc+ZsoMRA8n0pmz5++iv+hmEYRSj8lQeOv6mYqCB9ZQL4JA0lg+v4pTKlwqRS8ivTqunv749/DSZEHsy/3/3ud51f4ohf1h945ZVXYh/1tGBjLJzSQ+Cfv6seIkEuFlRSD1XPnTRpUm3y5MnunGhXfH1C5CkL5YpPk6VIEP6JEydqkeIb+6hDg0jckrJwz3DQzvKPUkc4hIdCQPgogXz1wfPSKJs+WFukgLAJnGEYRlFG7Pbl6hEmLSWGYRiGYXSe4DkUww09Z8amZV7euXOnOxqGYRiGMXyMCAsFygPzFjDXYvIVybFpwzAMwzCGhxFhodC8BWAcmTF2lhQ2ZcIwDMMwuoMRO4fCMAzDMIzuYcTNoTAMwzAMo/swhcIwDMMwjJYxhcIwDMMwjJbJnUOhFf2SMDEybXVKwzAMwzAGoxVwkzRbEXqkUchCwcp5KBFyrW50hKJCAn/ve9+Lz/QOxCur8Bi9CctV92p5bgfsVExadeOOxd3w/ladPlbfDj9++4nrVQpZKEiALItElhUjDWljRcIdqahwt6p5soDXokWL3H4MWi6ZpZTz9lagArrjjjsa/ll2meWZ/f04oOgLyKe52pUSeVatWuV2GuU3sDzzwYMHU1cqDfVfhqLxLQMyz5kzp3bmzJlGeFn7eGSdz4Pw77nnntqNN95YOD2LytPtsPkY68nQUbn99tvjs0Nh/Rk+GWcJcPaW6QRVvb+tUHX6WH3bHlqpf7qhnLWDludQUMFRUOX8vQX88zijGFQUbISlxbyKQOOyYsUK55+0poJh4yh/06ok5FUyj1Qxcc1XJp5++mkXDr/xx3WeRYOmjatEqP8ylIlvCDT2VMJf//rX4zPVofQhLYqmTzvl6TTE1T9mQfknzihSowlLn+6n3fXPSKVlhQJtDK1XbseOHfGV2qDzOKMY9DronZC2bDpFgc2DXUBpiGDTpk0urdGepSlrd9Qk5FUyj86dO+eusXiYwFLCi8NLQ7j4W7ZsmXsW8AIhgwj1H0rZ+IYwbdo0dzx9+rQ7Vglbs5M+NBh++mCBAtInWSm1U55OQ3yJK0djKJY+3U0n6p+Rin3l0YVgwsTUiTKhQprHwoUL3RGTm7/FN9uPo5iwymgRrZkXhYYOdu3a5Y5w5ZVXuuOBAwcaFgzgWfp7+vTp7gih/kOpKr55TJkyxR15RtVcf/317ojS5qcPw1nK7/nz57ujaKc8w4Fti56PpU/30on6Z6Qy7ArF3Xff7TKFMSXGDtesWRNfuQiTibiO2759uzuHP/zrXFoGYpZS2PLH89LYsGFDwx/h8swsv8Dz/Hv4jfm6CvxGpggzZ850x0OHDrmjIByZTX2zKBYPHMNVPosXL3ZHXhRfBjViye3ZiS+Ol8jf6jrUfyih8cUMSR4lJ6Uhi8oQPQwfKVahclJmFCZHns1z0kib3JxlgSgrTwhF35cy6em/w3I8L4kmEOK03D5mff8+XBoh73u73l/Jr7RJ/g16pk8n0gdIj2b1bVmQjXRUGcDxN+fTSOYXaZAsN6JMfoWUhxBC65/RxLArFBQgzOw0cExEYhJispBT8crsT8VKocAfmUcmco4JgD5Uev4YNQ5/mKPSXtT333+/4e/s2bPuZcWvXxEICvfjjz/uxsxoHLkHk/Tq1atjH51lwoQJ7nj48GEXX3Zj1Yt59OhRd5w0aZI7AiY6XNL6wQRB2L9/vzsKekv0pkkT0oP0w23evNnFn5fWV0BC/YcSGl96DpQV5MGvWLt2rStzyIpMQhUgMobISViUmRMnTrgyAZQV5kukVX6TJ0+Of11EQxs+ZeUJIeR9CU1P0DuMy4uDPyeLsgI8S+fkkoTI3873V+VPMCkZkAWUl8k4tDt9RJH6tgyUAxQb0pT6k/CJB39zPtmQJ/NL5Yl5CUm/ZfIrtP4PIbT+GU0Mq0JBAaLiYfxY44Ywb948dxRPPPHEoPHEWbNmueEAzt1///3uHBmrcXkyl0JIgeZLBTWg3EOBXLBggfPvo2fguJ/7VMhVWMTSpUvdy0hPnAKqe/SCDyeMzy9ZssS9mKRBUfCrNPGHOwTpQ/5MnTrVvai4kydP1h588MHUTdpC/ZelSHwpB1u2bHH5g1/8UQmQt+QxsvqoETh27Jg7FoUKizFVlWfKBs/mPHKKU6dOuSMzxP1ySEWq3o9PWXmKEvq+hKYn+O/Xvn374rNDQcmVP8KCtLk+PqHyt/P91URmyj3QsBAPnufT398f/6rTzvQRRevbUKh3KQfADtCkJeFzfPnll52cNOiCvMKB6nFkwi9wn09ofnEtpDy0Qtn6tlcZVoWCguY3Lho3TL58STA1qXdNoVFh1bj87Nmz3RHTm15w4B4KJeE3M0lxH5/wwYwZM9xRqNLnEyGeL7Zt2xb/Gj7Kasa33XabO5I+fpwEvRh6GvRuXnvtNdcLpdJcv359qhkx1H9ZisaXvFev+b777nOVAJXLk08+6c75XH311e4Y2oBTDv2eOem4Z88e99tXFCgnPBtFA/+YYimr9BZJ/yRl5SlKmfclJD3bTaj87X5/SQc1WNRJqkewTmgYsF15mUfZ+rYZGiolvZOdhY0bN9Yeeughd03Mj+cHkTf+efySdsjjD5OE5lcV9X9RRqslIothVSgoPGXA1OSD9sn3vHpBNIENbVbjZ3JZWiSNXHIcE002Db2A/ssAfuEdLp599lmn6dNTSMqXhyYKJoc7ABOhGjt6EqyTQI8K6xDmTdLZrwBC/bdCSHyp7JBJ5mf+TsszNeD4bRWVVZlJgWcyPED4vAMTJ050v6l4055dpTxplHlfoGh6tptQ+dv9/spyADzr3XffdecY4tKE5ePHj7tjJylb3zaj2RdIyQ6KOn5pSpXSzp9/FZpfZctzGcrWt73KsM+haCdkML3jNOePddKbpvDJZKsxNxq/kYDMp5jGeXnR9KncQS9vXlx4ydSjShvuUBikmw/PknmW8U0R6j+UVuJbpFJVA3nXXXc5JVNOc0y4zt9F0HBF0sRN2XzggQfc1zyYaDHH0msibGSUcgxVypNH0ffFp12NVBnKyN8OlNe8V+TNBx984Ia5fEtnq6sNG81pV3lotb7tZXpSodAYNRozveM052u39KaBSl3ji7i8sUzQnA2R/LtTaLZx2vi7GqO8rwOaDXd0G2XjixWKSl69IP5O5pnfgyEslEw5KV30mPi7CHmWHx/CRmEADZNA1fKkEfq+iCLpWQVSyrIoK3+73l/1vJUnKIecoyevBqfKr3WapU+7UXwVt2aoMU+bgKz3N03hKppfZctDUVqtb3uZnlQoVCEzZEElVxR/KIWKUj3AJDI9a0KoWL58efyrs7z++uvuSK/fn9CE5YXGBiUBbT2LZo2eXlDNmhakkYaFfBNuqH8f/DD2ybwC/16fMvElXE3kYkIhvRT8PvbYY7GPOtzH8Fma4x7AesXfeSA7M81pVJAnzfID+KOMYjKlMqJxpsITVcmTR5n3pWh6toIalblz52aWBQiVv1PvL8MbUtAp7/6wVxWKe9H0aTc7d+50R8p6kS8o9u7d6468v5QjwcReylDSQheaX2Xr/6K0Wt/2Mi3v5ZFE90BWJZcXLuNcoHspcAxHAAUWqHQpdLxQaTPKgcyV5QG/6kWR4UeOHBl0H+ZiwpY//FC5U0nSKAKFhM/lKCjIRGMBuocJh2jqMuW3UsH7cQZkQSbFG5JjdrzIkpV0RR5VMszm9l9QHz8uvBxpFR09ASZT6mVXWvr5gWVHhPr38eORJ3dIfDnPp5ukI+OdmChB+c6E0axy5KNnJsutzqfF1S83PpRPFDm/IUAOPq0t2thkyVOGkPclND2p1P0vCZRXxJMvfyDtXc4qR9y/devWQXkcIn+731/VbwqbvEk7J9qdPiH1bVmIg+osXxagTCTDJ/3JB0Au4kB5Auo2DSFAmfwKKQ9lCKl/0qgq3buNrrdQsAw1BVIVNFDw+Du5cJIPBYaMlXarMFRoffjGWRU+fpgkhzLh9xQpLMgC+CVsvQjcw4vPLGT/RSqLH2cczwDFGydZBLLyIvJ8riMvcW9WuIsMd2Ae5HNP4s3YoGTgWaQTkwl9Qv370HtRBZBnNgyJL2uUkHbklxo/IN95FhWP39MIhd4n4ags4HgWjS29qqQyAZdffrmbIY4/0oTP2yizRZWJqgl5X0LTk566wsOp4uWoc2nvMuVIk1dBfkm35BoeIfK3+/0VhC0rgsok55LzaTqRPu0GBSAt/XGkaXJ4guFlyr3eX5UnwvCVCSiTXyHloQxl69tep5CFwtfwIM8yYBiGYRjGRZKTplFCYFRaKPyeFy7PMmAYhmEYxkX89hPXq+RaKAzDMAzDMIrQ0+tQGIZhGIbRGUyhMAzDMAyjZUyhMAzDMAyjZUyhMAzDMAyjZUyhMAzDMAyjZQqtQ5GEBUZaXZnPGF1QllgKl50AbR0TY7jRugCURRZIamVvB8PodbSyZ5LkOhojcmErViVjtT42xdGqcqww2Mpqh63Ac7/yla/U3njjjdpLL70UnzVAeaVldsEUUmO4SVaQyeWeRxLdXP/06hLT7SSt8c5Lv1D/ZSi6MFcle3lkWTJ8qoogDZT2EfAVneFUctjMisW/kIftqEcCpOOiRYvcMslajrYdy8ZqzX7ShspupFbavU6Z8kBDdscddzT8s/Qwvf3kUuNZvZskLD8uS4EUUb/TwLt+8ODBQUvii1D/gL977rmnsSfDSFUqitY/vIcs2c+S9p1a4t0UinD8xjur4fYJ9V8FWflayRyKM2fOOKUDpwaewq1zuKpgbwQqMJ7DZjQoOrjhtJgozjp2O1QsNO6knxqDdoCiKWWCPQdMmehOypQHNkdasWKF88/7TQPFRk3+pk9JeD/8OkH36ZqvTNBpIBx+44/rPIvGXxtFiVD/gmdrTwZAQeL+kYbqHR2zIH/p+M2ZMyc+Y3QjatPyOvE+of7bSSUKBT0SRWjHjh3uHIW7HRHVVtuvvvpqx7TsZhA/enNVxrOd0EuhkSff2KSHCrgdqOfHdsLJXqvRPYSWBzZ6Ut5u2rTJlXsaY+Wxdp1MQt2g+kDu3Llz7ho7lAosJSgDvN+Eiz92p+VZgOLgbzYV6j8Jii5xppd/5513xmdHDsR3JNU/Ru8y4r7yUA+i28YKR9IOc5g8MY3SeLSzodfWwjt37nRHozsJLQ8LFy50R4Y4/PeQbdpRTDC7ZlkpfGjkUQRg165d7gjsvgkHDhwY1GngWfp7+vTp7gih/tN4++233VEdlpHGaN7h0ugehkWhwBTOGAxmU/bR58Xnb8YC2ce+KghfYeO2b9/unpeEMSjfDyAH8uhcsoL075HjeXkk5SEMelRJysgTgl/ptgvyGHhWsxn0fnkgPfzygLk6aYYumz5F018g14YNGxrh4vhbcUtStLwBccJ/WjniXJJQ/yGEloeZM2e646FDh9xREI7M7r5Znd4/jqFRn8WLF7sjiokvg7acTm5CSBrgUFr8re1D/afx1ltvuWOVGzcVLQ+U8bR8RHaVvWQ5TSsHPC+J3i2c4sawh38fLo2Q8sz7xrshv/xG/irw64eQ9iIpP2lWRX0rv8iCH5wff56ZtIj5aYN/npmVlu1EaYmMaaxcudJdR94yDKuFgl4D5lHMnjI5Miksr5AUhZcUsyyFWhUavSGel3zxmNDJdcAPGY0cVI5UdJxjwpeP7sEVqZCT8hA2Lzjj0MmCVUaebuXkyZPxr+ZQHkgPvzzwojI+7lMmfULSH3ixqHixspw9e9bdQ9j8zfnkPSHlDYgT/pEBWXQPjvglCfXfTiZMmOCOhw8fdvElrVRRHz161B0nTZrkjoApHpe0ftx4443uuH//fncU9LYZAiGuVLykH27z5s1OOaAy9N+5UP9pVP3ZaEh5wLKj8khaCuYd8Q4Qt2QDULT+8ee3kRaQLD+4JCHy844+/vjj7t3gGfidNm1abfXq1bGPaghpLzpR386aNctZtpCD6++//767h2dKWRZc4xk46hNkIS6U107Cu0KckDFNuVJnIflOFmVYFQoSlXFOxjs1Dgjz5s1zR6Cwkuhywj+H8zVIEoq/SThmjqtCw6RLgWc9BBJUMKGT64KCgl/OMQkU8O9rnboHt2/fvvhsOsgi+RQucX755ZfduWTGlpGn29BwRwiUBybIqTyQd+SXXnIRmj6h6c99S5Yscb+Rh+vcw5F7VCGL0PJGL4E4cY17FV+55ATjUP+dhDkHpBUVtdK4CPhVmvjDHYI4UR9MnTrVNQw4lNMHH3wwdXJvqP92Eloe8LdlyxZ3jbTkXhQL3gfKWlr+ck7h5tU/KHHyR1iQNpfFJ1T+pUuXukYVSxGNJH4JA79VUqS9AGTHQZH3XWkpita3r732WiNvKGv85qsiQKHy8fOL55Ou5AdxSsrTbpjTBrfccos7CuKoejvtnSzCsCoUJKiveWsckMIpmDBGossJ/xwOf2L27NnuiGnJ73nwclHoCT9vpjOmXPWmeKnUeDQbh81i/vz57siz/V7axo0b3UuHPDQaWVQtT7dC3PzKn7wjD4GXPItm6ROa/upd4DfZGHHPQw89NCicVsobn135lXMzQv23G98SEcJtt93mjqQPeZaEXieWIHqjVNz00lEW1q9fn2pRCvXfTsqUB66pLrzvvvucYkHZfPLJJ925ThIqv3q1fDLs5+W2bdviX9VQpL2AbqhvZcXLgnSV8jFjxgx37BQvvviiSweUB19JYnIzZL2TRRhWhYJINYNCQyUqJ/xzOBUuYDVGQFvWuJWcNNc8MOX6oFUmnxGCCuKxY8fc0Ue9huT4r0/V8nQCCmUoacMjinveC9osfULTX72L06dPu2OS5MsWWt6QiwqLio2ePZUk47SYadMqulD/neTZZ591PT8sOX7l3QxNfkwzrWJSx+RMGaJnyaed9PDoLWIuJp39eIf6bzdl6x+UV+KANUp/+w16pwiVXw16Mv+rlr1IewHdWN+i1GJJ99MSS89wQP2l+lkTrOHaa691x7LDHTCsCkW7oYDTW0lzGus12gu9xNFCSHnDpIrjGj0gGhEqa3rZKApJQv23k/7+fndkESkqJ3p+NH6gypyGPAvklpUlzbSqMIirD8+Sed8fUgv1n0Y7hg/L1D9FG81OYPVnNWA9QznDko5Cw/uLy3tH2s0rr7zijr5S0+pwB/SkQnHq1Cl3pIdJbyXNdVLz18uXHFcD9UY6PbGu3UibTxt7zCJN+aDRAjViZQhNf/Vs1FA1o2x5o8LmmnpAGhOmwU3rCYb6bxf6ukOmbh+lZ95XFc2GO4aDm2++2R1l3m6FsuWBXiz5qF40f7dD0dE7lUVZ+ZOytkP2InRbfYv1DOgQ+POfms298wkd5mzmn7qEcoY/rHfM48DS1Oo72ZMKhSadoH11evw0jb1797ojGqBf8TPxikykV9KKOa1bkVktOeM5Cwq3n19USNKg1YiVITT9tW4GPYrkjPY0qipvyc8qmxHqvypef/11dyQ9/Qll9MRITyokKqws8oY7QA2aZukL8k7l4fjx4+4Iof7T0MQ+1rJolTLlAVlJS8oiEzSxApCWjz32WOyjddSIzp07N7fBCZVf77kmMIrly5fHvzpLt9a3/lAKcukrpzzUuBddcC3EP/OMgHzWvJlWhjugkr08SBxMOkCGoQWSadK0wb8/L1zGloAeWBrNrgsqN2mGvizId+TIkcbsXF92GhDAL/fwAsqfDy+ZP7OYnjUvKJmpeQDJezFLq3ATb6UT+HsIlJEnFP8ZgBzIo+dA6Jh4GlSQjPkTJrPts6xCfnlAlhMnTrh7FH/SlcqKY9n0KZr+gjzWcwhb5Qd4brL8FS1voPj66e3Lw3l6MiLUfyhlygOKFg04kJ56BwDLSVaFzbM0REP5UAXogyLJZEpk8NPSz28/vqH+kyivuZdjmkyhhJQH0o3Pgkl35qMwhASMuRMHKn7ff5n6B7LSifu3bt06KM9C5PfzVH4JE0ufzOjN6us8yrQX7axv9UyVc/6WbHovfFmVj0obyYLSqHeIvOPz4WSd679nkot7kd+foCpC/TPxFnl4PhOsi5b/rHSvxELhf4mhTENIncN1GgoCGS7tOSmf8GUX+OHvrIk7rMyne3CqSDnqXPJejX+TyVznGRQ6ZPQbszLyhJL8coa8Aj0H5381UxYKMOlP+OvWrXMVQzNIi4kTJzoZeBl4waRMQNn0KZr+gnNp5QdHGElzbtHyBshJfPz0ljzIyFckPqH+QylTHjB7UzErPSn7xJ00yOv9FRnuQPFEASXv9c0+jmelxTfUvw+9VjUoVK5FKtMihJQH1jBQfkqZANZ24B2gYfctQWXqHyCdWNsiKRMNyeTJk905ESI/6Y5f5Fe9j2LDVx/kwXDQTfUt+ShFgXCp35CNd0iQd2l1Ln5QKKUYcD8drssuuyz2MZhQ/1ohVu9vq+V/RG5fbowcKKhUYnphKUsUYr/85PVADKMdqNcoklYAwxgNUD/LOpbXGeB98dG7U8pCkbQ2VKW5Gb0PGi9KAr1ZNGB6kFZ+jOGGeoxOknrXpkwYow06clImUKjzLIt++4/LItdCYRidwCwUhmEY7Yc5IyychhIhqHcZlqliuK+n16EwDMMwDKMO8zRQJlAisM6xlDmduKrmDpmFwjAMwzCMljELRSAffPBB/MswDMMwDGEKhWEYhmEYLWMKhWEYhmEYLVN4DgUz8Vmik53oRsI6FPpuFllZYCVrlcZQGPJILgJjGIZhGKOdpgoFC1+wkpuWMYV2ft6XtqRn2nKmzVA4Im155TKYQmEYhmEYQ2k65CFlghUOaZRp6EfCWgHIyXK1LHEKLK/LGviGYRiGYVRPrkLBMIeUCZZPrqKH30n4tlZ7DgAKBhYXwzAMwzCqJVeh0K5lbGerzU1GIihCDJewhHjRbWANwzAMwyhOrkKhrWd37tzpjiMZ7ap2/fXXu6NhGIZhGNWRqVAw3AEMGxT5QoKhkQ0bNrjJkDi+suAcx+QESUj653eR4QjmQbDNMPdwZN/7Ive99dZb7pi3sYlhGIZhGOVoOimTfe2bgXLA5iJYNJhvwfDC1KlT3SYkaQ14mv9p06bVVq9eHftIhyELJleyvzv3AGGxY1ozpaKqz0YNwzAMwxhKpkKh4Y4iLF261DX2bE9Ng89XIEyA/PWvfx37GEyWf5SLPNjUhM1Mli1b5u7hXiwonLe5EYZhGIYxfDS1UBRh5syZ7sgCUv6uZdu2bYt/DSbUv8Aq8dJLL8V/1YdjmDAKCtMwDMMwjM6TqVBgPSgK1gZIfgmSNcwQ6j+Pw4cPu+OECRPc0TAMwzCMztPUQsFciG7mmmuuccf+/n53zOK6666LfxmGYRiGUTWZCsWPfvQjd2SyY9HGOOmv2X2h/tPQZ6D79+93xyxuvvlmd9RkTsMwDMMwqiPXQqFhj8WLF7tjFvJ3//33u6NYvnx5/Gswof7TQNHhk1G+ImEuxa5du+Ir6cybN88dDxw44I6GYRiGYVRHrkLxl3/5l+7ILqN51gMmVwJfhrA2BGtPMHlScyWShPoXfM2BX/nnk1GUiWeeeWbQ5M4krF2B4sFXJC+++GJ81jAMwzCMqshVKGi0sSbQ0K9bt66x2FUSJld++9vfdsMJ+KXxZv0KKQ5J8vz/6le/in1d5Pjx404ZkF8c97788svOypG3LPjKlSvd56WA8pKneBiGYRiGUY5C25ezMRiNONCws4z1E0884f7Og7UlVqxY4e65/fbb47OdASuGZIY333yzkMzNsO3LDcMwDGMoTb/yoEfPIlLs2Im14uzZs7WrrroqvpoOwyMMM2i7cM2Z6CQoE1g7ZA2pQpkwDMMwDCOdphaKIjAU8sgjj8R/DYZG/aGHHuqZoQazUBiGYRjGUJpaKMqA8qA5Dr2kTBiGYRiGkU4lForRhFkoDMMwDGMoplAYhmEYhtEybRnyMAzDMAxjdGEKhWEYhmEYLVKr/f/9QxY1hQhO3QAAAABJRU5ErkJggg=="></div><br>Fichier Makefile:<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
# Makefile
#================================================
GSRC = .
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\readyapp.exe
#================================================
GOBJS =\
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
#================================================
GCFLAGS =\
    --std=gnu11 \
#================================================
all: compile run
#================================================
compile: $(GOBJS)
	gcc $(GCFLAGS) -o $(GTARGET) $(GOBJS)
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc $(GCFLAGS) -c $&lt; -o $@
run:
	$(GTARGET)
run_g:
	gdb -ex run --args $(GTARGET) $(argv)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================</pre><br>Utilisation du débogueur GDB:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
mingw32-make run_g
::===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="identification-logicielle">Identification logicielle</a>
</h1>
<div class="Section6"><br>L'utilitaire (ident) permet d'identifier un&nbsp; programme C.<br><br>Programme principal.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
/*
$Id: main.c $
$Header: GInclude.h $
$Date: 2023/07/07 $
$DateTime: 2023/07/07 10:30:15 $
$Change: 1745 $
$File: main.c $
$Revision: v1.0 $
$Author: Gérard KESSE $
*/
//===============================================
#include "GInclude.h"
//===============================================
int main(int _argc, char** _argv) {
    printf("Bonjour tout le monde.\n");
    return 0;
}
//===============================================</pre><br>Afficher les informations d'identification.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">ident main.c</pre><br>Résultat.<br><br><pre class="GCode1 Code1 AceCode" data-mode="sh" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">main.c:
     $Id: main.c $
     $Header: GInclude.h $
     $Date: 2023/07/07 $
     $DateTime: 2023/07/07 10:30:15 $
     $Change: 1745 $
     $File: main.c $
     $Revision: v1.0 $
     $Author: Gérard KESSE $</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="fonctions">Fonctions</a>
</h1>
<div class="Section6"><br>Une fonction en C peut ne pas retourner un résultat.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GFunctions_delete() {
    free(gFunctions_Buffer);
}
//===============================================</pre><br>Une fonction en C peut retourner un résultat.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
const char* sformat(const char* _format, ...) {
    va_list lArgs;
    va_start(lArgs, _format);
    int lSize = vsnprintf(0, 0, _format, lArgs);
    char* lBuffer = (char*)malloc(sizeof(char)*(lSize + 1));
    vsnprintf(lBuffer, lSize + 1, _format, lArgs);
    va_end(lArgs);
    free(gFunctions_Buffer);
    gFunctions_Buffer = lBuffer;
    return lBuffer;
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="fonctions-a-nombre-variable-d-arguments">Fonctions à nombre variable d'arguments</a>
</h1>
<div class="Section6"><br>L'opérateur (...) permet à une fonction de recevoir un nombre variable d'arguments.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
const char* sformat(const char* _format, ...) {
    va_list lArgs;
    va_start(lArgs, _format);
    int lSize = vsnprintf(0, 0, _format, lArgs);
    char* lBuffer = (char*)malloc(sizeof(char)*(lSize + 1));
    vsnprintf(lBuffer, lSize + 1, _format, lArgs);
    va_end(lArgs);
    free(gFunctions_Buffer);
    gFunctions_Buffer = lBuffer;
    return lBuffer;
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">_fomat ---&gt; argument de référence</pre><br>La macro (va_start) permet d'alimenter un structure (va_list) correspondant à la liste des arguments à partir d'un argument de référence selon votre choix (_format).<br><br>La macro (va_end) permet de libérer les mémoires allouées dynamiquement lors du parcours de la liste d'arguments.<br><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="conditions">Conditions</a>
</h1>
<div class="Section6"><br>L'opérateur (if) permet de réaliser une condition (Si).<br>L'opérateur (lelse if) permet de réaliser une condition (Sinon Si).<br>L'opérateur (else) permet de réaliser une condition (Sinon).<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_run(GProcess* _this, int _argc, char** _argv) {
    assert(_this);
    GLog* lLog = _this-&gt;m_obj-&gt;m_logs;
    const char* lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];

    if(!strcmp(lModule, "")) {
        lLog-&gt;addError(lLog, "Le module est obligatoire.");
    }
    else if(!strcmp(lModule, "test")) {
        _this-&gt;runTest(_this, _argc, _argv);
    }
    else if(!strcmp(lModule, "server")) {
        _this-&gt;runServer(_this, _argc, _argv);
    }
    else {
        lLog-&gt;addError(lLog, "Le module est inconnu.");
    }

    lLog-&gt;showLogsX(lLog);
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-for">Boucle For</a>
</h1>
<div class="Section6"><br>L'opérateur (for) permet de réaliser une boucle (Pour Tout).&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GLog_showLogs(GLog* _this) {
    assert(_this);
    GVector* lMap = _this-&gt;m_map;
    for(int i = 0; i &lt; lMap-&gt;size(lMap); i++) {
        GLog* lObj = lMap-&gt;get(lMap, i);
        if(strcmp(lObj-&gt;m_type, "log")) continue;
        printf("[%-5s] : %s\n", lObj-&gt;m_type, lObj-&gt;m_msg);
    }
}
//===============================================</pre><br>De manière générale, l'opérateur (break) permet de casser une boucle.<br>Alors que l'opérateur (continue) permet de continuer la boucle.<br><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-while">Boucle While</a>
</h1>
<div class="Section6"><br>L'opérateur (while) permet de réaliser une boucle (Tant Que).&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSocket_send(GSocket* _this, const char* _data) {
    assert(_this);
    SOCKET lSocket = _this-&gt;m_socket;
    int lIndex = 0;
    const char* lBuffer = _data;
    int lSize = strlen(_data);
    while(1) {
        int lBytes = send(lSocket, &amp;lBuffer[lIndex], lSize - lIndex, 0);
        if(lBytes == SOCKET_ERROR) break;
        lIndex += lBytes;
        if(lIndex &gt;= lSize) break;
    }
}
//===============================================</pre><br>De manière générale, l'opérateur (break) permet de casser une boucle.<br>Alors que l'opérateur (continue) permet de continuer la boucle.<br><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="arguments-en-ligne-de-commande">Arguments en ligne de commande</a>
</h1>
<div class="Section6"><br>La variable (_argc) contient le nombre d'arguments passés en ligne de commande.<br>La variable (_argv) contient la liste d'arguments passés en ligne de commande.<br><br>L'opération (_argv[i]) récupère la valeur d'un argument à la position (i).<br>L'argument à la position (0) correspond au nom du fichier exécutable.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GProcess_run(GProcess* _this, int _argc, char** _argv) {
    assert(_this);
    GLog* lLog = _this-&gt;m_obj-&gt;m_logs;
    const char* lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];

    if(!strcmp(lModule, "")) {
        lLog-&gt;addError(lLog, "Le module est obligatoire.");
    }
    else if(!strcmp(lModule, "test")) {
        _this-&gt;runTest(_this, _argc, _argv);
    }
    else if(!strcmp(lModule, "server")) {
        _this-&gt;runServer(_this, _argc, _argv);
    }
    else {
        lLog-&gt;addError(lLog, "Le module est inconnu.");
    }

    lLog-&gt;showLogsX(lLog);
}
//===============================================</pre><br>Passer des arguments en ligne de commande.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">rdv_c.exe test string</pre><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">_argv[0] -&gt; rdv_cpp.exe
_argv[1] -&gt; test
_argv[2] -&gt; string</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="allocation-dynamique-de-memoire">Allocation dynamique de mémoire</a>
</h1>
<div class="Section6"><br>La fonction (malloc) permet de réserver dynamiquement de la mémoire sur le tas.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
const char* sformat(const char* _format, ...) {
    va_list lArgs;
    va_start(lArgs, _format);
    int lSize = vsnprintf(0, 0, _format, lArgs);
    char* lBuffer = (char*)malloc(sizeof(char)*(lSize + 1));
    vsnprintf(lBuffer, lSize + 1, _format, lArgs);
    va_end(lArgs);
    free(gFunctions_Buffer);
    gFunctions_Buffer = lBuffer;
    return lBuffer;
}
//===============================================</pre><br>La fonction (free) permet de libérer une mémoire réservée dynamiquement sur le tas.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GFunctions_delete() {
    free(gFunctions_Buffer);
}
//===============================================</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="multithreading">Multithreading</a>
</h1>
<div class="Section6"><br>La fonction (CreateThread) permet de créer un Thread et de le lancer sous (Windows).&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GSocket_runServer(GSocket* _this, int _argc, char** _argv) {
    assert(_this);
    while(1) {
        GSocket* lClient = GSocket_new();
        lClient-&gt;m_socket = accept(lServer, (struct sockaddr*)&amp;lAddressC, &amp;lAddressCL);

        DWORD lThreadId;
        HANDLE lThreadH = CreateThread(
                NULL,
                0,
                GSocket_onThread,
                lClient,
                0,
                &amp;lThreadId
        );

        if(!lThreadH) {
            printf("La création du thread a échoué\n");
        }
    }
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">lThreadH ----------&gt; gestionnaire du Thread
lThreadId ---------&gt; identifiant du Thread
GSocket_onThread --&gt; fonction de rappel du Thread
lClient -----------&gt; paramètre de la fonction de rappel du Thread</pre><br>Fonction de rappel du Thread sous (Windows):<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static DWORD WINAPI GSocket_onThread(LPVOID _params) {
    GSocket* lClient = (GSocket*)_params;
    GServer* lServer = GServer_new();
    GString* lRequest = GString_new();

    lClient-&gt;read(lClient, lRequest);
    lServer-&gt;run(lServer, lRequest-&gt;m_data);
    lServer-&gt;send(lServer, lClient);

    closesocket(lClient-&gt;m_socket);
    lRequest-&gt;delete(lRequest);
    lServer-&gt;delete(lServer);
    lClient-&gt;delete(lClient);
    return 0;
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="definition-d-un-type">Définition d'un type</a>
</h1>
<div class="Section6"><br>L'opérateur (typedef) permet de définir un type.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GCalculator GCalculator;
//===============================================
struct _GCalculator {
    GManager* m_mgr;
    GObject* m_obj;
    GString* m_expression;
    GString* m_result;
};
//===============================================
</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="structure">Structure</a>
</h1>
<div class="Section6"><br>L'opérateur (struct) permet de définir une structure.<br><br>Une structure peut contenir des attributs.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GCalculator GCalculator;
//===============================================
struct _GCalculator {
    GManager* m_mgr;
    GObject* m_obj;
    GString* m_expression;
    GString* m_result;
};
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notion-de-classe">Notion de classe</a>
</h1>
<div class="Section6"><br>L'opérateur (struct) permet d'introduire la notion de classe en C.<br><br>Une classe peut contenir des attributs et des pointeurs de fonction.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GCalculator GCalculator;
//===============================================
struct _GCalculator {
    GManager* m_mgr;
    GObject* m_obj;
    GString* m_expression;
    GString* m_result;

    void (*delete)(GCalculator* _this);
    void (*run)(GCalculator* _this, const char* _data);
    void (*onRunCalculator)(GCalculator* _this, const char* _data);
};
//===============================================
GCalculator* GCalculator_new();
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les méthodes sont représentées par les pointeurs de fonction.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'objet (this) est représenté par le premier argument de chaque méthode.&nbsp;</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">méthodes -------&gt; pointeurs de fonction.
objet (this) ---&gt; premier argument de chaque méthode.<br></pre><br>Une classe peut posséder un constructeur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GCalculator* GCalculator_new() {
    GCalculator* lObj = (GCalculator*)malloc(sizeof(GCalculator));
    lObj-&gt;m_mgr = GManager_new();
    lObj-&gt;m_obj = GObject_new();
    lObj-&gt;m_expression = GString_new();
    lObj-&gt;m_result = GString_new();

    lObj-&gt;delete = GCalculator_delete;
    lObj-&gt;run = GCalculator_run;
    lObj-&gt;onRunCalculator = GCalculator_onRunCalculator;

    lObj-&gt;m_obj-&gt;clone = GCalculator_clone;
    lObj-&gt;m_obj-&gt;serialize = GCalculator_serialize;
    lObj-&gt;m_obj-&gt;deserialize = GCalculator_deserialize;
    lObj-&gt;m_obj-&gt;m_child = lObj;
    return lObj;
}
//===============================================</pre><br>Une classe peut posséder un destructeur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GCalculator_delete(GCalculator* _this) {
    assert(_this);
    _this-&gt;m_mgr-&gt;delete(_this-&gt;m_mgr);
    _this-&gt;m_obj-&gt;delete(_this-&gt;m_obj);
    _this-&gt;m_expression-&gt;delete(_this-&gt;m_expression);
    _this-&gt;m_result-&gt;delete(_this-&gt;m_result);
    free(_this);
}
//===============================================</pre><br>Une classe peut posséder des méthodes.<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
static void GCalculator_onRunCalculator(GCalculator* _this, const char* _data) {
    assert(_this);
    GLog* lLog = _this-&gt;m_obj-&gt;m_logs;

    if(!strcmp(_this-&gt;m_expression-&gt;m_data, "")) {
        lLog-&gt;addError(lLog, "L'expression est vide.");
        return;
    }

    double lResult = te_interp(_this-&gt;m_expression-&gt;m_data, 0);
    _this-&gt;m_result-&gt;format(_this-&gt;m_result, "%.2f", lResult);
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notion-d-heritage-de-classe">Notion d'héritage de classe</a>
</h1>
<div class="Section6"><br>L'opérateur (void*) permet d'introduire la notion d'héritage de classe en C.<br><br>Classe mère:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GObject GObject;
//===============================================
struct _GObject {
    GLog* m_logs;
    GCode* m_resp;
    GVector* m_map;
    void* m_child;

    void (*delete)(GObject* _this);
    void (*clear)(GObject* _this);
    GObject* (*clone)(GObject* _this);
    GString* (*serialize)(GObject* _this);
    void (*deserialize)(GObject* _this, const char* _data);
    void (*print)(GObject* _this);
};
//===============================================
GObject* GObject_new();
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'opérateur (void*) peut pointer tout type d'objet en C.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La classe mère utilisera l'opérateur (void*) pour les classes fille.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Chaque classe fille connaît par avance le type de sa classe mère (pointeur explicite).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">opérateur (void*) ---&gt; pointeur de tout type d'objet
void* m_child -------&gt; pointeur de la classe fille</pre><br>classe fille:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GCalculator GCalculator;
//===============================================
struct _GCalculator {
    GManager* m_mgr;
    GObject* m_obj;
    GString* m_expression;
    GString* m_result;

    void (*delete)(GCalculator* _this);
    void (*run)(GCalculator* _this, const char* _data);
    void (*onRunCalculator)(GCalculator* _this, const char* _data);
};
//===============================================
GCalculator* GCalculator_new();
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="notion-de-polymorphisme">Notion de polymorphisme</a>
</h1>
<div class="Section6"><br>Les pointeurs de fonction permettent d'introduire la notion de polymorphisme en C.<br><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La classe mère doit pointer les fonctions polymorphes de la classe fille.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les fonctions polymorphes de la classe mère doivent posséder les mêmes signatures que celles de la classe fille.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Chaque classe fille implémentera sa propre stratégie (définition).</div>
</div><br>Classe mère:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GObject GObject;
//===============================================
struct _GObject {
    GLog* m_logs;
    GCode* m_resp;
    GVector* m_map;
    void* m_child;

    void (*delete)(GObject* _this);
    void (*clear)(GObject* _this);
    GObject* (*clone)(GObject* _this);
    GString* (*serialize)(GObject* _this);
    void (*deserialize)(GObject* _this, const char* _data);
    void (*print)(GObject* _this);
};
//===============================================
GObject* GObject_new();
//===============================================</pre><br>Classe fille:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
typedef struct _GCalculator GCalculator;
//===============================================
struct _GCalculator {
    GManager* m_mgr;
    GObject* m_obj;
    GString* m_expression;
    GString* m_result;

    void (*delete)(GCalculator* _this);
    void (*run)(GCalculator* _this, const char* _data);
    void (*onRunCalculator)(GCalculator* _this, const char* _data);
};
//===============================================
GCalculator* GCalculator_new();
//===============================================</pre><br>Constructeur de la classe mère:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GObject* GObject_new() {
    GObject* lObj = (GObject*)malloc(sizeof(GObject));
    lObj-&gt;m_logs = GLog_new();
    lObj-&gt;m_resp = GCode_new();
    lObj-&gt;m_resp-&gt;m_dom-&gt;createDoc(lObj-&gt;m_resp-&gt;m_dom);
    lObj-&gt;m_resp-&gt;createDatas(lObj-&gt;m_resp);
    lObj-&gt;m_map = GVector_new();
    lObj-&gt;m_child = 0;

    lObj-&gt;delete = GObject_delete;
    lObj-&gt;clear = GObject_clear;
    lObj-&gt;clone = GObject_clone;
    lObj-&gt;serialize = GObject_serialize;
    lObj-&gt;deserialize = GObject_deserialize;
    lObj-&gt;print = GObject_print;
    return lObj;
}
//===============================================</pre><br>Constructeur de la classe fille:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
GCalculator* GCalculator_new() {
    GCalculator* lObj = (GCalculator*)malloc(sizeof(GCalculator));
    lObj-&gt;m_mgr = GManager_new();
    lObj-&gt;m_obj = GObject_new();
    lObj-&gt;m_expression = GString_new();
    lObj-&gt;m_result = GString_new();

    lObj-&gt;delete = GCalculator_delete;
    lObj-&gt;run = GCalculator_run;
    lObj-&gt;onRunCalculator = GCalculator_onRunCalculator;

    lObj-&gt;m_obj-&gt;clone = GCalculator_clone;
    lObj-&gt;m_obj-&gt;serialize = GCalculator_serialize;
    lObj-&gt;m_obj-&gt;deserialize = GCalculator_deserialize;
    lObj-&gt;m_obj-&gt;m_child = lObj;
    return lObj;
}
//===============================================</pre><br>Signatures des fonctions polymorphes de la classe mère:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">static GObject* GObject_clone(GObject* _this);
static GString* GObject_serialize(GObject* _this);
static void GObject_deserialize(GObject* _this, const char* _data);</pre><br>Signatures des fonctions polymorphes de la classe fille:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">static GObject* GCalculator_clone(GObject* _this);
static GString* GCalculator_serialize(GObject* _this);
static void GCalculator_deserialize(GObject* _this, const char* _data);</pre><br></div>
</div>
</div>
</div><br>
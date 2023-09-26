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
<a class="Summary3" href="#recommandations-techniques">Recommandations techniques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programmation-par-procedure">Programmation par procédure</a>
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
<a class="Summary3" href="#programmation-par-selection-de-projet">Programmation par sélection de projet</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#creation-d-une-liste-de-donnees">Création d'une liste de données</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#creation-d-un-gestionnaire-de-logs">Création d'un gestionnaire de logs</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#creation-d-un-objet-parent">Création d'un objet parent</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#creation-d-un-gestionnaire-de-chaines-de-caracteres">Création d'un gestionnaire de chaînes de caractères</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#creation-d-une-interface-web">Création d'une interface web</a>
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
<a class="Summary3" href="#utilisation-des-standards-c">Utilisation des standards C</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#utilisation-du-debogueur-gdb-">Utilisation du débogueur GDB </a>
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
<a class="Section5" href="#" id="recommandations-techniques">Recommandations techniques</a>
</h1>
<div class="Section6"><br>Pour tester les extraits de code dans ce tutoriel, vous aurez besoin des éléments suivants:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un compilateur C WinLibs sous Windows</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Activer les standards c11</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien vers WinLibs:&nbsp;<a class="GLink3 Link4" href="https://winlibs.com/#download-release" target="_blank" style="color: lime;">https://winlibs.com/#download-release</a></div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Installer GCC (GNU Compiler Collection) sous Linux.</div>
</div><br></div>
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
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programmation-par-procedure">Programmation par procédure</a>
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
<a class="Title2" id="affichage-d-un-message_affichage-d-un-message" href="#programmation-par-procedure">Affichage d'un message</a>
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
<a class="Title2" id="affichage-d-un-message_creation-d-une-fonction" href="#programmation-par-procedure">Création d'une fonction</a>
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
</div></div><br><div class="GSection1 Section1">
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
<a class="Summary6" href="#programmation-par-objet_utilisation-d-une-macro-locale">Utilisation d'une macro locale</a>
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
<a class="Summary6" href="#programmation-par-objet_creation-d-un-objet-dynamique-via-une-macro-locale">Création d'un objet dynamique via une macro locale</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-objet_creation-d-un-objet-dynamique-via-une-macro-globale">Création d'un objet dynamique via une macro globale</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="affichage-d-un-message_affichage-d-un-message" href="#programmation-par-objet">Affichage d'un message</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Affichage d'un message:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GHello_sayHello();
    return 0;
}
//===============================================
// GHello.h
//===============================================
void GHello_sayHello();
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
int main(int _argc, char** _argv) {
    GHello lHello;
    GHello_init(&amp;lHello);
    lHello.sayHello();
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
void GHello_init(GHello* _this);
//===============================================
// GHello.c
//===============================================
#include "GHello.h"
//===============================================
static void GHello_sayHello();
//===============================================
void GHello_init(GHello* _this) {
    _this-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_utilisation-d-une-macro-locale" href="#programmation-par-objet">Utilisation d'une macro locale</a>
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
#define GHELLO_OBJ(_this) \
    GHello _this; \
    GHello_init(&amp;_this);
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _this);
//===============================================
static void GHello_sayHello();
//===============================================
// GHello.c
//===============================================
void GHello_init(GHello* _this) {
    _this-&gt;sayHello = GHello_sayHello;
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
#define GDEFINE_OBJ(_type, _this) \
    _type _this; \
    _type##_init(&amp;_this);
//===============================================
// GHello.h
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _this);
//===============================================
static void GHello_sayHello();
//===============================================
// GHello.c
//===============================================
void GHello_init(GHello* _this) {
    _this-&gt;sayHello = GHello_sayHello;
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
void GHello_init(GHello* _this);
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
void GHello_init(GHello* _this) {
    _this-&gt;sayHello = GHello_sayHello;
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
    void (*delete)(GHello** _this);
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _this);
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
static void GHello_delete(GHello** _this) {
    free(*_this);
    (*_this) = 0;
}
//===============================================
void GHello_init(GHello* _this) {
    _this-&gt;delete = GHello_delete;
    _this-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_creation-d-un-objet-dynamique-via-une-macro-locale" href="#programmation-par-objet">Création d'un objet dynamique via une macro locale</a>
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
#define GHELLO_OBJ(_this) \
    GHello* _this = GHello_new();
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*delete)(GHello** _this);
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _this);
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
static void GHello_delete(GHello** _this) {
    free(*_this);
    (*_this) = 0;
}
//===============================================
void GHello_init(GHello* _this) {
    _this-&gt;delete = GHello_delete;
    _this-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-objet_creation-d-un-objet-dynamique-via-une-macro-globale" href="#programmation-par-objet">Création d'un objet dynamique via une macro globale</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Création d'un objet dynamique via une macro globale:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GDEFINE_OBJ_PTR(GHello, lHello)
    lHello-&gt;sayHello();
    lHello-&gt;delete(&amp;lHello);
    return 0;
}
//===============================================
// GInclude.h
//===============================================
#define GDEFINE_OBJ(_type, _this) \
    _type _this; \
    _type##_init(&amp;_this);
//===============================================
#define GDEFINE_OBJ_PTR(_type, _this) \
    _type* _this = _type##_new();
//===============================================
// GHello.h
//===============================================
typedef struct _GHello GHello;
//===============================================
struct _GHello {
    void (*delete)(GHello** _this);
    void (*sayHello)();
};
//===============================================
void GHello_init(GHello* _this);
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
static void GHello_delete(GHello** _this) {
    free(*_this);
    (*_this) = 0;
}
//===============================================
void GHello_init(GHello* _this) {
    _this-&gt;delete = GHello_delete;
    _this-&gt;sayHello = GHello_sayHello;
}
//===============================================
static void GHello_sayHello() {
    printf("Bonjour tout le monde.\n");
}
//===============================================</pre><br></div>
</div></div></div><br><div class="GSection1 Section1"><div class="Section2"><div class="Section3"><h1 class="Section4"><a class="Section5" href="#" id="programmation-par-selection-de-projet">Programmation par sélection de projet</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-selection-de-projet_affichage-d-un-message">Affichage d'un message</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-selection-de-projet_creation-d-un-module-de-selection-de-processus">Création d'un module de sélection de processus</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-selection-de-projet_utilisation-des-arguments-passes-en-ligne-de-commande">Utilisation des arguments passés en ligne de commande</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-selection-de-projet_integration-d-un-module-de-test">Intégration d'un module de test</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#programmation-par-selection-de-projet_prise-en-compte-des-accents-dans-un-terminal-sous-windows">Prise en compte des accents dans un terminal sous Windows</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-selection-de-projet_affichage-d-un-message" href="#programmation-par-selection-de-projet">Affichage d'un message</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Affichage d'un message:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GDEFINE_OBJ_PTR(GHello, lHello)
    lHello-&gt;sayHello();
    lHello-&gt;delete(&amp;lHello);
    return 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-selection-de-projet_creation-d-un-module-de-selection-de-processus" href="#programmation-par-selection-de-projet">Création d'un module de sélection de processus</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Création d'un module de sélection de processus:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GDEFINE_OBJ(GProcess, lProcess)
    lProcess.run(_argc, _argv);
    return 0;
}
//===============================================
// GProcess.c
//===============================================
GProcess* GProcess_new() {
    GProcess* lObj = (GProcess*)malloc(sizeof(GProcess));
    GProcess_init(lObj);
    return lObj;
}
//===============================================
static void GProcess_delete(GProcess** _this) {
    free(*_this);
    (*_this) = 0;
}
//===============================================
void GProcess_init(GProcess* _this) {
    _this-&gt;delete = GProcess_delete;
    _this-&gt;run = GProcess_run;
}
//===============================================
static void GProcess_run(int _argc, char** _argv) {
    GDEFINE_OBJ(GHello, lHello)
    lHello.sayHello();
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-selection-de-projet_utilisation-des-arguments-passes-en-ligne-de-commande" href="#programmation-par-selection-de-projet">Utilisation des arguments passés en ligne de commande</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Passage des arguments en ligne de commande:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
readyapp.exe hello
::===============================================</pre><br>Utilisation des arguments passés en ligne de commande:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GDEFINE_OBJ(GProcess, lProcess)
    lProcess.run(_argc, _argv);
    return 0;
}
//===============================================
// GProcess.c
//===============================================
GProcess* GProcess_new() {
    GProcess* lObj = (GProcess*)malloc(sizeof(GProcess));
    GProcess_init(lObj);
    return lObj;
}
//===============================================
static void GProcess_delete(GProcess** _this) {
    free(*_this);
    (*_this) = 0;
}
//===============================================
void GProcess_init(GProcess* _this) {
    _this-&gt;delete = GProcess_delete;
    _this-&gt;run = GProcess_run;
}
//===============================================
static void GProcess_run(int _argc, char** _argv) {
    char* lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];
    if(!strcmp(lModule, "hello")) {
        GProcess_runHello(_argc, _argv);
    }
}
//===============================================
static void GProcess_runHello(int _argc, char** _argv) {
    GDEFINE_OBJ(GHello, lHello)
    lHello.sayHello();
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-selection-de-projet_integration-d-un-module-de-test" href="#programmation-par-selection-de-projet">Intégration d'un module de test</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAdCAIAAAARlI/iAAAFlklEQVR4Ae1aMbLjKhDcA3AJncFn4Aa6gA+g3LlChYqVEZMqJ+ZQv3a7tms8QghbfMv1FgfvIYzomZ5pQCP/Mu3TGGgM1GDgV41J2hyNgcaAaVpqSdAYqMNA01IdHtssjYGmpZYDjYE6DDQt1eGxzdIY+BYtDcPgnOv7voWkLgPx+VN38m+bDb5eZdWTlsZxfGY+Oufu9/sHjAOuc+4DWCchrLV933ddd3KektvPY7m/n2vzrMTZ82Ou9TGhpXVdwf+6rjBuGIbzfuZn8N7HGOd5zg/7hm+dczHGz2yhFbGuzbPPBO5aHxNaGseRnj8ejxjjuq7s+Z8aXdd9JjvP218xvw+NqYh1bZ4delplwLU+HmjJGHOtfVUorjtJxfw+NKwi1r8Qx2t9fFNL4zjyBLh9pur7PsY4juMwDBgWQpimSaVO8vFMjTHG5LEwidxLgS4fvZCRMUbvvTFmmqYQAi6ttVvEZA+mRbS2f9UtJ21+CUtB710e5pm02Xv/xsEeEMMwhD8fa+2yLDjX3G43aZjEejt/OH+McVmWruuSPkqs9/ySlmfaB1rCGU89xszzDKOdc3jOiTFK6pnNyFemspITanfy2UwKAEYfYpVoaZom2jAMQ4y/ayoQefnx1VoLU6nDv0/1v/9Lis/bXI4lcfPtZJ7xFmkzuZIrFEdmGoBYlmWaJkhomiZkiJxKYr2dP9ZaBCKEgGhCtzFGaaHEetsvOWGmndASaw/ee+wnsmZlrQVlXNGhtxACYbissgaIHjmGg9GAJFRSlmCVaAkQjDQs5zKmlkxl2PYSIdl7uqtrcx5ra1umJ6Ol+/2udg9kaghBhj4zOb4CBJjBgoVjBfYNjCnhpyR/oBxsR5iZsqGdtfzihPlGQktgJMYIxc/zLPMGubssi5wXKwSHgQscqDgsE0syrrRUgvWqlh6PB016L1Pzd9W1OY9FR0oaGf6RhfJkYYxBJ2NaDpHUEiNbwk9J/iDluKAbY263m/Kxll8lvhvz/NvWbV5aa7ELk2hEV27Zxhh0cgy4IH0wRfmp7AO0uqUEa2tzEp1FlJeSQxmJy3x+17U5j5U0b68zwz9QMED9fYku3JvXUgk/yQgq+9UlvFadtfzao1T1J/YlpROchXg8q8WFsqNpiYciyQzYfimh5e2yrfJMfgWUeZ7HzeelAzAgvk1L5/2SXGXax1riio5ZkPQlZzy1yWRiWfeMx+qCcltGWn310iUyT54V5e0l/Gz30j2b81gS97AN95PPPzgLqTX0cMLtAMkwlwa1SpbwU74vSanvnfHO+7X1NNlzrCU4z32p/NnxvJZKsFSouq7DoVShc0U4v8ajSOW9T+ZlXZvzWMmI7nWibplcApC7IQSe0vcmyfeXaKmEnxItsfZAk7AiyDreS36h3LIXVqJkGgktsY7HwjFeFnEWGn1YE+ctTGXZI9tKEvzqEOt2u+ExFGaHEHjLuq72zwfFa0Tae++cU9V5wpU0iIjaDFiSEqUBe/xwhj2baQZH7mFx5GEDDPMtRQiBVVa8cwM/BPLev8pSiZZY1cDGla+JS6cwOXuoSRi8rmuyJo7FiIU0RCTpF/mRoSRcSSOhJRjNv8nXW+M4koXt77tL1hVlHDxRR0eMyWMZY/q+hzGo4JNl/GoOxtAdNLa7lrInf4m3hNAw4iTzEkfWDD+HNkv0Qyw5ON/mS2ooSu1Cfd8vy0KnYozJnMtAgNv88xJuz8e0MH/6vscZGLJknUxZWOhX5X1JGfHJS6zlHzvaftK1hvWPMPC0L13ic9d1eNsbY5SPkpcY00AbA28zcJmW8DMZeaJQR463XWo3NgYuYeAyLbHGgkpA25EuCX8DrcjAZVqq6EObqjHwDQw0LX1DFJoNP4GBpqWfEMXmwzcw0LT0DVFoNvwEBv4DAMMb7ZAPC6MAAAAASUVORK5CYII="></div><br>Exécution d'un module de test&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
readyapp.exe test
::===============================================</pre><br>Intégration d'un module de test:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GDEFINE_OBJ(GProcess, lProcess)
    lProcess.run(_argc, _argv);
    return 0;
}
//===============================================
// GProcess.c
//===============================================
GProcess* GProcess_new() {
    GProcess* lObj = (GProcess*)malloc(sizeof(GProcess));
    GProcess_init(lObj);
    return lObj;
}
//===============================================
static void GProcess_delete(GProcess** _this) {
    free(*_this);
    (*_this) = 0;
}
//===============================================
void GProcess_init(GProcess* _this) {
    _this-&gt;delete = GProcess_delete;
    _this-&gt;run = GProcess_run;
}
//===============================================
static void GProcess_run(int _argc, char** _argv) {
    char* lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];
    if(!strcmp(lModule, "hello")) {
        GProcess_runHello(_argc, _argv);
    }
    else if(!strcmp(lModule, "test")) {
        GProcess_runTest(_argc, _argv);
    }
}
//===============================================
static void GProcess_runHello(int _argc, char** _argv) {
    GDEFINE_OBJ(GHello, lHello)
    lHello.sayHello();
}
//===============================================
static void GProcess_runTest(int _argc, char** _argv) {
    GDEFINE_OBJ(GTest, lObj)
    lObj.run(_argc, _argv);
}
//===============================================
// GTest.c
//===============================================
GTest* GTest_new() {
    GTest* lObj = (GTest*)malloc(sizeof(GTest));
    GTest_init(lObj);
    return lObj;
}
//===============================================
static void GTest_delete(GTest** _this) {
    free(*_this);
    (*_this) = 0;
}
//===============================================
void GTest_init(GTest* _this) {
    _this-&gt;delete = GTest_delete;
    _this-&gt;run = GTest_run;
}
//===============================================
static void GTest_run(int _argc, char** _argv) {
    printf("Je suis le module de test.\n");
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="programmation-par-selection-de-projet_prise-en-compte-des-accents-dans-un-terminal-sous-windows" href="#programmation-par-selection-de-projet">Prise en compte des accents dans un terminal sous Windows</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Prise en compte des accents dans un terminal sous Windows:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GDEFINE_OBJ(GProcess, lProcess)
    lProcess.inits(&amp;lProcess);
    lProcess.run(&amp;lProcess, _argc, _argv);
    lProcess.m_obj-&gt;m_logs-&gt;print(lProcess.m_obj-&gt;m_logs);
    lProcess.clean(&amp;lProcess);
    return 0;
}
//===============================================
// GProcess.c
//===============================================
static void GProcess_inits(GProcess* _this) {
    assert(_this);
    SetConsoleOutputCP(CP_UTF8);
}
//===============================================
// GTest.c
//===============================================
static void GTest_runString(GTest* _this, int _argc, char** _argv) {
    assert(_this);
    printf("%s...\n",  __PRETTY_FUNCTION__);

    GString* lString = GString_new();

    lString-&gt;create(lString, "Voici mon premier message.\n");

    lString-&gt;add(lString, "Voici mon deuxième message.\n");
    lString-&gt;add(lString, "Voici mon troisième message.\n");
    lString-&gt;add(lString, "Voici mon quatrième message.\n");

    lString-&gt;print(lString);

    lString-&gt;delete(&amp;lString);
}
//===============================================
// GString.c
//===============================================
static void GString_print(GString* _this) {
    assert(_this);
    printf("%s\n", _this-&gt;m_data);
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1"><div class="Section2"><div class="Section3"><h1 class="Section4"><a class="Section5" href="#" id="creation-d-une-liste-de-donnees">Création d'une liste de données</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-une-liste-de-donnees_-creation-d-une-liste-de-donnees"> Création d'une liste de données</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-une-liste-de-donnees_-creation-d-une-liste-de-donnees" href="#creation-d-une-liste-de-donnees"> Création d'une liste de données</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Création d'une liste de données:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GTest.c
//===============================================
static void GTest_runVector(int _argc, char** _argv) {
    printf("%s...\n",  __PRETTY_FUNCTION__);
    GVector* lVector = GVector_new();

    // size - add - get - clear - delete
    printf("size: %d\n", lVector-&gt;size(lVector));

    lVector-&gt;add(lVector, "un");
    lVector-&gt;add(lVector, "deux");
    lVector-&gt;add(lVector, "trois");
    printf("size: %d\n", lVector-&gt;size(lVector));

    printf("get: %s\n", (char*)lVector-&gt;get(lVector, 1));

    lVector-&gt;clear(lVector);
    printf("size: %d\n", lVector-&gt;size(lVector));

    lVector-&gt;delete(&amp;lVector);
}
//===============================================
// GVector.h
//===============================================
typedef struct _GVector GVector;
//===============================================
struct _GVector {
    void (*delete)(GVector** _this);
    void (*clear)(GVector* _this);
    void (*add)(GVector* _this, void* _data);
    int (*size)(GVector* _this);
    void* (*get)(GVector* _this, int i);
    GVector* m_next;
    void* m_data;
};
//===============================================
void GVector_init(GVector* _this);
GVector* GVector_new();
//===============================================
// GVector.c
//===============================================
GVector* GVector_new() {
    GVector* lObj = (GVector*)malloc(sizeof(GVector));
    GVector_init(lObj);
    return lObj;
}
//===============================================
void GVector_init(GVector* _this) {
    _this-&gt;delete = GVector_delete;
    _this-&gt;clear = GVector_clear;
    _this-&gt;add = GVector_add;
    _this-&gt;size = GVector_size;
    _this-&gt;get = GVector_get;
    _this-&gt;m_next = 0;
    _this-&gt;m_data = 0;
}
//===============================================
static void GVector_delete(GVector** _this) {
    assert(*_this);
    (*_this)-&gt;clear(*_this);
    free(*_this);
    (*_this) = 0;
}
//===============================================
static void GVector_clear(GVector* _this) {
    assert(_this);
    GVector* lNode = _this-&gt;m_next;
    while(lNode) {
        GVector* lPrevious = lNode;
        lNode = lNode-&gt;m_next;
        free(lPrevious);
    }
    _this-&gt;m_next = 0;
}
//===============================================
static void GVector_add(GVector* _this, void* _data) {
    assert(_this);
    GVector* lNode = _this;
    while(lNode-&gt;m_next) lNode = lNode-&gt;m_next;
    GVector* lObj = GVector_new();
    lObj-&gt;m_data = _data;
    lNode-&gt;m_next = lObj;
}
//===============================================
static int GVector_size(GVector* _this) {
    assert(_this);
    int lCount = 0;
    GVector* lNode = _this;
    while(lNode-&gt;m_next) {
        lCount++;
        lNode = lNode-&gt;m_next;
    }
    return lCount;
}
//===============================================
static void* GVector_get(GVector* _this, int i) {
    assert(_this);
    int lSize = _this-&gt;size(_this);
    assert(i &gt;= 0 &amp;&amp; i &lt; lSize);
    int lCount = 0;
    GVector* lNode = _this-&gt;m_next;
    while(lNode) {
        if(lCount == i) break;
        lNode = lNode-&gt;m_next;
        lCount++;
    }
    return lNode-&gt;m_data;
}
//===============================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="creation-d-un-gestionnaire-de-logs">Création d'un gestionnaire de logs</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-gestionnaire-de-logs_creation-d-un-gestionnaire-de-logs-">Création d'un gestionnaire de logs&nbsp;</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-gestionnaire-de-logs_creation-d-un-gestionnaire-de-logs-" href="#creation-d-un-gestionnaire-de-logs">Création d'un gestionnaire de logs&nbsp;</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Création d'un gestionnaire de logs:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GTest.c
//===============================================
static void GTest_runLog(int _argc, char** _argv) {
    printf("%s...\n",  __PRETTY_FUNCTION__);

    // addError - addLog - addData - addLogs - print - clear - delete
    GLog* lLog = GLog_new();
    GLog* lLog2 = GLog_new();

    lLog-&gt;addError(lLog, "Je suis une erreur.");
    lLog-&gt;addLog(lLog, "Je suis une information.");
    lLog-&gt;addData(lLog, "Je suis une donnée.");

    // lLog-&gt;clear(lLog);

    lLog-&gt;print(lLog);

    lLog-&gt;loadFromMap(lLog, 2);
    lLog-&gt;m_msg = "Je suis une information (2).";
    lLog-&gt;loadToMap(lLog, 2);

    lLog2-&gt;addLogs(lLog2, lLog);
    lLog2-&gt;print(lLog2);

    lLog-&gt;delete(&amp;lLog);
    lLog2-&gt;delete(&amp;lLog2);
}
//===============================================
// GLog.h
//===============================================
typedef struct _GLog GLog;
typedef struct _GVector GVector;
//===============================================
struct _GLog {
    void (*delete)(GLog** _this);
    void (*clear)(GLog* _this);
    void (*loadToMap)(GLog* _this, int _index);
    void (*loadFromMap)(GLog* _this, int _index);
    void (*addError)(GLog* _this, const char* _msg);
    void (*addLog)(GLog* _this, const char* _msg);
    void (*addData)(GLog* _this, const char* _msg);
    void (*addLogs)(GLog* _this, GLog* _obj);
    void (*print)(GLog* _this);

    GVector* m_map;
    const char* m_type;
    const char* m_side;
    const char* m_msg;
};
//===============================================
void GLog_init(GLog* _this);
GLog* GLog_new();
//===============================================
// GLog.c
//===============================================
GLog* GLog_new() {
    GLog* lObj = (GLog*)malloc(sizeof(GLog));
    GLog_init(lObj);
    return lObj;
}
//===============================================
void GLog_init(GLog* _this) {
    assert(_this);
    _this-&gt;delete = GLog_delete;
    _this-&gt;clear = GLog_clear;
    _this-&gt;loadToMap = GLog_loadToMap;
    _this-&gt;loadFromMap = GLog_loadFromMap;
    _this-&gt;addError = GLog_addError;
    _this-&gt;addLog = GLog_addLog;
    _this-&gt;addData = GLog_addData;
    _this-&gt;addLogs = GLog_addLogs;
    _this-&gt;print = GLog_print;

    _this-&gt;m_map = GVector_new();
    _this-&gt;m_type = 0;
    _this-&gt;m_side = 0;
    _this-&gt;m_msg = 0;
}
//===============================================
static void GLog_delete(GLog** _this) {
    assert(*_this);
    GVector* lMap = (*_this)-&gt;m_map;
    (*_this)-&gt;clear(*_this);
    lMap-&gt;delete(&amp;lMap);
    free(*_this);
    (*_this) = 0;
}
//===============================================
static void GLog_clear(GLog* _this) {
    assert(_this);
    GVector* lMap = _this-&gt;m_map;
    for(int i = 0; i &lt; lMap-&gt;size(lMap); i++) {
        GLog* lObj = lMap-&gt;get(lMap, i);
        lObj-&gt;delete(&amp;lObj);
    }
    lMap-&gt;clear(lMap);
}
//===============================================
static GLog* GLog_clone(GLog* _this) {
    assert(_this);
    GLog* lObj = GLog_new();
    GLog_setObj(lObj, _this);
    return lObj;
}
//===============================================
static void GLog_setObj(GLog* _this, GLog* _obj) {
    assert(_this);
    _this-&gt;m_type = _obj-&gt;m_type;
    _this-&gt;m_side = _obj-&gt;m_side;
    _this-&gt;m_msg = _obj-&gt;m_msg;
}
//===============================================
static void GLog_loadToMap(GLog* _this, int _index) {
    assert(_this);
    assert(_index &gt;= 1);
    GVector* lMap = _this-&gt;m_map;
    int lSize = lMap-&gt;size(lMap);
    assert(_index &lt;= lSize);
    GLog* lObj = lMap-&gt;get(lMap, _index - 1);
    GLog_setObj(lObj, _this);
}
//===============================================
static void GLog_loadFromMap(GLog* _this, int _index) {
    assert(_this);
    assert(_index &gt;= 1);
    GVector* lMap = _this-&gt;m_map;
    int lSize = lMap-&gt;size(lMap);
    assert(_index &lt;= lSize);
    GLog* lObj = lMap-&gt;get(lMap, _index - 1);
    GLog_setObj(_this, lObj);
}
//===============================================
static void GLog_addError(GLog* _this, const char* _msg) {
    assert(_this);
    GVector* lMap = _this-&gt;m_map;
    GLog* lObj = GLog_new();
    lObj-&gt;m_type = "error";
    lObj-&gt;m_side = "server";
    lObj-&gt;m_msg = _msg;
    lMap-&gt;add(lMap, lObj);
}
//===============================================
static void GLog_addLog(GLog* _this, const char* _msg) {
    assert(_this);
    GVector* lMap = _this-&gt;m_map;
    GLog* lObj = GLog_new();
    lObj-&gt;m_type = "log";
    lObj-&gt;m_side = "server";
    lObj-&gt;m_msg = _msg;
    lMap-&gt;add(lMap, lObj);
}
//===============================================
static void GLog_addData(GLog* _this, const char* _msg) {
    assert(_this);
    GVector* lMap = _this-&gt;m_map;
    GLog* lObj = GLog_new();
    lObj-&gt;m_type = "data";
    lObj-&gt;m_side = "server";
    lObj-&gt;m_msg = _msg;
    lMap-&gt;add(lMap, lObj);
}
//===============================================
static void GLog_addLogs(GLog* _this, GLog* _obj) {
    assert(_this);
    GVector* lMap = _this-&gt;m_map;
    GVector* lMap2 = _obj-&gt;m_map;
    for(int i = 0; i &lt; lMap2-&gt;size(lMap2); i++) {
        GLog* lObj = lMap2-&gt;get(lMap2, i);
        GLog* lObj2 = GLog_clone(lObj);
        lMap-&gt;add(lMap, lObj2);
    }
}
//===============================================
static void GLog_print(GLog* _this) {
    assert(_this);
    GVector* lMap = _this-&gt;m_map;
    for(int i = 0; i &lt; lMap-&gt;size(lMap); i++) {
        GLog* lObj = lMap-&gt;get(lMap, i);
        printf("[%-6s] : %s\n", lObj-&gt;m_type, lObj-&gt;m_msg);
    }
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="creation-d-un-objet-parent">Création d'un objet parent</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-objet-parent_creation-d-un-objet-parent-">Création d'un objet parent&nbsp;</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-objet-parent_integration-d-un-gestionnaire-de-logs">Intégration d'un gestionnaire de logs</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-objet-parent_utilisation-d-un-objet-parent">Utilisation d'un objet parent</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-objet-parent_utilisation-d-un-gestionnaire-de-logs">Utilisation d'un gestionnaire de logs</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-objet-parent_creation-d-un-objet-parent-" href="#creation-d-un-objet-parent">Création d'un objet parent&nbsp;</a>
</h2><br>Création d'un objet parent:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GObject.h
//===============================================
typedef struct _GObject GObject;
//===============================================
struct _GObject {
    void (*delete)(GObject** _this);
};
//===============================================
void GObject_init(GObject* _this);
GObject* GObject_new();
//===============================================
// GObject.c
//===============================================
GObject* GObject_new() {
    GObject* lObj = (GObject*)malloc(sizeof(GObject));
    GObject_init(lObj);
    return lObj;
}
//===============================================
void GObject_init(GObject* _this) {
    assert(_this);
    _this-&gt;delete = GObject_delete;
}
//===============================================
static void GObject_delete(GObject** _this) {
    assert(*_this);
    free(*_this);
    (*_this) = 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-objet-parent_integration-d-un-gestionnaire-de-logs" href="#creation-d-un-objet-parent">Intégration d'un gestionnaire de logs</a>
</h2><br>Intégration d'un gestionnaire de logs:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GObject.h
//===============================================
typedef struct _GObject GObject;
//===============================================
struct _GObject {
    void (*delete)(GObject** _this);

    GLog* m_logs;
};
//===============================================
void GObject_init(GObject* _this);
GObject* GObject_new();
//===============================================
// GObject.c
//===============================================
GObject* GObject_new() {
    GObject* lObj = (GObject*)malloc(sizeof(GObject));
    GObject_init(lObj);
    return lObj;
}
//===============================================
void GObject_init(GObject* _this) {
    assert(_this);
    _this-&gt;delete = GObject_delete;

    _this-&gt;m_logs = GLog_new();
}
//===============================================
static void GObject_delete(GObject** _this) {
    assert(*_this);
    GLog* lLog = (*_this)-&gt;m_logs;
    lLog-&gt;delete(&amp;lLog);
    free(*_this);
    (*_this) = 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-objet-parent_utilisation-d-un-objet-parent" href="#creation-d-un-objet-parent">Utilisation d'un objet parent</a>
</h2><br>Utilisation d'un objet parent:<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GProcess.h
//===============================================
typedef struct _GProcess GProcess;
//===============================================
struct _GProcess {
    void (*delete)(GProcess** _this);
    void (*run)(GProcess* _this, int _argc, char** _argv);

    GObject* m_obj;
};
//===============================================
void GProcess_init(GProcess* _this);
GProcess* GProcess_new();
//===============================================
// GProcess.c
//===============================================
GProcess* GProcess_new() {
    GProcess* lObj = (GProcess*)malloc(sizeof(GProcess));
    GProcess_init(lObj);
    return lObj;
}
//===============================================
void GProcess_init(GProcess* _this) {
    assert(_this);
    _this-&gt;delete = GProcess_delete;
    _this-&gt;run = GProcess_run;

    _this-&gt;m_obj = GObject_new();
}
//===============================================
static void GProcess_delete(GProcess** _this) {
    assert(*_this);
    GObject* lObj = (*_this)-&gt;m_obj;
    lObj-&gt;delete(&amp;lObj);
    free(*_this);
    (*_this) = 0;
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-objet-parent_utilisation-d-un-gestionnaire-de-logs" href="#creation-d-un-objet-parent">Utilisation d'un gestionnaire de logs</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Utilisation d'un gestionnaire de logs:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// main.c
//===============================================
int main(int _argc, char** _argv) {
    GDEFINE_OBJ(GProcess, lProcess)
    lProcess.run(&amp;lProcess, _argc, _argv);
    lProcess.m_obj-&gt;m_logs-&gt;print(lProcess.m_obj-&gt;m_logs);
    return 0;
}
//===============================================
// GProcess.h
//===============================================
typedef struct _GProcess GProcess;
//===============================================
struct _GProcess {
    void (*delete)(GProcess** _this);
    void (*run)(GProcess* _this, int _argc, char** _argv);

    GObject* m_obj;
};
//===============================================
void GProcess_init(GProcess* _this);
GProcess* GProcess_new();
//===============================================
// GProcess.c
//===============================================
GProcess* GProcess_new() {
    GProcess* lObj = (GProcess*)malloc(sizeof(GProcess));
    GProcess_init(lObj);
    return lObj;
}
//===============================================
void GProcess_init(GProcess* _this) {
    assert(_this);
    _this-&gt;delete = GProcess_delete;
    _this-&gt;run = GProcess_run;

    _this-&gt;m_obj = GObject_new();
}
//===============================================
static void GProcess_delete(GProcess** _this) {
    assert(*_this);
    GObject* lObj = (*_this)-&gt;m_obj;
    lObj-&gt;delete(&amp;lObj);
    free(*_this);
    (*_this) = 0;
}
//===============================================
static void GProcess_run(GProcess* _this, int _argc, char** _argv) {
    assert(_this);
    char* lModule = "";
    if(_argc &gt; 1) lModule = _argv[1];
    GLog* lLog = _this-&gt;m_obj-&gt;m_logs;

    if(!strcmp(lModule, "")) {
        lLog-&gt;addError(lLog, "Le module est obligatoire.");
    }
    else if(!strcmp(lModule, "test")) {
        GProcess_runTest(_this, _argc, _argv);
    }
    else {
        lLog-&gt;addError(lLog, "Le module est inconnu.");
    }
}
//===============================================
static void GProcess_runTest(GProcess* _this, int _argc, char** _argv) {
    assert(_this);
    GDEFINE_OBJ(GTest, lObj)
    lObj.run(&amp;lObj, _argc, _argv);
    _this-&gt;m_obj-&gt;m_logs-&gt;addLogs(_this-&gt;m_obj-&gt;m_logs, lObj.m_obj-&gt;m_logs);
}
//===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1"><div class="Section2"><div class="Section3"><h1 class="Section4"><a class="Section5" href="#" id="creation-d-un-gestionnaire-de-chaines-de-caracteres">Création d'un gestionnaire de chaînes de caractères</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-un-gestionnaire-de-chaines-de-caracteres_creation-d-un-gestionnaire-de-chaines-de-caracteres">Création d'un gestionnaire de chaînes de caractères</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-un-gestionnaire-de-chaines-de-caracteres_creation-d-un-gestionnaire-de-chaines-de-caracteres" href="#creation-d-un-gestionnaire-de-chaines-de-caracteres">Création d'un gestionnaire de chaînes de caractères</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Création d'un gestionnaire de chaînes de caractères:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GTest.c
//===============================================
static void GTest_runString(GTest* _this, int _argc, char** _argv) {
    assert(_this);
    printf("%s...\n",  __PRETTY_FUNCTION__);

    GString* lString = GString_new();
    GString* lString2 = GString_new();
    GString* lString3 = GString_new();
    GVector* lMap = GVector_new();

    lString-&gt;create(lString, "Voici mon premier message.\n");

    lString-&gt;add(lString, "Voici mon deuxième message.\n");
    lString-&gt;add(lString, "Voici mon troisième message.\n");
    lString-&gt;add(lString, "Voici mon quatrième message.\n");
    lString-&gt;add(lString, "Voici mon cinquième message.");

    lString-&gt;print(lString);

    lString-&gt;split(lString, lMap, "\n");
    printf("split: %d\n", lMap-&gt;size(lMap));

    lString2-&gt;assign(lString2, lMap-&gt;get(lMap, 1));
    printf("get map: %s\n", lString2-&gt;m_data);

    printf("indexOf: %d\n", lString2-&gt;indexOf(lString2, "deuxième", 0));
    printf("startsWith: %d\n", lString2-&gt;startsWith(lString2, "Voici"));
    printf("endsWith: %d\n", lString2-&gt;endsWith(lString2, "message"));

    lString2-&gt;substr(lString2, lString3, 0, 3);
    printf("substr: %s\n", lString3-&gt;m_data);

    lString2-&gt;extract(lString2, lString3, " ", " ");
    printf("extract: %s\n", lString3-&gt;m_data);

    lString-&gt;get(lString, lString3, "\n", 3);
    printf("get sep: %s\n", lString3-&gt;m_data);

    lString-&gt;from(lString, lString3, "\n", 3);
    printf("from sep: %s\n", lString3-&gt;m_data);

    smdelete(lMap);
    lString-&gt;delete(&amp;lString);
    lString2-&gt;delete(&amp;lString2);
    lString3-&gt;delete(&amp;lString3);
    lMap-&gt;delete(&amp;lMap);
}
//===============================================
// GString.h
//===============================================
typedef struct _GString GString;
//===============================================
struct _GString {
    void (*delete)(GString** _this);
    void (*clear)(GString* _this);
    void (*allocate)(GString* _this, int _size);
    void (*create)(GString* _this, const char* _data);
    void (*assign)(GString* _this, GString* _data);
    void (*add)(GString* _this, const char* _data);
    void (*format)(GString* _this, const char* _format, ...);
    void (*split)(GString* _this, GVector* _map, const char* _sep);
    void (*get)(GString* _this, GString* _data, const char* _sep, int _index);
    void (*from)(GString* _this, GString* _data, const char* _sep, int _index);
    int (*isEmpty)(GString* _this);
    int (*startsWith)(GString* _this, const char* _data);
    int (*endsWith)(GString* _this, const char* _data);
    int (*indexOf)(GString* _this, const char* _data, int _pos);
    void (*substr)(GString* _this, GString* _data, int _pos, int _size);
    void (*extract)(GString* _this, GString* _data, const char* _start, const char* _end);
    void (*print)(GString* _this);

    char* m_data;
    int m_size;
};
//===============================================
// GString.c
//===============================================
void GString_init(GString* _this);
GString* GString_new();
//===============================================
GString* GString_new() {
    GString* lObj = (GString*)malloc(sizeof(GString));
    GString_init(lObj);
    return lObj;
}
//===============================================
void GString_init(GString* _this) {
    assert(_this);
    _this-&gt;delete = GString_delete;
    _this-&gt;clear = GString_clear;
    _this-&gt;allocate = GString_allocate;
    _this-&gt;create = GString_create;
    _this-&gt;assign = GString_assign;
    _this-&gt;add = GString_add;
    _this-&gt;format = GString_format;
    _this-&gt;split = GString_split;
    _this-&gt;get = GString_get;
    _this-&gt;from = GString_from;
    _this-&gt;isEmpty = GString_isEmpty;
    _this-&gt;startsWith = GString_startsWith;
    _this-&gt;endsWith = GString_endsWith;
    _this-&gt;indexOf = GString_indexOf;
    _this-&gt;substr = GString_substr;
    _this-&gt;extract = GString_extract;
    _this-&gt;print = GString_print;

    _this-&gt;m_data = 0;
    _this-&gt;m_size = 0;
}
//===============================================
static void GString_delete(GString** _this) {
    assert(*_this);
    (*_this)-&gt;clear(*_this);
    free(*_this);
    (*_this) = 0;
}
//===============================================
static void GString_clear(GString* _this) {
    assert(_this);
    free(_this-&gt;m_data);
    _this-&gt;m_data = 0;
    _this-&gt;m_size = 0;
}
//===============================================
static void GString_allocate(GString* _this, int _size) {
    assert(_this);
    assert(_size &gt;= 0);
    _this-&gt;clear(_this);
    _this-&gt;m_data = (char*)malloc(sizeof(char)*(_size + 1));
    _this-&gt;m_data[_size] = '\0';
    _this-&gt;m_size = _size;
}
//===============================================
static void GString_create(GString* _this, const char* _data) {
    assert(_this);
    assert(_data);
    int lSize = strlen(_data);
    _this-&gt;allocate(_this, lSize);
    memcpy(_this-&gt;m_data, _data, _this-&gt;m_size);
}
//===============================================
static void GString_assign(GString* _this, GString* _data) {
    assert(_this);
    assert(_data);
    _this-&gt;allocate(_this, _data-&gt;m_size);
    memcpy(_this-&gt;m_data, _data-&gt;m_data, _this-&gt;m_size);
}
//===============================================
static void GString_add(GString* _this, const char* _data) {
    assert(_this);
    assert(_data);
    int lSize = strlen(_data);
    int lSizeT = _this-&gt;m_size + lSize;
    char* lDataT = (char*)malloc(sizeof(char)*(lSizeT + 1));
    memcpy(&amp;lDataT[0], _this-&gt;m_data, _this-&gt;m_size);
    memcpy(&amp;lDataT[_this-&gt;m_size], _data, lSize);
    lDataT[lSizeT] = '\0';
    _this-&gt;clear(_this);
    _this-&gt;m_data = lDataT;
    _this-&gt;m_size = lSizeT;
}
//===============================================
static void GString_format(GString* _this, const char* _format, ...) {
    assert(_this);
    assert(_format);
    va_list lArgs;
    va_start(lArgs, _format);
    int lSize = vsnprintf(0, 0, _format, lArgs);
    char* lData = (char*)malloc(sizeof(char)*(lSize + 1));
    vsnprintf(lData, lSize + 1, _format, lArgs);
    va_end(lArgs);
    _this-&gt;clear(_this);
    _this-&gt;m_data = lData;
    _this-&gt;m_size = lSize;
}
//===============================================
static void GString_split(GString* _this, GVector* _map, const char* _sep) {
    assert(_this);

    smdelete(_map);
    _map-&gt;clear(_map);

    GString* lData = GString_new();
    lData-&gt;assign(lData, _this);

    char* lToken = strtok(lData-&gt;m_data, _sep);

    while(lToken) {
        GString* lValue = GString_new();
        lValue-&gt;create(lValue, lToken);
        _map-&gt;add(_map, lValue);
        lToken = strtok(0, _sep);
    }

    lData-&gt;delete(&amp;lData);
}
//===============================================
static void GString_get(GString* _this, GString* _data, const char* _sep, int _index) {
    assert(_this);
    _data-&gt;clear(_data);
    if(_this-&gt;isEmpty(_this)) return;
    int lStart = 0;
    int lEnd = 0;
    int lCount = 0;

    while(1) {
        lEnd = _this-&gt;indexOf(_this, _sep, lStart);
        if(lEnd == -1) {
            lEnd = _this-&gt;m_size;
            break;
        }
        int lSize = lEnd - lStart;

        if(lCount == _index) {
            _this-&gt;substr(_this, _data, lStart, lSize);
            return;
        }
        lCount++;

        lStart += lSize + strlen(_sep);
    }

    if(lCount == _index) {
        int lSize = lEnd - lStart;
        if(lSize &gt; 0) {
            _this-&gt;substr(_this, _data, lStart, lSize);
        }
    }
}
//===============================================
static void GString_from(GString* _this, GString* _data, const char* _sep, int _index) {
    assert(_this);
    _data-&gt;clear(_data);
    if(_this-&gt;isEmpty(_this)) return;
    int lStart = 0;
    int lEnd = 0;
    int lCount = 0;

    while(1) {
        lEnd = _this-&gt;indexOf(_this, _sep, lStart);
        if(lEnd == -1) {
            lEnd = _this-&gt;m_size;
            break;
        }
        int lSize = lEnd - lStart;

        if(lCount == _index) {
            int lFrom = _this-&gt;m_size - lStart;
            _this-&gt;substr(_this, _data, lStart, lFrom);
            return;
        }
        lCount++;

        lStart += lSize + strlen(_sep);
    }

    if(lCount == _index) {
        int lSize = lEnd - lStart;
        if(lSize &gt; 0) {
            int lFrom = _this-&gt;m_size - lStart;
            _this-&gt;substr(_this, _data, lStart, lFrom);
        }
    }
}
//===============================================
static int GString_isEmpty(GString* _this) {
    assert(_this);
    if(!_this-&gt;m_data || !_this-&gt;m_size) return 1;
    return 0;
}
//===============================================
static int GString_startsWith(GString* _this, const char* _data) {
    assert(_this);
    if(_this-&gt;isEmpty(_this)) return 0;
    int lSize = _this-&gt;m_size;
    int lSize2 = strlen(_data);
    if(lSize &lt; lSize2) return 0;
    int lOk = memcmp(_this-&gt;m_data, _data, lSize2) == 0;
    return lOk;
}
//===============================================
static int GString_endsWith(GString* _this, const char* _data) {
    assert(_this);
    if(_this-&gt;isEmpty(_this)) return 0;
    int lSize = _this-&gt;m_size;
    int lSize2 = strlen(_data);
    if(lSize &lt; lSize2) return 0;
    int lPos = lSize - lSize2 - 1;
    int lOk = memcmp(&amp;_this-&gt;m_data[lPos], _data, lSize2) == 0;
    return lOk;
}
//===============================================
static int GString_indexOf(GString* _this, const char* _data, int _pos) {
    assert(_this);
    assert(_pos &gt;= 0);
    if(_this-&gt;isEmpty(_this)) return -1;
    char* lFound = strstr(&amp;_this-&gt;m_data[_pos], _data);
    if(!lFound) return -1;
    int lIndex = lFound - _this-&gt;m_data;
    return lIndex;
}
//===============================================
static void GString_substr(GString* _this, GString* _data, int _pos, int _size) {
    assert(_this);
    _data-&gt;clear(_data);
    if(_this-&gt;isEmpty(_this)) return;
    int lSize = _this-&gt;m_size;
    assert(_size &gt;= 0 &amp;&amp; _size &lt;= lSize);
    assert(abs(_pos) &lt; lSize);
    if(_pos &lt; 0) {
        if(_size &gt; abs(_pos)) _size = abs(_pos);
        _pos += lSize;
    }
    _data-&gt;allocate(_data, _size);
    memcpy(_data-&gt;m_data, &amp;_this-&gt;m_data[_pos], _size);
}
//===============================================
static void GString_extract(GString* _this, GString* _data, const char* _start, const char* _end) {
    assert(_this);
    _data-&gt;clear(_data);
    if(_this-&gt;isEmpty(_this)) return;
    int lStart = _this-&gt;indexOf(_this, _start, 0);
    if(lStart == -1) return;
    int lPos = lStart + strlen(_start);
    int lEnd = _this-&gt;indexOf(_this, _end, lPos);
    if(lEnd == -1) return;
    int lSize = lEnd - lPos;
    _this-&gt;substr(_this, _data, lPos, lSize);
}
//===============================================
static void GString_print(GString* _this) {
    assert(_this);
    printf("%s\n", _this-&gt;m_data);
}
//===============================================
// GFunctions.c
//===============================================
void smdelete(GVector* _map) {
    for(int i = 0; i &lt; _map-&gt;size(_map); i++) {
        GString* lData = _map-&gt;get(_map, i);
        lData-&gt;delete(&amp;lData);
    }
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="creation-d-une-interface-web">Création d'une interface web</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-une-interface-web_recuperation-d-une-requete-d-un-client-web">Récupération d'une requête d'un client web</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creation-d-une-interface-web_preparation-d-une-reponse-web">Préparation d'une réponse web</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-une-interface-web_recuperation-d-une-requete-d-un-client-web" href="#creation-d-une-interface-web">Récupération d'une requête d'un client web</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Envoi de la requête:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Récupération d'une requête d'un client web:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GTest.c
//===============================================
static void GTest_runSocket(GTest* _this, int _argc, char** _argv) {
    assert(_this);
    printf("%s...\n",  __PRETTY_FUNCTION__);

    GSocket* lSocket = GSocket_new();

    lSocket-&gt;run(lSocket);

    lSocket-&gt;delete(&amp;lSocket);
}
//===============================================
// GSocket.h
//===============================================
typedef struct _GSocket GSocket;
//===============================================
struct _GSocket {
    void (*delete)(GSocket** _this);
    void (*run)(GSocket* _this);
    void (*read)(GSocket* _this, GString* _data);

    GObject* m_obj;
    SOCKET m_socket;
};
//===============================================
void GSocket_init(GSocket* _this);
GSocket* GSocket_new();
//===============================================
// GSocket.c
//===============================================
static void GSocket_run(GSocket* _this) {
    assert(_this);
    GLog* lLog = _this-&gt;m_obj-&gt;m_logs;

    int lMajor = 2;
    int lMinor = 2;
    int lPort = 8010;
    int lBacklog = 10;

    WSADATA wsaData;

    if(WSAStartup(MAKEWORD(lMajor, lMinor), &amp;wsaData) == SOCKET_ERROR) {
        lLog-&gt;addError(lLog, "L'initialisation du server a échoué.");
        return;
    }

    struct sockaddr_in lAddress;
    lAddress.sin_family = AF_INET;
    lAddress.sin_addr.s_addr = INADDR_ANY;
    lAddress.sin_port = htons(lPort);

    SOCKET lServer = socket(AF_INET, SOCK_STREAM, 0);

    if(lServer == INVALID_SOCKET) {
        lLog-&gt;addError(lLog, "La création du socket server a échoué.");
        return;
    }

    if(bind(lServer, (struct sockaddr *)&amp;lAddress, sizeof(lAddress)) == SOCKET_ERROR) {
        lLog-&gt;addError(lLog, "La liaison du socket server a échoué.");
        return;
    }

    if(listen(lServer, lBacklog) == SOCKET_ERROR) {
        lLog-&gt;addError(lLog, "L'initialisation du nombre de connexions autorisées a échoué.");
        return;
    }

    printf("Démarrage du serveur...\n");

    struct sockaddr_in lAddressC;
    int lAddressCL = sizeof(lAddressC);

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

    closesocket(lServer);
    WSACleanup();
}
//===============================================
static DWORD WINAPI GSocket_onThread(LPVOID _params) {
    GSocket* lClient = (GSocket*)_params;
    GString* lRequest = GString_new();

    lClient-&gt;read(lClient, lRequest);
    lRequest-&gt;print(lRequest);

    closesocket(lClient-&gt;m_socket);
    lRequest-&gt;delete(&amp;lRequest);
    return 0;
}
//===============================================
static void GSocket_read(GSocket* _this, GString* _data) {
    assert(_this);
    SOCKET lSocket = _this-&gt;m_socket;
    _data-&gt;clear(_data);

    while(1) {
        char lBuffer[GSOCKET_BUFFER_SIZE];
        int lBytes = recv(lSocket, lBuffer, GSOCKET_BUFFER_SIZE - 1, 0);
        if(lBytes == SOCKET_ERROR) break;
        lBuffer[lBytes] = '\0';

        _data-&gt;add(_data, lBuffer);

        u_long lBytesIO;
        int lOk = ioctlsocket(lSocket, FIONREAD, &amp;lBytesIO);

        if(lOk == SOCKET_ERROR) break;
        if(lBytesIO &lt;= 0) break;
    }
}
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creation-d-une-interface-web_preparation-d-une-reponse-web" href="#creation-d-une-interface-web">Préparation d'une réponse web</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Préparation d'une réponse web:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
// GTest.c
//===============================================
static void GTest_runSocket(GTest* _this, int _argc, char** _argv) {
    assert(_this);
    printf("%s...\n",  __PRETTY_FUNCTION__);

    GSocket* lSocket = GSocket_new();

    lSocket-&gt;run(lSocket);

    lSocket-&gt;delete(&amp;lSocket);
}
//===============================================
// GSocket.c
//===============================================
static DWORD WINAPI GSocket_onThread(LPVOID _params) {
    GSocket* lClient = (GSocket*)_params;
    GString* lRequest = GString_new();

    lClient-&gt;read(lClient, lRequest);
    lRequest-&gt;print(lRequest);

    const char* lResponse = ""
            "HTTP/1.1 200 OK\r\n"
            "Content-Length: 22\r\n"
            "\r\n"
            "Bonjour tout le monde."
            "";

    lClient-&gt;send(lClient, lResponse);

    closesocket(lClient-&gt;m_socket);
    lRequest-&gt;delete(&amp;lRequest);
    return 0;
}
//===============================================
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
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
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
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Structure du dossier avant compilation:<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">src
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
//===============================================</pre><br>Compilation du projet:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
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
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_passage-des-arguments-en-ligne-de-commande-dans-un-makefile">Passage des arguments en ligne de commande dans un Makefile</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_utilisation-des-variables-d-environnement-dans-un-makefile">Utilisation des variables d'environnement dans un Makefile</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#utilisation-d-un-makefile_utilisation-d-une-librairie-dynamique-dans-un-makefile">Utilisation d'une librairie dynamique dans un Makefile</a>
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
</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_passage-des-arguments-en-ligne-de-commande-dans-un-makefile" href="#utilisation-d-un-makefile">Passage des arguments en ligne de commande dans un Makefile</a>
</h2><br>Passage des arguments en ligne de commande à un Makefile:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
mingw32-make args="arg1 arg2 arg3"
::===============================================</pre><br>Utilisation des arguments passés en ligne de commande dans un Makefile:<br>&nbsp;&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
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
	$(GTARGET) $(args)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_utilisation-des-variables-d-environnement-dans-un-makefile" href="#utilisation-d-un-makefile">Utilisation des variables d'environnement dans un Makefile</a>
</h2><br>Utilisation des variables d'environnement dans un Makefile:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
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
	envs.bat &amp;&amp; $(GTARGET) $(args)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-d-un-makefile_utilisation-d-une-librairie-dynamique-dans-un-makefile" href="#utilisation-d-un-makefile">Utilisation d'une librairie dynamique dans un Makefile</a>
</h2><br>Utilisation d'une librairie dynamique dans un Makefile:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
GSRC = .
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\readyapp.exe
#================================================
GLIBS =\
	-lws2_32 \
	
GOBJS =\
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
#================================================
GCFLAGS =\
    --std=gnu11 \
#================================================
all: compile run
#================================================
compile: $(GOBJS)
	gcc $(GCFLAGS) -o $(GTARGET) $(GOBJS)  $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc $(GCFLAGS) -c $&lt; -o $@
run:
	$(GTARGET) $(args)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================</pre><br></div></div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="utilisation-des-standards-c">Utilisation des standards C</a>
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
	$(GTARGET) $(args)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================<br></pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="utilisation-du-debogueur-gdb-_utilisation-du-debogueur-gdb" href="#utilisation-du-debogueur-gdb-">Utilisation du débogueur GDB</a>
</h2><br>Résultat:<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br>Fichier Makefile:<br><br><pre class="GCode1 Code1 AceCode" data-mode="makefile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#================================================
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
	$(GTARGET) $(args)
run_g:
	gdb -ex run --args $(GTARGET) $(args)
clean:
	del /q /s $(GTARGET) $(GBUILD)\*.o
#================================================</pre><br>Utilisation du débogueur GDB:<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">::===============================================
:: Terminal
::===============================================
mingw32-make run_g
::===============================================</pre><br></div>
</div>
</div></div><br>
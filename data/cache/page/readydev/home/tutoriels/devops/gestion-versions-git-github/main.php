<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#devops">DevOps</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/devops/gestion-versions-git-github">Gestion Versions Git GitHub</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Mise en oeuvre d'un environnement Git avec GitHub</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le contrôle de <b>version </b>désigne le suivi et la traçabilité des modifications. Il s'apparente, d'une certaine manière, à l'utilisation d'un marque-page dans un livre, pour indiquer au lecteur où il doit revenir lorsqu'il reprend sa lecture. Dans le contrôle de version, ce marque-page métaphorique fait référence à un instantané du code source. <b>Git </b>est un outil de contrôle de version. Avec <b>Git</b>, vous pouvez créer, suivre, récupérer et partager les modifications d'un dépôt. <b>GitHub </b>est un service d'hébergement où un dépôt est hébergé.<br><br>Ce document commence par vous présenter en détail ce qu'est le contrôle de <b>version</b>, pourquoi il est nécessaire et comment il s'intègre au développement d'applications et à la
gestion des <b>versions</b>. Grâce à des explications approfondies et des activités intéressantes, vous apprendrez à utiliser <b>Git </b>et <b>GitHub </b>de manière optimale. À la fin de ce document, vous aurez les compétences nécessaires pour sécuriser votre application et garantir son développement rapide.<br><br>Nous aborderons à travers ce document des techniques pour comprendre et appliquer les bonnes pratiques de gestion de <b>versions</b>. Nous présenterons l'interface utilisateur de <b>GitHub</b>. Nous essayerons de comprendre le workflow <b>Feature-Branch</b> et en implémenter les fonctionnalités. Nous apprendrons à utiliser les fonctionnalités de <b>fork</b>, telles que les <b>sous-modules</b> et le <b>rebasage</b>. Nous tenterons de maîtriser les commandes de débogage et de maintenance d'un dépôt. Nous montrerons comment mettre en oeuvre l'intégration continue avec <b>CircleCI</b>. Nous essayerons d'acquérir une compréhension approfondie de la gestion des <b>versions </b>et du fonctionnement de <b>GitHub</b> pour les mises en production logicielles.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#contenu-de-ce-document">Contenu de ce document</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction-au-controle-de-version">Introduction au contrôle de version</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#gestion-des-versions-des-commits">Gestion des versions des commits</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#recuperation-et-distribution-de-code">Récupération et distribution de code</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#branches">Branches</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#git-collaboratif">Git collaboratif</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#tests-automatises">Tests automatisés</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="contenu-de-ce-document">Contenu de ce document</a>
</h1>
<div class="Section6"><br>Nous avons rassemblé dans ce document un ensemble de recettes pratiques pour la mise en oeuvre d'un environnement Git avec GitHub.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Introduction au contrôle de version</b> », nous décrirons le fonctionnement du contrôle de version, les flux de travail et la configuration d'un dépôt local et dépôt GitHub. Nous définirons la gestion de versions et les différents types de flux de travail. Nous expliquerons l'interface utilisateur de GitHub. Nous configurerons les différentes fonctionnalités de GitHub telles que Teams et SSH. Nous créerons un dépôt en respectant les bonnes pratiques GitHub.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Gestion des versions des commits</b> », nous décrirons la comparaison et la modification des commits. Nous expliquerons la nécessité de la gestion des versions des commits. Nous comparerons les commits, les branches, les index et les répertoires de travail. Nous définirons les différentes commandes Git et décrirons leurs fonctions. Nous modifierons les commits.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Récupération et distribution de code</b> », nous décrirons la configuration des branches et la gestion des modifications dans le dépôt. Nous configurerons les connexions aux dépôts hébergés. Nous configurerons les règles d'accès et de protection des branches. Nous récupérerons et intégrerons les modifications dans un dépôt. Nous annulerons les modifications apportées à un dépôt.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Branches</b> », nous décrirons la configuration des branches et la gestion des modifications dans le dépôt. Nous expliquerons le flux de travail des branches de fonctionnalités. Nous créerons, parcourions et supprimerons des branches. Nous gérerons les modifications dans le répertoire de travail. Nous fusionnerons les modifications via des demandes d'extraction. Nous identifierons et résoudrons les problèmes liés aux demandes d'extraction.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans section « <b>Git collaboratif</b> », nous décrirons la création de forks de dépôts, le rebasage et l'utilisation des Gitmodules. Nous développerons en collaboration sur un dépôt distant avec d'autres contributeurs. Nous testerons et inspecterons efficacement le code. Nous générerons des artefacts d'application et automatiserons les tests sur GitHub. Nous développerons de nouvelles versions logicielles.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans la section « <b>Tests automatisés</b> », nous décrirons l'utilisation des webhooks, de CircleCI, ainsi que le système de tags et de release avec Git. Nous automatiserons les tests et la génération des mises en production d'applications sur GitHub. Nous gérerons les versions logicielles.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction-au-controle-de-version">Introduction au contrôle de version</a>
</h1>
<div class="Section6"><br>Nous définirons le contrôle de version et les différents types de flux de travail utilisés. Nous examinerons ce que sont Git et GitHub, et comment ils interagissent. Nous créerons un dépôt sur GitHub, le clonerons et initialiserons un dépôt en environnement local avant de le transférer (pousser) sur GitHub. Les éléments de base du contrôle de version et le contexte de l'application seront également présentés.
<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="gestion-des-versions-des-commits">Gestion des versions des commits</a>
</h1>
<div class="Section6"><br>Nous expliquerons la nécessité du versionnage des commits. Nous comparerons ensuite les commits, les branches, les index et les arbres de travail, et expliquerons leurs relations. Puis, nous définirons les différentes commandes Git et décrirons leurs fonctions. Enfin, nous montrerons comment modifier des commits, notamment en effectuant des commits arbitraires.
<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="recuperation-et-distribution-de-code">Récupération et distribution de code</a>
</h1>
<div class="Section6"><br>Nous explorerons comment les dépôts locaux peuvent se connecter au dépôt distant. Concernant la protection des branches, nous mettrons en place des contrôles pour superviser l'intégration des modifications, en définissant des mesures prises en compte lors de la fusion des modifications dans la branche du dépôt. Nous aborderons les commandes (git push, git fetch et git pull), qui facilitent la récupération des modifications et leur chargement dans le dépôt partagé. Enfin, nous explorerons les commandes (git revert et git reset), qui annulent les modifications.
<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="branches">Branches</a>
</h1>
<div class="Section6"><br>Nous utiliserons le flux de travail par branches de fonctionnalités pour implémenter des unités de travail via des branches. Ce flux de travail permettra de nous familiariser avec la convention de nommage utilisée pour identifier la nature du travail effectué par une branche. À l'aide de la commande (git branch), nous créerons, listerons et supprimerons des branches. Nous explorerons comment naviguer dans les différentes révisions d'un dépôt et utiliserons ces mêmes révisions pour intégrer sélectivement des modifications dans des branches. Nous examinerons comment gérer les modifications non indexées dans le répertoire de travail. Enfin, nous déploierons les modifications introduites en comparant les branches, en soumettant des demandes de fusion pour intégrer les modifications souhaitées et en annulant les modifications le cas échéant.
<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="git-collaboratif">Git collaboratif</a>
</h1>
<div class="Section6"><br>Nous décrirons et mettrons en oeuvre un flux de travail basé sur une branche. Ensuite, nous démontrerons comment réécrire l'historique avec Git et expliquerons comment Git aborde l'analyse des causes profondes. Enfin, nous identifierons plusieurs façons dont Git gère la maintenance.
<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="tests-automatises">Tests automatisés</a>
</h1>
<div class="Section6"><br>Nous aborderons les tests automatisés et les builds via les applications GitHub ainsi que les pull requests automatisées via CircleCI. Nous explorerons ensuite les tags Git et la
convention de nommage (SemVer), ainsi que les journaux de modifications et les notes de version. Enfin, nous examinerons l'archivage des versions GitHub.
<br><br></div>
</div>
</div>
</div><br>
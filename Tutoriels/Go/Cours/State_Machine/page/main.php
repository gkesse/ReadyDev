<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une machine à états finis en Go</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à Créer une machine à états finis en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal. Il veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/b_cours_state_machine.png" alt="/Tutoriels/Go/img/b_cours_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une machine à états finis Go"><a class="Link3" href="#">Créer une machine à états finis Go</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis Go-Introduction"><a class="Link9" href="#Créer une machine à états finis Go">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une machine à états finis.<br><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis Go-Programme principal"><a class="Link9" href="#Créer une machine à états finis Go">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">GProcess().Run();</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis Go-Machine à états finis"><a class="Link9" href="#Créer une machine à états finis Go">Machine à états finis</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessO) Run() {
    obj.G_STATE = "S_INIT"
    for {
        } else if obj.G_STATE == "S_INIT" { obj.run_INIT()
        } else if obj.G_STATE == "S_METHOD" { obj.run_METHOD()
        } else if obj.G_STATE == "S_CHOICE" { obj.run_CHOICE()
        } else if obj.G_STATE == "S_SQLITE" { obj.run_SQLITE()
} else { break }
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis Go-Programme d'initialisation"><a class="Link9" href="#Créer une machine à états finis Go">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessO) run_INIT() {
    fmt.Printf("\n")
    fmt.Printf("GO_ADMIN !!!\n")
    fmt.Printf("\t%-2s : %s\n", "-q", "quitter l'application")
    fmt.Printf("\n")
    obj.G_STATE = "S_LOAD"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis Go-Programme des méthodes"><a class="Link9" href="#Créer une machine à états finis Go">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessO) run_METHOD() {
    fmt.Printf("GO_ADMIN :\n")
    fmt.Printf("\t%-2s : %s\n", "1", "S_SQLITE")
    fmt.Printf("\n")
    obj.G_STATE = "S_CHOICE"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis Go-Programme de choix de méthode"><a class="Link9" href="#Créer une machine à états finis Go">Programme de choix de méthode</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessO) run_CHOICE() {
    var lLast string = "1"
    fmt.Printf("GO_ADMIN (%s) ? ", lLast)
    lReader := bufio.NewReader(os.Stdin) ; lAnswer, _ := lReader.ReadString('\n')
    lAnswer = lAnswer[:len(lAnswer)-2]
    if lAnswer == "" { lAnswer = lLast }
    if lAnswer == "-q" { obj.G_STATE = "S_END" 
    } else if lAnswer == "1" { obj.G_STATE = "S_SQLITE" ; GConfig().SetData("GO_ADMIN_ID", lAnswer);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis Go-Programme SQLite"><a class="Link9" href="#Créer une machine à états finis Go">Programme SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessO) run_SQLITE() {
    // code du programme SQLite
    GSQLite().Run();
    obj.G_STATE = "S_END"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis Go-Résultat"><a class="Link9" href="#Créer une machine à états finis Go">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/i_cours_state_machine.png" alt="/Tutoriels/Go/img/i_cours_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Go &gt; basics</div></div><script>loadList1("Loader_1600429735365","Go","basics");</script></div><br></div></div></div></div><br>
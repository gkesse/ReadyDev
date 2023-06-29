<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#java">Java</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/java/cours">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en Java</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est vous apprendre à programmer en <b>Java</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#surcharge-de-constructeurs">Surcharge de constructeurs</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#surcharge-de-methodes">Surcharge de méthodes</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#multithreading">Multithreading</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#classe">Classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#heritage-de-classe">Héritage de classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#polymorphisme-de-classe">Polymorphisme de classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#communication-reseau">Communication réseau</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>Java</b> est un langage de programmation de haut niveau, basé sur des classes et orienté objet, conçu pour avoir le moins de dépendances d'implémentation possible. Il s'agit d'un langage de programmation à usage général destiné à permettre aux programmeurs d'écrire une fois, de s'exécuter n'importe où (WORA), ce qui signifie que le code Java compilé peut s'exécuter sur toutes les plates-formes prenant en charge Java sans qu'il soit nécessaire de recompiler. Les applications Java sont généralement compilées en bytecode qui peut s'exécuter sur n'importe quelle machine virtuelle Java (JVM) quel que soit l'architecture informatique sous-jacente. La syntaxe de Java est similaire à C et C++ , mais a moins de fonctionnalités de bas niveau que l'un ou l'autre. Le runtime Java fournit des fonctionnalités dynamiques (telles que la réflexion et la modification du code d'exécution) qui ne sont généralement pas disponibles dans les langages compilés traditionnels.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAFKCAYAAADBkCHRAAANwUlEQVR4nO3dP3Lb1hbA4eM3WQrpwqMVQCuQ3Lhymw4qpeZ1Kd25IUuxe60qNQJXIK7A48LAXvCK+I+cmBQBHIqA+X0zdybJjEH6NvkNcHjxKiLaAAAgzX+O/QUAAH43AgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACDZH8f+AsAORRFF+kU3sdmkXxSAJwQWjFVZRXt7cZBLN8vzmN+oLIBD8YgQRqp4Mz/YtWevzw52bQAEFgBAOoEFI7X5XB/s2s2XTwe7NgACC8ZrdR/L5gDXbdbx8c78FcAhCSwYrVXczF/Fq/OrWGeEVrOMq/NX8Wp+GSt9BXBQryKiPfaXAJ5TRtXexpDfFPrlIMDLcUwDTMKn+NJEXMz6X6H+nBxXW8/ocs7Wd/YITpbAgknYxOc6IgYE1iBFGYv37+Lt23nMZvt+iSaapo764T4+3K16BEURxdBTVjeb+Plj97/mpusXPsoeAWPWWpY1/lVW7SBV2fUzi7ZcVG097GOfqNtqUbbFPp9dLNI+98ffu2gXXS5alePeI8uyRr0MuQP/UpSLqNvHuL2+SLxpNouL69t4rKtY5L//Z6v5m28fdhavE+8A/k57BOQTWMBPikUdj7fXh3saObuI68c26l0FcfY67fMPcWr9KPYIGDWBBXxXVnU8Xr/MoNfs+jGq8vCf8+NQ1b9/KDDU77hHQD6BBfytrOK2188Um1hencd5j1NRL27rXz8KW13G1brHV/mXJh6+H6q6ibuHdez3LZtY36/+/Z/HtEfA6B19EMyyrOfXYYfcy7bv5XsPkf+4wJbv1PN639SLXw+LP7uRdbsoprJHlmWNeB39C1iWtcc6ZGAVvUumasvB19kWNLFHDO34Zlv/vrtDqV4U09ojy7JGuTwiBOKs78/rmi8x/LXRs7j+a8ug0eo++j4p/PHrwX/aNYv19JHiz0a7R8AoCSw4eUW8mff8o/XnSDkbc/5my4nn/QfTt/96cNdxDXX8+sD7Me8RMEYCC05e7vlQvczexvtf1sPXE+z72BYkxZvY2krr+/jFaHuMe4+AMRJYwKh96n8LK351D6t4/3br+VU/jnQAGEZgwcnr/xguL0hmse2J3ubuYc+jFf5pHr8aw9o1S7X9hdjj3iNgfAQWnLxN3D30qYd1fLx5gbcTbz5Hv6eEs3j7r2dqu2apmtjeQiPfI2B0BBYQm5uPse7QD02zjKvzyy3zStkyB937DLj/bdx7BIyNwAIiYhWX8/O4WjdbH8c1TRPr5VWcn7+K+fwmVi92YyZx0H3XgPuzxymMeY+AMTr6YVyWZT2/DnuS+7BVFGVb1UOOXT/+QajbDhidyh5ZljWu5Q4W0FtRLqKq23h8vI2L2eHOMdj0v4X106B7vwH3YV5qj4BxEVhAR0WUiyrqto3H2+vo9e7jrnqf6P70l3d9B9z7OMIeAaMisIC9FEUZVV1H2z7G7fXF1rOkDqP/oPvFu2+vmOk/4L6v4+4RMCYCC9hpHI+4EgbdBw247zaOPQLG5I9jfwFgpIoyqv/djubx1qcvTfT6Mt9OdN9xgnvv9wWObI+A8XAHC/iHIsqqjvaxYzg061h2OSiqo6GD7rsG3Luftj7OPQLGQ2ABTxSxqB/jtustmWYZ5/PLuPtymG8VERGfvvR8Zc4sXp/tHnB/uOty/2rEewSMhsACviqjqh/juvPjrnVczW/6PWLrYnMXvd5WExHzd38lDbiPfI+A0TCDBcTfd2X6zRI1yw8v9DqYr4PufcawLnb8om/vAfcp7BEwFu5gARHlXz3uykR0f7w2zKe+ZzXssu+A+0T2CBgHgQUnr4jFfy96/tmc86P21X/Qfbv9Btyns0fAOAgsOHXF+3g7lWMGeg+6b7fXK3KmtEfAKAgsOHHFrvOhnjPwgM7ONp8j9x7WOu73GI6a1B4BoyCw4MTtOh9qfFZx3++lhL+2Z/xMa4+AMRBYcNJ2nQ+1h74noA+QOui+1/ef3h4Bxyew4KTtegHyOGUOuu834D69PQKOT2DBKdv1AuSxShx032/AfYJ7BBydwAKmJW3QvYnOryAE2JPAglN29rr/r+OO5lOkjGE1D7HX+Z+T3CPg2AQWMDFfX5kzlOFz4IAEFjA5q4SzGvYbcAfoR2AB05Mw6L7XgDtATwILmJ7Bg+4G3IHDEljABA0ddPcCZuCwBBacsgO8PPllDBx07/J+wMnuEXBMAguYpCGvzGke7vyCEDgogQWnbOgs0/xNFFnfpaPN3UPvO0udBtwnvEfA8QgsOGkDZ5lmr+Psyb+eveRL+3qHT9cB9wnvEXA0AgtOwraoGHpo5zzefL89U8SbF31pX9/w6TrgPuU9Ao5FYMGJGzLLFDGLt++/1kP5V1y/6M2ZnuHTZcD9q+nuEXAsAgtOwva7NkNmmSIiZtf/i7qqor69GHCVfnqFT49X5Ex5j4DjEFhwCnbdtdncxcOgcwhmMbu4OMoLkTc9bmGt71c9Pmi6ewQch8CCE7D7WIJN3A2rhxQXt3Usuv7cbnUf3d5K2PcE9wnvEXAUAgtOwHPHEmxuPnYMlUOYxfVjFWWnP9N10L3/Ce7T3SPgGAQW/PbW8fxTsVVcXmXkQzPw1POnv7jbR8dB9x4D7j9MdY+AYxBYMAn9f97fLD/EXlNHq8s4HxIQzTKuzucxT4mQ/XUadO8x4P6Tie4RcBytZVljX2VbtX3U7aLo+FnFoq3qbp9RLYqfrlGUVdvpEt9UZVt03Ztisfdn1f/4nr3X1PbIsqxjrKN/Acuynltlv7xqq7LnZxZtUS7aqt6WAHVb11W7KIsd/7P/cY1dIVHXdVtVi7bsGoJPPmexV6n0iM3fZo8sy3rp9errPwAjVlZtdD9CqYnl+TxuvNUY4MWZwYLRK+Ndj/Mpm+Wf4grgSAQWjFxZ3Ub3m1fL+FNdARyNwILRKqKs6h6PBtdxNb8Z9ms5AAb549hfAHiiKKKIs3j//l28ve7zapUmlueX+x3LAMDBCCwYi7KKdsjLgJt1XP15GSu3rgCOziNCGImi70mi0cR6eRXnc3EFMBbuYMFkNbFefowPNyvzVgAjI7BgJDafH6KJ661zV03TRNR1PHy5j7u7VWxUFcBoOWgUACCZGSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZAILACCZwAIASCawAACSCSwAgGQCCwAgmcACAEgmsAAAkgksAIBkAgsAIJnAAgBIJrAAAJIJLACAZP8HfR7iFlzPXH0AAAAASUVORK5CYII="></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="surcharge-de-constructeurs">Surcharge de constructeurs</a>
</h1>
<div class="Section6"><br>Java prend en charge la notion de surcharge de constructeurs.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GManager extends GObject {  
    //===============================================
    protected String m_module = "";
    protected String m_method = "";
    //===============================================
    public GManager() {  

    }  
    //===============================================
    public GManager(String _module, String _method) {  
    	m_module = _module;
    	m_method = _method;
    }  
    //===============================================
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les constructeurs doivent avoir des signatures différentes.</div>
</div><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="surcharge-de-methodes">Surcharge de méthodes</a>
</h1>
<div class="Section6"><br>Java prend en charge la notion de surcharge de méthodes.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GXml {
    //===============================================
    public Element addObj(String _name) {
        Element lNode = new Element(_name);
        m_node.addContent(lNode);
        return lNode;
    }
    //===============================================
    public Element addObj(String _name, String _value) {
        Element lNode = new Element(_name);
        lNode.setText(_value);
        m_node.addContent(lNode);
        return lNode;
    }
    //===============================================
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les méthodes doivent avoir des signatures différentes.</div>
</div><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="multithreading">Multithreading</a>
</h1>
<div class="Section6"><br>La classe (Thread) permet d'introduire le multithreading en Java.<br>La méthode (start) permet de démarrer le thread.<br>La méthode (run) sert de fonction de rappel.<br><br>Création du thread.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GThread extends Thread {  
    //===============================================
    GObject m_obj = null;
    //===============================================
    public GThread() {  
        
    }  
    //===============================================
    public void setObj(GObject _obj) {
        m_obj = _obj;
    }
    //===============================================
    public void run() {
        m_obj.runThread();
    }
    //===============================================
}
//===============================================</pre><br>Démarrage du thread.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public void runServer() {
    while(true) {
        GThread lThread = new GThread();
        lThread.setObj(lClient);
        lThread.start();
    }
}
//===============================================</pre><br>Fonction de rappel.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public void runThread() {
    GSocket lClient = this;
    String lData = lClient.readData();
    GServer lServer = new GServer();
    lServer.run(lData);
    lServer.sendResponse(lClient);
    lClient.closeSocket();
}  
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="classe">Classe</a>
</h1>
<div class="Section6"><br>L'opérateur (class) permet de créer une classe en Java.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GLog {

}
//===============================================</pre><br>Une classe peut contenir des attributs appelés des propriétés ou des variables membres.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GLog {
    //===============================================
    private String m_type = "";
    private String m_side = "";
    private String m_msg = "";
    private ArrayList&lt;GLog&gt; m_map = new ArrayList&lt;GLog&gt;();
    //===============================================
}
//===============================================</pre><br>Une classe peut contenir un constructeur.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GLog {
    //===============================================
    public GLog() {

    }
    //===============================================
}
//===============================================</pre><br>Une classe peut contenir des méthodes.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GLog {
    //===============================================
    public void addLogs(GLog _obj) {
        for(int i = 0; i &lt; _obj.m_map.size(); i++) {
            GLog lObj = _obj.m_map.get(i);
            GLog lNew = new GLog();
            lNew.setObj(lObj);
            m_map.add(lNew);
        }
    }
    //===============================================
}
//===============================================</pre><br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="heritage-de-classe">Héritage de classe</a>
</h1>
<div class="Section6"><br>L'opérateur (extends) permet d'introduire l'héritage de classe en Java.<br><br>Définition de la classe mère.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GObject {  
    //===============================================
    public GObject() {
        
    }  
    //===============================================
    public String toBase64(String _data) {
        return Base64.getEncoder().encodeToString(_data.getBytes());
    }
    //===============================================
    public String fromBase64(String _data) {
        return new String(Base64.getDecoder().decode(_data));
    }
    //===============================================
}
//===============================================</pre><br>Définition de la classe fille.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GCalculator extends GObject {  
    //===============================================
    public GCalculator() {  

    }  
    //===============================================
    public String serialize() {
        lDom.addData(lCode, "expression", toBase64(m_expression));
    }
    //===============================================
    public void deserialize(String _data) {
        m_expression = fromBase64(lDom.getData(lCode, "expression"));
    }
    //===============================================
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La classe fille a directement accès aux méthodes de la classe mère (toBase64, fromBase64).</div>
</div><br>L'opérateur (super) permet à la classe fille d'accéder à une méthode de même nom de la classe mère.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GCalculator extends GManager {  
    //===============================================
    public GCalculator() {  

    }  
    //===============================================
    public void deserialize(String _data) {
    	super.deserialize(_data);
    }
    //===============================================
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La méthode (deserailize) est définie dans la classe mère (GManager) et redéfinie dans la classe fille (GCalculator) avec la même signature.</div>
</div><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="polymorphisme-de-classe">Polymorphisme de classe</a>
</h1>
<div class="Section6"><br>Java prend en charge la notion de polymorphisme de classe.<br><br>Définition de la classe mère.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GObject {  
    //===============================================
    public GObject() {

    }  
    //===============================================
    public void runThread() {}  
    //===============================================
}
//===============================================</pre><br>Définition de la classe fille.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GSocket extends GObject {  
    //===============================================
    public GSocket() {  

    }  
    //===============================================
    public void runThread() {
        GSocket lClient = this;
        String lData = lClient.readData();
        GServer lServer = new GServer();
        lServer.run(lData);
        lServer.sendResponse(lClient);
        lClient.closeSocket();
    }
    //===============================================
}
//===============================================</pre><br>Appel de la méthode polymorphique.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GThread extends Thread {  
    //===============================================
    GObject m_obj = null;
    //===============================================
    public void run() {
        m_obj.runThread();
    }
    //===============================================
}
//===============================================</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Toutes méthodes en Java sont polymorphes.</div>
</div><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="communication-reseau">Communication réseau</a>
</h1>
<div class="Section6"><br>La classe (ServerSocket) permet de créer un point de connexion côté serveur.<br>Elle fournit la méthode (accept) qui permet d'attendre une connexion client.<br><br>Création du server.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GSocket extends GObject {  
    //===============================================
    public void runServer() {
        int lPort = 9040;
        ServerSocket lServer = null;
        
        try {            
        	lServer = new ServerSocket(lPort);
            
            System.out.print(String.format("Démarrage du serveur...\n"));
            
            while(true) {
                if(!m_continue) break;
                
                GSocket lClient = new GSocket();
                
                try {
                    lClient.m_socket = lServer.accept();
                }
                catch(Exception e) {
                	m_srvLogs.addError("La connexion au serveur a échoué.");
                    break;
                }
                                
                GThread lThread = new GThread();
                lThread.setObj(lClient);
                lThread.start();
            }
            
            System.out.print(String.format("Arrêt du serveur...\n"));

            lServer.close();
        }
        catch(Exception e) {
        	m_srvLogs.addError("Le démarrage du serveur a échoué.");
        }
        
        if(m_srvLogs.hasErrors()) {
        	m_logs.addLogs(m_srvLogs);
        }
    }
    //===============================================
}
//===============================================</pre><br>La classe (Socket) permet de créer une connexion côté client.<br><br>Création du client.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GSocket extends GObject {  
    //===============================================
    public String callServer(String _data) {
        String lAddress = "127.0.0.1";
        int lPort = 9040;
        String lDataOut = "";
        
        try {
            InetAddress lInetAddress = InetAddress.getByName(lAddress);
            m_socket = new Socket(lInetAddress, lPort);
            sendData(_data);
            lDataOut = readData();
            closeSocket();
        }
        catch(Exception e) {
        	m_srvLogs.addError("La connexion au serveur a échoué.");
        }
        
        if(m_srvLogs.hasErrors()) {
        	m_logs.addError("La connexion au serveur a échoué.");
        }
        
        return lDataOut;
    }
    //===============================================
}
//===============================================</pre><br>La classe (DataOutputStream) offre la méthode (write) qui permet d'envoyer un message vers un point de connexion.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GSocket extends GObject {  
    //===============================================
    public void sendData(String _data) {
        try {
            DataOutputStream lStreamOut = new DataOutputStream(m_socket.getOutputStream());
            lStreamOut.write(_data.getBytes());
        }
        catch(Exception e) {
            m_srvLogs.addError("L'envoi des données a échoué.");
        }
    }
    //===============================================
}
//===============================================</pre><br>La classe (InputStream) offre la méthode (read) qui permet de recevoir un message à partir d'un point de connexion et la méthode (available) qui permet de déterminer le nombre de données disponible en lecture sur le réseau.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GSocket extends GObject {  
    //===============================================
    public String readData() {
        String lData = "";
        try {
            InputStream lStreamIn = m_socket.getInputStream();
            while(true) {
                byte[] lBuffer = new byte[BUFFER_SIZE];
                int lBytes = lStreamIn.read(lBuffer);
                if(lBytes == -1) break;
                lData += new String(lBuffer, 0, lBytes, StandardCharsets.UTF_8);
                if(lStreamIn.available() &lt;= 0) break;
                if(lData.length() &gt;= BUFFER_MAX) {
                	m_srvLogs.addError("La limite des données est atteinte.");
                    break;
                }
            }
        }
        catch(Exception e) {
        	m_srvLogs.addError("La lecture des données a échoué.");
        }
        return lData;
    }
    //===============================================
}
//===============================================</pre><br>La classe (Socket) offre la méthode (close) qui permet de fermer le point de connexion.<br><br><pre class="GCode1 Code1 AceCode" data-mode="java" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
public class GSocket extends GObject {  
    //===============================================
    public void closeSocket() {
        try {
            m_socket.close();
        }
        catch(Exception e) {
        	m_srvLogs.addError("La fermeture du socket a échoué.");
        }
    }
    //===============================================
}
//===============================================</pre><br></div></div></div></div><br>
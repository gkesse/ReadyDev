<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet en ASP.NET</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet en <b>ASP.NET</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">L'<b>ASP.NET</b> est un framework permettant de générer à la demande des pages web. Il s'agit d'une évolution majeure d'Active Server Pages (ASP), par laquelle cette technique a été incorporée dans la plateforme Microsoft .NET. Il peut être utilisé avec n'importe quel langage de programmation pour la plateforme .NET (Visual Basic .NET, C#, JScript). <br><br><div class="Img3 GImage"><img src="/Tutoriels/ASP.NET/img/b_cours_project.png" alt="/Tutoriels/ASP.NET/img/b_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet en ASP.NET"><a class="Link3" href="#">Créer un projet en ASP.NET</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Introduction"><a class="Link9" href="#Créer un projet en ASP.NET">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet en ASP.NET.<br><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Fichier Makefile"><a class="Link9" href="#Créer un projet en ASP.NET">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">all:

web:
	@dotnet new web -o $(GPROJECT_SRC) --no-https
webapp:
	@dotnet new webapp -o $(GPROJECT_SRC) -au None --no-https
mvc:
	@dotnet new mvc -o $(GPROJECT_SRC) -au None --no-https
build:
	@cd $(GPROJECT_SRC) && dotnet build
run:
	@cd $(GPROJECT_SRC) && dotnet restore && dotnet run</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Variables d'environnement"><a class="Link9" href="#Créer un projet en ASP.NET">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\MinGW\bin;%PATH%"
set "PATH=C:\Program Files\dotnet;%PATH%"
::===============================================
set "GPROJECT_ROOT=C:\Users\Admin\Downloads\Programs"
set "GPROJECT_PATH=%GPROJECT_ROOT%\ReadyASP.NET"
set "GPROJECT_SRC=%GPROJECT_PATH%\code\web"
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_d.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "args=%*"             
setlocal enabledelayedexpansion
set "lArgs=%*"             
set "lArgs=!lArgs:*%1 =!"  
endlocal && ( set "args=%lArgs%" )
::===============================================
mingw32-make -f Makefile.dotnet.mak %1 argv="%args%"
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Création du projet web"><a class="Link9" href="#Créer un projet en ASP.NET">Création du projet web</a></h2><br><h3 class="Title8 GTitle3">Terminal (automatique)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make_d web</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (manuel)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">dotnet new web -o PROJECT_ROOT\web -no-https</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Programme principal"><a class="Link9" href="#Créer un projet en ASP.NET">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Program.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore;
using Microsoft.AspNetCore.Hosting;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.Logging;
//===============================================
namespace web {
    public class Program {
        //===============================================
        public static void Main(string[] args) {
            CreateWebHostBuilder(args).Build().Run();
        }
        //===============================================
        public static IWebHostBuilder CreateWebHostBuilder(string[] args) =&gt;
            WebHost.CreateDefaultBuilder(args)
                .UseStartup&lt;Startup&gt;();
        //===============================================
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Programme de démarrage"><a class="Link9" href="#Créer un projet en ASP.NET">Programme de démarrage</a></h2><br><h3 class="Title8 GTitle3">Startup.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.Http;
using Microsoft.Extensions.DependencyInjection;
//===============================================
namespace web {
    public class Startup {
        //===============================================
        public void ConfigureServices(IServiceCollection services) {
            
        }
        //===============================================
        public void Configure(IApplicationBuilder app, IHostingEnvironment env) {
            if (env.IsDevelopment()) {
                app.UseDeveloperExceptionPage();
            }

            app.Run(async (context) =&gt; {
                await context.Response.WriteAsync("&lt;h1&gt;Bonjour tout le monde&lt;/h1&gt;");
            });
        }
        //===============================================
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Configuration du projet web"><a class="Link9" href="#Créer un projet en ASP.NET">Configuration du projet web</a></h2><br><h3 class="Title8 GTitle3">web.csproj</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;Project Sdk="Microsoft.NET.Sdk.Web"&gt;
    &lt;!-- ============================================ --&gt;
    &lt;PropertyGroup&gt;
        &lt;TargetFramework&gt;netcoreapp2.1&lt;/TargetFramework&gt;
    &lt;/PropertyGroup&gt;
    &lt;!-- ============================================ --&gt;
    &lt;ItemGroup&gt;
        &lt;Folder Include="wwwroot\" /&gt;
    &lt;/ItemGroup&gt;
    &lt;!-- ============================================ --&gt;
    &lt;ItemGroup&gt;
        &lt;PackageReference Include="Microsoft.AspNetCore.App" /&gt;
    &lt;/ItemGroup&gt;
    &lt;!-- ============================================ --&gt;
&lt;/Project&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Exécution du projet"><a class="Link9" href="#Créer un projet en ASP.NET">Exécution du projet</a></h2><br><h3 class="Title8 GTitle3">Terminal (automatique)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make_d run</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (manuel)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">cd PROJECT_ROOT\web
dotnet restore
dotnet run</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Accès à la page web"><a class="Link9" href="#Créer un projet en ASP.NET">Accès à la page web</a></h2><br><h3 class="Title8 GTitle3">Navigateur</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:5000/">http://localhost:5000/</a><br><br><h2 class="Title7 GTitle2" id="Créer un projet en ASP.NET-Résultat"><a class="Link9" href="#Créer un projet en ASP.NET">Résultat</a></h2><br><h3 class="Title8 GTitle3">Page web<br></h3><br><div class="Img3 GImage"><img src="/Tutoriels/ASP.NET/img/i_cours_project.png" alt="/Tutoriels/ASP.NET/img/i_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; ASP.NET &gt; basics</div></div><script>loadList1("Loader_1600429735365","ASP.NET","basics");</script></div><br></div></div></div></div><br>